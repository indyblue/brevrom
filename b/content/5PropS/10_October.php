<?php 

space();
img('separator3.tif',100);
head('Festa Octobris', 'Feasts of October',1);

feast_saint(1001,0,'Sancti Remigii','Saint Remigius','EC',array('csConfessorBishop1.php','Remígii','Remigius'));

require '1002-3_guardian_angels.php';

feast_saint(1003,3,'S. Teresiæ a Jesu Infante','St. Theresa of the Child Jesus','V');

feast_saint(1004,3,'Sancti Francisci','St. Francis of Assisi','C');

feast_saint(1005,0,'Ss. Placidi et Sociorum','St. Placid and His Companions','M+',array('csMartyrs2.php','Plácidi et Sociórum','Placid and his companions'));

feast_saint(1006,3,'Sancti Brunonis','Saint Bruno','C');

require '1007-2_BVM_rosary.php';

feast_saint(1008,3,'Sanctæ Birgittæ','Saint Bridget','W',0,
	"feast_saint(1008,-1,'Ss. Sergii, Bacchi, Marcelli et Apuleii','Ss. Sergius, Bacchus, Marcellus and Apulieus','M+');");


feast_saint(1009,3,'S. Joannis Leonardi','St. John Leonard','C',0,
	'feast_saint(1009,-1,"Ss. Dionysii Ep., Rustici et Eleutherii",
			"St. Dionysius, Bp., Rusticus and Eleutherius","M+");');

feast_saint(1010,3,'S. Francisci Borgiæ','St. Francis Borgia','C');

require '1011-2_motherhood_BVM.php';

feast_saint(1013,3,'Sancti Eduardi','Saint Edward','KC');

feast_saint(1014,3,'Sancti Callisti I','Saint Callistus I','PM');

require '1015-3_teresa.php';

feast_saint(1016,3,'Sanctæ Hedwigis','Saint Hedwige','W');

feast_saint(1017,3,'S. Margaritæ Mariæ Alaqoque','St. Margaret Mary Alacoque','V');

require '1018-2_luke.php';

feast_saint(1019,3,'S. Petri de Alcantara','St. Peter of Alcantara','C');

require '1020-3_john_cantius.php';

feast_saint(1021,0,'Sancti Hilarionis','Saint Hilarion','a',array('csConfessorAbbot.php','Hilariónis','Hilarion'),
	"feast_saint(1021,-1,'Ss. Ursulæ et Sociarum','St. Ursula and companions','VM+',array('csVirginsMartyrs1.php','Úrsulæ et Sociárum','Ursula and her Companions'));");

feast_saint(1023,3,'S. Antonii Mariæ Claret','St. Anthony Mary Claret','EC');

require '1024-3_raphael_archangel.php';

require '10CTK-1_Christ_the_King.php';

feast_saint(1025,0,'Ss. Chrysanthi et Dariæ','Ss. Chrysanthus and Daria','M+');

feast_saint(1026,0,'Sancti Evaristi','Saint Evaristus','PM',array('csPope1m.php','Evarístum','Evaristus'));

require '1028-2_simon_and_jude.php';

?>
