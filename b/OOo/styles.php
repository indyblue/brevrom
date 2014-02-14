<?xml version="1.0" encoding="UTF-8"?>
<?php
if($_GET['Style']=='7') {
	$PgW = 4.25;
	$PgH = 7;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} elseif($_GET['Style']=='6') {
	$PgW = 4.5;
	$PgH = 6.0;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} elseif($_GET['Style']=='4') {
	$PgW = 3;
	$PgH = 5;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 7;
} elseif($_GET['Style']=='L5') {
	$PgW = 5.5 + .25;
	$PgH = 8.5 + .25;
	$PgMar = .25 + .125;
	$PgGMar = .75;
	$Body = 9;
	$Body = 8.9;
} elseif($_GET['Style']=='L8') {
	$PgW = 8.5 + .25;
	$PgH = 11 + .25;
	$PgMar = .4 + .125;
	$PgGMar = .75;
	$Body = 12;
} elseif($_GET['Style']=='S5') {
	$PgW = 5;
	$PgH = 8;
	$PgMar = .4;
	$PgGMar = .6;
	$Body = 9;
	$Body = 8.9;
} elseif($_GET['Style']=='A4') {
	$PgW = 8.27/2;
	$PgH = 11.69/2;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} else {
	$PgW = $_GET['PgW'];
	$PgH = $_GET['PgH'];
	$PgMar = $_GET['PgMar'];
	$PgGMar = $_GET['PgGMar'];
	$Body = $_GET['BodyFont'];
}

	if($Body<8.5) $BodySm = $Body;
	else $BodySm = $Body - 1;
	$RubricHSm = $Body - 1.5;
	$HymnR = $Body + 1;
	$Head1 = $Body * 1.9;
	$Head0 = $Head1 + 2;
	$Head2 = $Body * 1.1;
	$Head3 = $Body * 1.1;
/*	
RubricHSm		$BodySm
HymnS				4
Spacer			2
 */
