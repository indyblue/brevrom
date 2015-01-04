<?php 
	space();
	hidden('Christmas',1);
	hidden('Holy Name of Jesus',2);
	head_temp(2,'Sanctissimi Nominis Jesu', 'the Most Holy Name of Jesus',
		array('dominica a die 2 ad diem 5 januarii vel, si hæc defecerit, die 2 januarii.',
				'the Sunday between Jauary 2 and 5, or if there is none, January 2.'));

	hour('1V');
	rubp('(quando festum occurrit in dominica, vel celebratur gradu I classis)', '(when the feast occurs on a Sunday, or is celebrated as a I class feast)');
	rubp('Quando hoc festum die 2 januarii celebratur, ad II Vespera præcedentis nil fit de Ssmo Nomine.', 'When this feast is celebrated on January 2, at II Vespers of the preceding nothing is said from the Office of the Holy Name.');
	space();
	rubrics('ps/ant2Vespers.php');
	rubrics('ps/SuV115.php');
	lc('phil2_8-10.php');
	hymn('jesu_dulcis_memoria.php',1);
	vrS('prTemp/sit_nomen_domini_benedictum.php',1);
	ant('prTemp/nativity/holy_name_m1.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/nativity/holy_name_L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/holy_name_L.php','02222');	
	lc('phil2_8-10.php');
	rubrics('head/HymnVerse.php');
	hymn('jesu_decus_angelicum.php');
	vrS('Ord/adjutorium_nostrum_in_nomine_domini.php');
	ant('prTemp/nativity/holy_name_b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/holy_name.php');
	space();

	ordref(0,4,0);
	PrV('qui_natus_es_de_maria_virgine.php',1);
	space();

	hour('T');
	lc('phil2_8-10.php');
	brS('prTemp/sit_nomen_domini_benedictum.php',1);
	vrS('prTemp/afferte_domino_gloriam_et_honorem.php',1);
	space();

	hour('S');
	lc('phil2_10.php');
	brS('prTemp/afferte_domino_gloriam_et_honorem.php',1);
	vrS('prTemp/magnificate_dominum_mecum.php',1);
	space();

	hour('N');
	lc('col3_17a.php');
	brS('prTemp/magnificate_dominum_mecum.php',1);
	vrS('Ord/adjutorium_nostrum_in_nomine_domini.php',1);
	space();

	hour('2V');
	rubp('Quando hoc festum celebratur die 5 januarii, Vesperæ dicuntur de seq. festo Epiphaniæ, sine com. de festo currenti.', 'When this feast is celebrated on January 5, Vespers is said of the following feast of the Epiphany, without commem. of the current feast.');
	ant('prTemp/nativity/holy_name_V.php','20000');
	rubrics('ps/SuV115.php'); 
	ant('prTemp/nativity/holy_name_V.php','02222');	
	lc('phil2_8-10.php');
	rubrics('head/HymnVerse.php');
	hymn('jesu_dulcis_memoria.php',0);
	vrS('prTemp/sit_nomen_domini_benedictum.php',1);
	ant('prTemp/nativity/holy_name_m2.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	rubp('<snr>¶</s> Dies a 2 ad 5 januarii sunt feriæ temporis Nativitatis Domini IV classis.', '<snr>¶</s> January 2 to 5 are IV class ferias of the season of the Nativity of the Lord.');
	rubp('Antiphonæ et psalmi, ad omnes Horas, sumuntur de currenti hebdomadæ die, ut in Psalterio;', 'Antiphons and pslams, at all Hours, are are taken from the current weekday, as in the Psalter;');
	rubp('reliqua, uni cum versu in <s:VR>R. br.</s> ad Primam, ut in Ordinario vel die 1 januarii.', 'the rest, together with the versicle in the brief response at Prime, as in the Ordinary or on January 1.');
	rubp('In festis his diebus forte occurrentibus, retinetur versus in responsorio brevi ad Primam, ut die 1 januarii, nisi habeatur proprius; sed nulla fit commemoratio feriæ.', 'In feasts which may occur on these days, the versicle in the brief response at Prime is retained, as on January 1, unless there is a proper one; but no commemoration of the feria is made.');
	space();

	hidden('Christmas',1);
	hidden('Jan. 5',2);
	head_temp(4,'die 5 Januarii', 'January 5');
	feast_saint(105,-2,'S. Telesphori','St. Telesphorus','PM',
		array('csPope1m.php','Telésphorum','Telesphorus'));
	rubp('Post Nonam explicit tempus Nativitatis et incipit tempus Epiphaniæ', 'After None, the season of Christmas ends and the season of Epiphany begins.');
	rubp('Vesperæ de Epiphania, sine ulla commemoratione.', 'Vespers is of Epiphany, without a commemoration.');
	
?>

