<?php
space();
feria(7,4);

$cap1 = '9, 1-5';
$cap2 = '9, 21-27';
/******************************* LATINA **************************************/
$l1 = ['c|De Daniéle Prophéta',
		"lr|1|Cap. $cap1",
		'In anno primo Daríi, fílii Assuéri de sémine Medórum, qui imperávit super regnum Chaldæórum, anno uno regni ejus ego Dániel intelléxi in libris númerum annórum, de quo factus est sermo Dómini ad Jeremíam prophétam, ut compleréntur desolatiónis Jerúsalem septuagínta anni, et pósui fáciem meam ad Dóminum Deum meum rogáre et deprecári in jejúniis, sacco et cínere.  Et orávi Dóminum Deum meum et conféssus sum et dixi: Óbsecro, Dómine, Deus magne et terríbilis, custódiens pactum et misericórdiam diligéntibus te et custodiéntibus mandáta tua.  Peccávimus, iniquitátem fécimus, ímpie égimus et recéssimus et declinávimus a mandátis tuis ac judíciis.'];
$l1r = ['Laudábilis pópulus, * Quem Dóminus exercítuum benedíxit dicens: Opus mánuum meárum tu es, heréditas mea Ísraël.',
'Beáta gens, cujus est Dóminus Deus, pópulus eléctus in hereditátem.'];

$l2 = ["lr|2|Cap. $cap2",
		'Adhuc me loquénte in oratióne, ecce vir Gábriel, quem víderam in visióne a princípio, cito volans tétigit me in témpore sacrifícii vespertíni et dócuit me et locútus est mihi dixítque: Dániel, nunc egréssus sum ut docérem te, et intellígeres: ab exórdio precum tuárum egréssus est sermo; ego autem veni ut indicárem tibi, quia vir desideriórum es; tu ergo animadvérte sermónem et intéllige visiónem.  Septuagínta  hebdómades abbreviátæ sunt super pópulum tuum et super urbem sanctam tuam, ut consummétur prævaricátio, et finem accípiat peccátum, et deleátur iníquitas, et adducátur justítia sempitérna, et impleátur vísio et prophetía, et ungátur Sanctus sanctórum. Scito ergo et animadvérte: Ab éxitu sermónis ut íterum ædificétur Jerúsalem usque ad Christum ducem, hebdómades septem et hebdómades sexagínta duæ erunt, et rursum ædificábitur platéa et muri in angústia témporum.  Et post hebdómades sexagínta duas occidétur Christus, et non erit ejus pópulus qui eum negatúrus est; et civitátem et sanctuárium dissipábit pópulus cum duce ventúro et finis ejus vástitas, et post finem belli statúta desolátio.  Confirmábit autem pactum multis hebdómada una, et in dimídio hebdómadis defíciet hóstia et sacrifícium, et erit in templo abominátio desolatiónis  et usque ad consummatiónem et finem perseverábit desolátio.'];
$l2r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum,  * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From Daniel the Prophet',
		"lr|1|Chap. $cap1",
		'In the first year of Darius the son of Ahasuerus, of the seed of the Medes, which was made king over the realm of the Chaldeans; in the first year of his reign I Daniel understood by books the number of the years, whereof the word of the Lord came to Jeremiah the prophet, that he would accomplish seventy years in the desolations of Jerusalem.  And I set my face unto the Lord God, to seek by prayer and supplications, with fasting, and sackcloth, and ashes: and I prayed unto the Lord my God, and made my confession, and said, O Lord, the great and dreadful God, keeping the covenant and mercy to them that love him, and to them that keep his commandments; we have sinned, and have committed iniquity, and have done wickedly, and have rebelled, even by departing from thy precepts and from thy judgments.'];
$e1r = ['Blessed is the people  *  Whom the Lord of Hosts hath blest, saying: O Israel, thou art the work of mine own hands, thou art mine own inheritance.',
'Blessed are the people whose God is the Lord, and blessed are the folk that he hath chosen to him to be his inheritance.'];

$e2 = ["lr|2|Chap. $cap2",
		'Yea, whiles I was speaking in prayer, even the man Gabriel, whom I had seen in the vision at the beginning, being caused to fly swiftly, touched me about the time of the evening oblation.  And he informed me, and talked with me, and said, O Daniel, I am now come forth to give thee skill and understanding.  At the beginning of thy supplications the commandment came forth, and I am come to shew thee; for thou art greatly beloved: therefore understand the matter, and consider the vision.  Seventy weeks are determined upon thy people and upon thy holy city, to finish the transgression, and to make an end of sins, and to make reconciliation for iniquity, and to bring in everlasting righteousness, and to seal up the vision and prophecy, and to anoint the most Holy. Know therefore and understand, that from the going forth of the commandment to restore and to build Jerusalem unto the Messiah the Prince shall be seven weeks, and threescore and two weeks: the street shall be built again, and the wall, even in troublous times.  And after threescore and two weeks shall Messiah be cut off, but not for himself: and the people of the prince that shall come shall destroy the city and the sanctuary; and the end thereof shall be with a flood, and unto the end of the war desolations are determined.  And he shall confirm the covenant with many for one week: and in the midst of the week he shall cause the sacrifice and the oblation to cease, and in the temple shall be the abomination of desolation; and even until the consummation, and the end shall endure the desolation.'];
$e2r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

rubrics('de_officio_festi_vel_bvm_sat_lectio3.php');

?>
