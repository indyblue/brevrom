<?php
	img();
	bookmark('orVespers');
	hour('V','O');
	rubp('<snr>47</s> Vesperæ absolute incipiuntur versu:', '<snr>47</s> Vespers always begins with this verse:');
	vr('deus_in_adjutorium.php');

	head('De antiphonis et psalmis','Antiphons and psalms',2);
	rubp('<snr>48</s> Deinde sub congruentibus antiphonis dicuntur psalmi et canticum, prouti Officium occurrens requirit.', '<snr>48</s> Then with the corresponding antiphons, the psalms and canticle are said, according to the Office of the day.');
	rubp('','The Psalms and Antiphons, unless proper, are given in the Psalter: 
		Sunday (<snr>p. '. bkref('psDV') .'</s>) 
		Monday (<snr>'. bkref('ps2V') .'</s>) 
		Tuesday (<snr>'. bkref('ps3V') .'</s>) 
		Wednesday (<snr>'. bkref('ps4V') .'</s>) 
		Thursday (<snr>'. bkref('ps5V') .'</s>) 
		Friday (<snr>'. bkref('ps6V') .'</s>) 
		Saturday (<snr>'. bkref('psSV') .'</s>).');

	head('De capitulo, hymno et versu','The Little Chapter, Hymn and versicle',2);
	rubp('<snr>49</s> Repetita antiphona post ultimum psalmum, dicitur capitulum, hymnus et versus, prouti Officium occurrens requirit.', '<snr>49</s> After Repeating the antiphon after the last psalm, recite the little chapter, hymn and versicle, according to the Office of the day.');

	head('De cantico <snr>Magníficat</s>','The canticle <snr>Magníficat</s>',2);
	rubp('<snr>50</s> Recitato versu, dicitur cum antiphona convenienti sequens:', '<snr>50</s> After reciting the versicle, recite, with the proper antiphon, the following:');
	bookmark('magnificat');
	canticle('magnificat.php');
	reading('vr/gloria_patri-s.php',0);

	head('De precibus','The Preces, or Prayers',2);
	rubp('<snr>51</s> Quando, juxta rubricas (n. 260), preces sunt dicendæ post repetitam antiphonam ad <snr>Magníficat</s>, dicitur, flexis genibus. (<snr>p. '. bkref('preces') .'</s>)', '<snr>51</s> When, according to the rubrics (n. 260), the preces are to be said, after the antiphon at the <snr>Magníficat</s> is repeated , say the Preces, while kneeling. (<snr>p. '. bkref('preces') .'</s>)');

	head('De oratione','The Collect',2);
	rubp('<snr>52</s> Expleto cantico et repetita antiphona, si preces non fuerint recitandæ, statim dicitur:', '<snr>52</s> After the <snr>Magníficat</s> and the antiphon is repeated, if the preces are not to be recited, the following is said immediately:');
	vr('dv_de_LV.php');
	vr('oremus.php');
	rubp('Et dicitur oratio conveniens.','And recite the prayer of the day.');
	rubp('Postea fiunt commemorationes, si occurunt.', 'Afterwards commemorations are made, if they occur.');
	rubp('Commemorationes privilegiatæ sola fiunt in Vesperi: (a) de dominica; (b) de die liturgico I classis; (c) de diebus infra octavam Nativitatis Domini; (d) de feriis Quatuor Temporum mensis septembris; (e) de feriis Adventus, Quadragesimæ et Passionis.',
		'Only privileged commemorations are made at Vespers; that is: (a) of a Sunday; (b) of a liturgical day of the 1st class; (c) of days within the octave of Christmas; (d) of Ember Days in September; (e) of ferias of Advent, Lent and Passiontide.');

	head('De conclusione Vesperarum','The conclusion of Vespers',2);
	rubp('<snr>53</s> Post ultimam orationem additur:', '<snr>53</s> After the last prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	rubp('Et ita absolvuntur Vesperæ.','And thus Vespers is ended.');

?>
