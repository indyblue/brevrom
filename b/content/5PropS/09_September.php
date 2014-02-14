<?php 

space();
img('separator3.tif',100);
head('Festa Septembris', 'Feasts of September',1);
space();

feast_saint(901,0,'Sancti Ægidii','Saint Giles','a',array('csConfessorAbbot.php','Ægídii','Giles'),
	"feast_saint(901,-1,'Ss. duodecim Fratrum','the twelve Holy Brothers','M+');");

feast_saint(902,3,'Sancti Stephani','Saint Stephen','KC');

feast_saint(903,3,'Sancti Pii X','Saint Pius X','PC');

feast_saint(905,3,'S. Laurentii Justiniani','St. Lawrence Jusinian','EC');

require '0908-2_nativity_BVM.php';

feast_saint(909,0,'Sancti Gorgonii','Saint Gorgonius','M');

feast_saint(910,3,'S. Nicolai de Tolentino','St. Nicholas of Tolentine','C',array('csConfessor2.php','Nicolái','Nicholas'));

feast_saint(911,0,'Ss. Proti et Hyacinthi','Ss. Portus and Hyacinth','M+');

feast_saint(912,3,'Sanctissimi Nominis Mariæ','The Most Holy Name of Mary','B');

require '0914-2_exaltation_holy_cross.php';

require '0915-2_seven_sorrows_BVM.php';

feast_saint(916,3,'Ss. Cornelii, Papæ, et Cypriani, Ep.','Ss. Cornelius, Pope, and Cyprian, B.','M+',0,
	"feast_saint(916,-1,'Ss. Euphemiæ Virg., Luciæ et Geminiani','Ss. Euphemia Virg., Lucy and Geminianus','M+');");

feast_saint(917,0,'Impressionis Sacror. Stigmatum S. Francisci','The Imprinting of the Stigmata of St. Francis','-C');

feast_saint(918,3,'S. Josephi de Cupertino','St. Joseph of Cupertino','C');

feast_saint(919,3,'Ss. Januarii, Ep., et Sociorum','St. Januarius, B., and His Companions','M+',array('csMartyrs2.php','Januárii et Sociórum','Januarius and his companions'));

feast_saint(920,0,'Ss. Eustachii et Sociorum','St. Eustace and His Companions','M+',array('csMartyrs1.php','Eustáchii et Sociórum','Eustace and his companions'));

require '0921-2_matthew.php';

feast_saint(922,3,'S. Thomæ de Villanova','St. Thomas of Villanova','EC',0,
	"rubp('Deinde, extra Quatuor Tempora:','Then, if it is not an Ember day:');
feast_saint(922,-1,'Ss. Mauritii et Soc.','Ss. Maurice and companions','M+');");

feast_saint(923,3,'Sancti Lini','Saint Linus','PM',array('csPope1m.php','Linum','Linus'),
	"rubp('Deinde, extra Quatuor Tempora:','Then, if it is not an Ember day:');
feast_saint(923,-1,'S. Theclæ','St. Thecla','VM');");

feast_saint(924,0,'Beatæ Mariæ Virg. a Mercede','Our Lady of Ransom','B');

feast_saint(926,0,'Ss. Cypriani et Justinæ, V.','Ss. Cyprian and Justina, V.','M+');

feast_saint(927,3,'Ss. Cosmæ et Damiani','Ss. Cosmas and Damian','M+');

feast_saint(928,3,'Sancti Wenceslai','Saint Wenceslaus','UMs');

require '0929-1_ded_michael_archangel.php';

feast_saint(930,3,'Sancti Hieronymi','Saint Jerome','pCD',0,0,array('Hierónyme','Jerome'));

?>
