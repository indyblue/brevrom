<?php
	$long = $_GET['long'];

	hidden('Penitential Psalms',2);
	head('Septem Psalmi Pœnitentiales','Seven Penitential Psalms',1);
	head('cum Litaniis Sanctorum ac suis Precibus','with the Litany of the Saints and its Prayers',14);
	space();
	rubp('Sicubi recitentur in choro, congrue dicuntur post Matutinum et Laudes diei flexis genibus, dicto <snr>Benedicámus Dómino</s> et <snr>Deo grátias</s>; extra chorum pro temporis opportunitate.',
		'Whenever recited in choir, they are said kneeling, after Matins and Lauds of the day, after <snr>Benedicámus Dómino</s> and <snr>Deo grátias</s> is said. Out of choir, it is said at any convenient time.');
	rubp('Litaniæ Sanctorum, sine psalmis pœnitentialibus, sed cum suis precibus, dicendæ sunt in Litaniis majoribus et minoribus, juxta proprias rubricas, nec duplicantur, nec anticipari possunt de sero.', 'The Litany of Saints, without the penitential psalms, but with its prayers, is said in the greater and lesser Litanies, according to the appropriate rubrics.  They are not duplicated, nor are they anticipated the previous evening.');
	space();
	ant('ne_reminiscaris.php','*',2);
	if($long==0) {
		psref(6);
		rubp('Et in fine cujuslibet psalmi dicitur <snr>Glória Patri</s>.', 'And in conclusion of each psalm is said <snr>Glória Patri</s>.');
		psref(31);
		if($_GET['matins']) psref(37,2);
		else psalm(37);
		psref(50);
		psref(101,3);
		psref(129);
		psref(142);
	} else {
		psalm(6);
		reading('vr/gloria_patri-s.php',0);
		psalm(31);
		reading('vr/gloria_patri-s.php',0);
		psalm(37);
		reading('vr/gloria_patri-s.php',0);
		psalm(50);
		reading('vr/gloria_patri-s.php',0);
		psalm(101);
		reading('vr/gloria_patri-s.php',0);
		psalm(129);
		reading('vr/gloria_patri-s.php',0);
		psalm(142);
		reading('vr/gloria_patri-s.php',0);
	}
	ant('ne_reminiscaris.php','1',2);
	space();
	img();
	space();

	hidden('Litany of the Saints',2);
	head('Litaniæ Sanctorum cum suis Precibus','Litany of the Saints with its Prayers',1);
	reading('vr/litany_saints.php',1,10);
	vr('pater_silent_vr.php');
	space();
	psalm('069.php');
	space();
	
	vrS('litany/salvos_fac_servos_tuos.php');
	vrS('litany/esto_nobis_domine_turris_fortitudinis.php');
	vrS('litany/nihil_proficiat_inimicus_in_nobis.php');
	vrS('litany/domine_non_secundum_peccata_nostra_facias_nobis.php');
	vrS('litany/oremus_pro_pontifice.php');
	rubp('<snr>¶</s> Vacante Apostolica versus cum suo responsorio omittuntur.', '<snr>¶</s> If the Apostolic See is vacant, this verse and its response are omitted.');
	vrS('preces/oremus_benefactoribus_nostris.php');
	vrS('preces/oremus_fidelibus_defunctis.php');
	vrS('requiescant_in_pace.php');
	vrS('preces/fratribus_absentibus.php');
	vrS('preces/mitte_eis.php');
	vrS('domine_exaudi_orationem_meam.php');
	rubp('In recitatione in choro vel in communi:', 'In recitation in choir or in common:',1);
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	prayer('App/litany01.php');
	prayer('App/litany02.php');
	prayer('App/litany03.php');
	prayer('App/litany04.php');
	rubp('¶ Vacante Apostolica Sede, oratio sequens omittitur.', '¶ If the Apostolic See is vacant, the next prayer is omitted.');
	prayer('App/litany05.php');
	prayer('App/litany06.php');
	prayer('App/litany07.php');
	prayer('App/litany08.php');
	prayer('App/litany09.php');
	prayer('App/litany10.php',1);
	vr('dv_de.php');
	vrS('litany/exaudiat_nos_omnipotens.php');
	vrS('litany/et_fidelium_animae.php');

?>
