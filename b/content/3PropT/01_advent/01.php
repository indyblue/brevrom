<?php 
	space();
	hidden('Advent I',2);
	head_temp(1,'Dominica I Adventus', 'First Sunday of Advent');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SaV.php');
	lc('rom13_11.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('PrTemp/advent01m1.php','M');
	space();

	hour('L');
	ant('prTemp/advent01.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent01.php','02222');	
	lc('rom13_11.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	ant('PrTemp/advent01b.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent01.php');
	space();

	ordref(0,5,0);

	hour('P');
	PrV('qui_venturus_es_in_mundum.php',1);
	rubp('et ad absolutionem capituli lectio brevis ut infra, quæ dicitur cotidie toto tempore Adventus, etiam in festis.', 'and at the end of the hour the brief lesson as below; these are said every day for the entire season of Advent, even on feasts.');
	lc('is33_2.php',0,3);
	space();

	hour('T');
	lc('rom13_11.php');
	brS('PrTemp/veni_ad_liberandum_nos_domine_deus_virtutum.php');
	vrS('PrTemp/timebunt_gentes_nomen_tuum_domine.php');
	space();

	hour('S');
	lc('rom13_12.php');
	brS('PrTemp/ostende_nobis_domine_misericordiam_tuam.php');
	vrS('PrTemp/memento_nostri_domine_in_beneplacito_populi_tui.php');
	space();

	hour('N');
	lc('rom13_13-14.php');
	brS('PrTemp/super_te_jerusalem_orietur_dominus.php');
	vrS('PrTemp/veni_domine_et_noli_tardare.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('rom13_11.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('PrTemp/advent01m2.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent01.php');
	space();
	
	ordref('OrAdvent',0,31);
	feria(2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',0,'L');
	ant('PrTemp/advent01f2b.php','B');
	rubp('Oratio <snr>Excita</s>, ut supra.','Prayer <snr>Show forth</s>, as above.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	ant('PrTemp/advent01f2m.php','M');
	space();

	feria(3);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent01f3b.php','B');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent01f3m.php','M');
	space();

	feria(4);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent01f4b.php','B');
	rubp('Et dicuntur preces.', 'And the preces are said.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent01f4m.php','M');
	rubp('Et dicuntur preces.', 'And the preces are said.');
	space();

	feria(5);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent01f5b.php','B');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent01f5m.php','M');
	space();

	feria(6);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent01f6b.php','B');
	rubp('Et dicuntur preces.', 'And the preces are said.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent01f6m.php','M');
	rubp('Et dicuntur preces.', 'And the preces are said.');
	space();

	feria(7);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent01f7b.php','B');
	space();

	space();
	space('Line');
	space('Line');
	space('Line');
	space();
?>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
<?php hidden('Advent',1); ?>
<?php hidden('Advent II',2); ?>
   <p:Head1>Dominica II Adventus</p>
   <p:Head2>I classis</p>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ÉXCITA, Dómine, corda nostra ad præparándas Unigéniti tui vias: ut per ejus advéntum purificátis tibi méntibus servíre mereámur: Qui tecum vivit.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>STIR up our hearts, O Lord, to prepare the ways of thy Only-begotten Son, that we may attain to serve thee with purified minds, through his advent. Who liveth.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad I Vésperas</p>
<?php rubrics('ps/SaV.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
<?php lc('rom15_4.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Veni, Dómine, * visitáre nos in pace, ut lætémur coram te corde perfécto.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Come, O Lord, * visit us in peace, that we may rejoice before thee with all our heart.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
<?php 
	ant('prTemp/advent02.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent02.php','02222');	
?>
<?php lc('rom15_4.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Benedictus</p>
   <p:RubricHidden><t>Mt 11:2-3</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Joánnes autem * cum audísset in vínculis ópera Christi, mittens duos ex discípulis suis, ait illi: Tu es qui ventúrus es, an álium exspectámus?</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Now when John had heard in prison the works of Christ: sending two of his disciples he said to him: “Art thou he that art to come, or look we for another?”</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Primam</p>
   <p:Rubric>Ant 1 from Lauds is used.</p>
   <p:BodySm/>
   <p:Head2>ad Tértiam</p>
   <p:Rubric>Ant 2 from Lauds is used.</p>
<?php lc('rom15_4.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
   <p:Rubric>Ant 3 from Lauds is used.</p>
<?php lc('rom15_5-6.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Rubric>Ant 5 from Lauds is used.</p>
<?php lc('rom15_13.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
<?php rubrics('ps/SuV.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
<?php lc('rom15_4.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Magnificat</p>
   <p:RubricHidden><t>Mt 11:3-5</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Tu es, qui ventúrus es, * an álium exspectámus? Dícite Joánni quæ vidístis: Ad lumen rédeunt cæci, mórtui resúrgunt, páuperes evangelizántur, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Art thou he that art to come, or look we for another? Tell John what you have seen: the light returns to the blind, the dead rise again, the poor have the gospel preached to them, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ÉXCITA, Dómine, corda nostra ad præparándas Unigéniti tui vias: ut per ejus advéntum purificátis tibi méntibus servíre mereámur: Qui tecum vivit.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>STIR up our hearts, O Lord, to prepare the ways of thy Only-begotten Son, that we may attain to serve thee with purified minds, through his advent. Who liveth.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Secunda</p>
   <p:Head3>III classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>De cælo véniet * Dominátor Dóminus, et in manu ejus honor et impérium.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>From heaven cometh * The Lord the Ruler, and in his hand are honour and dominion.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ecce véniet Rex * Dóminus terræ, et ipse áuferet jugum captivitátis nostræ.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Behold the King cometh, * the Lord of all the earth, to take off from us the yoke of our captivity.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Tertia</p>
   <p:Head3>III classis</p>
   <p:Head3>Benedictus</p>
   <p:RubricHidden><t>Is 60:2</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Super te, * Jerúsalem, oriétur Dóminus, et glória ejus in te vidébitur.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Upon thee, * O Jerusalem, the Lord shall arise, and his glory shall be seen upon thee.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <p:RubricHidden><t>Is 40:3</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Vox clamántis * in desérto, Paráte viam Dómini, rectas fácite sémitas Dei nostri.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The voice of one crying * in the desert: Prepare ye the way of the Lord, make straight the paths of our God.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quarta</p>
   <p:Head3>III classis</p>
   <p:Rubric>Preces are said at Lauds and Vespers.</p>
   <p:Head3>Benedictus</p>
   <p:RubricHidden><t>Mal 3:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ecce ego mitto * Ángelum meum, qui præparábit viam meam ante fáciem tuam.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Behold I send * my Angel, who shall prepare my way before thy face.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Sion, renováberis, * et vidébis justum tuum, qui ventúrus est in te.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Thou shalt yet be build anew, * O Zion, and thou shalt see thy Righteous One, who shall come in thee.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quinta</p>
   <p:Head3>III classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Tu es qui ventúrus es, * Dómine, quem exspectámus, ut salvum fácias pópulum tuum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>O Lord, thou art he that should come, * for whom we look, that thou shouldest save thy people.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Qui post me véniet, * ante me factus es: cujus non sum dignus calceaménta sólvere.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>He it is * who, coming after me, is preferred before me; whose shoe’s latchet I am not worthy to unloose.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Sexta</p>
   <p:Head3>III classis</p>
   <p:Rubric>Preces are said at Lauds and Vespers.</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Dícite: Pusillánimes, * confortámini: ecce Dóminus Deus noster véniet.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Say: * Ye that are of a fearful heart, be strong; behold, the Lord our God will come.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Cantáte Dómino * cánticum novum: laus ejus ab extrémis terræ.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Sing unto the Lord * a new song: from the end of the earth let the voice of praise be heard.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Sabbato</p>
   <p:Head3>III classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Levábit Dóminus signum, * in natiónibus, et congregábit dispérsos Israël.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The Lord shall lift up a standard * unto the nations, and shall gather together the outcasts of Israel.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH></p>
<?php hidden('Advent',1); ?>
<?php hidden('Advent III',2); ?>
   <p:Head1>Dominica III Adventus</p>
   <p:Head2>I classis</p>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>AUREM tuam, quǽsumus, Dómine, précibus nostris accómmoda: et mentis nostræ ténebras grátia tuæ visitatiónis illústra: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>INCLINE thine ear to our prayers, we beseech thee, O Lord, and brighten the darkness of our minds by the grace of thy visitation. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad I Vésperas</p>
<?php rubrics('ps/SaV.php'); ?>
   <p:Rubric>Antiphons as in Lauds</p>
<?php lc('phil4_4-5.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent</p>
   <p:Head3>Magnificat</p>
   <p:RubricHidden><t>Is. 43:10, 45:23</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ante me * non est formátus Deus, et post me non erit: quia mihi curvábitur omne genu, et confitébitur omnis lingua.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Before me there was no God formed, and after me there shall be none: for every knee shall be bowed to me, and every tongue shall confess.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
<?php 
	ant('prTemp/advent03.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent03.php','02222');	
?>
<?php lc('phil4_4-5.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Super sólium * David, et super regnum ejus sedébit in ætérnum, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>He shall sit * upon the throne of David, and upon his kingdom for ever, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Tértiam</p>
<?php lc('phil4_4-5.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
<?php lc('phil4_6.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
<?php lc('phil4_7.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
<?php rubrics('ps/SuV.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
<?php lc('phil4_4-5.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Beáta es, María, * quæ credidísti Dómino: perficiéntur in te, quæ dicta sunt tibi a Dómino, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Blessed art thou, * O Mary, that hast believed the Lord: for there shall be a performance of those things which were told thee from the Lord, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>AUREM tuam, quǽsumus, Dómine, précibus nostris accómmoda: et mentis nostræ ténebras grátia tuæ visitatiónis illústra: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>INCLINE thine ear to our prayers, we beseech thee, O Lord, and brighten the darkness of our minds by the grace of thy visitation. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Secunda</p>
   <p:Head3>II or III classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Egrediétur * virga de radíce Jesse, et replébitur omnis terra glória Dómini: et vidébit omnis caro salutáre Dei.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>There shall come forth * a rod out of the stem of Jesse, and the whole earth shall be filled with the glory of the Lord, and all flesh shall see the salvation of God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat (if not O Ant)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Beátam me dicent * omnes generatiónes, quia ancíllam húmilem respéxit Deus.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>All generations shall call me blessed, * for God hath regarded the lowliness of his hand-maiden.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Tertia</p>
   <p:Head3>II or III classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Tu Béthlehem * terra Juda, non eris mínima: ex te enim éxiet Dux, qui regat pópulum meum Israël.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Thou, Bethlehem, * in the land of Judah, shalt not be the least: for out of thee shall come a Ruler, that shall rule my people Israel.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat (if not O Ant)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Eleváre, eleváre, * consúrge Jerúsalem: solve víncula colli tui, captíva fília Sion.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Awake, awake, * arise, O Jerusalem: loose thyself from the bands of thy neck, O captive daughter of Zion.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quarta</p>
   <p:Head3>Quatuor Temporum, II classis</p>
   <p:Rubric>Preces are said at Lauds and Vespers.</p>
   <p:Head3>Collect (Ember Wednesday)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>PRÆSTA, quǽsumus, omnípotens Deus: ut redemptiónis nostræ ventúra solémnitas, et præséntis nobis vitæ subsídia cónferat, et ætérnæ beatitúdinis prǽmia largiátur. Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>GRANT, we beseech thee, Almighty God, that the coming solemnity of our redemption may both confer upon us assistance in this present life and bestow upon us the rewards of everlasting happiness. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Missus est Gábriel * Ángelus ad Maríam Vírginem desponsátam Joseph.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The Angel Gabriel * was sent to Mary, a virgin espoused to Joseph.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat (if not O Ant)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ecce ancílla Dómini: * fiat mihi secúndum verbum tuum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Behold the handmaid of the Lord: * be it done unto me according to thy word.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quinta</p>
   <p:Head3>II or III classis</p>
   <p:Head3>Benedictus (if not Dec. 21)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Vigiláte * ánimo, in próximo est Dóminus Deus noster.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Let your soul watch, * the Lord our God is nigh at hand.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat (if not O Ant)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Lætámini * cum Jerúsalem, et exsultáte in ea, omnes qui dilígitis eam, in ætérnam.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Rejoice ye * with Jerusalem, and be glad with her, all ye that love her for ever.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Sexta</p>
   <p:Head3>Quatuor Temporum, II classis</p>
   <p:Rubric>Preces are said at Lauds and Vespers.</p>
   <p:Head3>Collect (Ember Friday)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ÉXCITA, quǽsumus, Dómine, poténtiam tuam, et veni: ut hi, qui in tua pietáte confídunt, ab omni cítius adversitáte liberéntur: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>ROUSE, thy power, we beseech thee, O Lord, and come: that they who trust in thy goodness may be the sooner freed from all adversity. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Benedictus (if not Dec. 21)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ex quo facta est * vox salutatiónis tuæ in áuribus meis, exsultávit in gáudio infans in útero meo, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>As soon as * the voice of thy salutation sounded in mine ears, the babe leaped in my womb for joy, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat (if not O Ant)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Hoc est testimónium, * quod perhíbuit Joánnes: Qui post me venit, ante me factus est.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>John bare witness of him, * saying: “He that cometh after me is preferred before me.”</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Sabbato</p>
   <p:Head3>Quatuor Temporum, II classis</p>
   <p:Head3>Collect (Ember Saturday)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui cónspicis, quia ex nostra pravitáte afflígimur: concéde propítius; ut ex tua visitatióne consolémur: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, you see that we are afflicted because of our iniquity; have pity, and grant that we may be comforted by thy visitation. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Quómodo fiet istud, * Ángele Dei, quóniam virum non cognósco? Audi, María Virgo: Spíritus Sanctus supervéniet in te, et virtus Altíssimi obumbrábit tibi.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>O thou Angel of God, * how shall this be, seeing I know not a man? Hear, O Virgin Mary! the Holy Ghost shall come upon thee, and the power of the Highest shall overshadow thee!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
<?php hidden('Advent',1); ?>
<?php hidden('Advent - Major Ant.',2); ?>
   <p:Head1>Antiphonæ Majores</p>
   <p:BodySm/>
   <p:Head2>Die 17 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O SAPIÉNTIA, * quæ ex ore Altíssimi prodiísti, attíngens a fine usque ad finem, fórtiter suavitérque dispónens ómnia: veni ad docéndum nos viam prudéntiæ.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O WISDOM, * that comest out of the mouth of the Most High, that reachest from one end to another, and dost mightily and sweetly order all things: come to teach us the way of prudence!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 18 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O ADONÁI, * et Dux domus Israël, qui Móysi in igne flammæ rubi apparuísti, et ei in Sina legem dedísti: veni ad rediméndum nos in bráchio exténto.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O ADONAI, * and Ruler of the house of Israel, who didst appear unto Moses in the burning bush, and gavest him the law in Sinai: come, to redeem us with an outstretched arm!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 19 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O RADIX Jesse, * qui stas in signum populórum, super quem continébunt reges os suum, quem Gentes deprecabúntur: veni ad liberándum nos, jam noli tardáre.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O ROOT of Jesse, * which standest for an ensign of the people, at whom the kings shall shut their mouths, unto whom the Gentiles shall seek: come, to deliver us, make no tarrying!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 20 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O CLAVIS David, * et sceptrum domus Israël; qui áperis, et nemo claudit; claudis, et nemo áperit: veni, et educ vinctum de domo cárceris, sedéntem in ténebris, et umbra mortis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O KEY of David, * and Sceptre of the house of Israel; that openest, and no man shutteth; and shuttest and no man openeth: come, to bring out the prisoners from the prison, and them that sit in darkness, and in the shadow of death!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 21 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Nolíte timére: * quinta enim die véniet ad vos Dóminus noster.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Fear not: * yet five days and the Lord shall come unto you.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O ÓRIENS, * splendor lucis ætérnæ, et sol justítiæ: veni, et illúmina sedéntes in ténebris, et umbra mortis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O DAY-SPRING, * Brightness of the everlasting Light, Sun of Righteousness, come, to give light to them that sit in darkness, and in the shadow of death!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 22 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O REX Géntium, * et desiderátus eárum, lapísque anguláris, qui facis útraque unum: veni, et salva hóminem, quem de limo formásti.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O KING of the Gentiles, * yea, and Desire thereof, O Cornerstone that makest of twain one: come, to save man, whom Thou hast made of the dust of the earth!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Die 23 Decembris</p>
   <p:Head3>II classis</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ecce compléta sunt * ómnia, quæ dicta sunt per Ángelum de Vírgine María.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Behold, all things are fulfilled, * which were spoken by the Angel concerning the Virgin Mary.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>O EMMÁNUEL, * Rex et légifer noster, exspectátio Géntium, et Salvátor eárum: veni ad salvándum nos, Dómine, Deus noster.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O EMMANUEL, * our King and our Law-giver, Longing of the Gentiles, yea, and Salvation thereof: come to save us, O Lord our God.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
<?php hidden('Advent',1); ?>
<?php hidden('Advent IV',2); ?>
   <p:Head1>Dominica IV Adventus</p>
   <p:Head2>I classis</p>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ÉXCITA, quǽsumus, Dómine, poténtiam tuam, et veni: et magna nobis virtúte succúrre; ut per auxílium grátiæ tuæ, quod nostra peccáta præpédiunt, indulgéntia tuæ propitiatiónis accéleret: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>STIR UP thy power, we beseech thee, O Lord, and come, and succor us with great might, that, by the help of thy grace, what is hindered by our sins, may be hastened by the bounty of thy mercy. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad I Vésperas</p>
<?php rubrics('ps/SaV.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
<?php lc('1cor4_1-2.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent</p>
   <p:Rubric>Magnificat: O Antiphon.</p>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
<?php 
	ant('prTemp/advent04.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent04.php','02222');	
?>
<?php lc('1cor4_1-2.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ave, María, * grátia plena: Dóminus tecum: benedícta tu in muliéribus, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Hail, Mary, * full of grace: the Lord is with thee. Blessed art thou among women, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Tértiam</p>
<?php lc('1cor4_1-2.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
<?php lc('1cor4_3.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
<?php lc('1cor4_5.php'); ?>
   <p:Rubric>Brief Respond as in Ordinary of Advent.</p>
   <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
<?php rubrics('ps/SuV.php'); ?>
   <p:Rubric>Antiphons as in Lauds.</p>
<?php lc('1cor4_1-2.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Rubric>Magnificat: O Antiphon.</p>
   <p:BodySm/>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ÉXCITA, quǽsumus, Dómine, poténtiam tuam, et veni: et magna nobis virtúte succúrre; ut per auxílium grátiæ tuæ, quod nostra peccáta præpédiunt, indulgéntia tuæ propitiatiónis accéleret: Qui vivis.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>STIR UP thy power, we beseech thee, O Lord, and come, and succor us with great might, that, by the help of thy grace, what is hindered by our sins, may be hastened by the bounty of thy mercy. Who livest.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Secunda</p>
   <p:Head3>II classis</p>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Dicit Dóminus: * Pœniténtiam ágite: appropinquávit enim regnum cælórum, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Thus saith the Lord, * Repent ye, for the kingdom of heaven is at hand, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Tertia</p>
   <p:Head3>II classis</p>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Consúrge, consúrge, * indúere fortitúdinem bráchium Dómini.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Awake, awake, * put on strength, O arm of the Lord!</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quarta</p>
   <p:Head3>II classis</p>
   <p:Rubric>Preces are said at Lauds and Vespers.</p>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ponam in Sion * salútem, et in Jerúsalem glóriam meam, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>I will place salvation * in Zion, and my glory in Jerusalem, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>Feria Quinta</p>
   <p:Head3>II classis</p>
   <p:Head3>Benedictus (if not Dec. 21 or 23)</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Consolámini, consolámini, * pópule meus, dicit Dóminus Deus vester.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Comfort ye, comfort ye, * my people, saith the Lord your God.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
<?php hidden('Advent',1); ?>
<?php hidden('Vigil of the Nativity (Dec. 24)',2); ?>
   <p:Head1>in Vigilia Nativitatis Domini</p>
   <p:Head2>December 24 - I classis</p>
   <p:Rubric>If the Vigil of the Nativity of our Lord occurs on Sunday, I Vespers of IV Sunday of Advent is said. Lauds and the little hours of the Vigil of the Nativity is said, without a commemoration of the Sunday.</p>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui nos redemptiónis nostræ ánnua exspectatióne lætíficas: præsta; ut Unigénitum tuum, quem Redemptórem læti suscípimus, veniéntem quoque Júdicem secúri videámus, Dóminum nostrum Jesum Christum Fílium tuum: Qui tecum vivit.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, who gladden us by the annual expectation of our redemption, grant that we who now joyfully welcome thy Only-begotten Son as our Redeemer, may also, without fear, behold him coming as our Judge, even the same Lord Jesus Christ Thy Son. Who liveth.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
   <p:Head3>Psalms with Antiphons</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 1. </s>Judǽa et Jerúsalem, * nolíte timére: cras egrediémini, et Dóminus erit vobíscum, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 1. </s>O Judah and Jerusalem, * fear not: tomorrow ye shall go out, and the Lord will be with you.</p>
     </td>
    </tr>
   </table>
<?php rubrics('ps/SuL1.php'); ?>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 2. </s>Hódie sciétis * quia véniet Dóminus: et mane vidébitis glóriam ejus.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 2. </s>This day ye shall know * that the Lord cometh: and in the morning, then ye shall see His glory.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 3. </s>Crástina die * delébitur iníquitas terræ: et regnábit super nos Salvátor mundi.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 3. </s>On the morrow * the sins of the earth shall be washed away, and the Saviour of the world will be our King.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 4. </s>Dóminus véniet, * occúrrite illi, dicéntes: Magnum princípium, et regni ejus non erit finis: Deus, Fortis, Dominátor, Princeps pacis, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 4. </s>The Lord cometh! * Go ye out to meet him, and say: How great is his dominion, and of his kingdom there shall be no end: he is the Mighty God, the Ruler, the Prince of Peace, alleluia.</p>
     </td>
    </tr>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 5. </s>Crástina erit * vobis salus, dicit Dóminus Deus exercítuum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 5. </s>On the morrow * ye shall be saved, saith the Lord God of hosts.</p>
     </td>
    </tr>
   </table>
<?php lc('rom1_1-3.php'); ?>
   <p:Rubric>Hymn as in Ordinary of Advent.</p>
   <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Oriétur * sicut sol Salvátor mundi: et descéndet in úterum Vírginis, sicut imber super gramen, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The Saviour of the world * shall rise like the sun, and come down into the womb of the Virgin as the showers upon the grass, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Tértiam</p>
<?php lc('rom1_1-3.php'); ?>
<?php 
	brS('PrTemp/hodie_scietis_quia_veniet_dominus.php');
	vrS('PrTemp/constantes_estote.php');
?>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
<?php lc('rom1_4.php'); ?>
<?php 
	brS('PrTemp/crastina_die_delebitur_iniquitas_terrae.php');
	vrS('PrTemp/crastina_erit_vobis_salus.php');
?>
   <p:Body/>
   <p:Head2>ad Nonam</p>
<?php lc('rom1_5-6.php'); ?>
<?php 
	brS('PrTemp/crastina_erit_vobis_salus.php');
	vrS('PrTemp/crastina_die_delebitur_iniquitas_terrae.php');
?>
   <p:BodySm/>
   <p:Rubric>After the hour of None, the season of Christmas begins.</p>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>

