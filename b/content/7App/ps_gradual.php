<?php
	$long = $_GET['long'];
	global $kindle;
	$h = $kindle == 1 ? 2 : 1;
	space();
	hidden('Gradual Psalms',2);
	head('Psalmi Graduales','Gradual Psalms',$h);
	rubp('Sicubi recitentur in choro, congrue dicuntur ante Matutinum diei; extra chorum vero pro temporis opportunitate.',
		'Whenever they are recited in choir, they are said before Matins of the day; outside of choir they may be said at any opportune time.');
	rubp('Primi quinque psalmi dicuntur sine <snr>Gloria Pátri</s>; sed in fine ultimi dicitur <snr>Réquiem ætérnam</s>.',
		'The first five psalms are said without <snr>Gloria Pátri</s>; but in conclusion of the final psalm, <snr>Réquiem ætérnam</s> is said.');
	rubp('Incipiuntur absolute sine antiphona.', 'They are begun immediately without antiphon.');

	if($long==0) {
		psref(119);
		psref(120);
		psref(121);
		psref(122);
		psref(123);
		reading('vr/requiem_aeternam.php',0);
	} else {
		psalm(119);
		psalm(120);
		psalm(121);
		psalm(122);
		psalm(123);
		reading('vr/requiem_aeternam.php',0);
	}
	space();
	rubp('Deinde dicitur flexis genibus:','Then is said kneeling:');
	vr('pater_silent_vr.php');
	vrS('a_porta_inferi.php');
	vrS('requiescant_in_pace.php');
	vrS('domine_exaudi_orationem_meam.php');
	rubp('In recitatione in choro vel in communi:', 'In recitation in choir or in common:',1);
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	prayer('App/gradual01.php');
	space();

	rubp('Post orationem statim dicuntur alii psalmi graduales qui sequuntur; et in fine cujuslibet psalmi dicitur <snr>Gloria Pátri</s>.',
		'After the prayer are said the gradual psalms which follow; and at the end of each psalm is said <snr>Gloria Pátri</s>.');
	if($long==0) {
		psref(124);
		psref(125);
		psref(126);
		psref(127);
		psref(128);
	} else {
		psalm(124);
		reading('vr/gloria_patri-s.php',0);
		psalm(125);
		reading('vr/gloria_patri-s.php',0);
		psalm(126);
		reading('vr/gloria_patri-s.php',0);
		psalm(127);
		reading('vr/gloria_patri-s.php',0);
		psalm(128);
		reading('vr/gloria_patri-s.php',0);
	}
	space();
	rubp('Postea dicitur flexis genibus:','After which is said kneeling:');
	reading('vr/kyrie.php',0);
	vr('pater_silent_vr.php');
	vrS('preces/memento_congregationis.php');
	vrS('domine_exaudi_orationem_meam.php');
	rubp('In recitatione in choro vel in communi:', 'In recitation in choir or in common:',1);
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	prayer('App/gradual02.php');
	space();

	rubp('Post orationem statim dicuntur alii psalmi graduales qui sequuntur; et in fine cujuslibet psalmi dicitur <snr>Gloria Pátri</s>.',
		'After the prayer are said the gradual psalms which follow; and at the end of each psalm is said <snr>Gloria Pátri</s>.');
	if($long==0) {
		psref(129);
		psref(130);
		psref(131);
		psref(132);
		psref(133);
	} else {
		psalm(129);
		reading('vr/gloria_patri-s.php',0);
		psalm(130);
		reading('vr/gloria_patri-s.php',0);
		psalm(131);
		reading('vr/gloria_patri-s.php',0);
		psalm(132);
		reading('vr/gloria_patri-s.php',0);
		psalm(133);
		reading('vr/gloria_patri-s.php',0);
	}
	space();
	rubp('Postea dicitur flexis genibus:','After which is said kneeling:');
	reading('vr/kyrie.php',0);
	vr('pater_silent_vr.php');
	vrS('litany/salvos_fac_servos_tuos.php');
	vrS('domine_exaudi_orationem_meam.php');
	rubp('In recitatione in choro vel in communi:', 'In recitation in choir or in common:',1);
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	prayer('App/gradual03.php');

?>
