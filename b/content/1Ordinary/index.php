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
require '14_septuagesima.php';
require '15_lent.php';
require '16_passion.php';

?>
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
