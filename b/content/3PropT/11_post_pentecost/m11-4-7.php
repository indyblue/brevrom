<?php
space();
feria(7,4);

$cap1 = '1, 1-4';
$cap2 = '1, 5-12';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Jonas Prophéta',
		"lr|1|Cap. $cap1",
		'Et factum est verbum Dómini ad Jonam fílium Amáthi dicens: Surge et vade in Níniven civitátem grandem et prǽdica in ea, quia ascéndit malítia ejus coram me. Et surréxit Jonas, ut fúgeret in Tharsis a fácie Dómini, et descéndit in Joppen et invénit navem eúntem in Tharsis et dedit naulum ejus et descéndit in eam, ut iret cum eis in Tharsis a fácie Dómini. Dóminus autem misit ventum magnum in mare, et facta est tempéstas magna in mari, et navis periclitabátur cónteri.'];
$l1r = ['Laudábilis pópulus, * Quem Dóminus exercítuum benedíxit dicens: Opus mánuum meárum tu es, heréditas mea Ísraël.',
'Beáta gens, cujus est Dóminus Deus, pópulus eléctus in hereditátem.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et timuérunt nautæ, et clamavérunt viri ad deum suum et misérunt vasa, quæ erant in navi, in mare, ut alleviarétur ab eis; et Jonas descéndit ad interióra navis et dormiébat sopóre gravi. Et accéssit ad eum gubernátor et dixit ei: Quid tu sopóre deprímeris? Surge, ínvoca Deum tuum, si forte recógitet Deus de nobis, et non pereámus. Et dixit vir ad collégam suum: Veníte, et mittámus sortes et sciámus quare hoc malum sit nobis. Et misérunt sortes et cécidit sors super Jonam. Et dixérunt ad eum: Índica nobis cujus causa malum istud sit nobis. Quod est opus tuum, quæ terra tua, et quo vadis vel ex quo pópulo es tu? Et dixit ad eos: Hebrǽus ego sum et Dóminum Deum cæli ego tímeo, qui fecit mare et áridam. Et timuérunt viri timóre magno et dixérunt ad eum: Quid hoc fecísti? Cognovérunt enim viri, quod a fácie Dómini fúgeret, quia indicáverat eis; et dixérunt ad eum: Quid faciémus tibi, et cessábit mare a nobis? quia mare ibat et intumescébat. Et dixit ad eos: Tóllite me et míttite in mare et cessábit mare a vobis; scio enim ego quóniam propter me tempéstas hæc grandis venit super vos.'];
$l2r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Jonah the Prophet',
		"lr|1|Chap. $cap1",
		'Now the word of the Lord came unto Jonah the son of Amittai, saying, Arise, go to Nineveh, that great city, and cry against it; for their wickedness is come up before me.  But Jonah rose up to flee unto Tarshish from the presence of the Lord, and went down to Joppa; and he found a ship going to Tarshish: so he paid the fare thereof, and went down into it, to go with them unto Tarshish from the presence of the Lord.  But the Lord sent out a great wind into the sea, and there was a mighty tempest in the sea, so that the ship was like to be broken.'];
$e1r = ['Blessed is the people  *  Whom the Lord of Hosts hath blest, saying: O Israel, thou art the work of mine own hands, thou art mine own inheritance.',
'Blessed are the people whose God is the Lord, and blessed are the folk that he hath chosen to him to be his inheritance.'];

$e2 = ["lr|2|Chap. $cap2",
		'Then the mariners were afraid, and cried every man unto his god, and cast forth the wares that were in the ship into the sea, to lighten it of them. But Jonah was gone down into the sides of the ship; and he lay, and was fast asleep.  So the shipmaster came to him, and said unto him, What meanest thou, O sleeper? arise, call upon thy God, if so be that God will think upon us, that we perish not.  And they said every one to his fellow, Come, and let us cast lots, that we may know for whose cause this evil is upon us. So they cast lots, and the lot fell upon Jonah. Then said they unto him, Tell us, we pray thee, for whose cause this evil is upon us; What is thine occupation? and whence comest thou? what is thy country? and of what people art thou?  And he said unto them, I am an Hebrew; and I fear the Lord, the God of heaven, which hath made the sea and the dry land.  Then were the men exceedingly afraid, and said unto him. Why hast thou done this? For the men knew that he fled from the presence of the Lord, because he had told them.  Then said they unto him, What shall we do unto thee, that the sea may be calm unto us? for the sea wrought, and was tempestuous.  And he said unto them, Take me up, and cast me forth into the sea; so shall the sea be calm unto you: for I know that for my sake this great tempest is upon you.'];
$e2r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

rubrics('de_officio_festi_vel_bvm_sat_lectio3.php');

?>
