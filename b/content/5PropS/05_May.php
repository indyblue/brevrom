<?php 

space();
img('separator3.tif',100);
head('Festa Maii', 'Feasts of May',1);


require '0501-1_joseph_worker.php';

feast_saint(502,3,'Sancti Athanasii','Saint Athanasius','ECD',0,0,
	array('Athanási','Athanasius'));

feast_saint(503,0,'Ss. Alexandri I [P], Eventii et Theoduli [M], ac Juvenalis [EC]','Ss. Alexander I. [P], Eventius and Theodulus [M], with Juvenal [EC]','-M+');

feast_saint(504,3,'Sanctæ Monicæ','Saint Monica','W');

feast_saint(505,3,'Sancti Pii V','Saint Pius V','PC');

feast_saint(507,3,'Sancti Stanislai','Saint Stanislaus','EMe');

feast_saint(509,3,'S. Gregorii Nazianzeni','St. Gregory Nazianzen','ECD',
	array('csConfessorDoctor.php','Gregórium','Gregory'),0,
	array('Gregóri','Gregory'));

feast_saint(510,3,'Sancti Antonini','Saint Antoninus','EC',0,
	'feast_saint(510,-1,"Ss. Gordiani et Epimachi","Ss. Gordian and Epimachus","M+e");');

require '0511-2_philip_james.php';

feast_saint(512,3,'Ss. Nerei, Achillei, et Domitillæ [V], atque Pancratii','Ss. Nereus Achilleus, and Domitilla [V], also Pancratii','M+e');

feast_saint(513,3,'S. Roberti Bellarmino','St. Robert Bellarmine','ECD',0,0,
	array('Robérte','Robert'));

feast_saint(514,0,'Sancti Bonifatii','Saint Boniface','Me');

feast_saint(515,3,'S. Joannis Baptistæ de la Salle','St. John Baptist de la Salle','C');

feast_saint(516,3,'Sancti Ubaldi','Saint Ubaldus','EC');

feast_saint(517,3,'S. Paschalis Baylon','St. Paschal Baylon','C');

require '0518-3_venantius.php';

feast_saint(519,3,'S. Petri Cælestini','St. Peter Celestine','PC',0,
	'feast_saint(519,-1,"Sanctæ Prudentianæ","Saint Prudentiana","V",
		array("csVirgin1.php","Prudentiánæ","Prudentiana"));');

feast_saint(520,3,'S. Bernardini Senensis','St. Bernardine of Siena','C');

feast_saint(525,3,'S. Gregorii VII','St. Gregory VII','PC',0,
	'feast_saint(525,-1,"Sancti Urbani I","Saint Urban I","PM",
		array("csPope3m.php","Urbáno","Urban"));');

feast_saint(526,3,'S. Philippi Nerii','St. Philip Neri','C',0,
	'feast_saint(526,-1,"Sancti Eleutherii","Saint Eleutherius","PM",
		array("csPope1m.php","Eleuthérium","Eleutherius"));');

feast_saint(527,3,'S. Bedæ Venerabilis','Venerable Bede','CD',0,
	'feast_saint(527,-1,"Sancti Joannis I","Saint John I","PM",
		array("csPope1m.php","Joánnem","John"));',
	array('Beda','Bede'));

feast_saint(528,3,'Sancti Augustini','St. Augustine of Canterbury','EC');

feast_saint(529,3,'S. Mariæ Magdalenæ de Pazzis','St. Mary Magdalene de Pazzi','V');

feast_saint(530,0,'Sancti Felicis I','Saint Felix I','PM',
	array('csPope1m.php','Felícem','Felix'));

require '0531-2_queenship_bvm.php';

?>

