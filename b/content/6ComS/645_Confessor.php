   <text:p text:style-name="Body"/>
<?php img('separator3.tif',933,170,100); ?>
   <text:p text:style-name="RubricH"/>
   <text:p text:style-name="Hidden1">Common of Saints</text:p>
   <text:p text:style-name="Hidden2">Confessors</text:p>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csC"/></text:p>
	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'Commune Confessoris non Pontificis':'Common of Confessors')
?></text:p>
<?php rubrics('head/Prayer.php',1); ?>
<?php prayer('csConfessor1.php'); ?>
   <text:p text:style-name="RubricH">Or:</text:p>
<?php prayer('csConfessor2.php'); ?>
   <text:p text:style-name="RubricH">For a Doctor:</text:p>
<?php prayer('csConfessorDoctor.php'); ?>
   <text:p text:style-name="RubricH">For an Abbot:</text:p>
<?php prayer('csConfessorAbbot.php'); ?>
   <text:p text:style-name="BodySm"/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV.php'); ?>
<?php rubrics('asIn.php','csCVlc','II Vespers','Little Chapter &amp; Hymn'); ?>
<?php vrS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('similabo_eum_viro_sapienti.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <text:p text:style-name="BodySm"/>

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
<?php ant('euge_serve_bone_et_fidelis.php'); ?>
   <text:p text:style-name="BodySm"/>

<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <text:p text:style-name="BodySm"/>

<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus31_8.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('amavit_eum_dominus_et_ornavit_eum.php'); ?>
<?php vrS('os_justi_meditabitur_sapientiam.php'); ?>
   <text:p text:style-name="BodySm"/>

<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus39_6.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('os_justi_meditabitur_sapientiam.php'); ?>
<?php vrS('lex_dei_ejus_in_corde_ipsius.php'); ?>
   <text:p text:style-name="BodySm"/>

<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis10_10.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('lex_dei_ejus_in_corde_ipsius.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
   <text:p text:style-name="BodySm"/>

<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csCVlc"/></text:p>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus31_8.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php hymn('iste_confessor_domini_colentes.php'); ?>
<?php vrS('justum_deduxit_dominus_per_vias_rectas.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('hic_vir_despiciens_mundum_et_terrena_triumphans.php'); ?>
   <text:p text:style-name="RubricH">For a Doctor:</text:p>
<?php antN('csConfessorDoctorAnt.php'); ?>
<?php rubrics('cs/Compline.php'); ?>
