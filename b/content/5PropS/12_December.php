<?php 

space();
img();
space();
head('Festa Decembris', 'Feasts of December',1);

feast_saint(1202,3,'Sanctæ Bibianæ','Saint Bibiana','VM');

feast_saint(1203,3,'S. Francisci Xaverii','St. Francis Xavier','C');

feast_saint(1204,3,'S. Petri Chrysologi','St. Peter Chrysologus','ECD',0,
	'feast_saint(1204,-1,"Sanctæ Barbaræ","Saint Barbara","VM",array("csVirginMartyr1.php","Bárbaræ","Barbara"));',
	array('Petre Chrysóloge','Peter Chrysologus'));

feast_saint(1205,0,'Sancti Sabbæ','Saint Sabbas','a',array('csConfessorAbbot.php','Sabbæ','Sabbas'));

feast_saint(1206,3,'Sancti Nicolai','Saint Nicholas','EC');

feast_saint(1207,3,'Sancti Ambrosii','Saint Ambrose','ECDs',array('csConfessorDoctor.php','Ambrósium','Ambrose'));

require '1208-1_imm_conc_bvm.php';

feast_saint(1210,0,'Sancti Melchiadis','Saint Melchiades','PM',array('csPope1m.php','Melchíadem','Melchiades'));

feast_saint(1211,3,'Sancti Damasi I','Saint Damasus','PC',array('csPope1.php','Dámasum','Damasus'));

require '1213-3_saint_lucy.php';

feast_saint(1216,3,'Sancti Eusebii','Saint Eusebius','EM',array('csMartyrBishop2.php','Eusébii','Eusebius'));

require '1221-2_thomas.php';
?>

