<?php 

space();
img();
space();
head('Festa Januarii', 'Feasts of January',1);


feast_saint(114,3,'Sancti Hilarii','Saint Hilary','ECD',array('csConfessorDoctor.php','Hilárium','Hilary'), 
	'feast_saint(114,-1,"Sancti Felicis","Saint Felix","pM");',
	array('Hilári','Hilary'));

feast_saint(115,3,'S. Pauli, Primi Eremitæ','St. Paul, the First Hermit','C',array('csConfessor1.php','Pauli','Paul'),
	'feast_saint(115,-1,"Sancti Mauri","Saint Maurus","a",array("csConfessorAbbot.php","Mauri","Maurus"),0,array("amavit_eum_dominus_et_ornavit_eum.php","similabo_eum_viro_sapienti.php"));');

feast_saint(116,3,'Sancti Marcelli I','Saint Marcellus','PM');

feast_saint(117,3,'Sancti Antonii','Saint Anthony','a',array('csConfessorAbbot.php','Antónii','Anthony'));

feast_saint(118,0,'Sanctæ Priscæ','Saint Prisca','VM');

feast_saint(119,0,'Ss. Marii, Marthæ, Audifacis et Abachum','Ss. Marius, Martha, Audifax and Abachum','M+',0,
	'feast_saint(119,-1,"Sancti Canuti","Saint Canute","KM");');

feast_saint(120,3,'Ss. Fabiani [P] et Sebastiani','Ss. Fabian, [P] and Sebastian','M+');

require '0121-3_saint_agnes.php';

feast_saint(122,3,'Ss. Vincentii et Anastasii','Ss. Vincent and Anastasius','M+');

feast_saint(123,3,'S. Raymundi de Penafort','St. Raymond of Pennafort','C',0,
	'feast_saint(123,-1,"Sanctæ Emerentianæ","Saint Emerentiana","VM",array("csVirginMartyr2.php","Emerentiána","Emerentiana"));');

feast_saint(124,3,'Sancti Timothei','Saint Timothy','EM',array('csMartyrBishop1.php','Timóthei','Timothy'));

require '0125-3_conversion_paul.php';

feast_saint(126,3,'Sancti Polycarpi','Saint Polycarp','EM',array('csMartyrBishop2.php','Polycárpi','Polycarp'));

feast_saint(127,3,'S. Joannis Chrysostomi','St. John Chrysostom','ECD',0,0,array('Joánnes Chrysóstome','John Chrysostom'));

feast_saint(128,3,'S. Petri Nolasci','St. Peter Nolasco','C',0,
	'feast_saint(128,-1,"S. Agnetis","St. Agnes","VM",0,0,"prSanct/0121b.php");');

feast_saint(129,3,'S. Francisci Salesii','St. Francis de Sales','ECD',0,0,array('Franscísce','Francis'));

require '0130-3_saint_martina.php';

feast_saint(131,3,'S. Joannis Bosco','St. John Bosco','C');

?>
