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

