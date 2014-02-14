   <text:p text:style-name="Body"/>
<?php img('separator3.tif',933,170,100); ?>
   <text:p text:style-name="RubricH"/>
   <text:p text:style-name="Hidden1">Common of Saints</text:p>
   <text:p text:style-name="Hidden2">Several Martyrs</text:p>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMm"/></text:p>
	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'Commune Plurimorum Martyrum':'Common of Several Martyrs') 
?></text:p>
	<text:p text:style-name="Head3">(<?php 
echo ($_GET['L']==1?'extra Tempus Paschale':'outside Paschaltide') 
?>)</text:p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For Several Martyr Popes, prayer'); ?>
   <text:p text:style-name="BodySm"/>
   <text:p text:style-name="RubricH">For several Martyr Bishops:</text:p>
<?php prayer('csMartyrsBishops1.php'); ?>
   <text:p text:style-name="RubricH">For several Martyrs not Bishops:</text:p>
<?php prayer('csMartyrs1.php'); ?>
   <text:p text:style-name="RubricH">Or:</text:p>
<?php prayer('csMartyrs2.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csMmVlc','II Vespers','Little Chapter &amp; Hymn'); ?>
<?php vrS('laetamini_in_domino_et_exultate_justi.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('istorum_est_enim_regnum_caelorum.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csMmL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csMmL.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMmLh"/></text:p>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('rex_gloriose_martyrum.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('vestri_capilli_capitis_omnes_numerati_sunt.php'); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('laetamini_in_domino_et_exultate_justi.php'); ?>
<?php vrS('exsultent_justi_in_conspectu_dei.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis10_17.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('exsultent_justi_in_conspectu_dei.php'); ?>
<?php vrS('justi_autem_in_perpetuum_vivent.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_7.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('justi_autem_in_perpetuum_vivent.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV115.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMVlc"/></text:p>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('sanctorum_meritis_inclyta_gaudia.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('gaudent_in_caelis_animae_sanctorum.php'); ?>
<?php rubrics('cs/Compline.php'); ?>
