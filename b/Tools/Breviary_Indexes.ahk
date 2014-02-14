#SingleInstance force

;--------------------------------------------------------------------------------
;  Remove "Psalmus " from indices with find/replace
;--------------------------------------------------------------------------------
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Sleep, 100
Send, ^f
WinWait, Find & Replace, 
IfWinNotActive, Find & Replace, , WinActivate, Find & Replace, 
WinWaitActive, Find & Replace, 
Send, Psalmus{SPACE}{ALTDOWN}l{ALTUP}
Sleep, 300
Send, {enter}{altdown}S{altup} i. {tab}.01 i. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} ii. {tab}.02 ii. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} iii. {tab}.03 iii. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} iv. {tab}.04 iv. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} v. {tab}.05 v. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} vi. {tab}.06 vi. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} vii. {tab}.07 vii. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} viii. {tab}.08 viii. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} ix. {tab}.09 ix. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} x. {tab}.10 x. {altdown}l{altup}
sleep, 300
Send, {enter}{altdown}s{altup} xi. {tab}.11 xi. {altdown}l{altup}
sleep, 300
Send, {enter}{esc}

;--------------------------------------------------------------------------------
;  Go to first index
;--------------------------------------------------------------------------------
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Sleep, 100
Send, ^{HOME}{UP}^{HOME}{UP}^{HOME}{DOWN}{HOME}

;--------------------------------------------------------------------------------
;  Edit Canticles index
;--------------------------------------------------------------------------------
Send, {SHIFT DOWN}{CTRLDOWN}{END}{CTRLUP}{SHIFT UP}
Sleep 200
Send, !tr
WinWait, Sort, 
IfWinNotActive, Sort, , WinActivate, Sort, 
WinWaitActive, Sort, 
Send, {TAB}1{TAB}a{TAB}{TAB}{SPACE}{TAB}2{TAB}n
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Sleep, 100
Send, ^x
Run C:\Program Files\Vim\vim71\gvim.exe
WinWait, [No Name] - GVIM, 
IfWinNotActive, [No Name] - GVIM, , WinActivate, [No Name] - GVIM, 
WinWaitActive, [No Name] - GVIM, 
Send, ^v
Send, :`%s/\(.*\)\t\(.*\)\n\1\t\(.*\)/\1\t\2,\3{Enter}
Send, :{UP}{ENTER}
Send, :{UP}{ENTER}
Sleep, 100
Send, ^a
Sleep, 100
Send, ^x
Sleep, 100
Send, {Esc}:q{!}{Enter}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Send, ^v{BACKSPACE}
Sleep, 100

;--------------------------------------------------------------------------------
;  Edit psalms index
;--------------------------------------------------------------------------------
Send, {DOWN}{DOWN}{HOME}^+{END}
Send, !tr
WinWait, Sort, 
IfWinNotActive, Sort, , WinActivate, Sort, 
WinWaitActive, Sort, 
Send, {TAB}1{TAB}n{TAB}{TAB}{TAB}2{TAB}n{ENTER}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Sleep, 100
Send, ^x
Run C:\Program Files\Vim\vim71\gvim.exe
WinWait, [No Name] - GVIM, 
IfWinNotActive, [No Name] - GVIM, , WinActivate, [No Name] - GVIM, 
WinWaitActive, [No Name] - GVIM, 
Send, ^v
Send, :`%s/\(.*\)\t\(.*\)\n\1\t\(.*\)/\1\t\2,\3{ENTER}
Send, :{UP}{ENTER}
Send, :{UP}{ENTER}
Send, :{UP}{ENTER}
Send, :{UP}{ENTER}
Sleep, 100
Send, ^a
Sleep, 100
Send, ^x
Sleep, 100
Send, {Esc}:q{!}{Enter}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Send, ^v{BACKSPACE}
Sleep, 100

;--------------------------------------------------------------------------------
;  Edit psalms (Alphabetic) index
;--------------------------------------------------------------------------------
Send, {DOWN}{DOWN}{HOME}^+{END}{BACKSPACE}
Run C:\Program Files\Vim\vim71\gvim.exe
WinWait, [No Name] - GVIM, 
IfWinNotActive, [No Name] - GVIM, , WinActivate, [No Name] - GVIM, 
WinWaitActive, [No Name] - GVIM, 
Send, ^v
Send, :`%s/\(.*\)\. \(.*\)\t/\2 (\1)\t/{Enter}
Sleep, 100
Send, ^a
Sleep, 100
Send, ^x
Sleep, 100
Send, {Esc}:q{!}{Enter}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Send, ^v{BACKSPACE}{BACKSPACE}

Send, {SHIFT DOWN}{CTRLDOWN}{HOME}{CTRLUP}{DOWN}{HOME}{SHIFT UP}
Sleep 200
Send, !tr
WinWait, Sort, 
IfWinNotActive, Sort, , WinActivate, Sort, 
WinWaitActive, Sort, 
Send, {TAB}1{TAB}a{TAB}{TAB}{TAB}2{TAB}n{ENTER}
Sleep, 300

;--------------------------------------------------------------------------------
;  Edit Canticles index
;--------------------------------------------------------------------------------
Send, {END}{DOWN}{DOWN}{HOME}{SHIFT DOWN}{CTRLDOWN}{END}{CTRLUP}{SHIFT UP}
Sleep 200
Send, !tr
WinWait, Sort, 
IfWinNotActive, Sort, , WinActivate, Sort, 
WinWaitActive, Sort, 
Send, {TAB}1{TAB}a{TAB}{TAB}{TAB}2{TAB}n{ENTER}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Sleep, 100
Send, ^x
Run C:\Program Files\Vim\vim71\gvim.exe
WinWait, [No Name] - GVIM, 
IfWinNotActive, [No Name] - GVIM, , WinActivate, [No Name] - GVIM, 
WinWaitActive, [No Name] - GVIM, 
Send, ^v
Send, :`%s/\(.*\)\t\(.*\)\n\1\t\(.*\)/\1\t\2,\3{Enter}
Send, :{UP}{ENTER}
Sleep, 100
Send, ^a
Sleep, 100
Send, ^x
Sleep, 100
Send, {Esc}:q{!}{Enter}
WinWait, Breviarium, 
IfWinNotActive, Breviarium, , WinActivate, Breviarium, 
WinWaitActive, Breviarium, 
Send, ^v{BACKSPACE}
Sleep, 100

;--------------------------------------------------------------------------------
;  Remove decimals from psalms
;--------------------------------------------------------------------------------
Send, ^f
WinWait, Find & Replace, 
IfWinNotActive, Find & Replace, , WinActivate, Find & Replace, 
WinWaitActive, Find & Replace, 
Send, \.[0-9][0-9] {tab} {ALTDOWN}ox{altup}
sleep, 100
send, {altdown}l{ALTUP}
Sleep, 300
Send, {enter}{esc}

