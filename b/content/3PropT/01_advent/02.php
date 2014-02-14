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