?><office:document-styles xmlns:office="urn:oasis:names:tc:opendocument:xmlns:office:1.0" xmlns:style="urn:oasis:names:tc:opendocument:xmlns:style:1.0" xmlns:text="urn:oasis:names:tc:opendocument:xmlns:text:1.0" xmlns:table="urn:oasis:names:tc:opendocument:xmlns:table:1.0" xmlns:draw="urn:oasis:names:tc:opendocument:xmlns:drawing:1.0" xmlns:fo="urn:oasis:names:tc:opendocument:xmlns:xsl-fo-compatible:1.0" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:meta="urn:oasis:names:tc:opendocument:xmlns:meta:1.0" xmlns:number="urn:oasis:names:tc:opendocument:xmlns:datastyle:1.0" xmlns:svg="urn:oasis:names:tc:opendocument:xmlns:svg-compatible:1.0" xmlns:chart="urn:oasis:names:tc:opendocument:xmlns:chart:1.0" xmlns:dr3d="urn:oasis:names:tc:opendocument:xmlns:dr3d:1.0" xmlns:math="http://www.w3.org/1998/Math/MathML" xmlns:form="urn:oasis:names:tc:opendocument:xmlns:form:1.0" xmlns:script="urn:oasis:names:tc:opendocument:xmlns:script:1.0" xmlns:ooo="http://openoffice.org/2004/office" xmlns:ooow="http://openoffice.org/2004/writer" xmlns:oooc="http://openoffice.org/2004/calc" xmlns:dom="http://www.w3.org/2001/xml-events" office:version="1.0">
 <office:font-face-decls>
  <style:font-face style:name="Old London" svg:font-family="&apos;Old London&apos;" style:font-adornments="Regular" style:font-pitch="variable"/>
  <style:font-face style:name="Times VR" svg:font-family="&apos;Times VR&apos;" style:font-adornments="Regular" style:font-pitch="variable"/>
  <style:font-face style:name="TimesLT" svg:font-family="TimesLT" style:font-family-generic="roman" style:font-pitch="variable"/>
  <style:font-face style:name="Times New Roman" svg:font-family="&apos;Times New Roman&apos;" style:font-family-generic="roman" style:font-pitch="variable"/>
 </office:font-face-decls>
 <office:styles>
  <style:style style:name="Standard" style:family="paragraph" style:class="text">
	<style:text-properties style:font-name="TimesLT"/>
  </style:style>

  <style:style style:name="Body" style:family="paragraph" style:parent-style-name="Standard" style:master-page-name="">
   <style:paragraph-properties fo:text-align="start" style:justify-single-word="false" fo:hyphenation-ladder-count="no-limit" style:page-number="auto" fo:background-color="transparent" style:shadow="none">
    <style:tab-stops>
     <style:tab-stop style:position="10in" style:type="right"/>
    </style:tab-stops>
   </style:paragraph-properties>
   <style:text-properties fo:font-size=<?php echo '"'. $Body .'pt"' ?> style:text-scale="95%" fo:hyphenate="true" fo:hyphenation-remain-char-count="2" fo:hyphenation-push-char-count="2" fo:language="en" fo:country="GB"/>
  </style:style>
  <style:style style:name="BodyE" style:family="paragraph" style:parent-style-name="Body">
   <style:paragraph-properties fo:text-align="justify" style:justify-single-word="false"/>
  </style:style>
  <style:style style:name="BodyL" style:family="paragraph" style:parent-style-name="BodyE">
   <style:text-properties fo:language="la" fo:country="VA"/>
  </style:style>
  <style:style style:name="BodySm" style:family="paragraph" style:parent-style-name="Body" style:master-page-name="">
   <style:paragraph-properties style:page-number="auto"/>
   <style:text-properties fo:font-size=<?php echo '"'. $BodySm .'pt"' ?>/>
  </style:style>
  <style:style style:name="BodyESm" style:family="paragraph" style:parent-style-name="BodySm">
   <style:paragraph-properties fo:text-align="justify" style:justify-single-word="false"/>
  </style:style>
  <style:style style:name="Footnote" style:family="paragraph" style:parent-style-name="BodyESm" style:class="extra">
   <style:paragraph-properties fo:margin-left="0in" fo:margin-right="0in" fo:text-indent="0.07in" style:auto-text-indent="false" text:number-lines="false" text:line-number="0"/>
  </style:style>
  <style:style style:name="BodyLSm" style:family="paragraph" style:parent-style-name="BodyESm">
   <style:text-properties fo:language="la" fo:country="VA"/>
  </style:style>
  <style:style style:name="BodyEDrop" style:family="paragraph" style:parent-style-name="BodyE" style:class="extra" style:master-page-name="">
   <style:paragraph-properties style:page-number="auto">
    <style:drop-cap style:lines="2" style:distance="0.02in" style:style-name="DropCap"/>
   </style:paragraph-properties>
  </style:style>
  <style:style style:name="BodyLDrop" style:family="paragraph" style:parent-style-name="BodyEDrop">
   <style:text-properties fo:language="la" fo:country="VA"/>
  </style:style>
  <style:style style:name="BodyEIndent" style:family="paragraph" style:parent-style-name="BodyE">
   <style:paragraph-properties fo:margin-left="0in" fo:margin-right="0in" fo:text-indent="0.1in" style:auto-text-indent="false"/>
  </style:style>
  <style:style style:name="BodyLIndent" style:family="paragraph" style:parent-style-name="BodyEIndent">
   <style:text-properties fo:language="la" fo:country="VA"/>
  </style:style>


  <style:style style:name="Rubric" style:family="paragraph" style:parent-style-name="BodyE" style:class="extra" style:master-page-name="">
