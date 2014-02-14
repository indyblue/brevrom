<?php

space();
img('separator3.tif',100);
head('Festa Augusti', 'Feasts of August',1);


feast_saint(801,0,'Ss. Machabæorum','Holy Machabees','M+');

feast_saint(802,3,'S. Alphonsi Mariæ de Ligorio',
	'St. Alphonsus Mary de Liguori','ECD',0,
	'feast_saint(802,-1,"Sancti Stephani","Saint Stephen","PM",
		array("csPope1m.php","Stéphanum","Stephen"));',
	array('Alphónse María','Alphonsus Mary'));

feast_saint(804,3,'Sancti Dominici','Saint Dominic','C');

require '0805-3_mary_of_the_snows.php';

require '0806-3_transfiguration.php';

	space();

	// require '0815-1_assumption.php';
	space();

	require '0816-2_joachim.php';
	space();

	img();
	space();
	headSt('Aug. 17',3,'Sancti Hyacinthi','Saint Hyacinth','Confessor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('csConfessor1.php','Hyacínthi','Hyacinth');
	space();

	img();
	space();
	headSt('Aug. 18',0,'Sancti Agapiti','Saint Agapitus','Martyr');
	ant('qui_odit_animam_suam_in_hoc_mundo.php');
	vrS('justus_ut_palma_florebit.php');
	rubrics('oremus.php');
	prayer('prSanct/0818.php');
	space();

	img();
	space();
	headSt('Aug. 19',3,'S. Joannis Eudes','St. John Eudes','Confessor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('prSanct/0819.php');
	space();

	img();
	space();
	headSt('Aug. 20',3,'Sancti Bernardi','Saint Bernard','Abbot, Doctor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('csConfessorDoctor.php','Bernárdum','Benard');
	space();

	img();
	space();
	headSt('Aug. 21',3,'S. Joannæ Franciscæ Frémiot de Chantal','St. Jane Frances Frémiot de Chantal','Widow');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csHW');
	prayer('prSanct/0821.php');
	space();

	require '0822-2_immaculate_heart.php';
	space();

	img();
	space();
	headSt('Aug. 23',3,'S. Philippi Benitii','St. Philip Benizi','Confessor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('prSanct/0823.php');
	space();

	require '0824-2_bartholomew.php';
	space();

	img();
	space();
	headSt('Aug. 25',3,'Sancti Ludovici','Saint Louis','King, Conf.');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('prSanct/0825.php');
	space();

	img();
	space();
	headSt('Aug. 26',0,'Sancti Zephyrini','Saint Zephrynus','Pope, Martyr');
	ant('qui_odit_animam_suam_in_hoc_mundo.php');
	vrS('justus_ut_palma_florebit.php');
	rubrics('oremus.php');
	prayer('csPope1m.php','Zephyrínum','Zephrynus');
	space();

	img();
	space();
	headSt('Aug. 27',3,'S. Josephi Calasanctii','St. Joseph Calasanza','Confessor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('prSanct/0827.php');
	space();

	img();
	space();
	headSt('Aug. 28',3,'Sancti Augustini','Saint Augustine','Bishop, Conf., Doctor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csCB');
	prayer('prSanct/0828.php');
   echo '<p:RubricH>Commemoration is also made of St. Hermes, Martyr:</p>';
	ant('qui_odit_animam_suam_in_hoc_mundo.php');
	vrS('justus_ut_palma_florebit.php');
	rubrics('oremus.php');
	prayer('prSanct/0828c.php');
	space();

	require '0829-3_beheading_john_baptist.php';
	space();

	img();
	space();
	headSt('Aug. 30',3,'S. Rosæ Limanæ','St. Rose of Lima','Virgin');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csV');
	prayer('prSanct/0830.php');
   echo '<p:RubricH>Commemoration is also made of Ss. Felix and Adauctus, Martyrs:</p>';
	ant('vestri_capilli_capitis_omnes_numerati_sunt.php');
	vrS('exultabunt_sancti_in_gloria.php');
	rubrics('oremus.php');
	prayer('prSanct/0830c.php');
	space();

	img();
	space();
	headSt('Aug. 31',3,'S. Raymundi Nonnati','St. Raymond Nonnatus','Confessor');
	rubrics('ps/Feria.php');
	rubrics('prSanct/all_else.php','csC');
	prayer('prSanct/0831.php');
	space();

?>
