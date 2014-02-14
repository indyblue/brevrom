<?php
	img();
	bookmark('orPrime');
	hour('P','O');
	rubp('<snr>19</s> Prima absolute incipitur versu:',
		'<snr>19</s> Prime always begins with this verse:');
	vr('deus_in_adjutorium.php');

	rubp('<snr>20</s> De hymno','<snr>20</s> The hymn',1);
	hymn('jam_lucis_orto_sidere.php');

	head('De antiphona et psalmis','The antiphon and psalms',2);
	rubp('<snr>21</s> Expleto hymno, conveniens dicitur antiphona, prouti Officium occurrens requirit; et sub unica antiphona dicuntur tres psalmi.',
		'<snr>21</s> After the hymn, say the proper antiphon, according to the Office of the day; and under this one antiphon recite all three psalms.');
	rubp('','The Psalms and Antiphon, unless proper, are given in the Psalter:
Sunday (<snr>p. '. bkref('psDP') .'</s>) 
Monday (<snr>'. bkref('ps2P') .'</s>) 
Tuesday (<snr>'. bkref('ps3P') .'</s>) 
Wednesday (<snr>'. bkref('ps4P') .'</s>) 
Thursday (<snr>'. bkref('ps5P') .'</s>) 
Friday (<snr>'. bkref('ps6P') .'</s>) 
Saturday (<snr>'. bkref('psSP') .'</s>).');

	head('De capitulo et responorio brevi','The little chapter and brief response',2);
	rubp('<snr>22</s> Repetita post ultimum psalmum antiphona, semper dicitur sequens:',
		'<snr>22</s> After the antiphon is repeated after the last psalm, always say the following:');
	bookmark('1tim1_17');
	lc('1tim1_17.php');

	rubp('<snr>23</s> Deinde subjungitur responsorium breve, ut sequitur.',
		'<snr>23</s> Then the brief response is added, as follows.');
	rubp('Versus tamen <snr>Qui sedes ad déxteram Patris</s> mutatur in iis Officiis et anni temporibus, pro quibus proprius assignatur.',
		'The verse <snr>Qui sedes ad déxteram Patris</s> changes according to the Office and season, as specified in the propers.');

	rubrics('head/PTnot.php');
	brS('Ord/christe_fili_dei_vivi_miserere_nobis.php',0,10);
	vrS('Ord/exsurge_christe_adjuva_nos.php');
	space();
	rubp('','Advent Season, and on Christmas Eve');
	PrV('qui_venturus_es_in_mundum.php',1);
	rubp('','In the Christmas Season, Feasts of BVM, and Saturday Office of BVM');
	PrV('qui_natus_es_de_maria_virgine.php',1);
	rubp('','In the Epiphany Season');
	PrV('qui_apparuisti_hodie.php',1);

	space();
	rubp('Tempore Passionis, in Officio dominicali et feriali, omittitur in responsorio brevi <snr>Glória Patri</s>, et hujus loco repetitur responsorium, ut sequitur:',
		'In Passiontide, in the Sunday and ferial office, omit the <snr>Glória Patri</s> in the brief response, and in its place the response is repeated as follows:');
	brS('Ord/christe_fili_dei_vivi_miserere_nobis.php',0,11);
	vrS('Ord/exsurge_christe_adjuva_nos.php');

	space();
	rubrics('head/PT.php');
	brS('Ord/christe_fili_dei_vivi_miserere_nobis_PT.php',1,10);
	vrS('Ord/exsurge_christe_adjuva_nos.php',1);
	space();
	rubp('','In Ascensiontide');
	PrV('qui_scandis_super_sidera.php',1);
	rubp('','In the Octave of Pentecost:');
	PrV('qui_sedes_ad_dexteram_patris.php',1);
	space();
	rubp('<snr>¶</s> Hoc modo dicuntur semper responsoria brevia, etiam ad Tertiam, Sextam, Nonam et Completorium.',
		'<snr>¶</s> This method of recitation is used in all brief responses, likewise at Terce, Sext, None and Compline.');

	head('De oratione','The Collect',2);
	rubp('<snr>24</s> Post responsorium breve cum suo versu statim dicitur:',
		'<snr>24</s> After the brief response the following is said immediately:');
	vr('dv_de.php');
	vr('oremus.php');
	prayer('Ord/prime01.php',1);
	rubp('Ac deinde subjungitur:','And then is said:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');

	head('De lectione Martyrologii','The reading of the Martyrology',2);
	rubp('<snr>25</s> Deinde, in choro, legitur Martyrologium, quod convenienter fit etiam extra chorum.',
		'<snr>25</s> Then, in choir, the Martyrology is read, and also when convenient out of choir.');
	rubp('Postea hebdomadarius dicit:','Then the Officiant says:');
	vrS('Ord/pretiosa_in_conspectu_domini.php');
	rubp('Et absolute, sine <snr>Orémus</s>:',
		'And then, without <snr>Orémus</s>, is said:',1);
	prayer('Ord/prime02.php',1);
	
	head('De Officio Capituli','The Office of the Chapter',2);
	rubp('<snr>26</s> Expleta lectione Martrologii cum versu et oratione subsequenti, Prima sic prosequitur:',
		'<snr>26</s> After the reading of the Martyrology with the subsequent verse and prayer, Prime continues as follows:');
	vrS('Ord/deus_in_adjutorium_meum_intende.php');
	rubp('Et dicitur ter; ultimo additur:',
		'Which is said thrice, then followed by:');
	vrS('Ord/gloria_patri.php');
	vrS('Ord/kyrie_eleison.php');
	rubrics('ord/pater_silent_vr.php');
	vrS('Ord/respice_in_servos_tuos_domine.php');
	vrS('Ord/gloria_patri.php');
	vr('oremus.php');
	prayer('Ord/prime03.php',1);

	head('De lectione brevi','The brief lesson',2);
	rubp('<snr>27</s> Deinde dicitur lectio brevis, ad absolutionem Capituli, juxta diversitatem temporum.',
		'<snr>27</s> Then is said the brief lesson, at the end of the Chapter, according to the season.');
	rubp('Præmittitur:','First is said:');
	vr('jube_domine.php');
	rubp('','<snr>¶</s> In recitation alone, or when a Priest or Deacon is not present, <snr>Dómine</s> is said in place of <snr>domne</s>.');
	vr('bened_dies_et.php');
	lc('is33_2.php',0,2,'In Advent:');
	lc('hebr1_11-12.php',0,3,'Christmas Season:');
	lc('is60_6.php',0,3,'Epiphany Season:');
	lc('is55_6.php',0,3,'Lent:');
	lc('is50_6-7.php',0,3,'Passiontide:');
	lc('col3_1-2.php',0,3,'Easter Season:');
	lc('acts1_11.php',0,3,'Ascensiontide:');
	lc('acts2_11.php',0,3,'Octave of Pentecost:');
	lc('2thess3_5.php',0,3,'All other times:');

	head('De conclusione Primæ','The conclusion of Prime',2);
	rubp('<snr>28</s> Ac deinde subditur:',
		'<snr>28</s> And then is said:');
	vrS('Ord/adjutorium+nostrum_in_nomine_domini.php');
	vrS('Ord/benedicite.php');
	vr('prime_bened.php');
	rubp('Et ita absolvitur Prima.','And thus Prime is ended.');

?>

