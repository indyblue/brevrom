<?php
	$matins = $_GET['matins'];
if($matins) {
	bookmark('psDM');
	dayhour(1,'M');
	space();
	rubp('Dominica, a die 14 Jan usque Septuagesimam, et a die 1 Oct usque ad diem 26 Nov inclusive:', 'Sunday, from 14 Jan through Septuagesima, and 1 Oct through 26 Nov, inclusive:',0);
	ant('Ord/Inv1Winter.php','I');
	rubrics('head/HymnVerse.php');
	hymn('primo_die_quo_trinitas.php');

	space();
	rubp('Dominica, post Pentecosten usque ad diem 30 Sept.', 'Sunday, after Pentecost until 30 Sept, inclusive.',0);
	ant('Ord/Inv1Summer.php','I');
	rubrics('head/HymnVerse.php');
	hymn('nocte_surgentes_vigilemus_omnes.php');

	multiant(1,0,'200000000');
	psalm(1);
	space('Spacer');
	multiant(1,0,'120000000');
	psalm(2);
	space('Spacer');
	multiant(1,0,'012000000');
	psalm(3);
	space('Spacer');
	multiant(1,0,'001200000');
	psalm(8);
	space('Spacer');
	multiant(1,0,'000120000');
	psalm(9,1);
	space('Spacer');
	multiant(1,0,'000012000');
	psalm(9,2);
	space('Spacer');
	multiant(1,0,'000001200');
	psalm(9,3,1);
	space('Spacer');
	multiant(1,0,'000000120');
	psalm(9,4,1);
	space('Spacer');
	multiant(1,0,'000000012');
	psalm(10);
	space('Spacer');
	multiant(1,0,'000000001');
	space();
	vrS('praevenerunt_oculi_mei_ad_te_diluculo.php');
	vr('pater_silent_vr.php');

	space();
	ant('Matins/n1a_exaudi_domine.php','A');

	space();
	img(); 
}
	bookmark('psDL1');
	dayhour(1,'L1');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/1L1.php','20000');
	bookmark('PsSuL1');
	psalm(92);
	space('Spacer');
	ant('Psalter/1Sun/1L1.php','12000');
	psalm(99);
	space('Spacer');
	ant('Psalter/1Sun/1L1.php','01200');
	psalm(62);
	space('Spacer');
	ant('Psalter/1Sun/1L1.php','00120');
	canticle('threechildren.php');
	space('Spacer');
	ant('Psalter/1Sun/1L1.php','00012');
	psalm(148);
	space('Spacer');
	ant('Psalter/1Sun/1L1.php','00001');
	ant('Psalter/alleluia.php','p');
	rubrics('ps/hour_continues.php');
	lc('apoc7_12.php');
	rubrics('head/HymnVerse.php');
	hymn('aeterne_rerum_conditor.php',0);
	hymn('ecce_jam_noctis_tenuatur_umbra.php',0);
	vrS('Ord/dominus_regnavit_decorem_induit.php');
	dayhourE(1,'L');

	space();
	img(); 
	bookmark('psDL2');
	dayhour(1,'L2');
	rubp('Antiphonæ de Laudibus dominicæ currentis, ut in Proprio de Tempore.','Antiphons as in Lauds of the current Sunday Office, as in the Proper of Seasons.');
	bookmark('PsSuL2');
	head('1','I',5);
	bookmark('Ps50');
	psalm(50);
	head('2','II',5);
	psalm(117);
	head('3','III',5);
	psalm(62);
	head('4','IV',5);
	canticle('threechildren2.php');
	head('5','V',5);
	psalm(148);
	rubp('Capitulum, Hymnus, Versus et Ant. ad <snr>Benedíctus</s>, ut in Proprio de Tempore.','Little Chapter, Hymn, Verse, and <snr>Benedíctus</s> Ant., as in the Proper of Seasons.');

	space();
	img(); 
	bookmark('psDP');
	dayhour(1,'P');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/2P.php');
	psalm(117);
	space('Line');
	rubp('<snr>¶</s> In dominicis a Septuagesima usque ad dominicam II Passionis inclusive, in vigilia et die octavo Nativitatis Domini, in Triduo sacro, in festis I classis, diebus infra octavas Paschatis et Pentecostes, loco Ps. 117, <snr>Confitémini Dómino</s>, dicitur sequens:','<snr>¶</s> In sundays from Septuagesima until the second Sunday of Passiontide inclusive, in the vigil and octave day of the Nativity of the Lord, in the Sacred Triduum, in I class feasts, and days in the octaves of Easter and Pentecost, in place of Ps. 117, <snr>Confitémini Dómino</s>, say the following:');
	bookmark('psDP53');
	psalm(53);
	space('Line');
	psalm(118,1);
	psalm(118,2);
	ant('Psalter/1Sun/2P.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(1,'P');

	space();
	img(); 
	bookmark('psDT');
	dayhour(1,'T');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/3T.php');
	psalm(118,3);
	psalm(118,4);
	psalm(118,5);
	ant('Psalter/1Sun/3T.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(1,'T');

	space();
	img(); 
	bookmark('psDS');
	dayhour(1,'S');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/4S.php');
	psalm(118,6);
	psalm(118,7);
	psalm(118,8);
	ant('Psalter/1Sun/4S.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(1,'S');

	space();
	img(); 
	bookmark('psDN');
	dayhour(1,'N');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/5N.php');
	psalm(118,9);
	psalm(118,10);
	psalm(118,11);
	ant('Psalter/1Sun/5N.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(1,'N');

	space();
	img(); 
	bookmark('psDV');
	dayhour(1,'2V');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/6V.php','20000');
	bookmark('PsSuV');
	psalm(109,0,1);
	space('Spacer');
	ant('Psalter/1Sun/6V.php','12000');
	psalm(110);
	space('Spacer');
	ant('Psalter/1Sun/6V.php','01200');
	psalm(111);
	space('Spacer');
	ant('Psalter/1Sun/6V.php','00120');
	psalm(112);
	space('Spacer');
	ant('Psalter/1Sun/6V.php','00012');
	psalm(113);
	space('Spacer');
	ant('Psalter/1Sun/6V.php','00001');
	ant('Psalter/alleluia.php','p');
	space('Line');
	rubp('<snr>¶</s> Loco psalmi quinti ad Vesperas in pluribus festis:','<snr>¶</s> On many feasts, the following is said in place of the fifth psalm, Ps. 113 <snr>In éxitu Israël</s>:');
	bookmark('Ps116');
	psalm(116);
	space('Line');
	rubrics('ps/hour_continues.php');
	lc('2cor1_3-4.php');
	rubrics('head/HymnVerse.php');
	hymn('lucis_creator_optime.php',0);
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	dayhourE(1,'V');

	space();
	img(); 
	bookmark('psDC');
	dayhour(1,'C');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/1Sun/7C.php');
	psalm(4);
	psalm(90);
	bookmark('Ps133');
	psalm(133);
	ant('Psalter/1Sun/7C.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(1,'C');

?>
