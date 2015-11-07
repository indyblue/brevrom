<?php
space();
feria(4,4);

$cap1 = '3, 1-3';
$cap2 = '3, 4-7';
$cap3 = '3, 8-12';
/******************************* LATINA **************************************/
$l1 = ['c|De Joéle Prophéta',
		"lr|1|Cap. $cap1",
		'In diébus illis et in témpore illo, cum convértero captivitátem Juda et Jerúsalem, congregábo omnes Gentes et dedúcam eas in vallem Jósaphat et disceptábo cum eis ibi super pópulo meo et hereditáte mea Ísraël, quos dispersérunt in natiónibus et terram meam divisérunt. Et super pópulum meum misérunt sortem; et posuérunt púerum in prostíbulo et puéllam vendidérunt pro vino ut bíberent.'];
$l1r = ['Indicábo tibi, homo, quid sit bonum aut quid Dóminus requírat a te: * Fácere judícium et justítiam et sollícitum ambuláre cum Deo tuo.',
'Spera in Dómino, et fac bonitátem, et inhábita terram.'];

$l2 = ["lr|2|Cap. $cap2",
		'Verum quid mihi et vobis, Tyrus et Sidon, et omnis términus Palæstinórum? Numquid ultiónem vos reddétis mihi? Et, si ulciscímini vos contra me, cito velóciter reddam vicissitúdinem vobis super caput vestrum. Argéntum enim meum et aurum tulístis et desiderabília mea et pulchérrima intulístis in delúbra vestra et fílios Juda et fílios Jerúsalem vendidístis fíliis Græcórum, ut longe facerétis eos de fínibus suis. Ecce ego suscitábo eos de loco in quo vendidístis eos, et convértam retributiónem vestram in caput vestrum.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ["lr|3|Cap. $cap3",
		'Et vendam fílios vestros et fílias vestras in mánibus filiórum Juda, et venúmdábunt eos Sabǽis, genti longínquæ, quia Dóminus locútus est. Clamáte hoc in Géntibus, sanctificáte bellum, suscitáte robústos; accédant, ascéndant omnes viri bellatóres; concídite arátra vestra in gládios et ligónes vestros in lánceas; infírmus dicat: Quia fortis ego sum. Erúmpite et veníte, omnes gentes de circúitu, et congregámini; ibi occúmbere fáciet Dóminus robústos tuos. Consúrgant et ascéndant Gentes in vallem Jósaphat; quia ibi sedébo ut júdicem omnes gentes in circúitu.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Joel the Prophet',
		"lr|1|Chap. $cap1",
		'For, behold, in those days, and in that time, when I shall bring again the captivity of Judah and Jerusalem, I will also gather all nations, and will bring them down into the valley of Jehoshaphat, and will plead with them there for my people and for my heritage Israel, whom they have scattered among the nations, and parted my land.  And they have cast lots for my people; and have given a boy for an harlot, and sold a girl for wine, that they might drink.'];
$e1r = ['I will shew thee, O man, what is good, and what doth the Lord require of thee: *  But to do justice and judgement, and to walk humbly with thy God?',
'Put thou thy trust in the Lord, and be doing good, and dwell in the land.'];

$e2 = ["lr|2|Chap. $cap2",
		'Yea, and what have ye to do with me, O Tyre, and Zidon, and all the coasts of Palestine? will ye render me a recompence? and if ye recompense me, swiftly and speedily will I return your recompence upon your own head; because ye have taken my silver and my gold, and have carried into your temples my goodly pleasant things:  the children also of Judah and the children of Jerusalem have ye sold unto the Grecians, that ye might remove them far from their border.  Behold, I will raise them out of the place whither ye have sold them, and will return your recompence upon your own head:'];
$e2r = [' I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ["lr|3|Chap. $cap3",
		'And I will sell your sons and your daughters into the hand of the children of Judah, and they shall sell them to the Sabeans, to a people far off: for the Lord hath spoken it.  Proclaim ye this among the Gentiles; Prepare war, wake up the mighty men, let all the men of war draw near; let them come up:  beat your plowshares into swords and your pruninghooks into spears: let the weak say, I am strong.  Assemble yourselves, and come, all ye heathen, and gather yourselves together round about: thither cause thy mighty ones to come down, O Lord.  Let the heathen be wakened, and come up to the valley of Jehoshaphat: for there will I sit to judge all the heathen round about.'];
$e3r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
