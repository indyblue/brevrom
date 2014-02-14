<?php
	space();
	hidden('After Pentecost',1);
	hidden('Month of September',2);
	head('Mensis Septembris', 'The Month of September',1);

	head('Dominica I Septembris', 'First Sunday of September',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('PrTemp/post_pentecost/m09w10.php','M');
	space();

	head('Dominica II Septembris', 'Second Sunday of September',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m09w20.php','M');
	space();

	head('Dominica III Septembris', 'Third Sunday of September',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m09w30.php','M');
	space();

	feria(4,12);
	rubrics('ps/FeriaL2.php',4);
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php');
	ant('PrTemp/post_pentecost/m09w34.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w34.php');
	rubp('Et dicitur ad omnes Horas, etiam ad Vesperas.', 'This prayer is said at all Hours, including Vespers.');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'V');
	rubp('Ad Magnif. ant. <snr>Hoc genus</s>, preces et oratio <snr>Misericóridæ</s>, ut supra ad Laudes.', 'Magnificat ant. <snr>This kind</s>, preces and the prayer <snr>We beseech thee</s>, as above at Lauds.');
	space();

	feria(6,12);
	rubrics('ps/FeriaL2.php',6);
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php');
	ant('PrTemp/post_pentecost/m09w36.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w36.php');
	rubp('Et dicitur ad omnes Horas, etiam ad Vesperas.', 'This prayer is said at all Hours, including Vespers.');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'V');
	rubp('Ad Magnif. ant. <snr>Múlier</s>, preces et oratio <snr>Præsta</s>, ut supra ad Laudes.', 'Magnificat ant. <snr>A woman</s>, preces and the prayer <snr>Grant</s>, as above at Lauds.');
	space();

	feria(7,12);
	rubrics('ps/FeriaL2.php',7);
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php');
	ant('PrTemp/post_pentecost/m09w37.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w37.php');
	rubp('Et dicitur usque ad Nonam inclusive.', 'This prayer is said through None, inclusive.');
	space();

	head('Dominica IV Septembris', 'Fourth Sunday of September',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('PrTemp/post_pentecost/m09w40.php','M');
	space();

	head('Dominica V Septembris', 'Fifth Sunday of September',2);
	head('II classis', 'II class',5);
	rubp('Si huic dominicæ locus non sit, prætermittitur una cum sua hebdomada.', 'If there is no place for this Sunday, it is omitted along with its week.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m09w50.php','M');
	space();
 
?>
