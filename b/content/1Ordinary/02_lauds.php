<?php
	img();
	bookmark('orLauds');
	hour('L','O');
	rubp('<snr>12</s> Laudes absolute incipiuntur versu:',
		'<snr>12</s> Lauds always begins with this verse:');
	vr('deus_in_adjutorium.php');

	head('De antiphonis et psalmis','Antiphons and psalms',2);
	rubp('<snr>13</s> Deinde sub congruentibus antiphonis dicuntur psalmi et canticum, prouti Officium occurrens requirit.',
		'<snr>13</s> Then with the corresponding antiphons, the psalms and canticle are said, according to the Office of the day.');
	rubp('Alterum psalmorum schema adhibetur: (a) in dominicis temporis Septuagesimæ, Quadragesimæ et Passionis; (b) in omnibus feriis temporis Adventus, Septuagesimæ, Quadragesimæ et Passionis, Quatuor Temporum septembris, et in vigiliis II et III classis extra tempus paschale. Reliquis diebus, sumitur primum psalmorum schema.',
		'Scheme II of the psalms is used: (a) on Sundays of the seasons of Septuagesima, Lent, and Passiontide; (b) on all ferias of the seasons of Advent, Septuagesima, Lent and Passiontide, the September Ember Days, and on vigils of the 2nd and 3rd class outside of Paschaltide. Scheme I is used at all other times.');
	rubp('','The Psalms and Antiphons, unless proper, are given in the Psalter:');
	rubp('','Scheme I: 
Sunday (<snr>p. '. bkref('psDL1') .'</s>) 
Monday (<snr>'. bkref('ps2L1') .'</s>) 
Tuesday (<snr>'. bkref('ps3L1') .'</s>) 
Wednesday (<snr>'. bkref('ps4L1') .'</s>) 
Thursday (<snr>'. bkref('ps5L1') .'</s>) 
Friday (<snr>'. bkref('ps6L1') .'</s>) 
Saturday (<snr>'. bkref('psSL1') .'</s>).');
	rubp('','Scheme II: 
Sunday (<snr>p. '. bkref('psDL2') .'</s>) 
Monday (<snr>'. bkref('ps2L2') .'</s>) 
Tuesday (<snr>'. bkref('ps3L2') .'</s>) 
Wednesday (<snr>'. bkref('ps4L2') .'</s>) 
Thursday (<snr>'. bkref('ps5L2') .'</s>) 
Friday (<snr>'. bkref('ps6L2') .'</s>) 
Saturday (<snr>'. bkref('psSL2') .'</s>).');

	head('De capitulo, hymno et versu','The Little Chapter, Hymn and versicle',2);
	rubp('<snr>14</s> Repetita antiphona post ultimum psalmum, dicitur capitulum, hymnus et versus, prouti Officium occurrens requirit. In fine omnium capitulorum respondetur:',
		'<snr>14</s> After Repeating the antiphon after the last psalm, recite the little chapter, hymn and versicle, according to the Office of the day. At the end of all little chapters the response is:');
	vr('deo_gratias.php');

	head('De cantico <snr>Benedíctus</s>','The canticle <snr>Benedíctus</s>',2);
	rubp('<snr>15</s> Recitato versu, dicitur cum antiphona convenienti sequens:',
		'<snr>15</s> After reciting the versicle, recite, with the proper antiphon, the following:');
	bookmark('benedictus');
	canticle('benedictus.php');

	head('De precibus','The Preces, or Prayers',2);
	rubp('<snr>16</s> Quando, juxta rubricas (n. 260), preces sunt dicendæ post repetitam antiphonam ad <snr>Benedíctus</s>, dicitur, flexis genibus.',
		'<snr>16</s> When, according to the rubrics (n. 260), the preces are to be said, after the antiphon at the <snr>Benedíctus</s> is repeated , say the Preces, while kneeling.');
	rubp('<snr>R.260</s> Preces dicuntur tantum in Officiis de Tempore, et quidem: (a) in Laudibus et Vesperis feriæ IV et VI temporis Adventus, Quadragesimæ et Passionis; (b) in Laudibus et Vesperis feriæ IV et VI Quatuor Temporum mensis septembris; (c) in Laudibus sabbatorum Quatuor Temporum, excepto sabbato infra octavam Pentecostes.',
		'<snr>R.260</s> The preces are said only in Offices of the season, and then only: (a) in Lauds and Vespers of Wed. and Fri. in the seasons of Advent, Lent and Passiontide; (b) in Lauds and Vespers of the Ember Wed. and Fri. in September; (c) in Lauds of Ember Saturdays, except the Saturday in the octave of Pentecost.');
	bookmark('preces');
	vr('preces.php');
	space('line');

	head('De oratione','The Collect',2);
	rubp('<snr>17</s> Expleto cantico et repetita antiphona, si preces non fuerint recitandæ, statim dicitur:',
		'<snr>17</s> After the <snr>Benedíctus</s> and the antiphon is repeated, if the preces are not to be recited, the following is said immediately:');
	vr('dv_de_LV.php');
	vr('oremus.php');
	rubp('Et dicitur oratio conveniens.','And recite the prayer of the day.');
	rubp('Postea fiunt commemorationes, si occurunt.',
		'Afterwards commemorations are made, if they occur.');
	
	head('De conclusione Laudum','The conclusion of Lauds',2);
	rubp('<snr>18</s> Post ultimam orationem additur:',
		'<snr>18</s> After the last prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	rubp('Et ita absolvuntur Laudes.','And thus Lauds is ended.');

?>
