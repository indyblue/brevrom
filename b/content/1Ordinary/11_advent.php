<?php
	img();
	head('Tempore Adventus','Advent Season',1,'Ordinary','Advent');

	hour('L');
	rubp('In Officio dominicali et in vigilia Nativitatis Domini, antiphonæ propriæ, psalmi de dominica 1° loco.',
		'In the Sunday Office and on the vigil of the Nativity of our Lord, the antiphons are proper, and the psalms are of Sunday scheme I.');
	rubp('In Officio feriali: usque ad diem 16 decembris, antiphonæ et psalmi de feria currenti 2° loco; a die 17 decembris, antiphonæ propriæ, psalmi de feria currenti 2° loco.',
		'In the ferial (weekday) Office: until 16 December, antiphons and psalms of the current day, scheme II; Starting 17 December, the antiphons are proper, psalms of the current day, scheme II.');
	
	head('De capitulo','The little chapter',3);
	rubp('In Officio dominicali et in vigilia Nativitatis Domini, ut in Proprio de Tempore.',
		'In the Sunday Office and on the vigil of the Nativity of our Lord, as in the Proper of Seasons.');
	rubp('In Officio feriali, dicitur cotidie sequens:',
		'In the ferial Office, every day is said the following:');
	lc('is2_3.php');

	head('De hymno et versu','The hymn and verse',3);
	rubp('In Officio tam dominicali quam feriali, dicitur sequens hymnus et versus:',
		'In both the Sunday and ferial Office, the following hymn and verse is said:');
	hymn('en_clara_vox_redarguit.php');
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php');

	head('Preces','Preces',3);
	rubp('Preces (<snr>p. '. bkref('precesL' .'</s>) dicuntur: (a) in Laudibus feriæ IV et VI temporis Adventus, et in Laudibus sabbatorum Quatuor Temporum.',
		'The preces (<snr>p. '. bkref('precesL' .'</s>) are said: (a) in Lauds of Wed. and Fri. in the seasons of Advent, and in Lauds of Ember Saturdays.');

	hour('P');
	rubp('In Officio dominicali et in vigilia Nativitatis Domini, antiphona prima de Laudibus, ut in Proprio de Tempore.',
		'In the Sunday Office and on the vigil of the Nativity of our Lord, the first antiphon of Lauds, as in the Proper of Seasons');
	rubp('In Officio feriali, antiphona prima de Laudibus antecedentis dominicæ; et a die 17 usque ad 23 decembris ex Laudibus feriæ currentis, ut in Proprio de Tempore.',
		'In the ferial Office, the first antiphon of Lauds of the preceding Sunday; but from 17 to 23 December, first antiphon of Lauds of the current day, as in the Proper of Seasons.');
	head('De versu in responsorio brevi','The verse in the brief response',3);
	rubp('In omnibus Officiis tam de Tempore quam de Sanctis, nisi proprius assignetur, in responsorio brevi, dicitur cotidie sequens:',
		'In all Offices, of the Season and of Saints, unless a proper verse is specified, in the brief response the following is said daily:');
	PrV('qui_venturus_es_in_mundum.php',1);
	head('De lectione brevi','The brief lesson',3);
	rubp('In omnibus Officiis tam de tempore quam de Sanctis, dicitur cotidie sequens:',
		'In all Offices, of the Season and of Saints, the following is said daily:');
	lc('is33_2.php',0,3);

	hour('T');
	rubp('','Antiphon follows the same rules as in Prime, except that at Terce the second antiphon of Lauds is said.');


?>

