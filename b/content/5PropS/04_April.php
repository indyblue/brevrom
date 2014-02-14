<?php 
	space();
	img('separator3.tif',100); ?>
	<p:Head1NI><?php 
echo ($_GET['L']==1?'Festa Aprilis':'Feasts of April') 
?></p>

<?php

feast_saint(402,3,'S. Francisci de Paula','St. Francis of Paula','C');

feast_saint(404,3,'Sancti Isidori','Saint Isidore','ECD',
	array('csConfessorDoctor.php','Isidórum','Isidore'),0,
	array('Isidóre','Isidore'));

feast_saint(405,3,'S. Vincentii Ferrerii','St. Vincent Ferrer','C');

feast_saint(411,3,'Sancti Leonis I','Saint Leo I','PCD',
	array('csPope1.php','Leónem','Leo'),0,
	array('Leo','Leo'));

require '0413-3_hermenegild.php';

/*
feast_saint(404,3,'','','ECD');

feast_saint(306,3,'Ss. Perpetuæ et Felicitatis','Ss. Perpetua and Felicitas','HM+',
		array('csHolyWomenMartyrs1.php','Perpétuæ et Felicitátis','Perpetua and Felicitas'));

feast_saint(307,3,'S. Thomæ de Aquino','St. Thomas Aquinas','CD',0,0,array('Thoma','Thomas'));

require '03-7dolours.php';
*/
?>

