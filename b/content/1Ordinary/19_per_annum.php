<?php
	space();
	img();
	bookmark('OrPerAnnum');
	head('Per Annum','Throughout the Year',1,'Ordinary','Throughout the Year');
	rubp('Hujusmodi Ordinarium adhibebitur etiam tempore Septuagesimæ, necnon feria IV cinerum ac tribus feriis subsequentibus.', 'This Ordinary is followed also in the Season of Septuagesima, and also on Ash Wednesday and the three days following.');
	rubp('','All is said as shown here, except that which is otherwise specified in the Proper of Seasons');

	hour('L');
	rubp('','All as in the Psalter, unless otherwise specified in Proper of Seasons');
	head('Preces','Preces',3);
	rubp('Preces (<snr>p. '. bkref('preces') .'</s>) dicuntur: in Laudibus  feriæ IV, VI et sabbato Quatuor Temporum mensis septembris.', 'The preces (<snr>p. '. bkref('preces') .'</s>) are said: in Lauds of the Ember Wed., Fri. and Sat. in September.');

	hour('P');
	rubp('In omnibus Officiis tam de tempore quam de Sanctis, dicitur cotidie sequens:', 'In all Offices, of the Season and of Saints, the following is said daily:');
	lc('2thess3_5.php',0,3);

	hour('T');
	lc('jer17_14.php');
	brS('Ord/sana_animam_meam_quia_peccavi_tibi.php');
	vrS('Ord/adjutor_meus_esto_ne_derelinquas_me.php');

	hour('S');
	lc('rom13_8.php');
	brS('Ord/benedicam_dominum_in_omni_tempore.php');
	vrS('Ord/dominus_regit_me_et_nihil_mihi_deerit.php');

	hour('N');
	lc('1pet1_17.php');
	brS('Ord/redime_me_domine_et_miserere_mei.php');
	vrS('Ord/ab_occultis_meis_munda_me_domine.php');

	hour('V');
	rubp('','All as in the Psalter, unless otherwise specified in Proper of Seasons');
	rubp('Preces (<snr>p. '. bkref('preces') .'</s>) dicuntur: in Vesperis feriæ IV et VI Quatuor Temporum mensis septembris.', 'The preces (<snr>p. '. bkref('preces') .'</s>) are said: in Vespers of the Ember Wed. and Fri. in September.');

	space(2);
	img('amen.png',35);
	space(2);
?>
