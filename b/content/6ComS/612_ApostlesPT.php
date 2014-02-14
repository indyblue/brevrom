<?php
	space();
	img('separator3.tif',100);
	space('RubricH');
	bookmark('csApPT');
	head('Commune Apostolorum aut Martyrum PT',
		'Common of Apostles or Martyrs PT',1,
		'Common of Saints','Apostles/Martyrs PT');
	head('Tempore Paschali','in Paschaltide',3);

	rubrics('head/Prayer.php',1);
	rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Martyr Pope, prayer');
	rubrics('asIn.php','csM','Common of One Martyr','For One Martyr, prayer');
	rubrics('asIn.php','csMm','Common of Several Martyrs','For Several Martyrs, prayer');

	space();
	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	rubrics('asIn.php','csApPTVlc','II Vespers','Little Chapter &amp; Hymn <snr>Exsúltet orbis gáudiis</s>');
	vrS('sancti_et_justi_in_domino_gaudete.php',1);
	ant('lux_perpetua_lucebit_sanctis_tuis_domine.php','M',1);
	rubrics('cs/1Compline.php');

	space();
	hour('L');
	ant('csApPTL.php','20000',1);
	rubrics('ps/SuL1.php');
	ant('csApPTL.php','02222',1);
	bookmark('csApPTLlc');
	lc('wis5_1.php');
	rubrics('head/HymnVerse.php');
	rubrics('asIn.php','csMLh','Lauds, Common of One Martyr','For One Martyr, Hymn <snr>Invícte Martyr, únicum</s>');
	rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <snr>Rex glorióse Mártyrum</s>');
	head('Pro Apostolis','For Apostles',-4);
	hymn('paschale_mundo_gaudium.php');
	vrS('pretiosa_in_conspectu_domini.php',1);
	ant('filiae_jerusalem_venite_et_videte_martyres.php','B',1);

	space();
	bookmark('csApPTLH');
	rubrics('head/LittleHours.php');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	lc('wis5_1.php');
	brS('sancti_et_justi_in_domino_gaudete.php',1);
	vrS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1);

	space();
	hour('S');
	lc('wis5_5.php');
	brS('lux_perpetua_lucebit_sanctis_tuis_domine.php',1);
	vrS('laetitia_sempiterna_super_capita_eorum.php',1);

	space();
	hour('N');
	lc('rom8_28.php');
	brS('laetitia_sempiterna_super_capita_eorum.php',1);
	vrS('pretiosa_in_conspectu_domini.php',1);

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComAp.php','For Apostles, ');
	rubrics('ps/SuV115.php','For Martyr(s), ');
	bookmark('csApPTVlc');
	lc('wis5_1.php');
	rubrics('head/HymnVerse.php');
	rubrics('asIn.php','csMVh','Vespers, Common of One Martyr','For One Martyr, Hymn <snr>Deus, tuórum mílitum</s>');
	rubrics('asIn.php','csMmLh','Lauds, Common of Several Martyrs','For Several Martyrs, Hymn <snr>Rex glorióse Mártyrum</s>');
	head('Pro Apostolis','For Apostles',-4);
	hymn('tristes_erant_apostoli.php');
	vrS('pretiosa_in_conspectu_domini.php',1);
	ant('sancti_et_justi_in_domino_gaudete.php','M',1);
	rubrics('cs/Compline.php');
?>
