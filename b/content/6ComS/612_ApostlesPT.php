   <text:p text:style-name="Body"/>
<?php img('separator3.tif',933,170,100); ?>
   <text:p text:style-name="RubricH"/>
   <text:p text:style-name="Hidden1">Common of Saints</text:p>
   <text:p text:style-name="Hidden2">Apostles/Martyrs PT</text:p>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csApPT"/></text:p>
	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'Commune Apostolorum aut Martyrum PT':'Common of Apostles or Martyrs PT') 
?></text:p>
	<text:p text:style-name="Head3"><?php 
echo ($_GET['L']==1?'Tempore Paschali':'in Paschaltide') 
?></text:p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Martyr Pope, prayer'); ?>
<?php rubrics('asIn.php','csM','Common of One Martyr','For One Martyr, prayer'); ?>
<?php rubrics('asIn.php','csMm','Common of Several Martyrs','For Several Martyrs, prayer'); ?>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csApPTVlc','II Vespers','Little Chapter &amp; Hymn'); ?>
<?php vrS('sancti_et_justi_in_domino_gaudete.php',1); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('lux_perpetua_lucebit_sanctis_tuis_domine.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csApPTL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csApPTL.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php rubrics('asIn.php','csMLh','Lauds, Common of One Martyr','For One Martyr, Hymn <text:span text:style-name="NonRubric">Invícte Martyr, únicum</text:span>'); ?>
<?php rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <text:span text:style-name="NonRubric">Rex glorióse Mártyrum</text:span>'); ?>
   <text:p text:style-name="RubricH">For Apostles:</text:p>
<?php hymn('paschale_mundo_gaudium.php'); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('filiae_jerusalem_venite_et_videte_martyres.php'); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('sancti_et_justi_in_domino_gaudete.php',1); ?>
<?php vrS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_5.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1); ?>
<?php vrS('laetitia_sempiterna_super_capita_eorum.php',1); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('rom8_28.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('laetitia_sempiterna_super_capita_eorum.php',1); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/ComAp.php','For Apostles, '); ?>
<?php rubrics('ps/SuV115.php','For Martyr(s), '); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csApPTVlc"/></text:p>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php rubrics('asIn.php','csMVh','Vespers, Common of One Martyr','For One Martyr, Hymn <text:span text:style-name="NonRubric">Deus, tuórum mílitum</text:span>'); ?>
<?php rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <text:span text:style-name="NonRubric">Rex glorióse Mártyrum</text:span>'); ?>
   <text:p text:style-name="RubricH">For Apostles:</text:p>
<?php hymn('tristes_erant_apostoli.php'); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('sancti_et_justi_in_domino_gaudete.php'); ?>
<?php rubrics('cs/Compline.php'); ?>

