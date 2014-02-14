<?php 

space();
img('separator3.png',100);
head('Festa Novembris', 'Feasts of November',1);

require '1101-1_all_saints.php';

require '1102-1_all_souls.php';

feast_saint(1104,3,'Sancti Caroli','St. Charles Borromeo','EC',0,
	"feast_saint(1104,-1,'Ss. Vitalis et Agricolæ','Ss. Vitalis and Agricola','M+');");

feast_saint(1108,0,'Ss. Quatuor Coronatorum Martyrum','Four Crowned Martyrs','-M+');

require '1109-2_dedication_st_saviour.php';

feast_saint(1110,3,'S. Andreæ Avellini','St. Francis Avellino','C',0,
	"feast_saint(1110,-1,'Ss. Tryphonis, Respicii et Nymphæ [V]','Ss. Tryphon, Respicius and Nympha [V]','M+');");

require '1111-3_saint_martin.php';

feast_saint(1112,3,'Sancti Martini I','Saint Martin I','PM',array('csPope1m.php','Martínum','Martin'));

feast_saint(1113,3,'Sancti Didaci','Saint Didacus','C');

feast_saint(1114,3,'Sancti Josaphat','Saint Josaphat','EM');

feast_saint(1115,3,'S. Alberti Magni','St. Albert the Great','ECD',0,0,array('Albérte','Albert'));

feast_saint(1116,3,'Sanctæ Gertrudis','Saint Gertrude','V');

feast_saint(1117,3,'S. Gregorii Thaumaturgi','St. Gregory Thaumaturgus','EC',array('csConfessorBishop1.php','Gregórii','Gregory'));

feast_saint(1118,3,'in Dedicatione Basilicarum Ss. Petri et Pauli','Dedication of the Basilicas of Ss. Peter and Paul','^','csChurchAnniversary1.php');

feast_saint(1119,3,'Sanctæ Elisabeth','Saint Elizabeth','W',0,
	"feast_saint(1119,-1,'S. Pontiani','St. Pontianus','PM',array('csPope1m.php','Pontiánum','Pontianus'));");

feast_saint(1120,3,'S. Felicis de Valois','St. Felix of Valois','C');

feast_saint(1121,3,'in Præsentatione B. Mariæ Virg.','The Presentation of the Blessed Virgin Mary','B',0,0,array(0,0,0,1));

require '1122-3_saint_cecilia.php';

require '1123-3_saint_clement_i.php';

feast_saint(1124,3,'S. Joannis a Cruce','St. John of the Cross','CD',0,
	"feast_saint(1124,-1,'S. Chrysogoni','St. Chrysogonus','M');",
	array('Joánnes','John'));

feast_saint(1125,3,'Sanctæ Catharinæ','Saint Catharine','VM');

feast_saint(1126,3,'Sancti Silvestri','Saint Sylvester','a',0,
	"feast_saint(1126,-1,'S. Petri Alexandrini','St. Peter of Alexandria','EM',array('csMartyrBishop1.php','Petri','Peter'));");

img('benedicamus_domino.png',33);

?>
