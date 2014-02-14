<?php
	space();
	img('separator3.png',100);
	space('RubricH');
	bookmark('csApPT');
	head('Commune Apostolorum aut Martyrum PT',
		'Common of Apostles or Martyrs PT',1,
		'Common of Saints','Apostles/Martyrs PT');
	head('Tempore Paschali','in Paschaltide',3);

	space();
	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('wis5_1.php','csMVlc','h');
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
	head('Pro uno Martyre','For one Martyr',-4);
	hymn('deus_tuorum_militum.php',1);
	head('Pro pluribus Martyribus','For several Martyrs',-4);
	hymn('rex_gloriose_martyrum.php',1);
	head('Pro Apostolis','For Apostles',-4);
	hymn('paschale_mundo_gaudium.php');
	vrS('pretiosa_in_conspectu_domini.php',1);
	ant('filiae_jerusalem_venite_et_videte_martyres.php','B',1);
	rubrics('head/Prayer.php',1);
	rubp('Pro Summo Pontifice Martyre vel Summis Pontificibus Martyribus, <snr>p. '. bkref('csPope') .'</s>', 'For a Martyr Pope or several Martyr Popes, <snr>p. '. bkref('csPope') .'</s>');
	rubp('Pro uno Martyre, <snr>p. '. bkref('csM') .'</s>', 'For one Martyr, <snr>p. '. bkref('csM') .'</s>');
	rubp('Pro pluribus Martyribus, <snr>p. '. bkref('csMm') .'</s>', 'For several Martyrs, <snr>p. '. bkref('csMm') .'</s>');

	space();
	bookmark('csApPTLH');
	hour('H');
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
	head('Pro uno Martyre','For one Martyr',-4);
	hymn('deus_tuorum_militum.php',1);
	head('Pro pluribus Martyribus','For several Martyrs',-4);
	hymn('rex_gloriose_martyrum.php',1);
	head('Pro Apostolis','For Apostles',-4);
	hymn('tristes_erant_apostoli.php');
	vrS('pretiosa_in_conspectu_domini.php',1);
	ant('sancti_et_justi_in_domino_gaudete.php','M',1);
	rubrics('cs/Compline.php');
?>
