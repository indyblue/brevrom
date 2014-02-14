<?php 
	space();
	hidden('Easter',1);
	hidden('Fifth Sunday',2);
	head_temp(2,'Dominica V post Pascha', 'Fifth Sunday after Easter');

	hour('1V');
	rubrics('ps/SaV-A.php');	
	lc('jas1_22-24.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	ant('PrTemp/easter/50b.php','M');
	space();

	hour('L');
	rubrics('ps/SuL1-A.php');	
	lc('jas1_22-24.php');
	hymn('aurora_caelum_purpurat.php',1);
	vrS('PrTemp/in_resurrectione_tua_christe.php',1);
	ant('PrTemp/easter/50b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/easter/50.php');
	space();

	hour('T');
	lc('jas1_22-24.php');
	brS('PrTemp/surrexit_dominus_de_sepulcro.php',1);
	vrS('PrTemp/surrexit_dominus_vere.php',1);
	space();

	hour('S');
	lc('jas1_25.php');
	brS('PrTemp/surrexit_dominus_vere.php',1);
	vrS('PrTemp/gavisi_sunt_discipuli.php',1);
	space();

	hour('N');
	lc('jas1_27.php');
	brS('PrTemp/gavisi_sunt_discipuli.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	space();

	hour('2V');
	rubrics('ps/SuV-A.php');
	lc('jas1_22-24.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	ant('PrTemp/easter/50m2.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/easter/50.php');
	space();

/*
	feria(2,4);
	ant('PrTemp/easter/42b.php','B');
	ant('PrTemp/easter/42m.php','M');
	space();

	feria(3,4);
	ant('PrTemp/easter/43b.php','B');
	ant('PrTemp/easter/43m.php','M');
	space();

	feria(4,4);
	ant('PrTemp/easter/44b.php','B');
	ant('PrTemp/easter/44m.php','M');
	space();

	feria(5,4);
	ant('PrTemp/easter/45b.php','B');
	ant('PrTemp/easter/45m.php','M');
	space();

	feria(6,4);
	ant('PrTemp/easter/46b.php','B');
	ant('PrTemp/easter/40m2.php','M');
	space();

	feria(7,4);
	rubrics('de_officio_festi_vel_bvm_sat.php');
 
*/
?>

