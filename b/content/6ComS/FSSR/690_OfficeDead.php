<?php
	$long = $_GET['long'];
	$matins = $_GET['matins'];
	$old = $_GET['old'];
	$htm = $_GET['htm'];

	space();
	img('sanctus.png',100);
	space('RubricH');
	bookmark('offDef');
	head('Officium Defunctorum',
		'Office of the Dead',1,
		'Office of the Dead');

	rubp('Dicitur in choro in die depositionis et aliis diebus pro temporis opportunitate et ecclesiarum consuetudine: Matutinum cum Laudibus post Laudes diei; Vesperæ post Vesperas diei, immediate post versum <snr>Benedicámus Dómino,</s> et <snr>Deo grátias</s>.',
		'This Office is said in choir on the day of burial and at other times when convenient and according to custom. Matins and Lauds are said after Lauds of the day, and Vespers after Vespers of the day, immediately after the versicle: <snr>Benedicámus Dómino,</s> and <snr>Deo grátias</s>.',1);
	rubp('In fine vero omnium psalmorum semper dicitur:', 'At the end of all the psalms, in place of the <snr>Glória Patri</s>, there is always said:',1);
	reading('vr/requiem_aeternam.php',0);
	rubp('Etiam si pro uno tantum fiat Officium.', 'Said in the plural, even when the Office is recited for one only.',1);
	space();

if($matins) {
	hidden('Matins',2);
	hour('M');
	bookmark('offDefM');
	rubp('Absolute incipitur ab Invitatorio.', 'Matins begins immediately with the invitatory.');
	ant('regem_cui_omnia_vivunt_venite_adoremus.php','I');
	ant('regem_cui_omnia_vivunt_venite_adoremus.php','R');
	psalm('94ri.php');
	space();

   rubp('Nocturni enim inferius positi omnes dici possunt vel etiam unus tantum, ita tamen, ut extra diem depositionis, in qua semper dicitur primus Nocturnus: Dominica, Feria II et V dicatur primus, Feria III et VI secundus, <snr>p. '.bkref('offDefMn2').'</s>, et Feria IV et Sabbato tertius Nocturnus, <snr>p. '.bkref('offDefMn3').'</s>.',
	'For the nocturns given below, all three can be said, or one only; in which case however, outside of the day of burial, on which is always said the first Nocturn: Sunday, Monday and Thursday, the first is said; Tuesday and Friday, the second, <snr>p. '.bkref('offDefMn2').'</s>, and Wednesday and Saturday the third Nocturn, <snr>p. '.bkref('offDefMn3').'</s>.');

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
	rubrics('offDef/mLectionesTerminatur.php');
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
	rubrics('offDef/mLectionesTerminatur.php');
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
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000012');
		psref(41,2);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000001');
	} else {
		ant('offDefMatins.php','000000N00');
		psalm(39);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000120');
		psalm(40);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000012');
		psalm(41);
		reading('vr/requiem_aeternam.php',0);
		space('Spacer');
		ant('offDefMatins.php','000000001');
	}
	
	rubrics('offDef/mPortaPater.php');

	lc('job17_1-3_11-15.php',0,'L7d');
	rubrics('offDef/mLectionesTerminatur.php');
	rm('offDef/mr7.php',0,1,1);
	space();

	lc('job19_20-27.php',0,'L8d');
	rm('offDef/mr8.php',0,1,1);
	space();

	lc('job10_18-22.php',0,'L9d');
	space();
	rubp('Sequens Responsorium tunc ponitur, quando dictus fuerit tertius tantum Nocturnus pro Defunctis.','The following Responsory is then used, when only the third Nocturn for the Dead has been said.');
	rm('offDef/mr9n1.php',0,0,1);
	space();
   rubp('Sequens Responsorium ponitur loco præcedentis, quando tres Nocturni dicti fuerint pro Defunctis.','The following Responsory is said in place of the preceding, when three Nocturns for the Dead have been said.');
	rm('offDef/mr9n3.php',0,2,1);
	space();

	rubp('Si Matutinum, cum unico vel tribus Nocturnis, in privata recitatione a Laudibus separetur, post ultimum Responsorium subjungitur:',
		'If Matins, with one or three Nocturns, in private recitation is separated from Lauds, after the final Responsory is said:');
	rubrics('offDef/mConcl.php');
	space();
}

	hidden('Lauds',2);
	hour('L');
	bookmark('offDefL');
	rubp('Absolute incipiuntur ab', 'Begins at once with',1);
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
	canticle('benedictus.php');
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	ant('offDefb.php','1');	
	space();

	bookmark('offDefLpr');
	rubp('Preces infrascriptæ dicuntur flexis genibus:','The following prayers are said kneeling:');
	vr('pater_silent_vr.php');
	
if($old==1) {
	rubp('<snr>¶</s> Sequens Ps. <snr>De profúndis,</s> non dicitur in die obitus seu despositionis defuncti.','<snr>¶</s> The following Ps. <snr>Out of the depths,</s> is not said on the day of death or burial.');
	psalm(129);
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
}

	bookmark('offDefPreces');
	vrS('a_porta_inferi_sing.php');
	vrS('requiescant_in_pace_sing.php');
	vrS('domine_exaudi_orationem_meam.php'); 
	vrS('dominus_vobiscum_non.php'); 
	vr('oremus.php'); 
	bookmark('offDefPrayer');
	if($old==1) {
		prayer('offDef/bishop2.php',0);
		prayer('offDef/brethren2.php',0);
		prayer('offDef/offDef.php');
	} else {
		prayer('offDef/brethren2.php',0);
		prayer('offDef/offDef.php');
	}
	
		space();
		rubp('Post orationem dicitur (semper plurali numero):','After the prayer(s) is said (always in the plural):');
		vrS('requiem_aeternam.php');
		vrS('requiescant_in_pace.php');
		space();

