SetTitleMatchMode, 2
WinWait, IrfanView, 
IfWinNotActive, IrfanView, , WinActivate, IrfanView, 
WinWaitActive, IrfanView, 
SetTitleMatchMode, 1
controlgettext, page, edit1
i := instr(page,"/")
currpage := substr(page,5,i-5)
allpages := substr(page,i+1)
looptimes := allpages-currpage+1

WinGetTitle, wintitle

FormatTime, CurrentDateTime,, yyMMdd HHmm
fileappend, %CurrentDateTime%`n%wintitle%`nStarting %page%`n, coverage.txt

loop %looptimes%
{
	SetTitleMatchMode, 2
	WinWait, IrfanView, 
	IfWinNotActive, IrfanView, , WinActivate, IrfanView, 
	WinWaitActive, IrfanView, 
	SetTitleMatchMode, 1

	controlgettext, page, edit1
	i := instr(page,"/")
	currpage := substr(page,5,i-5)

	Send, {CTRLDOWN}k{CTRLUP}
	WinWait, IrfanView - Adobe 8BF Filters, 
	IfWinNotActive, IrfanView - Adobe 8BF Filters, , WinActivate, IrfanView - Adobe 8BF Filters, 
	WinWaitActive, IrfanView - Adobe 8BF Filters, 
	Send, {SPACE}
	MouseClick, left, 250, 100
	WinWait, Reindeer, 
	IfWinNotActive, Reindeer, , WinActivate, Reindeer, 
	WinWaitActive, Reindeer, 
	MouseClick, left,  118,  51
	MouseClick, left,  126,  212
	MouseClickdrag, left,  90,  200, 30, 200

	controlgettext, countblk, static20
	controlgettext, countall, static18
	controlgettext, countpct, static21
	countblk := substr(countblk,7)
	countall := substr(countall,8)
	countpct := substr(countpct,12)
	
	fileappend, %currpage%`, %countblk%`, %countall%`, %countpct%`n, coverage.txt
	;msgbox black: %countblk%`nall: %countall%

	send {esc}{esc}
	sleep 100
	send {CTRLDOWN}{PgDn}{CTRLUP}
}

