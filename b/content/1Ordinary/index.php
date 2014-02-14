<?php
	space('PgH');
	img('00_ordinary.png',100);
	space();
	bookmark('OrOrdinary');
	head('Ordinarium Divini Officii','Ordinary of the Divine Office',0);
	space();
	space('PgB');
	rubp('<snr>1</s> Officium divinum, nisi aliter suo loco indicetur, per totum annum et ad omnes Horas, absolvitur juxta formam, quæ in rubricis hujus Ordinarii exhibetur.', '<snr>1</s> The divine Office is carried out, through the whole year and at all Hours, according to the form, which is presented in the rubrics of this Ordinary, unless presented otherwise in its proper place.');
	space();

$matins = $_GET['matins'];
if($matins) require '01_matins.php';

require '02_lauds.php';
require '03_prime.php';
require '04_terce.php';
require '05_sext.php';
require '06_none.php';
require '07_vespers.php';
require '08_compline.php';

	space();
	img('sanctus.png',100);
	head('<sr>Pars Specialis</s>','<sr>Special Part</s>',1);
	space();
bookmark('orSeason');
require '11_advent.php';
require '12_nativity.php';
require '13_epiphany.php';

?>

   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Epiphany',2); ?>
   <p:Head1>Tempore Epiphaniæ</p>
   <p:Head2>Collect</p>
   <p:RubricH>Before the first Sunday after Epiphany:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui hodiérna die Unigénitum tuum Géntibus stella duce revelásti: concéde propítius; ut, qui jam te ex fide cognóvimus, usque ad contemplándam spéciem tuæ celsitúdinis perducámur. Per eúmdem Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, who by the leading of a star didst, as on this day, manifest thine only-begotten Son to the Gentiles, mercifully grant that we, who know thee now by faith, may after this life have the fruition of thy glorious Godhead. Through the same.</p>
     </td>
    </tr>
   </table>
   <p:RubricH>After the first Sunday after Epiphany:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>VOTA, quǽsumus, Dómine, supplicántis pópuli cælésti pietáte proséquere: ut et quæ agénda sunt, vídeant, et ad implénda quæ víderint, convaléscant. Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O LORD, we beseech thee, mercifully to receive the prayers of thy people who call upon thee, and grant that they may both perceive and know what things they ought to do, and also may have the grace and power faithfully to fulfill the same. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Is. 60:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>SURGE, illumináre, Jerúsalem, quia venit lumen tuum, et glória Dómini super te orta est.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>ARISE, be enlightened, O Jerusalem: for thy light is come, and the glory of the Lord is risen upon thee.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('o_sola_magnarum_urbium.php',0); ?>
<?php vrS('PrTemp/adorate_deum.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Tértiam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Is. 60:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>SURGE, illumináre, Jerúsalem, quia venit lumen tuum, et glória Dómini super te orta est.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>ARISE, be enlightened, O Jerusalem: for thy light is come, and the glory of the Lord is risen upon thee.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/reges_tharsis_et_insulae_munera_offerent.php',1); ?>
<?php vrS('PrTemp/omnes_de_saba_venient.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Sextam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Is. 60:4</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>LEVA in circúitu óculos tuos, et vide: omnes isti congregáti sunt, venérunt tibi: fílii tui de longe vénient, et fíliæ tuæ de látere surgent.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>LIFT up thy eyes round about, and see: all these are gathered together, they are come to thee: thy sons shall come from afar, and thy daughters shall rise up at thy side.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/omnes_de_saba_venient.php',1); ?>
<?php vrS('PrTemp/adorate_dominum.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Is. 60:6</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>OMNES de Saba vénient, aurum et thus deferéntes, et laudem Dómino annuntiántes.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>ALL they from Saba shall come, bringing gold and frankincense: and shewing forth praise to the Lord.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/adorate_dominum.php',1); ?>
<?php vrS('PrTemp/adorate_deum.php',1); ?>
  <p:BodySm/>
   <p:Head2>ad II Vésperas</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Is. 60:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>SURGE, illumináre, Jerúsalem, quia venit lumen tuum, et glória Dómini super te orta est.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>ARISE, be enlightened, O Jerusalem: for thy light is come, and the glory of the Lord is risen upon thee.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('crudelis_herodes_deum.php'); ?>
<?php vrS('PrTemp/reges_tharsis_et_insulae_munera_offerent.php'); ?>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Septuagesima',2); ?>
   <p:Head1>Tempore Septuagesimæ</p>
   <p:Rubric>All as in the Season throughout the year, except those things which are Proper.</p>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Lent',2); ?>
   <p:Head1>Tempore Quadragesimæ</p>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t> Is. 58:1</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CLAMA, ne cesses, quasi tuba exálta vocem tuam, et annúntia pópulo meo scélera eórum, et dómui Jacob peccáta eórum.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>CRY, cease not, lift up thy voice like a trumpet, and shew my people their wicked doings, and the house of Jacob their sins.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('o_sol_salutis_intimis.php'); ?>
