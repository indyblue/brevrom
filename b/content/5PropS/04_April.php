<?php 

space();
img('separator3.tif',100);
head('Festa Aprilis', 'Feasts of April',1);


feast_saint(402,3,'S. Francisci de Paula','St. Francis of Paula','C');

feast_saint(404,3,'Sancti Isidori','Saint Isidore','ECD',
	array('csConfessorDoctor.php','Isidórum','Isidore'),0,
	array('Isidóre','Isidore'));

feast_saint(405,3,'S. Vincentii Ferrerii','St. Vincent Ferrer','C');

feast_saint(411,3,'Sancti Leonis I','Saint Leo I','PCD',
	array('csPope1.php','Leónem','Leo'),0,
	array('Leo','Leo'));

require '0413-3_hermenegild.php';

require '0414-3_justin.php';

require '0417-0_anicetus.php';

feast_saint(421,3,'Sancti Anselmi','Saint Anselm','ECD',
	array('csConfessorDoctor.php','Ansélmum','Anselm'),0,
	array('Ansélme','Anselm'));

feast_saint(422,3,'Ss. Soteris et Caii','Ss. Soter and Caius','PMe+',
	array('csPope2m.php','Sotérem et Caium','Soter and Caius'));

feast_saint(423,0,'Sancti Georgii','Saint George','Me');

feast_saint(424,3,'S. Fidelis de Sigmaringa','St. Fidelis of Sigmaringa','Me');

require '0425-2_mark.php';

feast_saint(426,3,'Ss. Cleti et Marcellini','Ss. Cletus and Marcellinus','PM+e',
	array('csPope2m.php','Cletum et Marcellínum','Cletus and Marcellinus'));

feast_saint(427,3,'S. Petri Canisii','St. Peter Canisius','CD',0,0,array('Petre','Peter'));

feast_saint(428,3,'S. Pauli a Cruce','St. Paul of the Cross','C');

feast_saint(429,3,'Sancti Petri','Saint Peter','Me');

feast_saint(430,3,'S. Catharinæ Senensis','St. Catharine of Siena','Vs');

?>