<?php /*
<style:paragraph-properties fo:text-align="start" style:justify-single-word="false" style:page-number="auto" fo:background-color="transparent"/>
 */ ?>
   <style:text-properties fo:color="#ff0000" fo:font-style="italic"/>
  </style:style>
  <style:style style:name="RubricH" style:family="paragraph" style:parent-style-name="Rubric" style:master-page-name="">
   <style:paragraph-properties style:page-number="auto" fo:keep-with-next="always"/>
  </style:style>
  <style:style style:name="RubricHSm" style:family="paragraph" style:parent-style-name="RubricH">
   <style:text-properties fo:font-size=<?php echo '"'. $RubricHSm .'pt"' ?>/>
  </style:style>
  <style:style style:name="RubricHidden" style:family="paragraph" style:parent-style-name="Body">
   <style:paragraph-properties fo:keep-with-next="always"/>
   <style:text-properties text:display="true"/>
  </style:style>
  <style:style style:name="BkHidden" style:family="paragraph" style:parent-style-name="RubricHidden"/>

  <style:style style:name="HymnE" style:family="paragraph" style:parent-style-name="Body">
   <style:paragraph-properties fo:margin-left="0.1in" fo:margin-right="0in" fo:text-indent="-0.1in" style:auto-text-indent="false"/>
  </style:style>
  <style:style style:name="HymnE1" style:family="paragraph" style:parent-style-name="HymnE"/>
  <style:style style:name="HymnL" style:family="paragraph" style:parent-style-name="HymnE">
   <style:text-properties fo:language="la" fo:country="VA"/>
  </style:style>
  <style:style style:name="HymnL1" style:family="paragraph" style:parent-style-name="HymnL"/>
  <style:style style:name="HymnS" style:family="paragraph" style:parent-style-name="Body">
   <style:text-properties fo:font-size="4pt"/>
  </style:style>
  <style:style style:name="HymnR" style:family="text">
   <style:text-properties fo:color="#ff0000" fo:font-weight="bold" fo:font-size=<?php echo '"'. $HymnR .'pt"' ?>/>
  </style:style>

  <style:style style:name="Head0" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:margin-top="0.00in" fo:margin-bottom="0.00in" fo:text-align="center" fo:keep-with-next="always"/>
	<style:text-properties style:font-name="Old London" fo:font-size=<?php echo '"'. $Head0 .'pt"' ?>/>
  </style:style>
  <style:style style:name="Head0L" style:family="paragraph" style:parent-style-name="Head0">
     <style:text-properties text:display="true"/>
  </style:style>

  <style:style style:name="Head1" style:family="paragraph" style:parent-style-name="Head0">
   <style:text-properties fo:font-size=<?php echo '"'. $Head1 .'pt"' ?>/>
  </style:style>
  <style:style style:name="Head1L" style:family="paragraph" style:parent-style-name="Head1">
     <style:text-properties text:display="true"/>
  </style:style>
  <style:style style:name="Head1NI" style:family="paragraph" style:parent-style-name="Head1"/>
  <style:style style:name="Head1NIL" style:family="paragraph" style:parent-style-name="Head1NI">
     <style:text-properties text:display="true"/>
  </style:style>

  <style:style style:name="Head2" style:family="paragraph" style:parent-style-name="Head1" style:next-style-name="Rubric" style:master-page-name="">
   <style:paragraph-properties fo:margin-top="0.02in" fo:margin-bottom="0.02in"/>
   <style:text-properties style:font-name="TimesLT" fo:font-size=<?php echo '"'. $Head2 .'pt"' ?> fo:font-weight="bold"/>
  </style:style>
  <style:style style:name="Head2L" style:family="paragraph" style:parent-style-name="Head2">
     <style:text-properties text:display="true"/>
  </style:style>

  <style:style style:name="Head2Ps" style:family="paragraph" style:parent-style-name="Head4"/>
  <style:style style:name="Head2Cant" style:family="paragraph" style:parent-style-name="Head4"/>

  <style:style style:name="Head3" style:family="paragraph" style:parent-style-name="Head2">
   <style:text-properties fo:font-size=<?php echo '"'. $Head3 .'pt"' ?> fo:font-style="italic" fo:font-weight="normal"/>
  </style:style>
  <style:style style:name="Head3L" style:family="paragraph" style:parent-style-name="Head3">
     <style:text-properties text:display="true"/>
  </style:style>
  <style:style style:name="Head4" style:family="paragraph" style:parent-style-name="RubricH">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
  </style:style>
  <style:style style:name="Head5" style:family="paragraph" style:parent-style-name="RubricHSm">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
  </style:style>

  <style:style style:name="IndexCaps" style:family="paragraph" style:parent-style-name="Body" style:master-page-name="">
   <style:paragraph-properties fo:margin-top="0.04in" fo:margin-bottom="0.04in"/>
   <style:text-properties fo:text-transform="uppercase" fo:font-weight="bold" text:display="false"/>
  </style:style>

  <style:style style:name="IndexBody" style:family="paragraph" style:parent-style-name="Body" style:master-page-name="">
   <style:text-properties fo:font-weight="bold" text:display="false"/>
  </style:style>

  <style:style style:name="Spacer" style:family="paragraph" style:parent-style-name="Body" style:master-page-name="">
   <style:text-properties fo:font-size="2pt"/>
  </style:style>

  <style:style style:name="Line" style:family="paragraph" style:parent-style-name="Spacer">
   <style:paragraph-properties fo:padding="0in" fo:border-left="none" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.0008in solid #000000" style:shadow="none"/>
  </style:style>


  <style:style style:name="PageHeader" style:family="paragraph" style:parent-style-name="BodySm">
   <style:paragraph-properties fo:padding="0in" fo:border-left="none" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.0008in solid #000000" style:shadow="none">
   </style:paragraph-properties>
  </style:style>


  <style:style style:name="Hidden1" style:family="paragraph" style:parent-style-name="Body" style:list-style-name="Outline" style:master-page-name="" style:default-outline-level="1">
   <style:paragraph-properties fo:keep-with-next="always"/>
   <style:text-properties text:display="true"/>
  </style:style>
  <style:style style:name="Hidden2" style:family="paragraph" style:parent-style-name="Hidden1" style:list-style-name="Outline" style:master-page-name="" style:default-outline-level="2"/>

  <style:style style:name="Rubric" style:family="text">
   <style:text-properties fo:color="#ff0000" fo:font-style="italic"/>
  </style:style>
  <style:style style:name="RubricH" style:family="text" style:parent-style-name="Rubric">
   <style:text-properties style:text-position="10% 70%"/>
  </style:style>
  <style:style style:name="NonRubric" style:family="text" style:parent-style-name="Rubric">
   <style:text-properties fo:color="#000000" fo:font-style="normal" fo:font-weight="normal"/>
  </style:style>
  <style:style style:name="Red" style:family="text">
   <style:text-properties fo:color="#ff0000" style:font-name="TimesLT" style:text-position="1% 60%"/>
  </style:style>
  <style:style style:name="Italic" style:family="text">
   <style:text-properties fo:font-style="italic"/>
  </style:style>
  <style:style style:name="Bold" style:family="text">
   <style:text-properties fo:font-weight="bold"/>
  </style:style>
  <style:style style:name="BoldR" style:family="text">
   <style:text-properties fo:color="#ff0000" fo:font-weight="bold"/>
  </style:style>
  <style:style style:name="BoldRC" style:family="text">
   <style:text-properties fo:color="#ff0000" fo:font-weight="bold" fo:text-transform="uppercase"/>
  </style:style>
  <style:style style:name="AllCaps" style:family="text">
   <style:text-properties fo:text-transform="uppercase"/>
  </style:style>
  <style:style style:name="SmCaps" style:family="text">
   <style:text-properties fo:font-variant="small-caps"/>
  </style:style>
  <style:style style:name="Super" style:family="text">
   <style:text-properties style:text-position="super 58%"/>
  </style:style>
  <style:style style:name="DropCap" style:family="text">
   <style:text-properties style:font-name="Old London" fo:font-weight="250"/>
  </style:style>
  <style:style style:name="VR" style:family="text">
   <style:text-properties fo:color="#ff0000" style:font-name="Times VR"/>
  </style:style>
  <style:style style:name="NH" style:family="text">
   <style:text-properties fo:language="zu" fo:country="ZA"/>
  </style:style>
  <style:style style:name="L" style:family="text">
   <style:text-properties fo:language="la" fo:country="VA" fo:font-style="italic"/>
  </style:style>
  <style:style style:name="Visible" style:family="text">
   <style:text-properties text:display="false"/>
  </style:style>


  <style:style style:name="Frame" style:family="graphic">
   <style:graphic-properties text:anchor-type="paragraph" svg:x="0in" svg:y="0in" fo:margin-left="0.0791in" fo:margin-right="0.0791in" fo:margin-top="0.0791in" fo:margin-bottom="0.0791in" style:wrap="parallel" style:number-wrapped-paragraphs="no-limit" style:wrap-contour="false" style:vertical-pos="top" style:vertical-rel="paragraph-content" style:horizontal-pos="center" style:horizontal-rel="paragraph-content" fo:padding="0.0591in" fo:border="0.0008in solid #000000"/>
  </style:style>

  <style:style style:name="Footnote_20_Symbol" style:display-name="Footnote Symbol" style:family="text"/>
  <style:style style:name="Footnote_20_anchor" style:display-name="Footnote anchor" style:family="text">
   <style:text-properties style:text-position="super 58%"/>
  </style:style>
    <text:notes-configuration text:note-class="footnote" text:default-style-name="Footnote" text:citation-style-name="Footnote_20_Symbol" text:citation-body-style-name="Footnote_20_anchor" text:master-page-name="Footnote" style:num-format="1" text:start-value="0" text:footnotes-position="page" text:start-numbering-at="chapter"/>
  <text:notes-configuration text:note-class="endnote" style:num-format="i" text:start-value="0"/>

 </office:styles>
 <office:automatic-styles>
  <style:style style:name="frC" style:family="graphic" style:parent-style-name="Frame">
   <style:graphic-properties fo:margin-left="0in" fo:margin-right="0in" fo:margin-top="0in" fo:margin-bottom="0in" style:flow-with-text="false" style:vertical-pos="from-top" style:vertical-rel="page-content" style:horizontal-pos="center" style:horizontal-rel="page-content" fo:padding="0in" fo:border="none" style:shadow="none"/>
  </style:style>
  <style:style style:name="frL" style:family="graphic" style:parent-style-name="Frame">
   <style:graphic-properties fo:margin-left="0in" fo:margin-right="0in" fo:margin-top="0in" fo:margin-bottom="0in" style:flow-with-text="false" style:vertical-pos="from-top" style:vertical-rel="page-content" style:horizontal-pos="left" style:horizontal-rel="page-content" fo:padding="0in" fo:border="none" style:shadow="none"/>
  </style:style>
  <style:style style:name="frR" style:family="graphic" style:parent-style-name="Frame">
   <style:graphic-properties fo:margin-left="0in" fo:margin-right="0in" fo:margin-top="0in" fo:margin-bottom="0in" style:flow-with-text="false" style:vertical-pos="from-top" style:vertical-rel="page-content" style:horizontal-pos="right" style:horizontal-rel="page-content" fo:padding="0in" fo:border="none" style:shadow="none"/>
  </style:style>
  <style:page-layout style:name="pm1">
   <style:page-layout-properties fo:page-width="8.5in" fo:page-height="11in" style:num-format="1" style:print-orientation="portrait" fo:margin-top="0.7874in" fo:margin-bottom="0.7874in" fo:margin-left="0.7874in" fo:margin-right="0.7874in" style:writing-mode="lr-tb" style:footnote-max-height="0in">
    <style:footnote-sep style:width="0.0071in" style:distance-before-sep="0.0398in" style:distance-after-sep="0.0398in" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>
   </style:page-layout-properties>
   <style:header-style/>
   <style:footer-style/>
  </style:page-layout>
  <style:page-layout style:name="pm2" style:page-usage="mirrored">
	  <style:page-layout-properties fo:page-width=<?php echo '"'. $PgW .'in"' ?> fo:page-height=<?php echo '"'. $PgH .'in"' ?> style:num-format="1" style:print-orientation="portrait" fo:margin-top=<?php echo '"'. $PgMar .'in"' ?> fo:margin-bottom=<?php echo '"'. $PgMar .'in"' ?> fo:margin-left=<?php echo '"'. $PgGMar .'in"' ?> fo:margin-right=<?php echo '"'. $PgMar .'in"' ?> style:shadow="none" fo:background-color="transparent" style:writing-mode="lr-tb" style:footnote-max-height="0in">
    <style:background-image/>
    <style:columns fo:column-count="1" fo:column-gap="0in"/>
    <style:footnote-sep style:width="0.0071in" style:distance-before-sep="0.0402in" style:distance-after-sep="0.0402in" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>
   </style:page-layout-properties>
   <style:header-style>
    <style:header-footer-properties fo:min-height="0.0902in" fo:margin-left="0in" fo:margin-right="0in" fo:margin-bottom="0.05in" style:dynamic-spacing="false"/>
   </style:header-style>
   <style:footer-style>
    <style:header-footer-properties fo:min-height="0.0402in" fo:margin-left="0in" fo:margin-right="0in" fo:margin-top="0in" style:dynamic-spacing="false"/>
   </style:footer-style>
  </style:page-layout>
  <style:page-layout style:name="pm3" style:page-usage="mirrored">
   <style:page-layout-properties fo:page-width=<?php echo '"'. $PgW .'in"' ?> fo:page-height=<?php echo '"'. $PgH .'in"' ?> style:num-format="i" style:print-orientation="portrait" fo:margin-top=<?php echo '"'. $PgMar .'in"' ?> fo:margin-bottom=<?php echo '"'. $PgMar .'in"' ?> fo:margin-left=<?php echo '"'. $PgGMar .'in"' ?> fo:margin-right=<?php echo '"'. $PgMar .'in"' ?> style:shadow="none" fo:background-color="transparent" style:writing-mode="lr-tb" style:footnote-max-height="0in">
    <style:background-image/>
    <style:columns fo:column-count="1" fo:column-gap="0in"/>
    <style:footnote-sep style:width="0.0071in" style:distance-before-sep="0.0402in" style:distance-after-sep="0.0402in" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>
   </style:page-layout-properties>
   <style:header-style>
    <style:header-footer-properties fo:min-height="0.0902in" fo:margin-left="0in" fo:margin-right="0in" fo:margin-bottom="0.05in" style:dynamic-spacing="false"/>
   </style:header-style>
   <style:footer-style/>
  </style:page-layout>
  <style:page-layout style:name="pm4" style:page-usage="right">
   <style:page-layout-properties fo:page-width=<?php echo '"'. $PgW .'in"' ?> fo:page-height=<?php echo '"'. $PgH .'in"' ?> style:num-format="1" style:print-orientation="portrait" fo:margin-top=<?php echo '"'. $PgMar .'in"' ?> fo:margin-bottom=<?php echo '"'. $PgMar .'in"' ?> fo:margin-left=<?php echo '"'. $PgGMar .'in"' ?> fo:margin-right=<?php echo '"'. $PgMar .'in"' ?> style:shadow="none" fo:background-color="transparent" style:writing-mode="lr-tb" style:footnote-max-height="0in">
    <style:background-image/>
    <style:columns fo:column-count="1" fo:column-gap="0in"/>
    <style:footnote-sep style:width="0.0071in" style:distance-before-sep="0.0402in" style:distance-after-sep="0.0402in" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>
   </style:page-layout-properties>
   <style:header-style/>
   <style:footer-style/>
  </style:page-layout>
 </office:automatic-styles>
 <office:master-styles>
  <style:master-page style:name="Standard" style:page-layout-name="pm1"/>
  <style:master-page style:name="Standard2" style:page-layout-name="pm2"/>
  <style:master-page style:name="Body" style:page-layout-name="pm2">
   <style:header>
    <text:p text:style-name="PageHeader"><text:tab/><text:page-number text:select-page="current">1</text:page-number></text:p>
   </style:header>
   <style:header-left>
    <text:p text:style-name="PageHeader"><text:page-number text:select-page="current">1</text:page-number></text:p>
   </style:header-left>
   <style:footer>
