<?php

	space(); 
	img();
	headst('702',12,'in Visitatione B. Mariæ Virg.',
		'The Visitation of the Bl. Virgin Mary');
	rubrics('prSanct/all_from.php','csBVM');

	hour('L');
	ant('prSanct/0702L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0702L.php','02222');
	lc('ecclus24_14.php','csBVMLlc','h','o_gloriosa_virginum.php');
	vrS('prSanct/benedicta_tu_in_mulieribus.php');
	ant('prSanct/0702b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0702.php');
	feast_saint(702,-1,"Ss. Processi et Martiniani",
		"Ss. Processus and Martinian","M+");

	space();
	hour('V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php'); 
	lc('ecclus24_14.php','csBVMVlc','h','ave_maris_stella.php');
	vrS('prSanct/benedicta_tu_in_mulieribus.php');
	ant('prSanct/0702m2.php','M');
	space('Line');
	rubrics('cs/if1Vespers.php');
	ant('prSanct/0702m1.php','M');
	space('Line');

	rubrics('prSanct/ComplineSun.php'); 
?>

