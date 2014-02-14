<?php

space();
img('separator3.tif',100);
head('Festa Augusti', 'Feasts of August',1);


feast_saint(801,0,'Ss. Machabæorum','Holy Machabees','M+');

feast_saint(802,3,'S. Alfonsi Mariæ de Ligorio',
	'St. Alphonsus Mary de Liguori','ECD',0,
	'feast_saint(802,-1,"Sancti Stephani","Saint Stephen","PM",
		array("csPope1m.php","Stéphanum","Stephen"));',
	array('Alfónse María','Alphonsus Mary'));

feast_saint(804,3,'Sancti Dominici','Saint Dominic','C');

require '0805-3_mary_of_the_snows.php';

require '0806-2_transfiguration.php';

feast_saint(807,3,'Sancti Cajetani','Saint Cajetan','C',0,'feast_saint(807,-1,"Sancti Donati","Saint Donatus","EM" );',array(0,1,0,1));

feast_saint(808,3,'S. Joannis Mariæ Vianney','St. John Mary Vianney','C',0,
	'feast_saint(808,-1,"Ss. Cyriaci, Largi et Smaragdi","Ss. Cyriacus, Largus and Smaragdus","M+",array("csMartyrs2.php","Cyríaci, Largi et Smarágdi","Cyriacus, Largus and Smaragdus"));');

require '0809-3_vigil_laurence.php';

require '0810-2_laurence.php';

feast_saint(811,0,'Ss. Tiburtii et Susannæ, Virg.',
	'Ss. Tiburtius and Susanna, Virg.','M+');

feast_saint(812,3,'Sanctæ Claræ','Saint Clare','V',
	array('csVirgin1.php','Claræ','Clare'));

feast_saint(813,0,'Ss. Hyppolyti et Cassiani',
	'Ss. Hyppolite and Cassian','M+');

require '0814-2_vigil_assumption_bvm.php';

require '0815-1_assumption.php';

require '0816-2_joachim.php';

feast_saint(817,3,'Sancti Hyacinthi','Saint Hyacinth','C',array('csConfessor1.php','Hyacínthi','Hyacinth'));

feast_saint(818,0,'Sancti Agapiti','Saint Agapitus','M');

feast_saint(819,3,'S. Joannis Eudes','St. John Eudes','C');

feast_saint(820,3,'Sancti Bernardi','Saint Bernard','aD',array('csConfessorDoctor.php','Bernárdum','Benard'),0,array('Bernárde','Bernard'));

feast_saint(821,3,'S. Joannæ Franciscæ Frémiot de Chantal','St. Jane Frances Frémiot de Chantal','W');

require '0822-2_immaculate_heart.php';

feast_saint(823,3,'S. Philippi Benitii','St. Philip Benizi','C');

require '0824-2_bartholomew.php';

feast_saint(825,3,'Sancti Ludovici','Saint Louis','KC');

feast_saint(826,0,'Sancti Zephyrini','Saint Zephrynus','PM',array('csPope1m.php','Zephyrínum','Zephrynus'));

feast_saint(827,3,'S. Josephi Calasanctii','St. Joseph Calasanza','C');

feast_saint(828,3,'Sancti Augustini','Saint Augustine','ECD',0,
	'feast_saint(828,-1,"S. Hermetis","St. Hermes","M");',
	array('Augustíne','Augustine'));

require '0829-3_beheading_john_baptist.php';

feast_saint(830,3,'S. Rosæ Limanæ','St. Rose of Lima','V',0,
	'feast_saint(830,-1,"Ss. Felicis et Adaucti","Ss. Felix and Adauctus","M+");');

feast_saint(831,3,'S. Raymundi Nonnati','St. Raymond Nonnatus','C');

?>
