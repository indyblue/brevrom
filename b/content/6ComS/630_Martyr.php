   <text:p text:style-name="Body"/>
<?php img('separator3.tif',933,170,100); ?>
   <text:p text:style-name="RubricH"/>
   <text:p text:style-name="Hidden1">Common of Saints</text:p>
   <text:p text:style-name="Hidden2">One Martyr</text:p>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csM"/></text:p>
	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'Commune Unius Martyris':'Common of One Martyr') 
?></text:p>
	<text:p text:style-name="Head3">(<?php 
echo ($_GET['L']==1?'extra Tempus Paschale':'outside Paschaltide') 
?>)</text:p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Martyr Pope, prayer'); ?>
   <text:p text:style-name="BodySm"/>
   <text:p text:style-name="RubricH">For a Martyr Bishop:</text:p>
<?php prayer('csMartyrBishop1.php'); ?>
	<text:p text:style-name="RubricH">Or:</text:p>
<?php prayer('csMartyrBishop2.php'); ?>
	<text:p text:style-name="RubricH">For one Martyr not a Bishop:</text:p>
<?php prayer('csMartyr1.php'); ?>
	<text:p text:style-name="RubricH">Or:</text:p>
<?php prayer('csMartyr2.php'); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csMVlc','II Vespers','Little Chapter &amp; Hymn'); ?>
<?php vrS('gloria_et_honore_coronasti_eum_domine.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('iste_sanctus_pro_lege_dei_sui.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csML.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csML.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('jas1_12.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMLh"/></text:p>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('invicte_martyr_unicum.php'); ?>
<?php vrS('justus_ut_palma_florebit.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('qui_odit_animam_suam_in_hoc_mundo.php'); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('jas1_12.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('gloria_et_honore_coronasti_eum_domine.php'); ?>
<?php vrS('posuisti_domine_super_caput_ejus.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus15_3.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('posuisti_domine_super_caput_ejus.php'); ?>
<?php vrS('magna_est_gloria_ejus_in_salutari_tuo.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus39_6.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('magna_est_gloria_ejus_in_salutari_tuo.php'); ?>
<?php vrS('justus_ut_palma_florebit.php'); ?>
	<text:p text:style-name="BodySm"/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV115.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMVlc"/></text:p>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('jas1_12.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csMVh"/></text:p>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('deus_tuorum_militum.php'); ?>
<?php vrS('justus_ut_palma_florebit.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('qui_vult_venire_post_me_abneget_semetipsum.php'); ?>
<?php rubrics('cs/Compline.php'); ?>

