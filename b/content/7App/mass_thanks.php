<?php
	global $kindle;
	$h = $kindle == 1 ? 2 : 1;

	space();
	hidden('Thanksgiving after Mass',2);
	head('Gratiarum actio post Missam','Act of Thanksgiving after Mass',$h);

	ant('trium_puerorum_cantemus.php','*',2);
	canticle('threechildren.php');
	psalm(150);
	reading('vr/gloria_patri-s.php',0);
	ant('trium_puerorum_cantemus.php','1',2);
	space();

	reading('vr/kyrie.php',0);
	vr('pater_silent_vr.php');
	vrS('confiteantur_tibi_domine.php');
	vrS('exultabunt_sancti_in_gloria.php');
	vrS('non_nobis_domine.php');
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('App/mass_thanks1.php');
	prayer('App/mass_thanks2.php');
	prayer('App/mass_thanks3.php',1);

	space();

	hidden('Thanksgiving after Mass',2);

	//head('Piæ Adspirationes','Pious Aspirations',4);
	//prayer('App/anima_christi.php');
	canticle('vr/anima_christi.php');

	space();
	if($kindle) {
		head('Oratio ad D.N.J.C. Crucifixum','Prayer before Christ Crucified',2);
		echo '<img style="float: left; margin: 0 0.5em 0 0; width: 10em;" src="/b/Images/crucifix.png">';
		prayer('App/mass_thanks_crucifix.php');
	} else {
		img('crucifix.png',40);
		head('Oratio ad D.N.J.C. Crucifixum','Prayer before Christ Crucified',4);
		prayer('App/mass_thanks_crucifix.php');
	}

	space();
	head('Oratio sancti Thomæ Aquinatis','Prayer of Saint Thomas Aquinas',$kindle == 1 ? 2 : 4);
	prayer('App/mass_thanks_thomas.php');

	space();
	head('Rhythmus S. Thomæ Aquinatis','Rhyme of St. Thomas Aquinas',4);
	hymn('adoro_te_devote.php');
?>

