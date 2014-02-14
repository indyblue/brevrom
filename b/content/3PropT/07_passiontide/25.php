<?php 
	hidden('Passiontide',1);
	hidden('Holy Thursday',2);
	head_temp(1,'Feria Quinta in Cena Domini', 'The Thursday of the Lord’s Supper');
	rubp('A Matutino hujus feriæ usque ad Completorium Sabbati sancti, in fine psalmorum, ad omnes Horas, omittitur <snr>Glória Patri</s>.', 'From Matins of this day until Compline of Holy Saturday, at all the Hours, the <snr>Glory be</s> is omitted at the end of the psalms.');
	hour('L');
	rubrics('ps/FeriaL2.php',-5); 
	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	vrS('PrTemp/homo_pacis_meae_in_quo_speravi.php');
	ant('PrTemp/passiontide/25b.php','B');
	rubp('Dum dicitur canticum <snr>Benedíctus</s>, exstinctis prius omnibus candelis in candelabro triangulari, præter unam, quæ accensa remanet in summitate candelabri, extinguuntur paulatim sex candelæ positæ super altare, ita ut ad ultimum versum cantici extinguatur ultima candela.', 'Then, while the canticle <snr>Benedictus</s> is said, all the candles on the triangular candelabra having previously been extinguished, except the one still lit at the summit; the six candles on the altar are extinguished one by one, so that at the last verse of the canticle the final candle is extinguished.');
	rubp('Similiter extinguuntur luminaria et lampades per ecclesiam.', 'Similarly all lights and lamps in the church are extinguished.');
	space();
	rubp('Repetita antiphona ad <snr>Benedíctus</s>, dicitur, flexis genibus:', 'After the antiphon at the <snr>Benedictus</s> is repeated, the following is said while kneeling:');
	ant('PrTemp/passiontide/25c.php','1');
	rubp('Et, ea finita, additur <snr>Pater noster</s> totum sub silentio; postea, clara voce, sine <snr>Orémus</s>, subjungitur:', 'And, when this is finished, the <snr>Our Father</s> is added, all of which is said silently; afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
	prayer('PrTemp/passiontide/25.php');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

	space();
	hour('H');
	rubp('', '');
?>

   <p:Rubric>The Little Hours are said at a suitable hour, with the candles extinguished and without chant. </p>
   <p:Rubric>They are begun immediately from the psalms, which will be of Sunday, but at Prime as on feasts.</p>
   <p:RubricH>After the psalms have been finished, there is said kneeling the antiphon:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Christus factus est pro nobis obédiens usque ad mortem.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Christ became obedient unto death for us.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>And the rest as in the conclusion of Lauds.</p>
   <p:Rubric>At Prime, the Martyrology is not read, and all the rest up to the end of the Hour is not said.</p>
   <p:BodySm/>
   <p:Head2>ad Vésperas</p>
<?php rubp('Vesperæ ab iis qui Missæ vespertinæ in Cena Domini intersunt, hodie non dicuntur.', 'Vespers is not said by those who take part in the evening Mass of the Lord’s Supper.'); ?>
<?php rubrics('ps/HolySatV.php'); ?>
	<p:RubricHidden><t>Ps 115:4</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant 1. </s>Cálicem * salutáris accípiam, et nomen Dómini invocábo.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant 1. </s>I will take the chalice of salvation; * and I will call upon the name of the Lord.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>The little chapter, hymn and versicle are not said on these three days.</p>
   <p:Head3>Magnificat</p>
   <p:RubricHidden><t>Mt 26:26</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Cœnántibus autem illis, * accépit Jesus panem, et benedíxit, ac fregit, dedítque discípulis suis.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>And whilst they were at supper, * Jesus took bread, and blessed, and broke: and gave to his disciples</p>
     </td>
    </tr>
   </table>
   <p:RubricH>then the following is said kneeling:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Christus factus est pro nobis obédiens usque ad mortem.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Christ became obedient unto death for us.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>And the rest as in the conclusion of Lauds.</p>
   <p:Body/>
   <p:Head2>ad Completorium</p>
   <p:Rubric>Compline is said after the stripping of the altars, with the candles extinguished and without chant.</p>
   <p:RubricH>Examination of Conscience, followed by:</p>
   <p:Body>Confíteor. Misereátur. Indulgéntiam.</p>
<?php rubrics('ps/SuC.php'); ?>
   <p:Rubric>After the psalms, the <snr>Nunc dimittis </s>is said immediately, without antiphon.</p>
   <p:RubricH>then the following is said kneeling:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><sr>Ant. </s>Christus factus est pro nobis obédiens usque ad mortem.</p>
     </td>
     <td:B1>
      <p:BodyE><sr>Ant. </s>Christ became obedient unto death for us.</p>
     </td>
    </tr>
   </table>
   <p:Rubric>And the rest as in the conclusion of Lauds.</p>
   <p:BodySm/>
<?php img(); ?>

