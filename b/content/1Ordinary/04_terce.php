<?php
	img();
	bookmark('orTerce');
	hour('T','O');
	rubp('<snr>29</s> Tertia absolute incipitur versu:',
		'<snr>29</s> Terce always begins with this verse:');
	vr('deus_in_adjutorium.php');

	rubp('<snr>30</s> De hymno','<snr>30</s> The hymn',1);
	hymn('nunc_sancte_nobis_spiritus.php');
	rubp('<snr>¶</s> In festo Pentecostes et per octavam, loco preæcedentis, dicitur hymnus <snr>Veni, Creátor Spíritus</s>, <snr>p. '. bkref('veni_creator_spiritus') . '</s>.',
		'<snr>¶</s> On the feast of Pentecost and during the octave, in place of the preceding, recite the hymn <snr>Veni, Creátor Spíritus</s>, <snr>p. '. bkref('veni_creator_spiritus') . '</s>.');

	head('De antiphona et psalmis','The antiphon and psalms',2);
	rubp('<snr>31</s> Expleto hymno, conveniens dicitur antiphona, prouti Officium occurrens requirit; et sub unica antiphona dicuntur tres psalmi.',
		'<snr>31</s> After the hymn, say the proper antiphon, according to the Office of the day; and under this one antiphon recite all three psalms.');
	rubp('','The Psalms and Antiphon, unless proper, are given in the Psalter:
Sunday (<snr>p. '. bkref('psDT') .'</s>) 
Monday (<snr>'. bkref('ps2T') .'</s>) 
Tuesday (<snr>'. bkref('ps3T') .'</s>) 
Wednesday (<snr>'. bkref('ps4T') .'</s>) 
Thursday (<snr>'. bkref('ps5T') .'</s>) 
Friday (<snr>'. bkref('ps6T') .'</s>) 
Saturday (<snr>'. bkref('psST') .'</s>).');

	head('De capitulo et responorio brevi','The little chapter and brief response',2);
	rubp('<snr>32</s> Repetita post ultimum psalmum antiphona, subditur capitulum et responsorium breve, prouti Officium occurrens requirit.',
		'<snr>32</s> After the antiphon is repeated after the last psalm, the little chapter and brief response are said, according to the Office of the day.');
	
	head('De oratione','The Collect',2);
	rubp('<snr>33</s> Expleto responsorio brevi, statim dicitur:',
		'<snr>33</s> After the brief response, the following is said immediately:');
	vr('dv_de_LV.php');
	vr('oremus.php');
	rubp('Et dicitur oratio, quæ dicta est in Laudibus.','And recite the prayer which was said at Lauds.');

	head('De conclusione Tertiæ','The conclusion of Terce',2);
	rubp('<snr>34</s> Post ultimam orationem additur:',
		'<snr>34</s> After the last prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	rubp('Et ita absolvuntur Tertia.','And thus Terce is ended.');

?>