<text:p text:style-name="Spacer">
<draw:frame draw:style-name="frC" draw:name="FrLeft" text:anchor-type="paragraph" svg:y="-0.2in" fo:min-width="0.1in" draw:z-index="39">
      <draw:text-box fo:min-height="0.02in">
       <text:p text:style-name="BodySm"><text:chapter text:display="name" text:outline-level="2">x</text:chapter></text:p>
      </draw:text-box>
   </draw:frame>
<draw:frame draw:style-name="frL" draw:name="FrLeft" text:anchor-type="paragraph" svg:y="-0.2in" fo:min-width="0.1in" draw:z-index="39">
      <draw:text-box fo:min-height="0.02in">
       <text:p text:style-name="BodySm"><text:chapter text:display="name" text:outline-level="1">x</text:chapter></text:p>
      </draw:text-box>
   </draw:frame>
</text:p>
   </style:footer>
   <style:footer-left>
<text:p text:style-name="Spacer">
<draw:frame draw:style-name="frC" draw:name="FrLeft" text:anchor-type="paragraph" svg:y="-0.2in" fo:min-width="0.1in" draw:z-index="39">
      <draw:text-box fo:min-height="0.02in">
       <text:p text:style-name="BodySm"><text:chapter text:display="name" text:outline-level="2">x</text:chapter></text:p>
      </draw:text-box>
   </draw:frame>
</text:p>
   </style:footer-left>
  </style:master-page>
  <style:master-page style:name="Intro" style:page-layout-name="pm3">
   <style:header>
    <text:p text:style-name="PageHeader"><text:tab/><text:page-number text:select-page="current">1</text:page-number></text:p>
   </style:header>
   <style:header-left>
    <text:p text:style-name="PageHeader"><text:page-number text:select-page="current">1</text:page-number></text:p>
   </style:header-left>
  </style:master-page>
  <style:master-page style:name="Header_20_Page" style:display-name="Header Page" style:page-layout-name="pm4"/>
 </office:master-styles>
</office:document-styles>
