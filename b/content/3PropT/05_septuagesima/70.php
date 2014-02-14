<?php 
	space();
	hidden('Season of Septuagesima',1);
	hidden('Septuagesima',2);
	head_temp(2,'Dominica in Septuagesima', 'Septuagesima Sunday');

	hour('1V');
	rubrics('ps/SaVant.php');	
	lc('1cor9_24.php');
	hymn('jam_sol_recedit_igneus.php',1);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php');
	ant('PrTemp/septuagesima/70m1.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/septuagesima/70.php');
	vrS('benedicamus_domino_aa.php');
	space();
	rubp('Et sic dicitur præcedens versus, etiam si Vesperæ fuerint de festo I vel II classis.', 'And here is said the preceding verse, even if Vespers is from a feast of the I or II class.');
	rubp('Et deinceps non dicitur <snr>Allelúja</s>, usque ad Sabbatum sanctum. Sed post <snr>Deus, in adjutórium</s>, ubi dicebatur <snr>Allelúja</s>, dicitur <snr>Laus tibi, Dómine, Rex ætérnæ glóriæ.</s>', 'And from this point <snr>Alleluia</s> is not said, until Holy Saturday. Instead, after <snr>O God, come to my assistance</s>, where <snr>Alleluia</s> is said, <snr>Praise be to thee, O Lord, King of eternal glory</s> is said in its place.');
	space();

	hour('L');
	ant('prTemp/septuagesima/70L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/septuagesima/70L.php','02222');	
	lc('1cor9_24.php');
	hymn('aeterne_rerum_conditor.php',1);
	vrS('PrTemp/domine_refugium_factus_es_nobis.php');
	ant('PrTemp/septuagesima/70b.php','B');
	space();

	ordref(0,6.1,0);
	space();

	hour('P');
	rubp('Psalmi 53, <snr>Deus, in nómine</s>, 118i, <snr>Beáti</s>, et 118ii, <snr>Retríbue</s>, ut in Psalterio, <snr>p. '.bkref('psDP53').'</s>: qui dicuntur etiam in dominicis sequentibus, usque ad dominicam II Passionis inclusive.', 'At Prime, Psalm 53, <snr>Save me, O God</s>, 118i, <snr>Blessed are</s>, et 118ii, <snr>Give bountifully</s>, as in the Psalter, <snr>p. '.bkref('psDP53').'</s>: which are said on all following Sundays, until the second Sunday of Passiontide inclusive.');
	rubp('Ad absolutionem capituli lectio brevis <snr>Dóminus autem</s>.', 'At the end of the hour the brief lesson <snr>And the Lord</s>.');
	space();

	hour('T');
	lc('1cor9_24.php');
	brS('Ord/inclina_cor_meum_deus_in_testimonia_tua.php');
	vrS('Ord/ego_dixi_domine_miserere_mei.php');
	space();

	hour('S');
	lc('1cor9_25.php');
	brS('Ord/in_aeternum_domine_permanet_verbum_tuum.php');
	vrS('Ord/dominus_regit_me_et_nihil_mihi_deerit.php');
	space();

	hour('N');
	lc('1cor10_4-5.php');
	brS('Ord/clamavi_in_toto_corde_meo_exaudi_me_domine.php');
	vrS('Ord/ab_occultis_meis_munda_me_domine.php');
	space();


	hour('2V');
	rubrics('ps/SuVant.php');	
	lc('1cor9_24.php');
	hymn('lucis_creator_optime.php',1);
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('PrTemp/septuagesima/70m2.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/septuagesima/70.php');
	space();

	feria(2,4);
	ant('PrTemp/septuagesima/70f2m.php','M');
	space();

	feria(3,4);
	ant('PrTemp/septuagesima/70f3m.php','M');
	space();

	feria(4,4);
	ant('PrTemp/septuagesima/70f4m.php','M');
	space();

	feria(5,4);
	ant('PrTemp/septuagesima/70f5m.php','M');
	space();

	feria(6,4);
	ant('Psalter/6Fri/6m.php','M');
	space();

	feria(7,4);
	rubrics('de_officio_festi_vel_bvm_sat.php');

?>
