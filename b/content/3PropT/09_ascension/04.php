<?php 
	space();
	bookmark('Ascension');
	hidden('Ascension',1);
	hidden('The Ascension of the Lord',2);
	img('Tempore/t05_ascension.png',100);
	head_temp(1,'in Ascensione Domini', 'The Ascension of the Lord');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('acts1_1-2.php');
	hymn('salutis_humanae_sator.php',1);
	vrS('PrTemp/ascendit_deus_in_jubilatione.php',1);
	ant('prTemp/ascension/04m1.php','M');
	space();

	hour('L');
	ant('prTemp/ascension/04L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/ascension/04L.php','02222');	
	lc('acts1_1-2.php');
	hymn('salutis_humanae_sator.php',1);
	vrS('PrTemp/dominus_in_caelo.php',1);
	ant('prTemp/ascension/04b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/ascension/04.php');
	space();

	ordref(0,6,0);
	hour('P');
	PrV('qui_scandis_super_sidera.php',2,
		array(', et ad absolutionem capituli lectio brevis <snr>Viri Galilǽi</s>, quæ dicuntur usque ad vigiliam Pentecostes inclusive, juxta rubricas.', ', and at the end of the hour the brief lesson <snr>Ye men of Galilee</s>, which are said until the vigil of Pentecost, inclusive, in accord with the rubrics.' ));
	space();

	hour('T');
	lc('acts1_1-2.php');
	brS('PrTemp/ascendit_deus_in_jubilatione.php',1);
	vrS('PrTemp/ascendens_christus_in_altum.php',1);
	space();

	hour('S');
	lc('acts1_4-5.php');
	brS('PrTemp/ascendens_christus_in_altum.php',1);
	vrS('PrTemp/ascendo_ad_patrem_meum_et_patrem_vestrum.php',1);
	space();

	hour('N');
	lc('acts1_11.php');
	brS('PrTemp/ascendo_ad_patrem_meum_et_patrem_vestrum.php',1);
	vrS('PrTemp/dominus_in_caelo.php',1);
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('acts1_1-2.php');
	hymn('salutis_humanae_sator.php',1);
	vrS('PrTemp/ascendit_deus_in_jubilatione.php',1);
	ant('prTemp/ascension/04m2.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	rubp('<snr>¶</s> Dies a feria VI post Ascensionem Domini usque ad vigiliam Pentecostes exclusive sunt feriæ temporis Ascensionis.', '<snr>¶</s> The days from Friday after the Ascension of the Lord until the vigil of Pentecost, exclusive, are ferias of the season of the Ascension.');
	rubp('Antiphonæ et psalmi, ad omnes Horas, et versus Nocturni sumuntur de currenti hebdomadæ die, ut in Psalterio pro tempore Ascensionis; lectiones de Scriptura occurenti, cum suis responsoriis, et dicitur <snr>Te Deum</s>; reliqua, una cum versu in responsorio brevi ad Primam, ut in festo Ascensionis.', 'The antiphons and psalms, at all Hours, and verses at the Nocturns are from the current weekday, as in the Psalter for the season of the Ascension; the occurring readings from Scripture, with their responses, and the <snr>Te Deum</s> is said; the rest, along with the verse in the brief response at Prime, as on the feast of the Ascension.');
	rubp('In festis his diebus occurrentibus, retinetur versus in responsorio brevi ad Primam de Ascensione, nisi habeantur proprius; sed nulla fit commemoratio feriæ.', 'In feasts which occur on these days, the verse of the Ascension in the brief response at Prime is retained, unless the feast has a verse proper to it; but no commemoration is made of the feria.');
	
?>
