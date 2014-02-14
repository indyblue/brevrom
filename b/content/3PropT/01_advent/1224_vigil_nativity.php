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

