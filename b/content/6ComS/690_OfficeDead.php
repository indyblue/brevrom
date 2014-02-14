<?php
	$long = $_GET['long'];
	space('PgB');
	space();
	img('sanctus.tif',100);
	space('RubricH');
	bookmark('offDef');
	head('Officium Defunctorum',
		'Office of the Dead',1,
		'Office of the Dead');

	rubp('Dicitur in choro in die depositionis et aliis diebus pro temporis opportunitate et ecclesiarum consuetudine: Matutinum cum Laudibus post Laudes diei; Vesperæ post Vesperas diei, immediate post versum <snr>Benedicámus Dómino,</s> et <snr>Deo grátias</s>.',
		'This Office is said in choir on the day of burial and at other times when convenient and according to custom. Matins and Lauds are said after Lauds of the day, and Vespers after Vespers of the day, immediately after the versicle: <snr>Benedicámus Dómino,</s> and <snr>Deo grátias</s>.',1);
	rubp('In fine vero omnium psalmorum semper dicitur:',
		'At the end of all the psalms, in place of the <snr>Glória Patri</s>, there is always said:',1);
	reading('vr/requiem_aeternam.php',0);
	rubp('Etiam si pro uno tantum fiat Officium.',
		'Said in the plural, even when the Office is recited for one only.',1);
	space();

	hour('M');
	hidden('Matins',2);
	bookmark('offDefM');
	rubp('',
		'Matins begins immediatly with the invitatory.');
	ant('regem_cui_omnia_vivunt_venite_adoremus.php','I');
	if($long==0) {
		rubrics('asIn.php','Ps94','Ordinary of Matins','The invitatory is said with Psalm 94,'); 
		rubp('','But in place of the <snr>Glória Patri</s> at the end of the psalm is said:');
		reading('vr/requiem_aeternam.php',0);
	} else
		psalm('94r.php');
	space();

   rubp('','If only one Nocturn is said: On the day of burial, the First Nocturn is always said. Otherwise, the Nocturn is selected by day of week:');
	rubp('','Sun., Mon. &amp; Thurs.:<snr> First Nocturn, as follows.</s>');
	rubp('','Tue. &amp; Fri.:<snr> Second Nocturn, p. '.bkref('offDefMn2').'</s>');
	rubp('','Wed. &amp; Sat.:<snr> Third Nocturn, p. '.bkref('offDefMn3').'</s>');

	bookmark('offDefMn1');
	space();
	ant('offDefMatins.php','N00000000');
	if($long==0) {
		psref(5);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','120000000');
		psref(6);
		space('Spacer');
		ant('offDefMatins.php','012000000');
		psref(7,2);
		space('Spacer');
		ant('offDefMatins.php','001000000');
	} else {
		psalm(5);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','120000000');
		psalm(6);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','012000000');
		psalm(7);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','001000000');
	}
		
	rubrics('offDef/mPortaPater.php');

	lc('job7_16-21.php',0,'L1d');
	rubrics('offDef/mNoTuAutem.php');
	rm('offDef/mr1.php',0,1,1);
	space();

	lc('job10_1-7.php',0,'L2d');
	rm('offDef/mr2.php',0,1,1);
	space();

	lc('job10_8-12.php',0,'L3d');
	rm('offDef/mr3.php',0,0,1);
	rubrics('offDef/m1noctLauds.php');
	space();


	bookmark('offDefMn2');
	ant('offDefMatins.php','000N00000');
	if($long==0) {
		psref(22);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000120000');
		psref(24,3);
		space('Spacer');
		ant('offDefMatins.php','000012000');
		psref(26,2);
		space('Spacer');
		ant('offDefMatins.php','000001000');
	} else {
		psalm(22);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000120000');
		psalm(24);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000012000');
		psalm(26);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000001000');
	}

	rubrics('offDef/mPortaPater.php');

	lc('job13_22-28.php',0,'L4d');
	rubrics('offDef/mNoTuAutem.php');
	rm('offDef/mr4.php',0,1,1);
	space();

	lc('job14_1-6.php',0,'L5d');
	rm('offDef/mr5.php',0,1,1);
	space();

	lc('job14_13-16.php',0,'L6d');
	rm('offDef/mr6.php',0,0,1);
	rubrics('offDef/m1noctLauds.php');
	space();


	bookmark('offDefMn3');
	if($long==0) {
		ant('offDefMatins.php','000000N00');
		psref(39,3);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000120');
		psref(40);
		space('Spacer');
		ant('offDefMatins.php','000000012');
		psref(41,2);
		space('Spacer');
		ant('offDefMatins.php','000000001');
	} else {
		ant('offDefMatins.php','000000N00');
		psalm(39);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000120');
		psalm(40);
		space('Spacer');
		ant('offDefMatins.php','000000012');
		psalm(41);
		space('Spacer');
		ant('offDefMatins.php','000000001');
	}
	
	rubrics('offDef/mPortaPater.php');

	lc('job17_1-3_11-15.php',0,'L7d');
	rubrics('offDef/mNoTuAutem.php');
	rm('offDef/mr7.php',0,1,1);
	space();

	lc('job19_20-27.php',0,'L8d');
	rm('offDef/mr8.php',0,1,1);
	space();

	lc('job10_18-22.php',0,'L9d');
	space();
	rubp('','The following Respond is said when the Third Nocturn only is said:');
	rm('offDef/mr9n1.php',0,0,1);
	space();
   rubp('','The following Respond is said when all three Nocturns have been said:');
	rm('offDef/mr9n3.php',0,2,1);
	space();

	rubp('','If Lauds is not said at all, the Prayers are said, as at Lauds <snr>p. '.bkref('offDefLpr').'</s>');
	rubp('','If Matins is separated from Lauds, the following is added after the last Responsory:');
	rubrics('offDef/mConcl.php');


	hour('L');
	hidden('Lauds',2);
	bookmark('offDefL');
	rubp('Absolute incipiuntur ab',
		'Begins at once with',1);
	ant('offDefL.php','20000');
	psalm('050.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefL.php','12000');
	psalm('064.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefL.php','01200');
	psalm('062.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefL.php','00120');
	canticle('ezechiel.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefL.php','00012');
	psalm('150.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefL.php','00001');
	space();

	vrS('audivi_vocem_de_caelo_dicentem_mihi.php');

	space();
	ant('offDefb.php','B');	
	if($long==0) {
		rubp('Canticum <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>', 'The Canticle <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>',1);
		rubp('In fine dicitur <snr>Réquiem ætérnam</s>, deinde repetitur antiphona.', 'At the end, in place of the <snr>Glória Patri</s>, is said <snr>Réquiem ætérnam</s>, then the antiphon is repeated.',1);
		reading('vr/requiem_aeternam.php',0);
	} else {
		canticle('benedictus.php');
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefb.php','1');	
	}
	space();

	bookmark('offDefLpr');
	rubrics('offDef/preces_concl.php');

	head('De orationes','The Collects',-2);
	bookmark('offDefPrayer');
	rubp('','In the following prayers, masculine variations are denoted by “m.”; feminine variations by “f.”; plural variations by “pl.”');
	head('In die depositionis defuncti',
		'On the day of the burial:',-4);
	prayer('offDef/burial1.php');
	head('Vel alia oratio','Or',-4);
	prayer('offDef/burial2.php');
	space();
	head('In die tertio, septimo et trigesimo depositionis defuncti',
		'On the third, seventh and thirtieth day after the burial',-4);
	prayer('offDef/3_7_30.php');
	space();
	head('In Anniversario','On the anniversary',-4);
	prayer('offDef/anniv.php');
	space();
	head('Pro defuncto Summo Pontifice','For a deceased Pope',-4);
	prayer('offDef/pope.php');
	space();
	head('Pro defuncto Episcopo','For a deceased Bishop',-4);
	prayer('offDef/bishop.php');
	space();
	rubp('Pro Episcopo Cardinali defuncto dicatur: <snr>fámulum tuum</s> N. <snr>Epíscopum Cardinálem pontificáli fecísti dignitáte...</s>',
		'For a deceased Cardinal Bishop say instead: <snr>thy servant Cardinal Bishop</s> N. <snr>to the dignity...</s>)',1);
	space();
	rubp('Pro Presbytero Cardinali defuncto dicatur: <snr>fámulum tuum</s> N. <snr>Presbýterum Cardinálem pontificáli fecísti dignitáte...</s>',
		'For a deceased Cardinal Priest say instead: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity...</s>)',1);
	space();
	rubp('Pro Presbytero Cardinali, qui episcopali dignitate auctus non fuerit: <snr>fámulum tuum</s> N. <snr>Presbýterum Cardinálem sacerdotáli fecísti dignitáte...</s>',
		'For a deceased Cardinal Priest, who has not been raised to the dignity of the episcopate: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();
	rubp('Pro Diacono Cardinali: <snr>fámulum tuum</s> N. <snr>Diáconum Cardinálem sacerdotáli fecísti dignitáte...</s>',
		'For a deceased Cardinal Deacon: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();
	rubp('Pro defuncto Sacerdote: <snr>fámulum tuum</s> N. <snr>sacerdotáli fecísti dignitáte...</s>',
		'For a deceased Priest: <snr>thy servant</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();

	head('Item alia oratio','Or',-4);
	prayer('offDef/Priest2.php');
	space();

	head('Pro uno defuncto','For a deceased man',-4);
	prayer('offDef/man.php');
	space();

	head('Pro una defuncta','For a deceased woman',-4);
	prayer('offDef/woman.php');
	space();

	head('Pro defunctis fratribus, propinquis et benefactoribus',
		'For deceased brethren, relatives, and benefactors',-4);
	prayer('offDef/brethren.php');
	space();

	head('Pro patre et matre','For father and mother',-4);
	prayer('offDef/parents2.php');
	space();
	rubp('Si Officium fit pro pluribus, dicatur: <snr>animábus paréntum nostrórum</s>, et ubi dícitur <snr>meque</s>, dicátur <snr>nosque</s>.',
		'If the Office is for several parents, say: <snr>the souls of our parents</s>, and in place of <snr>me</s>, say <snr>us</s>.',1);
	space();
	rubp('Si pro patre tantum, say: <snr>ánimæ patris mei</s>, vel <snr>nostri</s>.',
		'If for a father only, say: <snr>the soul of my father</s>, or <snr>our father</s>.',1);
	space();
	rubp('Si pro matre tantum, say: <snr>ánimæ matris meæ</s>, vel <snr>nostræ</s>.',
		'If for a mother only, say: <snr>the soul of my mother</s>, or <snr>our mother</s>.',1);
	space();

	head('In Officio pro defunctis in genere',
		'In the Office for the dead in general',-4);
	prayer('offDef/offDef.php');
	space();

	hour('V');
	hidden('Vespers',2);
	bookmark('offDefV');
	rubp('Absolute incipiuntur ab',
		'Begins at once with',1);
	ant('offDefV.php','20000');
	psalm('114.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefV.php','12000');
	psalm('119.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefV.php','01200');
	psalm('120.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefV.php','00120');
	psalm('129.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefV.php','00012');
	psalm('137.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefV.php','00001');
	space();

	vrS('audivi_vocem_de_caelo_dicentem_mihi.php');

	space();
	ant('offDefm.php','M');
	if($long==0) {
		rubp('Canticum <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>', 'The Canticle <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>',1);
		rubp('In fine dicitur <snr>Réquiem ætérnam</s>, deinde repetitur antiphona.', 'At the end, in place of the <snr>Glória Patri</s>, is said <snr>Réquiem ætérnam</s>, then the antiphon is repeated.',1);
		reading('vr/requiem_aeternam.php',0);
	} else {
		canticle('magnificat.php');
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefm.php','1');
	}
	space();
	rubrics('offDef/preces_concl.php');
	img();
?>
