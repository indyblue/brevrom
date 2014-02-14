<?php
	img();
	bookmark('orNone');
	hour('N','O');
	rubp('<snr>41</s> Nona absolute incipitur versu:', '<snr>41</s> None always begins with this verse:');
	vr('deus_in_adjutorium.php');

	rubp('<snr>42</s> De hymno','<snr>42</s> The hymn',1);
	hymn('rerum_deus_tenax_vigor.php');

	head('De antiphona et psalmis','The antiphon and psalms',2);
	rubp('<snr>43</s> Expleto hymno, conveniens dicitur antiphona, prouti Officium occurrens requirit; et sub unica antiphona dicuntur tres psalmi.',
		'<snr>43</s> After the hymn, say the proper antiphon, according to the Office of the day; and under this one antiphon recite all three psalms.');
	rubp('','The Psalms and Antiphon, unless proper, are given in the Psalter: 
		Sunday (<snr>p. '. bkref('psDN') .'</s>) 
		Monday (<snr>'. bkref('ps2N') .'</s>) 
		Tuesday (<snr>'. bkref('ps3N') .'</s>) 
		Wednesday (<snr>'. bkref('ps4N') .'</s>) 
		Thursday (<snr>'. bkref('ps5N') .'</s>) 
		Friday (<snr>'. bkref('ps6N') .'</s>) 
		Saturday (<snr>'. bkref('psSN') .'</s>).');

	head('De capitulo et responorio brevi','The little chapter and brief response',2);
	rubp('<snr>44</s> Repetita post ultimum psalmum antiphona, subditur capitulum et responsorium breve, prouti Officium occurrens requirit.', '<snr>44</s> After the antiphon is repeated after the last psalm, the little chapter and brief response are said, according to the Office of the day.');
	
	head('De oratione','The Collect',2);
	rubp('<snr>45</s> Expleto responsorio brevi, statim dicitur:', '<snr>45</s> After the brief response, the following is said immediately:');
	vr('dv_de_LV.php');
	vr('oremus.php');
	rubp('Et dicitur oratio, quæ dicta est in Laudibus.','And recite the prayer which was said at Lauds.');

	head('De conclusione Nonæ','The conclusion of None',2);
	rubp('<snr>46</s> Post ultimam orationem additur:', '<snr>46</s> After the last prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	rubp('Et ita absolvuntur Nona.','And thus None is ended.');

?>
