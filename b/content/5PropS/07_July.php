<?php 

space();
img();
head('Festa Julii', 'Feasts of July',1);

require '0701-1_precious_blood.php';

require '0702-2_visitation_bvm.php';

feast_saint(703,3,'Sancti Irenæi','Saint Irenæus','EM');

feast_saint(705,3,'S. Antonii Mariæ Zaccaria','St. Anthony Mary Zaccaria','C');

require '0707-3_cyril_methodius.php';

require '0708-3_saint_elizabeth.php';

feast_saint(710,3,'Ss. Septem Fratrum, [M] ac Rufinæ et Secundæ, [VM]','Seven Brothers, [M] with Ss. Rufina and Secunda, [VM]','-M+');

feast_saint(711,0,'Sancti Pii I','Saint Pius I','PM',array('csPope1m.php','Pium','Pius'));

feast_saint(712,3,'S. Joannis Gualberti','St. John Gualbert','a',array('csConfessorAbbot.php','Joánnis','John'),
	'feast_saint(712,-1,"Ss. Naboris et Felicis","Ss. Nabor and Felix","M+");');

feast_saint(714,3,'Sancti Bonaventuræ','Saint Bonaventure','ECD',array('csConfessorDoctor.php','Bonaventúram','Bonaventure'),0,array('Bonaventúra','Bonaventure'));

feast_saint(715,3,'Sancti Henrici','Saint Henry','IC');

require '0716-0_BVM_mt_carmel.php';

feast_saint(717,0,'Sancti Alexii','Saint Alexius','C',array('csConfessor1.php','Aléxii','Alexius'));

feast_saint(718,3,'S. Camilli de Lellis','St. Camillus of Lellis','C',0,
	'feast_saint(718,-1,"Ss. Symphorosæ et septem filiorum ejus","Ss. Symphorosa and her seven sons","M+",array("csMartyrs1.php","Symphorósæ et filiórum ejus","Symphorosa and her sons"));');

feast_saint(719,3,'S. Vincentii a Paulo','St. Vincent de Paul','C');

feast_saint(720,3,'S. Hieronymi Æmiliani','St. Jerome Æmilian','C',0,
	'feast_saint(720,-1,"S. Margaritæ","St. Margaret","VM",array("csVirginMartyr2.php","Margaríta","Margaret"));');

feast_saint(721,3,'S. Laurentii de Brundusio','St. Laurence of Brindisi',
	'CD',0,'feast_saint(721,-1,"Sanctæ Praxedis","Saint Praxedes","V",
	array("csVirgin1.php","Praxédis","Praxedes"));',
	array('Laurénti','Laurence'));

require '0722-3_mary_magdalen.php';

feast_saint(723,3,'Sancti Apollinaris','Saint Apollinaris','EM',0,
	'feast_saint(723,-1,"Sancti Liborii","Saint Liborius","EC",
	array("csConfessorBishop1.php","Libórii","Liborius"));');

feast_saint(724,0,'Sanctæ Christinæ','Saint Christina','VM',
	array('csVirginMartyr2.php','Christína','Christina'));

feast_saint(725,2,'Sancti Jacobi','Saint James','A',0,
	'feast_saint(725,-1,"Sancti Christophori","Saint Christopher","M",
		array("csMartyr1.php","Christóphori","Christopher"));');

feast_saint(726,2,'Sanctæ Annæ <br><r>Matris B. Mariæ Virg</s>','Saint Anne <br><r>Mother of the Bl. Virg. Mary</s>','H');

feast_saint(727,0,'Sancti Pantaleonis','Saint Pantaleon','M',
	array('csMartyr2.php','Pantaleóne','Pantaleon'));

feast_saint(728,3,'Ss. Nazarii et Celsi, [M] Victoris I, [PM] ac Innocentii I, [PC]','Ss. Nazarius and Chelsus, [M] Victor I, [PM] Innocent I, [PC]','-M+');

feast_saint(729,3,'Sanctæ Marthæ','Saint Martha','V',
	array('csVirgin1.php','Marthæ','Martha'),
	'feast_saint(729,-1,"Ss. Felicis II [P], Simplicii, Faustini et Baeatricis","Ss. Felix [P], Simplicius, Faustinus and Beatrice","M+");');

feast_saint(730,0,'Ss. Abdon et Sennen','Ss. Abdon and Sennen','M+');

feast_saint(731,3,'Sancti Ignatii','Saint Ignatius Loyola','C');

?>
