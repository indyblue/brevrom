' AddBookmarks.vbs.vbs script
' Part of PDFCreator
' Copy to C:\Program Files\PDFCreator\Scripts\RunProgramBeforeSaving\
Option Explicit


'******************************************************
'******************************************************
'* pdfmark.ps file location may need to be adjusted! **
'******************************************************
'******************************************************



Const AppTitle = "PDFCreator - Spot Color Def"
Const ForReading = 1, ForWriting = 2, ForAppending = 8

Dim objArgs, fname, tfname, fso, fr, fw, tstart
Dim contents, pscontents, i, j, k, img, repl
dim crlf 
crlf = Chr(13) & Chr(10)
tstart = timer()
Set objArgs = WScript.Arguments

If objArgs.Count = 0 Then
 MsgBox "This script needs a parameter!", vbExclamation, AppTitle
 WScript.Quit
End If

fname = objArgs(0)
tfname = fname & ".vbt"

Set fso = CreateObject("Scripting.FileSystemObject")
fso.MoveFile fname,tfname

contents = "/SpotSpotRed { [ /Separation (SpotRed) /DeviceCMYK " & crlf &_
	"{ dup 0 mul exch dup 1 mul exch dup 1 mul exch 0 mul }] " & crlf &_
	"setcolorspace setcolor} bind def" & crlf & "%%EndSetup"

Set fr = fso.OpenTextFile(tfname, ForReading, True)
Set fw = fso.OpenTextFile(fname, ForWriting, True)
Do While not fr.AtEndOfStream
	pscontents = fr.ReadLine
	for i = 1 to 23
		pscontents = pscontents & crlf & fr.ReadLine
		if fr.AtEndOfStream then exit for
	next
	if instr(pscontents, "%%EndSetup")>0 then _
		pscontents = replace(pscontents, "%%EndSetup", contents)
	if instr(pscontents, "1 0 0 1 scol ")>0 then _
		pscontents = replace(pscontents, "1 0 0 1 scol ", "/DeviceCMYK setcolorspace 1 SpotSpotRed ")
	j = 0
	i = instr(pscontents, " F F 3 [")
	if i>0 then 
		k = instrrev(pscontents, crlf, i)
		j = instrrev(pscontents, ":", i)
		if j=0 OR j<=k then _
			j = instrrev(pscontents, ";", i)

'		This was supposed to find 1bpp images and set the 
'		color space accordingly...but it doesn't seem to work.
'		k = mid(pscontents,j+1, i-j-1)
'		img = split(k," ")
'		if img(3)=1 then 
'			repl = " /DeviceGray dup setcolorspace /colspABC exch def 0 5 scol "
'		else
'			repl = " /DeviceRGB dup setcolorspace /colspABC exch def "
'		end if

		repl = " /DeviceRGB dup setcolorspace /colspABC exch def "
		pscontents = left(pscontents,j) & repl & mid(pscontents,j+1)
	end if
	fw.WriteLine(pscontents)
Loop
fr.close
fw.close
msgbox fname & crlf & "Time to complete: " & (timer() - tstart)
fso.DeleteFile tfname

