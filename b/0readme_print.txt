- output directory needs to be set for global read/write
- main scripts are index.php and content/content.php
- http://localhost/brevrom/b/index.php
- add ?x=1 for latin-only 2 column

in libreoffice, manually:
- tools -> update -> all
- file -> export as -> pdf

// this would be great, except it doesn't do the update-all
// libreoffice --headless --convert-to pdf b.odt

- in latin-only two column mode, the TableKalendar column widths needed to be adjusted. I left it at the wider setting, as it makes a small difference in 1 column mode. Original width 3832 -> 5832.

movable feasts: in OOo/movable/
the xml files 'content, settings, styles' are used
these are extracted directly from the movable.ods file
if the ods file is updated, just unzip and copy needed files
