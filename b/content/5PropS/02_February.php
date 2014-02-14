   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
	<p:Head1NI><?php 
echo ($_GET['L']==1?'Festa Februarii':'Feasts of February') 
?></p>
   <p:BodySm/>

<?php
/*
feast_saint(930,3,'Sancti Hieronymi','Saint Jerome','pCD');
feast_saint(1009,3,'S. Joannis Leonardi','St. John Leonard','C',0,
	'feast_saint(1009,-1,"","St. Dionysius, Bp., Rusticus and Eleutherius","M+");');
 */

feast_saint(201,3,'Sancti Ignatii','Saint Ignatius','EM',
	array('csMartyrBishop1.php','Ignátii','Ignatius'));

// require '0202-2_purification_bvm.php';

?>
<?php img('Saints/1208_immaculate_conception.tif',100); ?>
   <p:RubricH/>
     <p:Hidden1>Feb. 2 - Purification of the B.V.M.</p>
   <p:Head1>in Purificatione B. Mariæ Virg.</p>
   <p:Head2>II classis - Feb. 2</p>
   <p:Rubric/>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>OMNÍPOTENS sempitérne Deus, majestátem tuam súpplices exorámus: ut, sicut unigénitus Fílius tuus hodiérna die cum nostræ carnis substántia in templo est præsentátus; ita nos fácias purificátis tibi méntibus præsentari. Per eúmdem Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O ALMIGHTY and eternal God, we suppliants beseech thy Majesty that, as thine only-begotten Son was this day presented in the temple in the substance of our flesh, so thou wouldst grant us to be presented, purified in mind and heart, to thee. Through the same.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad I Vésperas</p>
   <p:Rubric>If the feast occurs on Sunday, it is celebrated as feast of the I class:</p>
           <p:Head3>Psalms with Antiphons</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 1. </s>O admirábile commércium: * Creator géneris humáni, animátum corpus sumens, de Vírgine nasci dignátus est: et procédens homo sine sémine, largítus est nobis suam Deitátem.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 1. </s>O admirable interchange! * The Creator of man, assuming a living body, deigned to be born of a Virgin, and becoming man, without man’s aid, bestowed on us his divinity.</p>
     </td>
    </tr>
   </table>
<?php rubrics('ps/ComBVM.php'); ?>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 2. </s>Quando natus es * ineffabíliter ex Vírgine, tunc impletæ sunt Scripturæ: sicut plúvia in vellus descendísti, ut salvum fáceres genus humánum: te laudámus, Deus noster.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 2. </s>When thou was born * ineffably of the Virgin, the Scriptures were fulfilled. As dew upon Gedeon’s fleece, thou camest down to save mankind. O Lord our God, we praise thee.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 3. </s>Rubum, quem víderat Móyses * incombústum, conservátam agnóvimus tuam laudábilem virginitátem: Dei Génitrix, intercéde pro nobis.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 3. </s>In the bush seen by Moses * as burning yet unconsumed, we recognise the preservation of thy glorious virginity. O Mother of God, intercede for us.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 4. </s>Germinávit radix Jesse, * orta est stella ex Jacob, Virgo péperit Salvatórem: te laudámus, Deus noster.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 4. </s>The Root of Jesse hath budded; * the Star hath risen out of Jacob; a Virgin hath brought forth the Saviour. O Lord our God, we praise thee.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 5. </s>Ecce María génuit * nobis Salvatórem, quem Joánnes videns exclamávit, dicens: Ecce Agnus Dei, ecce qui tollit peccáta mundi. Allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 5. </s>Lo! Mary hath brought forth * a Saviour unto us, whom John seeing, exclaimed: Behold the Lamb of God! Behold him that taketh away the sins of the world, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:Rubric/>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Malach. 3:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ECCE ego mitto Ángelum meum, et præparábit viam ante fáciem meam. Et statim véniet ad templum sanctum suum Dominátor, quem vos quæritis, et Ángelus Testaménti, quem vos vultis.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BEHOLD I send my Angel, and he shall prepare the way before my face. And presently the Lord, whom you seek, and the Angel of the Testament, whom you desire, shall come to his holy temple.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Hymn as in Common of B.V.M., with the following responsory:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Respónsum accépit Simeon a Spíritu Sancto.</p>
      <p:BodyL><s:VR>R. </s>Non visúrum se mortem, nisi vidéret Christum, Dómini.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>Simeon received an answer from the Holy Ghost.</p>
      <p:BodyE><s:VR>R. </s>That he should not see death, until he had seen Christ the Lord.</p>
     </td>
    </tr>
   </table>
           <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Senex * Puerum portábat, Puer autem senem regébat: quem virgo péperit, et post partum virgo permánsit: ipsum quem génuit, adorávit.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The old man * held the child in his arms, but the child was the old man’s Lord. Him whom a virgin brought forth, remaining a virgin still, that same did she adore.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Compline taken from Sunday.</p>
   <p:BodySm/>
   <p:Head2><text:soft-page-break/>ad Laudes</p>
           <p:Head3>Psalms with Antiphons</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 1. </s>Simeon justus * et timorátus exspectábat redemptiónem Israël, et Spíritus Sanctus erat in eo.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 1. </s>Simeon, a just man, * and devout, waited for the redemption of Israel, and the Holy Ghost was in him.</p>
     </td>
    </tr>
   </table>
