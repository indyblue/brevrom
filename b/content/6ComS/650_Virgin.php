   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Virgins</p>
<?php bookmark('csV'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Virginum':'Common of Virgins')
?></p>
<?php rubrics('head/Prayer.php',1); ?>
   <p:RubricH>For a Virgin Martyr:</p>
<?php prayer('csVirginMartyr1.php'); ?>
   <p:RubricH>Or:</p>
<?php prayer('csVirginMartyr2.php'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php prayer('csVirginsMartyrs1.php'); ?>
   <p:RubricH>For a Virgin not a Martyr:</p>
<?php prayer('csVirgin1.php'); ?>
   <p:BodySm/>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/ComBVM.php'); ?>
<?php rubrics('asIn.php','csVVlc','II Vespers','Little Chapter &amp; Hymn <snr>Jesu, coróna Vírginum</s>'); ?>
<?php vrS('specie_tua_et_pulcritudine_tua.php'); ?>
	<p:RubricH>For several Virgin Martyrs:</p>
<?php vrS('adducentur_regi_virgines_post_eam.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('veni_sponsa_christi_accipe_coronam.php','M'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php ant('prudentes_virgines_aptate_vestras_lampades.php'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csVL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csVL.php','02222'); ?>
<?php rubrics('asIn.php','csVVlc','II Vespers','Little Chapter &amp; Hymn'); ?>
<?php vrS('diffusa_est_gratia_in_labiis_tuis.php'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php vrS('adducentur_regi_virgines_post_eam.php'); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('simile_est_regnum_caelorum_homini_negotiatori.php','B'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php ant('prudentes_virgines_aptate_vestras_lampades.php','B'); ?>
   <p:BodySm/>

<?php bookmark('csVLH'); ?>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <p:BodySm/>

<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('2cor10_17.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('specie_tua_et_pulcritudine_tua.php'); ?>
<?php vrS('adjuvabit_eam_deus_vultu_suo.php'); ?>
   <p:BodySm/>

<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('2cor11_2.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('adjuvabit_eam_deus_vultu_suo.php'); ?>
<?php vrS('elegit_eam_deus_et_praeelegit_eam.php'); ?>
   <p:BodySm/>

<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('ecclus51_9.php', 'For a Virgin Martyr:'); ?>
<?php lc('wis4_1.php', 'For a Virgin not a Martyr:'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('elegit_eam_deus_et_praeelegit_eam.php'); ?>
<?php vrS('diffusa_est_gratia_in_labiis_tuis.php'); ?>
   <p:BodySm/>

<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/ComBVM.php'); ?>
<?php bookmark('csVVlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('2cor10_17.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php bookmark('jesu_corona_virginum'); ?>
<?php hymn('jesu_corona_virginum.php'); ?>
<?php vrS('diffusa_est_gratia_in_labiis_tuis.php'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php vrS('adducentur_regi_virgines_post_eam.php'); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('veni_sponsa_christi_accipe_coronam.php','M'); ?>
   <p:RubricH>For several Virgin Martyrs:</p>
<?php ant('prudentes_virgines_aptate_vestras_lampades.php','M'); ?>
<?php rubrics('cs/Compline.php'); ?>

