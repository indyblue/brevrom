msgbox, 3, Page Size, Do you want Pocket Size dimentions?`n(No will set Large Print Page Size)
IfMsgBox Yes
{
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  23,  67
Sleep, 100
Send, m
WinWait, Page Style: Body, 
IfWinNotActive, Page Style: Body, , WinActivate, Page Style: Body, 
WinWaitActive, Page Style: Body, 
Send, {TAB}4.5{TAB}7.13{TAB}{TAB}{TAB}.75{TAB}.33{TAB}.33{TAB}.33{TAB}{ENTER}
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  23,  76
Sleep, 100
Send, m
WinWait, Page Style: Header Page, 
IfWinNotActive, Page Style: Header Page, , WinActivate, Page Style: Header Page, 
WinWaitActive, Page Style: Header Page, 
Send, {TAB}4.5{TAB}7.13{TAB}{TAB}{TAB}.75{TAB}.33{TAB}.33{TAB}.33{TAB}{ENTER}
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  24,  94
Sleep, 100
Send, m
WinWait, Page Style: Intro, 
IfWinNotActive, Page Style: Intro, , WinActivate, Page Style: Intro, 
WinWaitActive, Page Style: Intro, 
Send, {TAB}4.5{TAB}7.13{TAB}{TAB}{TAB}.75{TAB}.33{TAB}.33{TAB}.33{TAB}{ENTER}
}
ifmsgbox no
{
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  23,  67
Sleep, 100
Send, m
WinWait, Page Style: Body, 
IfWinNotActive, Page Style: Body, , WinActivate, Page Style: Body, 
WinWaitActive, Page Style: Body, 
Send, {TAB}4.5{TAB}6.66{TAB}{TAB}{TAB}.54{TAB}.25{TAB}.25{TAB}.25{TAB}{ENTER}
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  23,  76
Sleep, 100
Send, m
WinWait, Page Style: Header Page, 
IfWinNotActive, Page Style: Header Page, , WinActivate, Page Style: Header Page, 
WinWaitActive, Page Style: Header Page, 
Send, {TAB}4.5{TAB}6.66{TAB}{TAB}{TAB}.54{TAB}.25{TAB}.25{TAB}.25{TAB}{ENTER}
WinWait, Styles and Formatting, 
IfWinNotActive, Styles and Formatting, , WinActivate, Styles and Formatting, 
WinWaitActive, Styles and Formatting, 
MouseClick, right,  24,  94
Sleep, 100
Send, m
WinWait, Page Style: Intro, 
IfWinNotActive, Page Style: Intro, , WinActivate, Page Style: Intro, 
WinWaitActive, Page Style: Intro, 
Send, {TAB}4.5{TAB}6.66{TAB}{TAB}{TAB}.54{TAB}.25{TAB}.25{TAB}.25{TAB}{ENTER}
}

