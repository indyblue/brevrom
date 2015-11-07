<?php
space();
feria(7,4);

/*
%s/<\_[^>]*>//eig | %s/&nbsp;/ /eig
\v<[^aeiouyæœëAEIOUYÆŒ]{-}(([Aa][Uu]|[qgQG][Uu][aeiouyæœëAEIOUYÆŒ]|[aeiouyæœëAEIOUYÆŒ])[^aeiouyæœëAEIOUYÆŒ]{-}){,2}>|<\k*[áéíóúýǽœ́ǼÁÉÍÓÚÝ]\k*>
\<[a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*\>
 [;:?!]
æǽ œœ́ áéíóúý m̃
ÆǼ ŒŒ́ ÁÉÍÓÚÝ
lions’
*/

$cap1 = '1, 1-4';
$cap2 = '1, 5-11';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Malachías Prophéta',
		"lr|1|Cap. $cap1",
		'Onus verbi Dómini ad Ísraël in manu Malachíæ. Diléxi vos, dicit Dóminus, et dixístis: In quo dilexísti nos? Nonne frater erat Esau Jacob, dicit Dóminus, et diléxi Jacob, Esau autem ódio hábui et pósui montes ejus in solitúdinem et hereditátem ejus in dracónes desérti? Quod si díxerit Idumǽa: Destrúcti sumus, sed reverténtes ædificábimus quæ destrúcta sunt: hæc dicit Dóminus exercítuum: Isti ædificábunt, et ego déstruam; et vocabúntur términi impietátis et pópulus cui irátus est Dóminus usque in ætérnum.'];
$l1r = ['Laudábilis pópulus, * Quem Dóminus exercítuum benedíxit dicens: Opus mánuum meárum tu es, heréditas mea Ísraël.',
'Beáta gens, cujus est Dóminus Deus, pópulus eléctus in hereditátem.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et óculi vestri vidébunt, et vos dicétis: Magnificétur Dóminus super términum Ísraël. Fílius honórat patrem, et servus dóminum suum; si ergo Pater ego sum, ubi est honor meus? et, si Dóminus ego sum, ubi est timor meus? dicit Dóminus exercítuum ad vos, o sacerdótes, qui despícitis nomen meum et dixístis: In quo despéximus nomen tuum? Offértis super altáre meum panem pollútum et dícitis: In quo pollúimus te? In eo quod dícitis: Mensa Dómini despécta est. Si offerátis cæcum ad immolándum, nonne malum est? et, si offerátis claudum et lánguidum, nonne malum est? Offer illud duci tuo, si placúerit ei aut si suscéperit fáciem tuam, dicit Dóminus exercítuum. Et nunc deprecámini vultum Dei, ut misereátur vestri (de manu enim vestra factum est hoc), si quómodo suscípiat fácies vestras, dicit Dóminus exercítuum. Quis est in vobis qui claudat óstia et incéndat altáre meum gratúito? Non est mihi volúntas in vobis, dicit Dóminus exercítuum, et munus non suscípiam de manu vestra; ab ortu enim solis usque ad occásum magnum est nomen meum in Géntibus, et in omni loco sacrificátur et offértur nómini meo oblátio munda, quia magnum est nomen meum in Géntibus, dicit Dóminus exercítuum.'];
$l2r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Malachi the Prophet',
		"lr|1|Chap. $cap1",
		'The burden of the word of the Lord to Israel by Malachi.  I have loved you, saith the Lord. Yet ye say, Wherein hast thou loved us? Was not Esau Jacob’s brother? saith the Lord: yet I loved Jacob, and I hated Esau, and laid his mountains and his heritage waste for the dragons of the wilderness.  Whereas Edom saith, We are impoverished, but we will return and build the desolate places; thus saith the Lord of hosts, They shall build, but I will throw down; and they shall call them, The border of wickedness, and, The people against whom the Lord hath indignation for ever.'];
$e1r = [' Blessed is the people  *  Whom the Lord of Hosts hath blest, saying: O Israel, thou art the work of mine own hands, thou art mine own inheritance.',
'Blessed are the people whose God is the Lord, and blessed are the folk that he hath chosen to him to be his inheritance.'];

$e2 = ["lr|2|Chap. $cap2",
		'And your eyes shall see, and ye shall say, The Lord will be magnified from the border of Israel.  A son honoureth his father, and a servant his master: if then I be a father, where is mine honour? and if I be a master, where is my fear? saith the Lord of hosts unto you, O priests, that despise my name. And ye say, Wherein have we despised thy name?  Ye offer polluted bread upon mine altar; and ye say, Wherein have we polluted thee? In that ye say, The table of the Lord is contemptible. And if ye offer the blind for sacrifice, is it not evil? and if ye offer the lame and sick, is it not evil? offer it now unto thy governor; will he be pleased with thee, or accept thy person? saith the Lord of hosts.  And now, I pray you, beseech God that he will be gracious unto us: this hath been by your means: will he regard your persons? saith the Lord of hosts.  Who is there even among you that would shut the doors for nought? neither do ye kindle fire on mine altar for nought. I have no pleasure in you, saith the Lord of hosts, neither will I accept an offering at your hand.  For from the rising of the sun even unto the going down of the same my name shall be great among the Gentiles; and in every place incense shall be offered unto my name, and a pure offering: for my name shall be great among the heathen, saith the Lord of hosts.'];
$e2r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

rubrics('de_officio_festi_vel_bvm_sat_lectio3.php');

?>
