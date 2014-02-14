<?php
	space();
	hidden('Pentecost',1);
	hidden('Sunday',2);
	img('Tempore/t06_pentecost.png',100); 
	head_temp(181,'Dominica Pentecostes', 'Pentecost Sunday');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('acts2_1-2.php');
	hymn('veni_creator_spiritus.php',1);
	vrS('PrTemp/repleti_sunt_omnes_spiritu_sancto.php',1);
	ant('prTemp/pentecost/00m1.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/pentecost/00L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prTemp/pentecost/00L.php','02222');
	lc('acts2_1-2.php');
	rubrics('head/HymnVerse.php');
	hymn('beata_nobis_gaudia.php',0);
	vrS('PrTemp/repleti_sunt_omnes_spiritu_sancto.php',1);
	ant('prTemp/pentecost/00b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/00.php');
	space();

	hour('P');
	ant('prTemp/pentecost/00L.php','*0000');
	rubp('Psalmi ut in festis, <snr>p. '. bkref('psDP53') .'</s>.', 'Psalms as on feasts, <snr>p. '. bkref('psDP53') .'</s>.');
	PrV('qui_sedes_ad_dexteram_patris.php',2,
		array('. Lectio br. <snr>Judǽi quoque</s>, ut in Psalterio.', '. Brief lesson <snr>Jews also</s>, as in the Psalter.'));
	space();

	hour('T');
	hymn('veni_creator_spiritus.php',1);
	ant('prTemp/pentecost/00L.php','0*000');
	lc('acts2_1-2.php');
	brS('PrTemp/spiritus_domini_replevit_orbem_terrarum.php',1);
	vrS('PrTemp/spiritus_paraclitus.php',1);
	space();

	hour('S');
	ant('prTemp/pentecost/00L.php','00*00');
	lc('acts2_6.php');
	brS('PrTemp/spiritus_paraclitus.php',1);
	vrS('PrTemp/repleti_sunt_omnes_spiritu_sancto.php',1);
	space();

	hour('N');
	ant('prTemp/pentecost/00L.php','0000*');
	lc('acts2_11.php');
	brS('PrTemp/repleti_sunt_omnes_spiritu_sancto.php',1);
	vrS('PrTemp/loquebantur_variis_linguis_apostoli.php',1);
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('acts2_1-2.php');
	rubrics('head/HymnVerse.php');
	hymn('veni_creator_spiritus.php',0);
	vrS('PrTemp/repleti_sunt_omnes_spiritu_sancto.php',1);
	ant('prTemp/pentecost/00m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/00.php');
	rubrics('prSanct/ComplineSun.php');
	space();

	rubp('Infra Octavam omnia dicuntur ut in festo, præter ea quæ singulis diebus assignantur propria.', 'Within the Octave all is said as on the feast, except that which is assigned as proper for that day.');
	space();

	feria(2,41);
	ant('prTemp/pentecost/02b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/02.php');
	ant('prTemp/pentecost/02m.php','M');
	space();

	feria(3,41);
	ant('prTemp/pentecost/03b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/03.php');
	ant('prTemp/pentecost/03m.php','M');
	space();

	feria(4,41);
	ant('prTemp/pentecost/04b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/04.php');
	ant('prTemp/pentecost/04m.php','M');
	space();

	feria(5,41);
	ant('prTemp/pentecost/05b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/00.php');
	ant('prTemp/pentecost/05m.php','M');
	space();

	feria(6,41);
	ant('prTemp/pentecost/06b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/06.php');
	ant('prTemp/pentecost/06m.php','M');
	space();

	feria(7,41);
	ant('prTemp/pentecost/07b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/pentecost/07.php');
	space();
	rubp('Post Nonam terminatur Officium proprium de octava, et explicit tempus paschale.', 'After None the Office proper to the octave is terminated, and Paschaltide ends.');
	rubp('Vesperæ de seq. festo sanctissime Trinitatis ut infra, sine commemoratione dominicæ I post Pentecosten.', 'Vespers is of the following feast of the most holy Trinity, as below, with no commemoration of the first Sunday after Pentecost.');

?>

