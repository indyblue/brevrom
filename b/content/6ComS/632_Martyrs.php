   <p:Body/>
<?php img('separator3.tif',933,170,100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Several Martyrs</p>
<?php bookmark('csMm'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Plurimorum Martyrum':'Common of Several Martyrs') 
?></p>
	<p:Head3>(<?php 
echo ($_GET['L']==1?'extra Tempus Paschale':'outside Paschaltide') 
?>)</p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For Several Martyr Popes, prayer'); ?>
   <p:BodySm/>
   <p:RubricH>For several Martyr Bishops:</p>
<?php prayer('csMartyrsBishops1.php'); ?>
   <p:RubricH>For several Martyrs not Bishops:</p>
<?php prayer('csMartyrs1.php'); ?>
   <p:RubricH>Or:</p>
<?php prayer('csMartyrs2.php'); ?>
   <p:BodySm/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csMmVlc','II Vespers','Little Chapter &amp; Hymn <snr>Sanctórum méritis ínclita gáudia</s>'); ?>
<?php vrS('laetamini_in_domino_et_exultate_justi.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('istorum_est_enim_regnum_caelorum.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csMmL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csMmL.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<?php bookmark('csMmLh'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('rex_gloriose_martyrum.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('vestri_capilli_capitis_omnes_numerati_sunt.php'); ?>
	<p:BodySm/>
<?php bookmark('csMmLH'); ?>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('laetamini_in_domino_et_exultate_justi.php'); ?>
<?php vrS('exsultent_justi_in_conspectu_dei.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis10_17.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('exsultent_justi_in_conspectu_dei.php'); ?>
<?php vrS('justi_autem_in_perpetuum_vivent.php'); ?>
   <p:BodySm/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_7.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('justi_autem_in_perpetuum_vivent.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
   <p:BodySm/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV115.php'); ?>
<?php bookmark('csMVlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis3_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('sanctorum_meritis_inclyta_gaudia.php'); ?>
<?php vrS('exultabunt_sancti_in_gloria.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('gaudent_in_caelis_animae_sanctorum.php'); ?>
<?php rubrics('cs/Compline.php'); ?>
