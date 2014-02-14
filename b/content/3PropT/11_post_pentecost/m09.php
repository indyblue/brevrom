<?php
	space();
	hidden('After Pentecost',1);
	hidden('September',2);
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
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php',0,'L');
	ant('PrTemp/post_pentecost/m09w34b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w34.php');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'V');
	ant('PrTemp/post_pentecost/m09w34m.php','M');
	space();

	feria(6,12);
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php',3,'L');
	ant('PrTemp/post_pentecost/m09w36b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w36.php');
	vrS('Ord/dirigatur_domine_oratio_mea.php',3,'V');
	ant('PrTemp/post_pentecost/m09w36m.php','M');
	space();

	feria(7,12);
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php',3,'L');
	ant('PrTemp/post_pentecost/m09w37b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/m09w37.php');
	space();

	head('Dominica IV Septembris', 'Fourth Sunday of September',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m09w40.php','M');
	space();

	head('Dominica V Septembris', 'Fifth Sunday of September',2);
	head('II classis', 'II class',5);
	rubp('Si huic dominicæ locus non sit, prætermittitur una cum sua hebdomada.', 'If there is no place for this Sunday, it is omitted along with its week.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m09w50.php','M');
	space();

?>
