<?php
	global $kindle;
	$h = $kindle == 1 ? 2 : 1;
	space();
	hidden('Litany B.V.M.',2);
	head('Litaniæ Laurentanæ B. Mariæ Virg.','Litany of Loreto, of the Bl. Virgin Mary',$h);
	reading('bvm/litany.php',1,10);
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	vr('oremus.php');
	prayer('csBVM1s.php');
?>
