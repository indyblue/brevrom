- output directory needs to be set for global read/write
- main scripts are index.php and content/content.php
- http://localhost/brevrom/b/index.php
- add ?x=1 for latin-only 2 column

- to check which margins are being used, look in content/content.php
- look for something like:
- $_GET['Style'] = 'Az6';
- then check content/styles.php to see "options"

- for parallel, to get the TOC to look correct generally need to tell it to use
  english headers and non-parallel
$_GET['L'] = 0;
$_GET['interl-off'] = 0;
// Forces parallel headings
$_GET['par'] = 0;
- for latin only, set par = 1 and L = 1

in libreoffice, manually:
- tools -> update -> all
- file -> export as -> pdf

- in latin-only two column mode, the TableKalendar column widths needed to be adjusted. I left it at the wider setting, as it makes a small difference in 1 column mode. Original width 3832 -> 5832.

movable feasts: in OOo/movable/
the xml files 'content, settings, styles' are used
these are extracted directly from the movable.ods file
if the ods file is updated, just unzip and copy needed files


### semi automated process using UNO
```
cd /home/user/www/brevrom

# Once per new LibreOffice profile:
unopkg add -env:UserInstallation=file:///tmp/brevrom-lo \
  b/hyph/dict_la-va-github.oxt

# After b/index.php has generated b/output/b.odt:
libreoffice -env:UserInstallation=file:///tmp/brevrom-lo \
  --headless --accept='pipe,name=brevrom;urp;StarOffice.ServiceManager'

# in a separate shell while the previous command is running:
python3 - <<'PY'
import uno
from com.sun.star.beans import PropertyValue

local = uno.getComponentContext()
resolver = local.ServiceManager.createInstanceWithContext(
    "com.sun.star.bridge.UnoUrlResolver", local)
ctx = resolver.resolve("uno:pipe,name=brevrom;urp;StarOffice.ComponentContext")
desktop = ctx.ServiceManager.createInstanceWithContext(
    "com.sun.star.frame.Desktop", ctx)

base = "/home/user/www/brevrom/b/output/b"
doc = desktop.loadComponentFromURL(
    uno.systemPathToFileUrl(base + ".odt"), "_blank", 0, ())
doc.DocumentIndexes.getByIndex(0).update()
doc.storeToURL(
    uno.systemPathToFileUrl(base + ".pdf"),
    (PropertyValue("FilterName", 0, "writer_pdf_Export", 0),))
doc.close(True)
desktop.terminate()
PY

```