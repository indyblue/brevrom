<?php

	space();
	// img();
	feast_saint(1111,13,'Sancti Martini','Saint Martin','EC');

$matinsl = $_GET['matins-l'];
if($matinsl) {
	hour('M');
	require '1111m.php';
	space();
}

	hour('L');
	ant('prSanct/1111L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/1111L.php','02222');
	lc('ecclus44_16.php','csCBLlc','h','jesu_redemptor_omnium_perpes.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php');
	ant('prSanct/1111b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/1111.php');
	feast_saint(1111,-1,'S. Mennæ','St. Mennas','M',array('csMartyr1.php','Mennæ','Mennas'));
	space();

	csref('csCB',2,2);
	space();

	hour('V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV131.php');
	lc('ecclus44_16.php','csCBVlc','h','iste_confessor_domini_colentes.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php');
	ant('prSanct/1111m.php','M');
	rubp('Oratio <snr>Deus</s>, ut supra.','Prayer <snr>O God</s>, as above.');
	rubrics('prSanct/ComplineFeria.php');

?>
