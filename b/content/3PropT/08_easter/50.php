<?php 
	space();
	hidden('Easter',1);
	hidden('Fifth Sunday',2);
	head_temp(2,'Dominica V post Pascha', 'Fifth Sunday after Easter');

	hour('1V');
	rubrics('ps/SaV-A.php');	
	lc('jas1_22-24.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('prTemp/mane_nobiscum_domine.php',1);
	ant('prTemp/easter/50b.php','M');
	space();

	hour('L');
	rubrics('ps/SuL1-A.php');	
	lc('jas1_22-24.php');
	hymn('aurora_caelum_purpurat.php',1);
	vrS('prTemp/in_resurrectione_tua_christe.php',1);
	ant('prTemp/easter/50b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/50.php');
	space();

	hour('T');
	lc('jas1_22-24.php');
	brS('prTemp/surrexit_dominus_de_sepulcro.php',1);
	vrS('prTemp/surrexit_dominus_vere.php',1);
	space();

	hour('S');
	lc('jas1_25.php');
	brS('prTemp/surrexit_dominus_vere.php',1);
	vrS('prTemp/gavisi_sunt_discipuli.php',1);
	space();

	hour('N');
	lc('jas1_27.php');
	brS('prTemp/gavisi_sunt_discipuli.php',1);
	vrS('prTemp/mane_nobiscum_domine.php',1);
	space();

	hour('2V');
	rubrics('ps/SuV-A.php');
	lc('jas1_22-24.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('prTemp/mane_nobiscum_domine.php',1);
	ant('prTemp/easter/50m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/50.php');
	space();

	head('in Litaniis Minoribus','the Minor Litanies',2);
	rubp('Litaniæ minores seu Rogationes per se assignantur feriis II, III et IV ante festum Ascensionis Domini.', 'The minor Litanies or Rogations in themelves are assigned to Monday, Tuesday and Wednesday before the Ascension of the Lord.');
	rubp('Ordinariis autem locorum facultas tribuitur eas transferendi ad alios tres dies continuos magis opportunos juxta regionum diversitatem aut consuetudinem aut necessitatem.', 'But the local Ordinary is given the faculty to transfer them to three other contiguous days which are more opportune, according to the custom or need of various regions.');
	rubp('De Litaniis minoribus nihil fit in Officio.', 'The minor Litanies are never said in the Office.');
	rubp('Obligatio recitandi Litanias Sanctorum cum suis precibus, his diebus, urget tantum in processione aut aliis perculiaribus supplicationibus. Proinde, qui ad recitationem divinii Officii obligantur, procesioni vero aut aliis peculiaribus supplicationibus non intersunt, non tenentur dicere, his diebus, Litanias Sanctorum cum suis precibus.', 'The obligation to recite the Litany of the Saints with its prayers, on these days, applies only in procession or other peculiar supplications. Hence, whoever is obliged to recite the Divine Office, if they are not present for the procession or other peculiar supplications, is not required to say, on these days, the Litany of the Saints with his prayers.');
	space();

	feria(2,54);
	ant('prTemp/easter/52b.php','B');
	ant('prTemp/easter/52m.php','M');
	space();

	feria(3,54);
	ant('prTemp/easter/53b.php','B');
	ant('prTemp/easter/53m.php','M');
	space();

	feria(4,52,4);
	vrS('prTemp/in_resurrectione_tua_christe.php',1,'L');
	ant('prTemp/easter/54b.php','B');
	rubp('Post Nonam explicit tempus Paschatis, et incipit tempus Ascensionis.', 'After None the season of Easter ends, and the season of Ascensiontide begins.');
 
?>

