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

