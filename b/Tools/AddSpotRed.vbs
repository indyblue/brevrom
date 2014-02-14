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

Dim objArgs, fname, fso, f, fmarks, contents, pscontents, pages, i, pdfmark
dim crlf 
crlf = Chr(13) & Chr(10)

Set objArgs = WScript.Arguments

If objArgs.Count = 0 Then
 MsgBox "This script needs a parameter!", vbExclamation, AppTitle
 WScript.Quit
End If

fname = objArgs(0)

Set fso = CreateObject("Scripting.FileSystemObject")
Set f = fso.OpenTextFile(fname, ForReading, True)
pscontents = f.ReadAll
f.close

contents = "/SpotSpotRed { [ /Separation (SpotRed) /DeviceCMYK " & crlf &_
	"{ dup 0 mul exch dup 1 mul exch dup 1 mul exch 0 mul }] " & crlf &_
	"setcolorspace setcolor} bind def" & crlf & "%%EndSetup"

pscontents = replace(pscontents, "%%EndSetup", contents)
pscontents = replace(pscontents, "1 0 0 1 scol ", "/DeviceCMYK setcolorspace 1 SpotSpotRed ")

Set f = fso.OpenTextFile(fname, ForWriting, True)
f.write pscontents
f.Close