<?php vrS('PrTemp/angelis_suis_deus_mandavit_de_te.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Tertiam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Joel 2:12-13</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CONVERTÍMINI ad me in toto corde vestro, in jejúnio, et fletu, et planctu. Et scíndite corda vestra, et non vestiménta vestra, ait Dóminus omnípotens.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BE CONVERTED to me with all your heart, in fasting, and in weeping, and in mourning. And rend your hearts, and not your garments, saith the Lord Almighty.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/ipse_liberavit_me_de_laqueo_venantium.php'); ?>
<?php vrS('PrTemp/scapulis_suis_obumbrabit_tibi.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Séxtam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Is. 55:7</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DERELÍNQUAT ímpius viam suam, et vir iníquus cogitatiónes suas, et revertátur ad Dóminum, et miserébitur ejus, et ad Deum nostrum, quóniam multus est ad ignoscéndum.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>LET the wicked forsake his way, and the unjust man his thoughts, and let him return to the Lord, and he will have mercy on him, and to our God: for he is bountiful to forgive.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/scapulis_suis_obumbrabit_tibi.php'); ?>
<?php vrS('PrTemp/scuto_circumdabit_te_veritas_ejus.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Is. 58:7</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>FRANGE esuriénti panem tuum, et egénos vagósque induc in domum tuam: cum víderis nudum, óperi eum, et carnem tuam ne despéxeris.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>DEAL thy bread to the hungry, and bring the needy and the harbourless into thy house: when thou shalt see one naked, cover him, and despise not thy own flesh.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/scuto_circumdabit_te_veritas_ejus.php'); ?>
<?php vrS('PrTemp/angelis_suis_deus_mandavit_de_te.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Joel 2:17</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>INTER vestíbulum et altáre plorábunt sacerdótes, minístri Dómini, et dicent: Parce, Dómine, parce pópulo tuo: et ne des hereditátem tuam in oppróbrium, ut dominéntur eis natiónes.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BETWEEN the porch and the altar the priests the Lord’s ministers shall weep, and shall say: Spare, O Lord, spare thy people: and give not thy inheritance to reproach, that the heathen should rule over them.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('audi_benigne_conditor.php'); ?>
<?php vrS('PrTemp/angelis_suis_deus_mandavit_de_te.php'); ?>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Passiontide',2); ?>
   <p:Head1>Tempus Passionis</p>
   <p:Rubric>In Passiontide, in the Sunday or Ferial Office, Glória Patri is omitted from the Brief Responds.</p>
   <p:Head2>ad Laudes</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Jer. 11:19</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>VENÍTE, mittámus lignum in panem ejus, et eradámus eum de terra vivéntium, et nomen ejus non memorétur ámplius.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>LET us put wood on his bread, and cut him off from the land of the living, and let his name be remembered no more.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('lustra_sex_qui_jam_peregit.php',0); ?>
<?php vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Tertiam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Jer 17:13</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DÓMINE, omnes qui te derelínquunt, confundéntur: recedéntes a te, in terra scribéntur: quóniam dereliquérunt venam aquárum vivéntium Dóminum.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O LORD: all that forsake thee shall be confounded: they that depart from thee, shall be written in the earth: because they have forsaken the Lord, the vein of living waters.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/erue_a_framea_deus_animam_meam.php',0,1); ?>
<?php vrS('PrTemp/de_ore_leonis_libera_me_domine.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Séxtam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Jer 17:18</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CONFUNDÁNTUR qui me persequúntur, et non confúndar ego: páveant illi, et non páveam ego: induc super eos diem afflictiónis, et dúplici contritióne cóntere eos, Dómine, Deus noster.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>LET them be confounded that persecute me, and let not me be confounded: let them be afraid, and let not me be afraid: bring upon them the day of affliction, and with a double destruction, destroy them.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/de_ore_leonis_libera_me_domine.php',0,1); ?>
<?php vrS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Jer 18:20</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>RECORDÁRE quod stéterim in conspéctu tuo, ut lóquerer pro eis bonum, et avérterem indignatiónem tuam ab eis.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>REMEMBER that I have stood in thy sight, so speak good for them, and turn away thy indignation from them.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php',0,1); ?>
<?php vrS('PrTemp/eripe_me_domine_ab_homine_malo.php'); ?>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Jer. 11:20</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>TU AUTEM, Dómine Sábaoth, qui júdicas juste, et probas renes et corda, vídeam ultiónem tuam ex eis: tibi enim revelávi causam meam, Dómine, Deus meus.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BUT thou, O Lord of Sabaoth, who judgest justly, and triest the reins and hearts, let me see thy revenge on them: for to thee I have revealed my cause, O Lord my God.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
	<p:Head3>Hymn</p>
<?php hymn('vexilla_regis_prodeunt.php',0); ?>
<?php vrS('PrTemp/eripe_me_domine_ab_homine_malo.php'); ?>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Easter',2); ?>
   <p:Head1>Tempore Paschatis</p>
   <p:Rubric>Under single antiphon Psalms and Canticles are said at all hours throughout the season of Paschaltide:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLSm><sr>Ant. </s>Allelúja, * Allelúja, Allelúja.</p>
     </td>
     <td:B1>
      <p:BodyESm><sr>Ant. </s>Alleluia, * Alleluia, Alleluia</p>
     </td>
    </tr>
   </table>
   <p:Rubric>The word Alleluia is added in certain places where it does not occur out of Paschaltide: it is added to the Invitatory; to each Antiphon when said entire (except, of course, when before a Psalm the Antiphon is the same as the opening words of a Psalm); and to each <s:VR>V</s>. and <s:VR>R</s>. (except those given without it in Common Forms and the Ordinary: i.e. the Opening Versicles, the Preces, etc.).</p>
   <p:Rubric/>
   <p:Rubric>All Brief Responds are said according to the following pattern:</p>
      <p:Body><s:VR>V. </s><sr>Versicle as given, to which is added:</s> * Alleluia, alleluia.</p>
      <p:Body><s:VR>R. </s><sr>The first versicle is repeated, as above.</s></p>
      <p:Body><s:VR>V. </s><sr>Versicle said without modiification.</s></p>
      <p:Body><s:VR>R. </s>Alleluia, alleluia.</p>
      <p:Body><s:VR>V. </s>Glória Patri...Sancto.</p>
      <p:Body><s:VR>R. </s><sr>The first versicle is repeated, as above.</s></p>
      <p:Body><s:VR>V. </s><sr>Versicle as given, to which is added:</s> alleluia.</p>
      <p:Body><s:VR>R. </s><sr>Response as given, to which is added:</s> alleluia.</p>
   <p:Body/>
   <p:Head2>ad Laudes</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Rom. 6:9-10</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CHRISTUS resúrgens ex mórtuis jam non móritur, mors illi ultra non dominábitur. Quod enim mórtuus est peccáto, mórtuus est semel: quod autem vivit, vivit Deo.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>KNOWING that Christ rising again from the dead, dieth now no more, death shall no more have dominion over him. For in that he died to sin, he died once; but in that he liveth, he liveth unto God.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('aurora_caelum_purpurat.php'); ?>
<?php vrS('PrTemp/in_resurrectione_tua_christe.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Tertiam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Rom. 6:9-10</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CHRISTUS resúrgens ex mórtuis jam non móritur, mors illi ultra non dominábitur. Quod enim mórtuus est peccáto, mórtuus est semel: quod autem vivit, vivit Deo.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>KNOWING that Christ rising again from the dead, dieth now no more, death shall no more have dominion over him. For in that he died to sin, he died once; but in that he liveth, he liveth unto God.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/surrexit_dominus_de_sepulcro.php',1); ?>
<?php vrS('PrTemp/surrexit_dominus_vere.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Séxtam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>1 Cor. 15:20-22</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CHRISTUS resurréxit a mórtuis primítiæ dormiéntium: quóniam quidem per hóminem mors, et per hóminem resurréctio mortuórum. Et sicut in Adam omnes moriúntur, ita et in Christo omnes vivificabúntur.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BUT now Christ is risen from the dead, the firstfruits of them that sleep: for by a man came death, and by a man the resurrection of the dead. And as in Adam all die, so also in Christ all shall be made alive.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/surrexit_dominus_vere.php',1); ?>
<?php vrS('PrTemp/gavisi_sunt_discipuli.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>1 Peter 3:18</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CHRISTUS semel pro peccátis nostris mórtuus est, justus pro injústis, ut nos offérret Deo, mortificátus quidem carne, vivificátus autem spíritu.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BECAUSE Christ also died once for our sins, the just for the unjust: that he might offer us to God, being put to death indeed in the flesh, but enlivened in the spirit.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/gavisi_sunt_discipuli.php',1); ?>
<?php vrS('PrTemp/mane_nobiscum_domine.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm>In ferial Office:<t>Rom. 6:9-10</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CHRISTUS resúrgens ex mórtuis jam non móritur, mors illi ultra non dominábitur. Quod enim mórtuus est peccáto, mórtuus est semel: quod autem vivit, vivit Deo.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>KNOWING that Christ rising again from the dead, dieth now no more, death shall no more have dominion over him. For in that he died to sin, he died once; but in that he liveth, he liveth unto God.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('ad_regias_agni_dapes.php'); ?>
<?php vrS('PrTemp/mane_nobiscum_domine.php',1); ?>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Ordinary',1); ?>
<?php hidden('Ascensiontide',2); ?>
   <p:Head1>Tempore Ascensionis</p>
   <p:Head2>Collect</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>CONCÉDE, quǽsumus, omnípotens Deus: ut, qui hodiérna die Unigénitum tuum Redemptórem nostrum ad cælos ascendísse crédimus; ipse quoque mente in cæléstibus habitémus. Per eúmdem Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>GRANT, we beseech thee, almighty God, that we who believe thy Only-begotten Son, our Redeemer, to have this day ascended into heaven, may ourselves also in mind dwell amid heavenly things. Through the same.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Acts 1:1-2</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>PRIMUM quidem sermónem feci de ómnibus, o Theóphile, quæ cœpit Jesus fácere et docére usque in diem, qua præcípiens Apóstolis per Spíritum Sanctum, quos elégit assúmptus est.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>THE former treatise I made, O Theophilus, of all things which Jesus began to do and to teach, until the day on which, giving commandments by the Holy Ghost to the apostles whom he had chosen, he was taken up.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Hymn</p>
<?php hymn('salutis_humanae_sator.php'); ?>
<?php vrS('PrTemp/dominus_in_caelo.php',1); ?>
   <p:Head3>Benedictus</p>
   <p:RubricHSm>in ferial Office:<t>Jn 20:17</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Ascéndo ad Patrem meum, * et Patrem vestrum: Deum meum, et Deum vestrum, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>I ascend to my Father * and your Father, to my God and your God, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Tertiam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Acts 1:1-2</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>PRIMUM quidem sermónem feci de ómnibus, o Theóphile, quæ cœpit Jesus fácere et docére usque in diem, qua præcípiens Apóstolis per Spíritum Sanctum, quos elégit assúmptus est.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>THE former treatise I made, o Theophilus, of all things which Jesus began to do and to teach, until the day on which, giving commandments by the Holy Ghost to the apostles whom he had chosen, he was taken up.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/ascendit_deus_in_jubilatione.php',1); ?>
<?php vrS('PrTemp/ascendens_christus_in_altum.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Séxtam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Acts 1:4-5</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>ET CONVÉSCENS, præcépit eis, ab Jerosólymis ne discéderent, sed exspectárent promissiónem Patris, quam audístis (inquit) per os meum: quia Joánnes quidem baptizávit aqua, vos autem baptizabímini Spíritu Sancto non post multos hos dies.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>AND eating together with them, he commanded them, that they should not depart from Jerusalem, but should wait for the promise of the Father, which you have heard (saith he) by my mouth. For John indeed baptized with water, but you shall be baptized with the Holy Ghost, not many days hence.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/ascendens_christus_in_altum.php',1); ?>
<?php vrS('PrTemp/ascendo_ad_patrem_meum_et_patrem_vestrum.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Nonam</p>
   <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>Acts 1:11</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>VIRI Galilǽi, quid statis aspiciéntes in cælum? Hic Jesus qui assúmptus est a vobis in cælum, sic véniet, quemádmodum vidístis eum eúntem in cælum.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>YE MEN of Galilee, why stand you looking up to heaven? This Jesus who is taken up from you into heaven, shall so come, as you have seen him going into heaven.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
   <p:Head3>Brief Response</p>
<?php brS('PrTemp/ascendo_ad_patrem_meum_et_patrem_vestrum.php',1); ?>
<?php vrS('PrTemp/dominus_in_caelo.php',1); ?>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
   <p:Head3>Little Chapter</p>
   <p:Rubric>As in Lauds.</p>
   <p:Head3>Hymn</p>
	<p:RubricH>As in Lauds:</p>
<?php vrS('PrTemp/ascendit_deus_in_jubilatione.php',1); ?>
   <p:Head3>Magnificat</p>
   <p:RubricH>in ferial Office:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>O Rex glóriæ, * Dómine virtútum, qui triumphátor hódie super omnes cælos ascendísti, ne derelínquas nos órphanos; sed mitte promíssum Patris in nos, Spíritum veritátis, allelúja.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>O King of glory, * Lord of hosts, who hast this day ascended in triumph above all the heavens, leave us not orphans; but send unto us the Promise of the Father, even the Spirit of truth, alleluia.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>

<?php

require '19_per_annum.php';

?>
