   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Confessors</p>
<?php bookmark('csC'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Confessoris non Pontificis':'Common of Confessors')
?></p>
<?php rubrics('head/Prayer.php',1); ?>
<?php prayer('csConfessor1.php'); ?>
   <p:RubricH>Or:</p>
<?php prayer('csConfessor2.php'); ?>
   <p:RubricH>For a Doctor:</p>
<?php prayer('csConfessorDoctor.php'); ?>
   <p:RubricH>For an Abbot:</p>
<?php prayer('csConfessorAbbot.php'); ?>
   <p:BodySm/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV.php'); ?>
<?php rubrics('asIn.php','csCVlc','II Vespers','Little Chapter &amp; Hymn <snr>Iste Conféssor Dómini, coléntes</s>'); ?>
<?php vrS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('similabo_eum_viro_sapienti.php','M'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <p:BodySm/>

<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csCL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csCL.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus31_8.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('jesu_corona_celsior.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('euge_serve_bone_et_fidelis-tui.php','B'); ?>
   <p:BodySm/>

<?php bookmark('csCLH'); ?>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <p:BodySm/>

<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus31_8.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php vrS('os_justi_meditabitur_sapientiam.php'); ?>
   <p:BodySm/>

<?php bookmark('csCS'); ?>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus39_6.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('os_justi_meditabitur_sapientiam.php'); ?>
<?php vrS('lex_dei_ejus_in_corde_ipsius.php'); ?>
   <p:BodySm/>

<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis10_10.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('lex_dei_ejus_in_corde_ipsius.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
   <p:BodySm/>

<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php bookmark('csCVlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus31_8.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('iste_confessor_domini_colentes.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('hic_vir_despiciens_mundum_et_terrena_triumphans.php','M'); ?>
   <p:RubricH>For a Doctor:</p>
<?php ant('csConfessorDoctorAnt.php','M'); ?>
<?php rubrics('cs/Compline.php'); ?>
