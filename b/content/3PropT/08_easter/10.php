<?php 
	space();
	hidden('Easter',1);
	hidden('Low Sunday',2);
	head_temp(1,'Dominica in Albis <br><r>in Octava Paschæ</s>', 'Low Sunday <br><r>the Octave Day of Easter</s>');

	hour('1V');
	rubrics('ps/SaV-A.php');	
	lc('1john5_4.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	ant('PrTemp/easter/10b.php','M');
	rubp('<s:VR>V. </s><snr>Benedicámus Dómino</s> hodie et deinceps dicitur sine <snr>Allelúja</s>.', '<s:VR>V. </s><snr>Let us bless the Lord</s>, is said today and afterwards without <snr>Alleluia</s>.');
	rubp('Ad Completorium dicitur ant. <snr>Allelúja</s> cum psalmis de sabbato et reliqua ut in Psalterio pro tempore paschali, <snr>p. '. bkref('psSC') .'</s>', 'At Compline is said the ant. <snr>Allelúja</s> with the psalms of Saturday, and all else as in the Psalter, according to the Easter season, <snr>p. '. bkref('psSC') .'</s>');
	space();

	hour('L');
	rubrics('ps/SuL1-A.php');	
	lc('1john5_4.php');
	hymn('aurora_caelum_purpurat.php',1);
	vrS('PrTemp/in_resurrectione_tua_christe.php',1);
	ant('PrTemp/easter/10b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/easter/10.php');
	space();

	rubp('Ad Horas, hymni et antiphona <snr>Allelúja</s> cum psalmis de dominica, ut in Psalterio; respons. brevia et ad Primam etiam lectio brevis <snr>Si consurrexístis</s>, de tempore Paschatis, ut in Psalterio.', 'At the little Hours, the hymn and ant. <snr>Alleluia</s> with psalms of Sunday, as in the Psalter; at Prime, the brief response and brief lesson <snr>If you be risen</s>, of the season of Easter, as in the Psalter.');
	hour('T');
	lc('1john5_4.php');
	brS('PrTemp/surrexit_dominus_de_sepulcro.php',1);
	vrS('PrTemp/surrexit_dominus_vere.php',1);
	space();

	hour('S');
	lc('1john5_5-6.php');
	brS('PrTemp/surrexit_dominus_vere.php',1);
	vrS('PrTemp/gavisi_sunt_discipuli.php',1);
	space();

	hour('N');
	lc('1john5_9-10.php');
	brS('PrTemp/gavisi_sunt_discipuli.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	space();

	hour('2V');
	rubrics('ps/SuV-A.php');
	lc('1john5_4.php');
	hymn('ad_regias_agni_dapes.php',1);
	vrS('PrTemp/mane_nobiscum_domine.php',1);
	ant('PrTemp/easter/10m2.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/easter/10.php');
	rubp('Ad Completorium dicitur ant. <snr>Allelúja</s> cum psalmis de dominica, ut in Psalterio, <snr>p. '. bkref('psDC') .'</s>, et reliqua pro tempore paschali', 'At Compline is said the ant. <snr>Allelúja</s> with the psalms of Sunday, as in the Psalter, <snr>p. '. bkref('psDC') .'</s>, and the rest according to the Easter season.');
	space();

	feria(2,4);
	ant('PrTemp/easter/12b.php','B');
	ant('PrTemp/easter/12m.php','M');
	space();

	feria(3,4);
	ant('PrTemp/easter/13b.php','B');
	ant('PrTemp/easter/13m.php','M');
	space();

	feria(4,4);
	ant('PrTemp/easter/14b.php','B');
	ant('PrTemp/easter/14m.php','M');
	space();

	feria(5,4);
	ant('PrTemp/easter/15b.php','B');
	ant('PrTemp/easter/15m.php','M');
	space();

	feria(6,4);
	ant('PrTemp/easter/16b.php','B');
	ant('PrTemp/easter/10m2.php','M');
	space();

	feria(7,4);
	rubrics('de_officio_festi_vel_bvm_sat.php');

?>

