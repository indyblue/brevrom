#z::Suspend
#x::
Suspend Permit
ExitApp
return


#hotstring * ? c

::{::
	clip(chr(226) . chr(128) . chr(156),1)
	send <l>
	return
::}::
	send </s>
	clip(chr(226) . chr(128) . chr(157),1)
	return
::<::
	send <l>
	return
::>::
	send </s>
	return


;--------------------------------------------------
;UTF-8 Coversion: 
;ud is decimal unicode char
;If ud >=128 and <=2047 (7FF hex) then UTF-8 is 2 bytes long.
;   byte 1 = 192 + (ud div 64)
;   byte 2 = 128 + (ud mod 64)
;
;If ud >=2048 and <=65535 (FFFF hex) then UTF-8 is 3 bytes long.
;   byte 1 = 224 + (ud div 4096)
;   byte 2 = 128 + ((ud div 64) mod 64)
;   byte 3 = 128 + (ud mod 64)
;--------------------------------------------------
clip(c,u) {
	cliptmp := ClipboardAll
	tmp := c
	if(u==1)
		Transform, clipboard, Unicode, %tmp%
	else
		Clipboard := tmp
	send ^v
	sleep, 100
	Clipboard := cliptmp
}


