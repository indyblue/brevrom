<?php
space();
feria(4,4);

$cap1 = '1, 1-3';
$cap2 = '1, 4-6';
$cap3 = '1, 7-9';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Sophonías Prophéta',
		"lr|1|Cap. $cap1",
		'Verbum Dómini, quod factum est ad Sophoníam fílium Chusi, fílii Godolíæ, fílii Amaríæ, fílii Ezecíæ, in diébus Josíæ fílii Amon regis Judæ. Cóngregans congregábo ómnia a fácie terræ, dicit Dóminus, cóngregans hóminem et pecus, cóngregans volatília cæli et pisces maris; et ruínæ impiórum erunt, et dispérdam hómines a fácie terræ, dicit Dóminus.'];
$l1r = ['Indicábo tibi, homo, quid sit bonum aut quid Dóminus requírat a te: * Fácere judícium et justítiam et sollícitum ambuláre cum Deo tuo.',
'Spera in Dómino, et fac bonitátem, et inhábita terram.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et exténdam manum meam super Judam et super omnes habitántes Jerúsalem et dispérdam de loco hoc relíquias Baal et nómina ædituórum cum sacerdótibus et eos qui adórant super tecta milítiam cæli et adórant et jurant in Dómino et jurant in Melchom, et qui avertúntur de post tergum Dómini, et qui non quæsiérunt Dóminum nec investigavérunt eum.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ["lr|3|Cap. $cap3",
		'Siléte a fácie Dómini Dei, quia juxta est dies Dómini, quia præparávit Dóminus hóstiam, sanctificávit vocátos suos. Et erit, in die hóstiæ Dómini visitábo super príncipes et super fílios regis et super omnes qui indúti sunt veste peregrína et visitábo super omnem qui arrogánter ingréditur super limen in die illa, qui complent domum Dómini Dei sui iniquitáte et dolo.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Zephaniah the Prophet',
		"lr|1|Chap. $cap1",
		'The word of the Lord which came unto Zephaniah the son of Cushi, the son of Gedaliah, the son of Amáriah, the son of Hizkiah, in the days of Josiah the son of Amon, king of Judah.  I will utterly consume all things from off the land, saith the Lord.  I will consume man and beast; I will consume the fowls of the heaven, and the fishes of the sea, and the stumbling blocks with the wicked: and I will cut off man from off the land, saith the Lord.'];
$e1r = ['I will shew thee, O man, what is good, and what doth the Lord require of thee: *  But to do justice and judgement, and to walk humbly with thy God?',
'Put thou thy trust in the Lord, and be doing good, and dwell in the land.'];

$e2 = ["lr|2|Chap. $cap2",
		'I will also stretch out mine hand upon Judah, and upon all the inhabitants of Jerusalem; and I will cut off the remnant of Baal from this place, and the name of the Chemarims with the priests; and them that worship the host of heaven upon the housetops; and them that worship and that swear by the Lord, and that swear by Malcham; and them that are turned back from the Lord; and those that have not sought the Lord, nor enquired for him.'];
$e2r = ['I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ["lr|3|Chap. $cap3",
		'Hold thy peace at the presence of the Lord GOD: for the day of the Lord is at hand: for the Lord hath prepared a sacrifice, he hath bid his guests.  And it shall come to pass in the day of the Lord’s sacrifice, that I will punish the princes, and the king’s children, and all such as are clothed with strange apparel.  In the same day also will I punish all those that leap on the threshold, which fill their masters’ houses with violence and deceit.'];
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
