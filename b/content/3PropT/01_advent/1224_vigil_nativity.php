<?php 
	space();
	hidden('Advent',1);
	hidden('Vigil of the Nativity',2);
	rubp('<snr>¶</s> Si vigilia Nativitatis Domini venerit in dominica, Officium ordinatur hoc modo: Sabbato præcedenti, ad Vesperas omnia dicuntur ut ad I Vesperas dominicæ IV Adventus, <snr>p. '.bkref('Advent4V1').'</s>.', '<snr>¶</s> If the vigil of the Nativity of the Lord comes on a Sunday, the Office is arranged in this method: On the preceding Saturday, Vespers is said as at I Vespers of the fourth Sunday of Advent, <snr>p. '.bkref('Advent4V1').'</s>.');
	rubp('Ad Laudes et ad Horas minores fit Officium festivum de vigilia ut infra, sine commemoratione dominicæ.', 'At Lauds and the Little Hours, the Office of the vigil is used, as below, without commemoration of the Sunday.');
	head_temp(1,'in Vigilia Nativitatis Domini', 'the Vigil of the Nativity of the Lord',1224);

	hour('L');
	ant('prTemp/advent/24.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent/24.php','02222');	
	lc('rom1_1-3.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('PrTemp/crastina_die_delebitur_iniquitas_terrae.php');
	ant('PrTemp/advent/24b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/24.php');
	rubp('Et dicitur per Horas diei.', 'And this prayer is said at all the Hours of the day.');
	space();

	ordref(0,-6,0);

	hour('T');
	lc('rom1_1-3.php');
	brS('PrTemp/hodie_scietis_quia_veniet_dominus.php');
	vrS('PrTemp/constantes_estote.php');
	space();

	hour('S');
	lc('rom1_4.php');
	brS('PrTemp/crastina_die_delebitur_iniquitas_terrae.php');
	vrS('PrTemp/crastina_erit_vobis_salus.php');
	space();

	hour('N');
	lc('rom1_5-6.php');
	brS('PrTemp/crastina_erit_vobis_salus.php');
	vrS('PrTemp/crastina_die_delebitur_iniquitas_terrae.php');
	space();

	rubp('Post Nonam explicit tempus Adventus et incipit tempus natalicium.', 'After None the season of Advent ends, and the season of Christmas begins.');

?>
