<?php 

space();
img('separator3.tif',100);
head('Festa Martii', 'Feasts of March',1);

feast_saint(304,3,'Sancti Casimiri','Saint Casimir','C');

feast_saint(306,3,'Ss. Perpetuæ et Felicitatis','Ss. Perpetua and Felicitas','HM+',
		array('csHolyWomenMartyrs1.php','Perpétuæ et Felicitátis','Perpetua and Felicitas'));

feast_saint(307,3,'S. Thomæ de Aquino','St. Thomas Aquinas','CD',0,0,
	array('Thoma','Thomas'));

feast_saint(308,3,'S. Joannis a Deo','St. John of God','C');

feast_saint(309,3,'S. Franciscæ Romanæ','St. Frances of Rome','W');

feast_saint(310,3,'Ss. Quadraginta Martyrum','The Forty Holy Martyrs','-M+');

feast_saint(312,3,'Sancti Gregorii I','Saint Gregory I','PCD');

feast_saint(317,3,'Sancti Patricii','Saint Patrick','EC');

feast_saint(318,3,'S. Cyrilli, Ep. Hierosolymitani','St. Cyril, Bishop of Jerusalem','-ECD');

require '0319-1_joseph_spouse_bvm.php';

feast_saint(321,3,'Sancti Benedicti','Saint Benedict','a',
	array('csConfessorAbbot.php','Benedícti','Benedict'));

require '0324-3_gabriel.php';

require '0325-1_annunciation_bvm.php';

feast_saint(327,3,'S. Joannis Damasceni','St. John Damascene','CD');

feast_saint(328,3,'S. Joannis de Capistrano','St. John Capistran','C');

require '03-7dolours.php';

?>

