<?php 
	space();
	hidden('Christmas',1);
	hidden('Dec. 27 - Holy Innocents',2);
	head_temp(2,'Ss. Innotentium <br><r>Martyrum</s>', 'Holy Innocents <br><r>Martyrs</s>',1226);

	csref('csMm',0,11);
	rubp('Sicubi dicendæ sint I Vesperæ de Ss. Innocentibus, antiphonæ et psalmi de Nativitate, reliqua de Ss. Innocentibus (ut ad Laudes). Et fit commemoratio octavæ Nativitatis, ut supra.', 'If I Vespers of the Holy Innocents is said, the antiphons and psalms of the Nativity are said, and the rest from the Holy Innocents (as in Lauds). And commem. is made of the octave of Christmas, as above.');
	space();

	hour('L');
	ant('prTemp/nativity/28L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/28L.php','02222');	
	lc('apoc14_1.php');
	rubrics('head/HymnVerse.php');
	hymn('salvete_flores_martyrum.php',0);
	vrS('prTemp/herodes_iratus_occidit_multos_pueros.php');
	ant('prTemp/nativity/28b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/28.php');
	require '25comL.php';
	space();

	csref(0,2,0);
	PrV('qui_natus_es_de_maria_virgine.php',1);
	space();

	hour('T');
	lc('apoc14_1.php');
	brS('laetamini_in_domino_et_exultate_justi.php');
	vrS('exsultent_justi_in_conspectu_dei.php');
	space();

	hour('S');
	lc('apoc14_4.php');
	brS('exsultent_justi_in_conspectu_dei.php');
	vrS('justi_autem_in_perpetuum_vivent.php');
	space();

	hour('N');
	lc('apoc14_4-5.php');
	brS('justi_autem_in_perpetuum_vivent.php');
	vrS('exultabunt_sancti_in_gloria.php');
	space();

	hour('2V');
	rubrics('ant_et_pss_de_nativitate.php');
	lc('apoc14_1.php');
	hymn('salvete_flores_martyrum.php',1);
	vrS('prTemp/sub_throno_dei_omnes_sancti_clamant.php');
	ant('prTemp/nativity/28m.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/28.php');
	require '25comV.php';
	rubrics('prSanct/ComplineSun.php');

?>




