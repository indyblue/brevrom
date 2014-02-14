' AddBookmarks.vbs.vbs script
' Part of PDFCreator
' Copy to C:\Program Files\PDFCreator\Scripts\RunProgramBeforeSaving\
Option Explicit


'******************************************************
'******************************************************
'* pdfmark.ps file location may need to be adjusted! **
'******************************************************
'******************************************************
Const pdfmark = "Z:\www\b\Tools\pdfmark.ps"



Const AppTitle = "PDFCreator - AddBookmarks"
Const ForReading = 1, ForAppending = 8

Dim objArgs, fname, fso, f, fmarks, contents, pages, i

Set objArgs = WScript.Arguments

If objArgs.Count = 0 Then
 MsgBox "This script needs a parameter!", vbExclamation, AppTitle
 WScript.Quit
End If

fname = objArgs(0)

Set fso = CreateObject("Scripting.FileSystemObject")
Set f = fso.OpenTextFile(fname, ForAppending, True)

Set fmarks = fso.OpenTextFile(pdfmark, ForReading, False)
contents = fmarks.ReadAll
fmarks.close

f.write contents
f.Close