<?php rubrics('ps/SuL1.php'); ?>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 2. </s>Respónsum accépit Simeon * a Spíritu Sancto, non visúrum se mortem, nisi vidéret Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 2. </s>Simeon received an answer * from the Holy Ghost, that he should not see death until he had seen the Lord.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 3. </s>Accípiens Simeon * Puerum in mánibus, grátias agens benedíxit Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 3. </s>Simeon taking * the child into his arms, gave thanks and blessed the Lord.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 4. </s>Lumen ad revelatiónem Géntium, * et glóriam plebis tuæ Israël.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 4. </s>A light to the revealing of the Gentiles, * and the glory of thy people Israel.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 5. </s>Obtulérunt * pro eo Dómino par túrturum aut duos pullos columbárum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 5. </s>They offered * for him unto the Lord a pair of turtle doves, or two young pigeons.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Little Chapter as in I Vespers.</p>
   <p:Rubric>Hymn and responsory as in Common of B.V.M.</p>
           <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Cum indúcerent * púerum Jesum paréntes ejus, accépit eum Simeon in ulnas suas, et benedíxit Deum, dicens: Nunc dimíttis servum tuum in pace.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>And when his parents brought in * the child Jesus, Simeon took him into his arms, and blessed God, and said: Now thou dost dismiss thy servant in peace.</p>
     </td>
    </tr>
   </table>
   <p:Rubric/>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('ps/Feria.php'); ?>
   <p:Rubric>If this feast occurs on the Sunday of Septuagesima, Sexagesima, or Quinquagesima, the antiphons at the Little Hours are taken from Lauds, with the psalms of Sunday. At Prime: Pss. 117, 118i &amp; 118ii.</p>
   <p:Head2>ad Primam</p>
   <p:Rubric>In the Brief Respond, the following Versicle is said:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Qui natus es de María Vírgine.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>Who was born of the Virgin Mary.</p>
     </td>
    </tr>
   </table>
   <p:Standard/>
   <p:Head2>ad Tértiam</p>
   <p:Rubric>Little Chapter as in I Vespers.</p>
           <p:Head3>Brief Respond</p>

   <p:BodySm/>
   <p:Head2>ad Sextam</p>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Malach. 3:1-2</p>
           <p:Head3>Brief Respond</p>

   <p:BodySm/>
   <p:Head2>ad Nonam</p>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Malach. 3:4</p>

           <p:Head3>Brief Respond</p>

   <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
