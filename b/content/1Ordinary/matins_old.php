<?php
	space('PgH');
	img('00_ordinary.tif',100);
	space();
	head('Ordinarium Divini Officii','Ordinary of the Divine Office',0);
	space();
	space('PgB');
	space();
	rubp('1. Officium divinum, nisi aliter suo loco indicetur, per totum annum et ad omnes Horas, absolvitur juxta formam, quæ in rubricis hujus Ordinarii exhibetur.', '1. The divine Office is carried out, through the whole year and at all Hours, according to the form, which is presented in the rubrics of this Ordinary, unless presented otherwise in its proper place.');
	hour('M','O');
	rubp('','Only select parts of this Hour have been included.');
	vrS('Ord/domine_labia_mea_aperies.php');
	vr('deus_in_adjutorium.php');
	bookmark('Ps94');
	psalm('094.php');
/*
	head('Invitatoria','Invitatories',3);
	rubp('Dominica, a die 14 Jan usque Septuagesimam, et a die 1 Oct usque ad diem 26 Nov inclusive:', 'Sunday, from 14 Jan through Septuagesima, and 1 Oct through 26 Nov, inclusive:',0);
	ant('Inv1Winter.php','+');
	rubp('Dominica, post Pentecosten usque ad diem 30 Sept.', 'Sunday, after Pentecost until 30 Sept, inclusive.',0);
	ant('Inv1Summer.php','+');
	rubp('Feria II','Monday');
	ant('Inv2.php','+');
	rubp('Feria III','Tuesday');
	ant('Inv3.php','+');
	rubp('Feria IV','Wednesday');
	ant('Inv4.php','+');
	rubp('Feria V','Thursday');
	ant('Inv5.php','+');
	rubp('Feria VI','Friday');
	ant('Inv6.php','+');
	rubp('Sabbato','Saturday');
	ant('Inv7.php','+');
	rubp('B. Mariæ Virg. in Sabbato','B.V.M. Saturday');
	ant('Inv7BVM.php','+',2);
 */
?>
<?php /*
   <p:BodySm/>
   <p:Head2>Hymn</p>
   <p:Spacer/>
   <p:Head2>Nocturns</p>
   <p:RubricH>In each nocturn, the psalms with antiphons are said, followed by a versicle, from the office of the day. Afterwards is said:</p>
<?php rubrics('ord/pater_silent_vr.php'); ?>
	<p:Head3>Absolution</p>
   <p:Rubric>Next is said an absolution, according to the following table:</p>
   <p:RubricH>I Nocturn, or Sunday, Monday and Thursday for a single Nocturn.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>EXÁUDI, Dómine Jesu Christe, preces servórum tuórum, et miserére nobis: Qui cum Patre et Spíritu Sancto vivis et regnas in sǽcula sæculórum.</p>
      <p:BodyL><s:VR>R. </s>Amen.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>GRACIOUSLY hear, O Lord Jesus Christ, the prayers of thy servants, and have mercy upon us: Who livest and reignest with the Father and the Holy Spirit, world without end.</p>
      <p:BodyE><s:VR>R. </s>Amen.</p>
     </td>
    </tr>
   </table>
   <p:RubricH>II Nocturn, or Tuesday and Friday for a single Nocturn.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>IPSÍUS píetas et misericórdia nos ádjuvet, qui cum Patre et Spíritu Sancto vivit et regnat in sǽcula sæculórum.</p>
      <p:BodyL><s:VR>R. </s>Amen.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>MAY his loving-kindness and his mercy help us, who liveth and reigneth with the Father and the Holy Spirit, world without end.</p>
      <p:BodyE><s:VR>R. </s>Amen.</p>
     </td>
    </tr>
   </table>
   <p:RubricH>III Nocturn, or Wednesday and Saturday for a single Nocturn.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>A VÍNCULIS peccatórum nostrórum absólvat nos omnípotens et miséricors Dóminus.</p>
      <p:BodyL><s:VR>R. </s>Amen.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>MAY the Almighty and merciful Lord loose us from the bonds of our sins.</p>
      <p:BodyE><s:VR>R. </s>Amen.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:RubricH>Before each lesson:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Jube, Dómine (domne) benedícere.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>Pray, O Lord (Father), a blessing.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>Then is said a blessing, followed by the lesson, after which is said:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL>Tu autem, Dómine, miserére nobis.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyE>But thou, O Lord, have mercy upon us.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
	</table>
*/ ?>
   <p:BodySm/>
<?php reading('tedeum.php'); ?>
<?php /*
   <p:Head2>Collect</p>
<?php vr('de_dv.php'); ?>
	<table>
    <tr>
     <td:A1>
      <p:BodyL>Orémus.</p>
      <p:Rubric>Oratio conveniens</p>
      <p:BodyL><s:VR>R. </s>Amen.</p>
     </td>
     <td:B1>
      <p:BodyE>Let us pray.</p>
      <p:Rubric>Collect of the Day</p>
      <p:BodyE><s:VR>R. </s>Amen.</p>
     </td>
    </tr>
   </table>
<?php vr('dv_de_short.php'); ?>
<?php vrS('benedicamus_domino.php'); ?>
<?php vrS('fidelium_animae.php'); ?>
 */ ?>

