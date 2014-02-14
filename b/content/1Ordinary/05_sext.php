<?php
	img();
	bookmark('orSext');
	hour('S','O');
	rubp('<snr>35</s> Sexta absolute incipitur versu:',
		'<snr>35</s> Sext always begins with this verse:');
	vr('deus_in_adjutorium.php');

	rubp('<snr>36</s> De hymno','<snr>36</s> The hymn',1);
	hymn('rector_potens_verax_deus.php');

	head('De antiphona et psalmis','The antiphon and psalms',2);
	rubp('<snr>37</s> Expleto hymno, conveniens dicitur antiphona, prouti Officium occurrens requirit; et sub unica antiphona dicuntur tres psalmi.',
		'<snr>37</s> After the hymn, say the proper antiphon, according to the Office of the day; and under this one antiphon recite all three psalms.');
	rubp('','The Psalms and Antiphon, unless proper, are given in the Psalter:
Sunday (<snr>p. '. bkref('psDS') .'</s>) 
Monday (<snr>'. bkref('ps2S') .'</s>) 
Tuesday (<snr>'. bkref('ps3S') .'</s>) 
Wednesday (<snr>'. bkref('ps4S') .'</s>) 
Thursday (<snr>'. bkref('ps5S') .'</s>) 
Friday (<snr>'. bkref('ps6S') .'</s>) 
Saturday (<snr>'. bkref('psSS') .'</s>).');

	head('De capitulo et responorio brevi','The little chapter and brief response',2);
	rubp('<snr>38</s> Repetita post ultimum psalmum antiphona, subditur capitulum et responsorium breve, prouti Officium occurrens requirit.',
		'<snr>38</s> After the antiphon is repeated after the last psalm, the little chapter and brief response are said, according to the Office of the day.');
	
	head('De oratione','The Collect',2);
	rubp('<snr>39</s> Expleto responsorio brevi, statim dicitur:',
		'<snr>39</s> After the brief response, the following is said immediately:');
	vr('dv_de_LV.php');
	vr('oremus.php');
	rubp('Et dicitur oratio, quæ dicta est in Laudibus.','And recite the prayer which was said at Lauds.');

	head('De conclusione Sextæ','The conclusion of Sext',2);
	rubp('<snr>40</s> Post ultimam orationem additur:',
		'<snr>40</s> After the last prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	rubp('Et ita absolvuntur Sexta.','And thus Sext is ended.');

?>
