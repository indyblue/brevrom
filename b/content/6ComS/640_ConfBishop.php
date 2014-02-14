   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Confessor Bishop</p>
<?php bookmark('csCB'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Confessoris Pontificis':'Common of Bishop Confessor') 
?></p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Pope, prayer'); ?>
   <p:BodySm/>
   <p:RubricH>For a Bishop:</p>
<?php prayer('csConfessorBishop1.php'); ?>
   <p:RubricH>Or:</p>
<?php prayer('csConfessorBishop2.php'); ?>
   <p:RubricH>For a Doctor:</p>
<?php prayer('csConfessorDoctor.php'); ?>
   <p:BodySm/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csCBVlc','II Vespers','Little Chapter &amp; Hymn <snr>Iste Conféssor Dómini, coléntes</s>'); ?>
<?php vrS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('sacerdos_et_pontifex_et_virtutum_optifex.php','M'); ?>
   <p:RubricH>For a Doctor:</p>
<?php ant('csConfessorDoctorAnt.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <p:BodySm/>

<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csCBL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csCBL.php','02222'); ?>
<?php bookmark('csCBLlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus44_16.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('jesu_redemptor_omnium_perpes.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('euge_serve_bone_et_fidelis.php','B'); ?>
   <p:BodySm/>
<?php bookmark('csCBLH'); ?>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus44_16.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php vrS('elegit_eum_dominus_sacerdotem_sibi.php'); ?>
	<p:BodySm/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus44_20.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('elegit_eum_dominus_sacerdotem_sibi.php'); ?>
<?php vrS('tu_es_sacerdos_in_aeternum.php'); ?>
   <p:BodySm/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus45_19.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('tu_es_sacerdos_in_aeternum.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
   <p:BodySm/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV131.php'); ?>
<?php bookmark('csCBVlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus44_16.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('iste_confessor_domini_colentes.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('amavit_eum_dominus_et_ornavit_eum.php','M'); ?>
   <p:RubricH>For a Pope:</p>
<?php ant('dum_esset_summus_pontifex.php','M'); ?>
   <p:RubricH>For a Doctor:</p>
<?php ant('csConfessorDoctorAnt.php','M'); ?>
<?php rubrics('cs/Compline.php'); ?>
