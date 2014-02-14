; "C:\Program Files\GIMP-2.0\bin\gimp-2.4.exe" -i -b '(batch-two-color "*.jpg")' -b '(gimp-quit 0)'
; (batch-one-color "Z:\\temp\\Liguori\\10\\*.jpg" 200)

(define (batch-two-color pattern)
	(let* ((filelist (cadr (file-glob pattern 1))))
		(while (not (null? filelist))
			(let* ((filename (car filelist))
;				(newfilename (string-append outfolder (substring 
;						filename (- (string-length filename) nchars) (string-length filename))))
				(newfile (string-append filename ".gif"))
				(image (car (gimp-file-load RUN-NONINTERACTIVE 
										filename filename)))
				(drawable (car (gimp-image-get-active-layer image))))
				(gimp-levels-stretch drawable)

				(gimp-by-color-select drawable '(255 0 0) 110 2 FALSE TRUE 3 FALSE)
				(gimp-context-set-foreground '(255 0 0))
				(gimp-bucket-fill drawable 0 0 100 0 FALSE 0 0)

				(gimp-by-color-select drawable '(0 0 0) 110 2 FALSE TRUE 3 FALSE)
				(gimp-context-set-foreground '(0 0 0))
				(gimp-bucket-fill drawable 0 0 100 0 FALSE 0 0)

				(gimp-image-convert-indexed image 0 4 3 FALSE TRUE "BlackRed")

				(print newfile)
				(gimp-file-save RUN-NONINTERACTIVE
						image drawable newfile newfile)
				(gimp-image-delete image)
			)
			(set! filelist (cdr filelist))
		)
	)
)

(define (batch-one-color pattern depth)
	(let* ((filelist (cadr (file-glob pattern 1))))
		(while (not (null? filelist))
			(let* ((filename (car filelist))
;				(newfilename (string-append outfolder (substring 
;						filename (- (string-length filename) nchars) (string-length filename))))
				(newfile (string-append filename (number->string depth) ".gif"))
				(image (car (gimp-file-load RUN-NONINTERACTIVE 
										filename filename)))
				(drawable (car (gimp-image-get-active-layer image))))
				(gimp-levels-stretch drawable)

;				(gimp-by-color-select drawable '(255 0 0) 110 2 FALSE TRUE 3 FALSE)
;				(gimp-context-set-foreground '(255 0 0))
;				(gimp-bucket-fill drawable 0 0 100 0 FALSE 0 0)

				(gimp-by-color-select drawable '(0 0 0) depth 2 FALSE TRUE 3 FALSE)
				(gimp-context-set-foreground '(0 0 0))
				(gimp-bucket-fill drawable 0 0 100 0 FALSE 0 0)

				(gimp-image-convert-indexed image 0 4 3 FALSE TRUE "BlackRed")

				(print newfile)
				(gimp-file-save RUN-NONINTERACTIVE
						image drawable newfile newfile)
				(gimp-image-delete image)
			)
			(set! filelist (cdr filelist))
		)
	)
)