<?php rubrics('ps/ComBVM.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
   <p:Rubric>Little Chapter as in I Vespers.</p>
   <p:Rubric>Hymn as in Common of B.V.M., with the responsory from I Vespers.</p>
           <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Hódie egréssa est * virga de radíce Jesse: hódie sine ulla peccáti labe concépta est María: hódie contrítum est ab ea caput serpéntis antíqui, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>This day is a rod * sprung from the root of Jesse: this day is Mary conceived without any stain of sin: this day hath she bruised the head of the old serpent, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:Rubric/>
   <p:Rubric>Compline taken from Sunday.</p>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
     <p:Hidden1>Feb. 3 - St. Blaise</p>
   <p:Head1NI>Sancti Blasii</p>
   <p:Head2>Ep. et Mart. - Commem. - Feb. 3</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Qui odit * ánimam suam in hoc mundo, in vitam ætérnam custódit eam.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>He that hateth * his life in this world, keepeth it to life eternal.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Justus ut palma florébit.</p>
      <p:BodyL><s:VR>R. </s>Sicut cedrus Líbani multiplicábitur.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>The just shall flourish like the palm tree.</p>
      <p:BodyE><s:VR>R. </s>He shall grow up like the cedar of Libanus.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui nos beáti Blásii Mártyris tui atque Pontíficis annua solemnitáte lætificas: concéde propítius; ut, cujus natalítia cólimus, de ejúsdem étiam protectióne gaudeámus. Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, who dost gladden us by the yearly solemnity of blessed Blaise, thy Martyr and Bishop; mercifully grant that, as we celebrate his festival, we may also rejoice in his protection. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:Rubric/>
<?php img(); ?>
   <p:Body/>
     <p:Hidden1>Feb. 4 - St. Andrew Corsini</p>
   <p:Head1NI>S. Andreæ Corsini</p>
   <p:Head2>Ep. et Conf. - III classis - Feb. 4</p>
   <p:Rubric>Psalms and Antiphons of the current feria.</p>
   <p:Rubric>All else from Common of Confessor Bishop.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui in Ecclésia tua, nova semper instáuras exémpla virtútum : da pópulo tuo beáti Andréæ Confessóris tui atque Pontíficis ita sequi vestígia ; ut assequátur et præmia. <text:s/>Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, who dost continually raise up in thy Church new examples of virtue, grant unto thy people so to follow in the footsteps of thy blessed Bishop and Confessor Andrew that they may also attain unto a like reward. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
     <p:Hidden1>Feb. 5 - St. Agatha</p>
   <p:Head1NI>Sanctæ Agathæ</p>
   <p:Head2>Virginis et Martyris - III classis - Feb. 5</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS qui inter cétera poténtiæ tuæ mirácula étiam in sexu frágili victóriam martýrii contulísti : concéde propítius ; ut, qui beátæ Agathæ Vírginis et Mártyris tuæ natalítia cólimus, per ejus ad te exem<text:soft-page-break/>pla gradiámur. <text:s/>Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, who among other wondrous works of thy power hast bestowed the victory of martyrdom even on the weaker sex; mercifully grant that we who celebrate the heavenly birthday of blessed <text:soft-page-break/>Agatha thy Virgin and Martyr, may, by following her example, advance in the way that leadeth unto thee. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
           <p:Head3>Psalms with Antiphons</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 1. </s>Quis es tu, * qui venísti ad me curáre vúlnera mea? <text:s/>Ego sum Apóstolus Christi : nihil in me dúbites, filia.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 1. </s>Who art thou * that comest unto me to heal my wounds? I am the Apostle of Christ, have no suspicion of me, my daughter.</p>
     </td>
    </tr>
   </table>
<?php rubrics('ps/SuL1.php'); ?>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 2. </s>Medicínam carnálem * córpori meo numquam exhíbui, sed habeo Dóminum Jesum Christum, qui solo sermóne restáurat univérsa.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 2. </s>I have never applied * a medicine of this earth to my body, but I have my Lord Jesus Christ, who by his word alone restoreth all things.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 3. </s>Gratias tibi ago, * Dómine Jesu Christe, quia memor es mei, et misísti ad me Apóstolum tuum curáre vúlnera mea.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 3. </s>I give thee thanks, * O Lord Jesus Christ, because thou art mindful of me, and hast sent thine Apostle unto me to heal my wounds.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 4. </s>Benedíco te, * Pater Dómini mei Jesu Christi, quia per Apóstolum tuum mamíllam meam meo péctori restituísti.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 4. </s>I bless thee, * O Father of my Lord Jesus Christ, because by thine Apostle thou hast restored my breast to my bosom.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 5. </s>Qui me dignátus est * ab omni plaga curáre, et mamíllam meam meo péctori restitúere, ipsum ínvoco Deum vivum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 5. </s>He that hath vouchsafed * to heal all my wounds and to restore my breast to my bosom, upon him do I call, the living God.</p>
     </td>
    </tr>
   </table>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Ecclus. 51:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CONFITÉBOR tibi, Dómine, Rex, et collaudábo te Deum Salvatórem meum. <text:s/>Confitébor nómini tuo : quóniam adjútor et protéctor factus es mihi, et liberásti corpus meum a perditióne.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>I WILL give glory to thee, O Lord, O King, and I will praise thee, O God my Saviour. I will give glory to thy name: for thou hast been a helper and protector to me. And hast preserved my body from destruction</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Hymn as in Common of Virgins.</p>
           <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Paganórum * multitúdo fúgiens ad sepúlcrum Vírginis, tulérunt velum ejus contra ignem : ut comprobáret Dóminus, quod a perículis incéndii méritis beátæ Agathæ Mártyris suæ eos liberáret.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The heathen * multitude fleeing to the tomb of the virgin, took thence her veil as a defence against the rolling flames: for the Lord would show that by the merits of his blessed Martyr Agatha he would deliver them from the perils of fire.</p>
     </td>
    </tr>
   </table>
   <p:Rubric/>
<?php rubrics('head/LittleHours.php'); ?>
<?php rubrics('ps/Feria.php'); ?>
   <p:Head2>ad Tértiam</p>
   <p:Rubric>Little Chapter as in Lauds.</p>
   <p:Rubric>Brief Respond as in Common of Virgins.</p>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Ecclus. 51:4-5</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>LIBERÁSTI me secúndum multitúdinem misericórdiæ nóminis tui a rugiéntibus, præparátis ad escam, de mánibus quæréntium ánimam meam, et de multis tribulatiónibus quæ circumdedérunt me.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>THOU hast delivered me, according to the multitude of the mercy of thy name, from them that did roar, prepared to devour. Out of the hands of them that sought my life, and from the gates of afflictions, which compassed me about:</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Brief Respond as in Common of Virgins.</p>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><text:tab/>Ecclus. 51:8,12</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>LAUDÁBIT usque ad mortem ánima mea Dóminum, quóniam eruis sustinéntes te, et líberas eos de manu angústiæ, Dómine, Deus noster.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>MY SOUL shall praise the Lord even to death. How thou deliverest them that wait for thee, O Lord, and savest them out of the hands of the nations.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Brief Respond as in Common of Virgins.</p>
   <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
   <p:Rubric>Antiphons as in Lauds</p>
<?php rubrics('ps/SuV147.php'); ?>
   <p:Rubric>Little Chapter as in Lauds.</p>
   <p:Rubric>Hymn as in Common of Virgins.</p>
           <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Stans beáta Ágatha * in médio cárceris, expánsis mánibus orábat ad Dóminum : Dómine Jesu Christe, magíster bone, grátias tibi ago, qui me fecísti víncere torménta carníficum : jube me, Dómine, ad tuam immarcescíbilem glóriam felíciter perveníre.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The blessed Agatha, standing in the prison, with outstretched hands, prayed unto the Lord: “O Lord Jesus Christ, good Master, I give thanks unto thee who hast enabled me to overcome the tortures of the executioners: bid me now, O Lord, come happily unto thine unfading <text:soft-page-break/>glory.”</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Compline of the feria.</p>
   <p:BodySm/>
<?php img(); ?>
   <p:BodySm/>

