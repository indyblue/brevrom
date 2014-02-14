<?php 

space();
img('separator3.tif',100);
head('Festa Januarii', 'Feasts of January',1);


feast_saint(114,3,'Sancti Hilarii','Saint Hilary','ECD',array('csConfessorDoctor.php','Hilárium','Hilary', 
	'feast_saint(114,-1,"Sancti Felicis","Saint Felix","pM");',
	array('Hilári','Hilary'));

feast_saint(115,3,'S. Pauli, Primi Eremitæ','St. Paul, the First Hermit','C',array('csConfessor1.php','Pauli','Paul'),
	'feast_saint(115,-1,"Sancti Mauri","Saint Maurus","a",array("csConfessorAbbot.php","Mauri","Maurus"));');

feast_saint(116,3,'Sancti Marcelli I','Saint Marcellus','PM');

feast_saint(117,3,'Sancti Antonii','Saint Anthony','a',array('csConfessorAbbot.php','Antónii','Anthony'));

feast_saint(118,0,'Sanctæ Priscæ','Saint Prisca','VM');

feast_saint(119,0,'Ss. Marii, Marthæ, Audifacis et Abachum','Ss. Marius, Martha, Audifax and Abachum','M+'),0,
	'feast_saint(119,-1,"Sancti Canuti","Saint Canute","KM");');

feast_saint(120,3,'Ss. Fabiani, Papæ, et Sebastiani','Ss. Fabian, Pope, and Sebastian','M+');

require '0121-3_saint_agnes.php';

feast_saint(122,3,'Ss. Vincentii et Anastasii','Ss. Vincent and Anastasius','M+');

feast_saint(123,3,'S. Raymundi de Penafort','St. Raymond of Pennafort','C',0,
	'feast_saint(123,-1,"Sanctæ Emerentianæ","Saint Emerentiana","VM",array("csVirginMartyr2.php","Emerentiána","Emerentiana"));');

feast_saint(124,3,'Sancti Timothei','Saint Timothy','EM',array('csMartyrBishop1.php','Timóthei','Timothy'));

require '0125-3_conversion_paul.php';

feast_saint(126,3,'Sancti Polycarpi','Saint Polycarp','EM',array('csMartyrBishop2.php','Polycárpi','Polycarp'));

feast_saint(127,3,'S. Joannis Chrysostomi','St. John Chrysostom','ECD',0,0,array('Joánnes Chrysóstome','John Chrysostom'));

require '0128-3_peter_nolasco.php';

feast_saint(128,3,'S. Petri Nolasci','St. Peter Nolasco','C',0,
	'feast_saint(128,-1,"S. Agnetis","St. Agnes","VM",0,0,"prSanct/0121b.php");');

feast_saint(129,3,'S. Francisci Salesii','St. Francis de Sales','ECD',0,0,array('Franscísce','Francis'));

?>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Jan 30',2); ?>
   <p:Head1NI>Sanctæ Martinæ</p>
   <p:Head2>Virginis et Martyris - III classis - Jan. 30</p>
   <p:Rubric>Psalms and Antiphons of the current feria.</p>
   <p:Rubric>All else from Common of Virgins.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui inter cétera poténtiæ tuæ mirácula étiam in sexu frágili victóriam martýrii contulísti: concéde propítius; ut, qui beátæ Martínæ Vírginis et Mártyris tuæ natalítia cólimus, per ejus ad te exémpla gradiámur. Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, amidst the wondrous work of thy Divine power, thou hast granted the victory of martyrdom even to the weaker sex; mercifully grant that all who keep the Birthday of thy blessed Virgin and Martyr Martina, may, through her example, draw nearer to thee. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Laudes</p>
   <p:Rubric>Psalms and Antiphons of the current feria.</p>
           <p:Head3>Little Chapter</p>
   <p:RubricHSm><t>2 Cor. 10:17-18</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>FRATRES: Qui gloriátur, in Dómino gloriétur. Non enim qui seípsum comméndat, ille probátus est; sed quem Deus comméndat.</p>
      <p:BodyL><s:VR>R. </s>Deo grátias.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>BRETHREN: he that glorieth, let him glory in the Lord. For not he who commendeth himself, is approved, but he, whom God commendeth.</p>
      <p:BodyE><s:VR>R. </s>Thanks be to God.</p>
     </td>
    </tr>
   </table>
           <p:Head3>Hymn</p>
<?php hymn('tu_natale_solum_protege_tu_bonae.php'); ?>
	<table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Diffúsa est grátia in lábiis tuis.</p>
      <p:BodyL><s:VR>R. </s>Proptérea benedíxit te Deus in ætérnum.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>Grace is poured abroad in thy lips.</p>
      <p:BodyE><s:VR>R. </s>Therefore hath God blessed thee for ever.</p>
     </td>
    </tr>
   </table>
           <p:Head3>Benedictus</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Símile est regnum cælórum * hómini negotiatóri quærénti bonas margarítas: invénta una pretiósa, dedit ómnia sua, et comparávit eam.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>The kingdom of heaven is like to * a merchant seeking good pearls: when he finds one pearl of great price, he gives all that he has and buys it.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
   <p:Rubric>Psalms and Antiphons of the current feria.</p>
   <p:Rubric>Little Chapter, Hymn &amp; Versicle as at Lauds.</p>
           <p:Head3>Magnificat</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Veni, Sponsa Christi, * áccipe corónam, quam tibi Dóminus præparávit in ætérnum.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Come, Bride of Christ, * and take the everlasting crown which the Lord hath prepared for thee.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>
<?php img(); ?>
   <p:Body/>
<?php hidden('Jan 31',2); ?>
   <p:Head1NI>Sancti Joannis Bosco</p>
   <p:Head2>Confessoris - III classis - Jan. 31</p>
   <p:Rubric>Psalms and Antiphons of the current feria.</p>
   <p:Rubric>All else from Common of Confessor non-Bishop.</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyLDrop>DEUS, qui sanctum Joánnem Confessórem tuum adolescéntium patrem et magístrum excitásti, ac per eum, auxiliatríce Vírgine María, novas in Ecclésia tua famílias floréscere voluísti: concéde, quǽsumus; ut eódem caritátis igne succénsi, ánimas quǽrere, tibíque soli servíre valeámus. Per Dóminum.</p>
     </td>
     <td:B1>
      <p:BodyEDrop>O GOD, Thou hast raised up Saint John, thy Confessor, to be a father and teacher of youth, and hast willed that through him, with the help of the Virgin Mary, new families should flourish in thy Church; grant, we beseech thee, that inflamed by the same fire of love, we may labour to seek souls and serve thee alone. Through our Lord.</p>
     </td>
    </tr>
   </table>
   <p:BodySm/>

