<?php
	bookmark('AdventOAnt');
	hidden('Advent',1);
	hidden('Great Antiphons',2);
	head('Antiphonæ Majores <r>ad</s> Magificat', 'Great Antiphons <r>at the</s> Magnificat',2);

	rubp('inchoantur die 17 decembris, et singulæ dicuntur per ordinem, usque ad diem ante vigiliam Nativitatis. Si vero festum fuerit, dicuntur post orationem festi, pro commemoratione Adventus.', 'these are begun on December 17th, and each is said in order, up to the day before the vigil of the Nativity. If a feast is to be celebrated, the antiphon is said after the prayer of the feast, for the commemoration of Advent.');

	space();
	head('die 17 decembris','December 17',2);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	head('Antiphona','Antiphon',4);
	prayer('PrTemp/advent/OAnt17.php');
	rubp('Feria IV et VI dicuntur preces.', 'Wednesday and Friday, preces are said.');
/*
	rubp('Dominica III Adventus necnon feriis II, III et V seq.:', 'Third week of Advent, on Monday, Tuesday and Thursday:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/03.php');
	rubp('Feria IV Quatuor Temporum:', 'Wednesday Ember Day:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/03e4.php');
	rubp('Feria VI Quatuor Temporum:', 'Friday Ember Day:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/03e6.php');
	rubp('Ad I Vesperas dominicæ IV Adventus:', 'I Vespers of the Fourth Sunday of Advent:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/04.php');
 */

	head('18','18',2);
	ant('PrTemp/advent/OAnt/18.php','*');
	head('19','19',2);
	ant('PrTemp/advent/OAnt/19.php','*');
	head('20','20',2);
	ant('PrTemp/advent/OAnt/20.php','*');
	head('21','21',2);
	ant('PrTemp/advent/OAnt/21.php','*');
	head('22','22',2);
	ant('PrTemp/advent/OAnt/22.php','*');
	head('23','23',2);
	ant('PrTemp/advent/OAnt/23.php','*');

	space();
	head('Antiphonæ ad Laudes', 'Antiphons at Lauds',2);
	head('et per Horas','and the Little Hours',5);
	rubp('dicuntur in sex feriis ante vigiliam Nativitatis, et incipuntur die 17 decembris ab antiphonis quæ feriæ illius diei assignantur. Similiter et aliæ dicuntur in propriis feriis. Quod si dies 17 fuerint dominica, antiphonæ inchoantur sequenti feria II, quae erit dies 18. Quæ dicendæ essent diebus quibus occurrit quodlibet festum I classis, aut festum II classis Ecclesiæ universæ, eo anno imittuntur.', 'these are said on the six ferias before the Vigil of the Nativity, beginning on December 17th, with the antiphons assigned for that weekday on which it may fall. Likewise the other antiphons are said on their proper weekdays. But if the 17th is a Sunday, the antiphons are begun on the following Monday, the 18th. But those which would have been said on a I or II class feast of the universal Church are omitted for that year.');
	space();
	bookmark('Advent21b');
	head('die 21 decembris', 'December 21',2);
	rubp('si fiat Officium de festo occurenti, pro commemoratione Adventus, ad Laudes ponitur:', 'if the Office is of an occuring feast, at the commemoration of Advent at Lauds use:');
	ant('prTemp/advent/21b.php','*');
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	rubp('Si vero ea die fiat Officium de dominica, antiphona prædicta dicitur ad <snr>Benedíctus</s>, loco antiphonæ <snr>Ave, María</s>.', 'If this day occurs on a Sunday, the above antiphon is said at the <snr>Benedictus</s>, in place of the antiphon <snr>Hail, Mary</s>.');
	space();
	bookmark('Advent23b');
	head('Ultimo die', 'Final day',2);
	head('ante vigiliam Nativitatis', 'before the vigil of the Nativity',4);
	ant('prTemp/advent/23b.php','B');
	rubp('Quibus antiphonis cedunt aliæ antiphonæ in propriis locis ad <snr>Benedíctus</s> assignatæ.', 'To this antiphon, the other antiphons assigned to the <snr>Benedictus</s> give place.');

?>