if($htm==1) {
	space();
	hidden('Collects',2);
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
	rubp('Pro Episcopo Cardinali defuncto dicatur: <snr>fámulum tuum</s> N. <snr>Epíscopum Cardinálem pontificáli fecísti dignitáte...</s>', 'For a deceased Cardinal Bishop say instead: <snr>thy servant Cardinal Bishop</s> N. <snr>to the dignity...</s>)',1);
	space();
	rubp('Pro Presbytero Cardinali defuncto dicatur: <snr>fámulum tuum</s> N. <snr>Presbýterum Cardinálem pontificáli fecísti dignitáte...</s>', 'For a deceased Cardinal Priest say instead: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity...</s>)',1);
	space();
	rubp('Pro Presbytero Cardinali, qui episcopali dignitate auctus non fuerit: <snr>fámulum tuum</s> N. <snr>Presbýterum Cardinálem sacerdotáli fecísti dignitáte...</s>', 'For a deceased Cardinal Priest, who has not been raised to the dignity of the episcopate: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();
	rubp('Pro Diacono Cardinali: <snr>fámulum tuum</s> N. <snr>Diáconum Cardinálem sacerdotáli fecísti dignitáte...</s>', 'For a deceased Cardinal Deacon: <snr>thy servant Cardinal Priest</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();
	rubp('Pro defuncto Sacerdote: <snr>fámulum tuum</s> N. <snr>sacerdotáli fecísti dignitáte...</s>', 'For a deceased Priest: <snr>thy servant</s> N. <snr>to the dignity of the priesthood;...</s>)',1);
	space();

	head('Item alia oratio','Or',-4);
	prayer('offDef/priest2.php');
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
	rubp('Si Officium fit pro pluribus, dicatur: <snr>animábus paréntum nostrórum</s>, et ubi dícitur <snr>meque</s>, dicátur <snr>nosque</s>.', 'If the Office is for several parents, say: <snr>the souls of our parents</s>, and in place of <snr>me</s>, say <snr>us</s>.',1);
	space();
	rubp('Si pro patre tantum, dicatur: <snr>ánimæ patris mei</s>, vel <snr>nostri</s>.', 'If for a father only, say: <snr>the soul of my father</s>, or <snr>our father</s>.',1);
	space();
	rubp('Si pro matre tantum, dicatur: <snr>ánimæ matris meæ</s>, vel <snr>nostræ</s>.', 'If for a mother only, say: <snr>the soul of my mother</s>, or <snr>our mother</s>.',1);
	space();

	head('In Officio pro defunctis in genere',
		'In the Office for the dead in general',-4);
	if($old==1) {
		prayer('offDef/bishop2.php');
		prayer('offDef/brethren2.php');
	}
	prayer('offDef/offDef.php');

	space();
	bookmark('offDefConcl');
	rubp('Post orationem dicitur (semper plurali numero):','After the prayer(s) is said (always in the plural):');
	vrS('requiem_aeternam.php');
	vrS('requiescant_in_pace.php');
	space();
}

	hidden('Vespers',2);
	hour('V');
	bookmark('offDefV');
	rubp('Absolute incipiuntur ab', 'Begins at once with',1);
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

	rubp('Preces infrascriptæ dicuntur flexis genibus:','The following prayers are said kneeling:');
	vr('pater_silent_vr.php');
if($old==1) {
	rubp('<snr>¶</s> Sequens Ps. <snr>Lauda, ánima mea,</s> non dicitur in die obitus seu despositionis defuncti.','<snr>¶</s> The following Ps. <snr>Praise the Lord, O my soul,</s> is not said on the day of death or burial.');
	psalm(145);
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
}

	if($long==0) {
		rubp('Preces, <snr>A porta ínferi</s>, cum reliquis, ut ad Laudes, p. <snr>'.bkref('offDefPreces').'</s>.','Prayers, <snr>From the gates of hell</s>, with the rest, as in Lauds, p. <snr>'.bkref('offDefPreces').'</s>.');
	} else {
		bookmark('offDefPreces');
		vrS('a_porta_inferi_sing.php');
		vrS('requiescant_in_pace_sing.php');
		vrS('domine_exaudi_orationem_meam.php'); 
		vrS('dominus_vobiscum_non.php'); 
		vr('oremus.php'); 
		//rubp('Dicitur oratio conveniens ex iis, p. <snr>'.bkref('offDefPrayer').'</s>; deinde versus <snr>Réquiem ætérnam,</s> cum reliquis, ut infra.','Then the proper Prayer(s) are said, p. <snr>'.bkref('offDefPrayer').'</s>; then the verse <snr>Eternal rest,</s> with the rest, as below.');
		if($old==1) {
		prayer('offDef/bishop2.php',0);
		prayer('offDef/brethren2.php',0);
		prayer('offDef/offDef.php',0);
		} else {
			prayer('offDef/brethren2.php',0);
			prayer('offDef/offDef.php');
		}

		space();
		rubp('Post orationem dicitur (semper plurali numero):','After the prayer(s) is said (always in the plural):');
		vrS('requiem_aeternam.php');
		vrS('requiescant_in_pace.php');
		space();
	}


?>
