   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Apostles/Martyrs PT</p>
<?php bookmark('csApPT'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Apostolorum aut Martyrum PT':'Common of Apostles or Martyrs PT') 
?></p>
	<p:Head3><?php 
echo ($_GET['L']==1?'Tempore Paschali':'in Paschaltide') 
?></p>
<?php rubrics('head/Prayer.php',1); ?>
<?php rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Martyr Pope, prayer'); ?>
<?php rubrics('asIn.php','csM','Common of One Martyr','For One Martyr, prayer'); ?>
<?php rubrics('asIn.php','csMm','Common of Several Martyrs','For Several Martyrs, prayer'); ?>
<?php rubrics('head/1Vespers.php'); ?>
<?php rubrics('cs/1Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/SuV116.php'); ?>
<?php rubrics('asIn.php','csApPTVlc','II Vespers','Little Chapter &amp; Hymn <snr>Exsúltet orbis gáudiis</s>'); ?>
<?php vrS('sancti_et_justi_in_domino_gaudete.php',1); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('lux_perpetua_lucebit_sanctis_tuis_domine.php','M'); ?>
<?php rubrics('cs/1Compline.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Lauds.php'); ?>
<?php rubrics('head/Psalms.php'); ?>
<?php ant('csApPTL.php','20000'); ?>
<?php rubrics('ps/SuL1.php'); ?>
<?php ant('csApPTL.php','02222'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php rubrics('asIn.php','csMLh','Lauds, Common of One Martyr','For One Martyr, Hymn <snr>Invícte Martyr, únicum</s>'); ?>
<?php rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <snr>Rex glorióse Mártyrum</s>'); ?>
   <p:RubricH>For Apostles:</p>
<?php hymn('paschale_mundo_gaudium.php'); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
<?php rubrics('head/Benedictus.php'); ?>
<?php ant('filiae_jerusalem_venite_et_videte_martyres.php','B'); ?>
	<p:BodySm/>
<?php bookmark('csApPTLH'); ?>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('cs/LittleHours.php'); ?>
   <p:BodySm/>
<?php rubrics('head/Terce.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('sancti_et_justi_in_domino_gaudete.php',1); ?>
<?php vrS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1); ?>
   <p:BodySm/>
<?php rubrics('head/Sext.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_5.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1); ?>
<?php vrS('laetitia_sempiterna_super_capita_eorum.php',1); ?>
   <p:BodySm/>
<?php rubrics('head/None.php'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('rom8_28.php'); ?>
<?php rubrics('head/BriefRespond.php'); ?>
<?php brS('laetitia_sempiterna_super_capita_eorum.php',1); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
	<p:BodySm/>
<?php rubrics('head/2Vespers.php'); ?>
<?php rubrics('ps/antLauds.php'); ?>
<?php rubrics('ps/ComAp.php','For Apostles, '); ?>
<?php rubrics('ps/SuV115.php','For Martyr(s), '); ?>
<?php bookmark('csApPTVlc'); ?>
<?php rubrics('head/LittleChapter.php'); ?>
<?php lc('wis5_1.php'); ?>
<?php rubrics('head/HymnVerse.php'); ?>
<?php rubrics('asIn.php','csMVh','Vespers, Common of One Martyr','For One Martyr, Hymn <snr>Deus, tuórum mílitum</s>'); ?>
<?php rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <snr>Rex glorióse Mártyrum</s>'); ?>
   <p:RubricH>For Apostles:</p>
<?php hymn('tristes_erant_apostoli.php'); ?>
<?php vrS('pretiosa_in_conspectu_domini.php',1); ?>
<?php rubrics('head/Magnificat.php'); ?>
<?php ant('sancti_et_justi_in_domino_gaudete.php','M'); ?>
<?php rubrics('cs/Compline.php'); ?>

