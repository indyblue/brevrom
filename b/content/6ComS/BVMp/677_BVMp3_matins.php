<?php
  $htm =  $_GET['htm'];
	$long = $_GET['long'];
	$long = 1;

	hour('M');
	vrS('Ord/domine_labia_mea_aperies.php');
	vr('deus_in_adjutorium.php');
	space();
	ant('ave_maria.php','I');
	if($long==0)
		psref(94);
	else {
		ant('ave_maria.php','R');
		psalm('094bi.php');
	}
	space();
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
	space();
	if($long==0) {
		rubp('Antiphonæ et Psalmi ut in Communi Festorum beatæ Mariæ Virginis, scilicet:', 'Antiphons and Psalms as in the Common of Feasts of the Bl. Virg. Mary, given:',1);
		rubp('Dominica, Feria II et V: De I Nocturno <snr>['.bkref('csBVMMn1').']</s>.', 'Sunday, Monday, and Thursday: from I Nocturn <snr>['.bkref('csBVMMn1').']</s>.',1);
		rubp('Feria III et VI: De II Nocturno <snr>['.bkref('csBVMMn2').']</s>.', 'Tuesday and Friday: from II Nocturn <snr>['.bkref('csBVMMn2').']</s>.',1);
		rubp('Feria IV et Sabbato: De III Nocturno <snr>['.bkref('csBVMMn3').']</s>.', 'Wednesday and Saturday: from III Nocturn <snr>['.bkref('csBVMMn3').']</s>.',1);
	} else {
		

	rubp('Dominica, Feria II et V dicatur primus Nocturnus, De I Nocturno <snr>['.bkref('csBVMpMn1').']</s>; Feria III et VI secundus, <snr>['.bkref('csBVMpMn2').']</s>; Feria IV et Sabbato tertius <snr>['.bkref('csBVMpMn3').']</s>.', 
		'Sunday, Monday, and Thursday the first Nocturn is said <snr>['.bkref('csBVMpMn1').']</s>; Tuesday and Friday: from II Nocturn <snr>['.bkref('csBVMpMn2').']</s>; Wednesday and Saturday: from III Nocturn <snr>['.bkref('csBVMpMn3').']</s>.' ,1);

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDM') .'</s>) 
		Monday (<snr>'. bkref('ps2M') .'</s>) 
		Tuesday (<snr>'. bkref('ps3M') .'</s>) 
		Wednesday (<snr>'. bkref('ps4M') .'</s>) 
		Thursday (<snr>'. bkref('ps5M') .'</s>) 
		Friday (<snr>'. bkref('ps6M') .'</s>) 
		Saturday (<snr>'. bkref('psSM') .'</s>).');


	hidden('Matins 1st Nocturn',2);
	bookmark('csBVMpMn1');
		head('Dominica, Feria II et V:',
			'Sunday, Monday, and Thursday:',-4);
		ant('opBVMm.php','N00000000');
		psalm(8);
		space('Spacer');
		ant('opBVMm.php','120000000');
		psalm(18);
		space('Spacer');
		ant('opBVMm.php','012000000');
		psalm(23);
		space('Spacer');
		ant('opBVMm.php','001000000');

rubp('Postea dicitur Versus <snr>Diffúsa est</s> et sequens, ut infra <snr>p. '.bkref('csBVMpML1').'</s>.', 
'After which is said the Verse <snr>Grace is poured</s> and following, as below on <snr>p. '.bkref('csBVMpML1').'</s>, when only one Nocturn is said.');

	hidden('Matins 2nd Nocturn',2);
		space();
	bookmark('csBVMpMn2');
		head('Feria III et VI:',
			'Tuesday and Friday:',-4);
		ant('opBVMm.php','000N00000');
		psalm(44);
		space('Spacer');
		ant('opBVMm.php','000120000');
		psalm(45);
		space('Spacer');
		ant('opBVMm.php','000012000');
		psalm(86);
		space('Spacer');
		ant('opBVMm.php','000001000');

rubp('Postea dicitur Versus <snr>Diffúsa est</s> et sequens, ut infra <snr>p. '.bkref('csBVMpML1').'</s>.', 
'After which is said the Verse <snr>Grace is poured</s> and following, as below on <snr>p. '.bkref('csBVMpML1').'</s>, when only one Nocturn is said.');

	hidden('Matins 3rd Nocturn',2);
		space();
	bookmark('csBVMpMn3');
		head('Feria IV et Sabbato:',
			'Wednesday and Saturday:',-4);
		ant('opBVMm.php','000000N00');
		psalm(95);
		space('Spacer');
		ant('opBVMm.php','000000120');
		psalm(96);
		space('Spacer');
		ant('opBVMm.php','000000012');
		psalm(97);
		space('Spacer');
		ant('opBVMm.php','000000001');
	}

	space();
	hidden('Matins Lessons',2);
	bookmark('csBVMpML1');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	vr('pater_silent_vr.php');

	space();
	head('Absolutio.','The Absolution',-4);
	reading('bvm/precibus.php',0,10);
	vr('jube_domine.php');
	reading('bvm/nos_cum_prole.php',0,10);
	lc('ecclus24_11-13.php',0,'L1');
	rm('BVMp/mr1.php',0,1);
	space();

	vr('jube_domine.php');
	reading('bvm/ipsa_virgo.php',0,10);
	lc('ecclus24_15-16.php',0,'L2');
	rm('BVMp/mr2.php',0,3);
	space();

	vr('jube_domine.php');
	reading('bvm/per_virginem_matrem.php',0,10);
	lc('ecclus24_17-20.php',0,'L3');
	space();
	rubp('Sequens Responsorium omittitur quando dicitur <snr>Te Deum</s>.', 'When the <snr>Te Deum</s> is said, the following Responsory is omitted.',1);
  if($htm) rubp('<snr>Te Deum</s>, ut infra <snr>p. '.bkref('csBVMpTD').'</s>',
		'<snr>Te Deum</s>, as below on <snr>p. '.bkref('csBVMpTD').'</s>');
	rm('BVMp/mr3.php',0,0);
	rubp('Postea dicitur ad Laudes, ut infra <snr>p. '.bkref('csBVMpL').'</s>',
		'After which is said Lauds, as below on <snr>p. '.bkref('csBVMpL').'</s>');
	space();
	hidden('Te Deum',2);
	rubp('Sequens Hymnus <snr>Te Deum</s> dic. a Nativ. Domini usque ad Septuag., et a Dom. Resurrectionis usque ad Advent., et quando dicitur, omittitur III Responsorium, et in II Responsorio dicitur <snr>Glória Patri</s>, ut dictum est supra: in Adventu autem et a Septuag. usque ad Pascha non dic. nisi in Festis B. Mariæ.', 'The following Hymn, <snr>Te Deum</s>, is said from Christmas until Septuagesima, and from Easter Sunday until Advent. When it is said, the third Responsory is omitted, and the <snr>Glória Patri</s> is said in the second Responsory, as noted above. In Advent and from Septuagesima until Easter it is not said except on feasts of the Bl. Virgin Mary.',1);
  bookmark('csBVMpTD');
	reading('tedeum.php');
	space();

?>
