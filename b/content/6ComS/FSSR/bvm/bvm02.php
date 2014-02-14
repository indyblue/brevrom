<?php
	hidden('II. Advent',2);
	
	space();
	bvm_head(2);
	rubp('Quod dicitur a I Vesperis dominicæ I Adventus usque ad Nonam vigiliæ Nativitatis Domini inclusive, et in festo Annuntiationis.', 'Which is said from I Vespers of the first Sunday of Advent until None of the vigil of the Nativity of the Lord inclusive, and on the feast of the Annuntiation.');
	include('omnia_dicuntur.php');
	space();

	hour('M');
	ant('opBVMm.php','00000000-2');
	space();
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	vr('pater_silent_vr.php');

	space();
	head('Absolutio.','The Absolution',-4);
	reading('bvm/precibus.php',0,10);
	vr('jube_domine.php');
	reading('bvm/nos_cum_prole.php',0,10);
	lc('luke1_26-28.php',0,'L1');
	rm('BVMp/mra1.php',0,1);
	space();

	vr('jube_domine.php');
	reading('bvm/ipsa_virgo.php',0,10);
	lc('luke1_29-33.php',0,'L2');
	rm('BVMp/mra2.php',0,1);
	space();

	vr('jube_domine.php');
	reading('bvm/per_virginem_matrem.php',0,10);
	lc('luke1_34-38.php',0,'L3');
	rm('BVMp/mra3.php',0,0);
	space();

	hour('L');
	ant('prSanct/0325L.php','22222');
	lc('is11_1-2.php');
	ant('spiritus_sanctus_in_te_descendet.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0325.php');
	rubp('Quæ oratio dicitur ad omnes Horas.', 'Which prayer is said at all the Hours.');
	space();

	hour('P');
	ant('prSanct/0325L.php','*0000');
	lc('is7_14-15.php');
	vrS('dignare_me_laudare_te_virgo_sacrata.php');
	space();
	
	hour('T');
	ant('prSanct/0325L.php','0*000');
	lc('is11_1-2.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();

	hour('S');
	ant('prSanct/0325L.php','00*00');
	lc('luke1_32-33.php');
	vrS('benedicta_tu_in_mulieribus.php');
	space();


	hour('N');
	ant('prSanct/0325L.php','0000*');
	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	space();

	hour('V');
	rubrics('ps/ant+lc_Lauds.php');
	ant('spiritus_sanctus_in_te_descendet.php','M');
	space();

	hour('C');
	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	ant('spiritus_sanctus_in_te_descendet.php','C');
	space();

?>
