<?php
space();
feria(2,4);

/******************************* LATINA **************************************/
$l1 = ['c|De Ezechiéle Prophéta',
		'lr|1|Cap. 2, 2-5',
		'Et audívi loquéntem ad me et dicéntem: Fili hóminis, mitto ego te ad fílios Ísraël, ad gentes apostatríces quæ recessérunt a me; ipsi et patres eórum prævaricáti sunt pactum meum usque ad diem hanc; et fílii dura fácie et indomábili corde sunt, ad quos ego mitto te, et dices ad eos: Hæc dicit Dóminus Deus: Si forte vel ipsi áudiant et si forte quiéscant, quóniam domus exásperans est, et scient quia prophéta fúerit in médio eórum.'];
$l1r = ['Redémit pópulum suum et liberávit eum, et vénient et exsultábunt in monte Sion et gaudébunt de bonis Dómini super fruménto, vino et óleo, * Et ultra non esúrient.',
'Erítque ánima eórum quasi hortus irríguus.'];

$l2 = ['lr|2|Cap. 2, 6-7',
		'Tu ergo, fili hóminis, ne tímeas eos neque sermónes eórum métuas, quóniam incréduli et subversóres sunt tecum, et cum scorpiónibus hábitas.  Verba eórum ne tímeas et vultus eórum ne formídes, quia domus exásperans est.  Loquéris ergo verba mea ad eos, si forte áudiant et quiéscant, quóniam irritatóres sunt.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ['lr|3|Cap. 2, 8-9',
		'Tu autem, fili hóminis, audi quæcúmque loquor ad te et noli esse exásperans, sicut domus exasperátrix est; áperi os tuum et cómede quæcúmque ego do tibi.  Et vidi, et ecce manus missa ad me, in qua erat involútus liber, et expándit illum coram me, qui erat scriptus intus et foris, et scriptæ erant in eo lamentatiónes et carmen et væ.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum,  * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 2, 2-5',
		'And I heard him that spake unto me.  And he said unto me, Son of man, I send thee to the children of Israel, to a rebellious nation that hath rebelled against me: they and their fathers have transgressed against me, even unto this very day.  For they are impudent children and stiffhearted. I do send thee unto them; and thou shalt say unto them, Thus saith the Lord GOD.  And they, whether they will hear, or whether they will forbear, (for they are a rebellious house,) yet shall know that there hath been a prophet among them.'];
$e1r = ['He hath redeemed his people, and ransomed them; therefore shall they come and sing in the height of Sion, and shall rejoice in the goodness of the Lord, unto the wheat and the wine and the oil; * And they shall hunger no more.',
'And their soul shall be as a watered garden.'];

$e2 = ['lr|2|Chap. 2, 6-7',
		'And thou, son of man, be not afraid of them, neither be afraid of their words, though briers and thorns be with thee, and thou dost dwell among scorpions: be not afraid of their words, nor be dismayed at their looks, though they be a rebellious house.  And thou shalt speak my words unto them, whether they will hear, or whether they will forbear: for they are most rebellious.'];
$e2r = ['I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ['lr|3|Chap. 2, 8-9',
		'But thou, son of man, hear what I say unto thee; Be not thou rebellious like that rebellious house: open thy mouth, and eat that I give thee.  And when I looked, behold, an hand was sent unto me; and, lo, a roll of a book was therein; and he spread it before me; and it was written within and without: and there was written therein lamentations, and mourning, and woe.'];
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
