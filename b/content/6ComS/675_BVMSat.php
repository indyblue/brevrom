<?php
	bookmark('csBVMSat');

	space('Body');
	img('separator2.png',100);
	space('RubricH');
	head('Commune Sanctæ Mariæ in Sabbato',
		'Saturday Office of the B.V.M.',1,
		'Common of Saints','B.V.M. Saturday');

	rubp('Omnibus sabbatis IV classis, fit Officium de sancta Maria, in quo, sumptis antiphonis et psalmis de sabbato, reliqua dicuntur ut infra.', 'On all IV class Saturdays, the Office of Holy Mary takes place, in which the antiphons and psalms of Saturday are used, the rest being said as follows.');
	space();

	hour('M');
	ant('ave_maria.php','I');
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
	space();


	hour('L');
	rubrics('ps/SaL1.php');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	hymn('o_gloriosa_virginum.php');
	vrS('benedicta_tu_in_mulieribus.php',2);
	space('Line');
	rubp('A sabbato post octavam Nativitatis Domini usque ad sabbatum ante Purificationem inclusive:', 'From the Saturday after the octave of the Nativity of our Lord to the Saturday before the Purification (2 Feb.) inclusive:');
	ant('mirabile_mysterium_delcaratur_hodie.php','B');
	rubrics('head/Prayer.php');
	prayer('csBVMSat1.php');
	space('Line');
	rubp('A sabbato post Purificationem usque ad sabbatum ante Quinquagesimam inclusive, et a sabbato post festum Sanctissimum Trinitatis usque ad sabbatum ante Nativitatis Domini, inclusive:', 'From the Saturday after the Purification to the Saturday before Quinquagesima Sunday, and from the Saturday after the feast of the Most Holy Trinity until the Saturday before the first Sunday of Advent, inclusive:');
	ant('beata_dei_genitrix_maria_virgo_perpetua.php','B');
	rubrics('head/Prayer.php');
	prayer('csBVMSat2.php');
	space('Line');
	rubp('A sabbato post dominicam in albis usque ad sabbatum post Ascensionem inclusive:', 'From the Saturday after the first Sunday after Easter to the Saturday after the Ascension, inclusive:');
	ant('regina_caeli_laetare_alleluia.php','B',1);
	rubp('Oratio, <snr>Concéde nos</s>, ut supra.', 'Prayer <snr>Concéde nos</s>, as above.');
	space('Line');
	space();
	PrV('qui_natus_es_de_maria_virgine.php');

	space();
	hour('T');
	lc('ecclus24_14.php');
	rubrics('head/PTnot.php');
	brS('specie_tua_et_pulcritudine_tua.php');
	vrS('adjuvabit_eam_deus_vultu_suo.php');
	rubrics('head/PT.php');
	brS('specie_tua_et_pulcritudine_tua.php',1);
	vrS('adjuvabit_eam_deus_vultu_suo.php',0,1);

	space();
	hour('S');
	lc('ecclus24_15-16.php');
	rubrics('head/PTnot.php');
	brS('adjuvabit_eam_deus_vultu_suo.php');
	vrS('elegit_eam_deus_et_praeelegit_eam.php');
	rubrics('head/PT.php');
	brS('adjuvabit_eam_deus_vultu_suo.php',1);
	vrS('elegit_eam_deus_et_praeelegit_eam.php',0,1);

	space();
	hour('N');
	lc('ecclus24_19.php');
	rubrics('head/PTnot.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	rubrics('head/PT.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php',1);
	vrS('diffusa_est_gratia_in_labiis_tuis.php',0,1);
	space();
	rubp('Post Nonam terminatur Officium sanctæ Mariæ in sabbato.', 'The Saturday Office of the B.V.M. ends after None.');
	space();
	img();

	include '675_BVMSat_matins/lectio_01.php';
	include '675_BVMSat_matins/lectio_02.php';
	include '675_BVMSat_matins/lectio_03.php';
	include '675_BVMSat_matins/lectio_04.php';
	include '675_BVMSat_matins/lectio_05.php';
	include '675_BVMSat_matins/lectio_10.php';
	include '675_BVMSat_matins/lectio_11.php';
	include '675_BVMSat_matins/lectio_12.php';
?>
