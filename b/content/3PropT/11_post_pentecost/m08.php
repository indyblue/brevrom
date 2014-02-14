<?php
	space();
	bookmark('PostPentMonths');
	hidden('After Pentecost',1);
	hidden('Month of August',2);
	head('Mensis Augusti', 'The Month of August',1);

	head('Dominica I Augusti', 'First Sunday of August',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('PrTemp/post_pentecost/m08w10.php','M');
	rubp('Oratio, quæ contingit in ordine aliarum dominicarum, ut infra, <snr>p. '.bkref('PostPent12').'</s>.', 'Prayer, which is found in its place among the other Sundays, as below, <snr>p. '.bkref('PostPent12').'</s>.');
	space();

	head('Dominica II Augusti', 'Second Sunday of August',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m08w20.php','M');
	space();

	head('Dominica III Augusti', 'Third Sunday of August',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m08w30.php','M');
	space();

	head('Dominica IV Augusti', 'Fourth Sunday of August',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m08w40.php','M');
	space();

	head('Dominica V Augusti', 'Fifth Sunday of August',2);
	head('II classis', 'II class',5);
	rubp('Si huic dominicæ locus non sit, prætermittitur una cum sua hebdomada.', 'If there is no place for this Sunday, it is omitted along with its week.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('PrTemp/post_pentecost/m08w50.php','M');
	space();

?>
