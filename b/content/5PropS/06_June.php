<?php 

space();
img('separator3.tif',100);
head('Festa Junii', 'Feasts of June',1);

feast_saint(601,3,'S. Angelæ Mericiæ','St. Angela Merici','V');

feast_saint(602,0,'Ss. Marcellini, Petri, atque Erasmi [E]','Ss. Marcellinus, Peter, and Erasmus [E]','M+');

feast_saint(604,3,'S. Francisci Caracciolo','St. Francis Caracciolo','C');

feast_saint(605,3,'Sancti Bonifatii','Saint Boniface','EM');

feast_saint(606,3,'Sancti Norberti','Saint Norbert','EC');

feast_saint(609,0,'Ss. Primi et Feliciani','Ss. Primus and Felician','M+');

feast_saint(610,3,'S. Margaritæ, Reginæ Scotiæ','St. Margaret, Queen of Scotland','W');

feast_saint(611,3,'Sancti Barnabæ','Saint Barnabas','A');

feast_saint(612,3,'S. Joannis a S. Facundo','St. John a San Facundo','C',0,
	'feast_saint(612,-1,"Ss. Basilidis, Cyrini, Naboris et Nazarii","Ss. Basilides, Cyrinus, Nabor and Nazarius","M+");');

feast_saint(613,3,'S. Antonii de Padua','St. Anthony of Padua','CD',0,0,
	array('Antóni','Anthony'));

feast_saint(614,3,'S. Basilii Magni','St. Basil the Great','ECD',0,0,
	array('Basíli','Basil'));

feast_saint(615,0,'Ss. Viti, Modesti atque Crescentiæ','Ss. Vitus, Modestius and Crescentia','M+');

feast_saint(617,3,'S. Gregorii Barbadici','St. Gregory Barbarigo','EC');

feast_saint(618,3,'S. Ephræm Syri','St. Ephrem the Syrian','dCD',0,
	'feast_saint(618,-1,"Ss. Marci et Marcelliani","Ss. Mark and Mercellian","M+");',
	array('Ephræm','Ephrem'));

require '0619-3_juliana_falconieri.php';

feast_saint(620,0,'Sancti Silverii','Saint Silverius','PM',
	array('csPope1m.php','Silvérium','Silverius'));

feast_saint(621,3,'S. Aloisii Gonzagæ','St. Aloysius Gonzaga','C');

feast_saint(622,3,'Sancti Paulini','Saint Paulinus','EC');

require '0623-2_vigil_john_baptist.php';

require '0624-1_john_baptist.php';

feast_saint(625,3,'Sancti Gulielmi','Saint William','a');

require '0626-3_john_paul.php';

require '0628-2_vigil_peter_paul.php';

require '0629-1_peter_paul.php';

require '0630-3_commem_paul.php';

?>

