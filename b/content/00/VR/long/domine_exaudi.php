	<p:RubricHidden><text:tab/>Ps 101:2</p>
	<table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Dómine, exáudi oratiónem meam. <s:VR>R. </s>Et clamor meus ad te véniat.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>O Lord, hear my prayer. <s:VR>R. </s>And let my cry come unto thee.</p>
     </td>
    </tr>
   </table>
<?php if ($option==0): ?>
   <p:BodySm><s:Rubric>Or if a Priest or Deacon presides: </s>Dóminus vobíscum, p. <text:bookmark-ref text:reference-format="page" text:ref-name="vrDominusVobiscum"/></p>
<?php else: ?>
   <p:RubricH>Or if a Priest or Deacon presides the following is said:</p>
   <table>
    <tr>
     <td:A1>
      <p:BodyL><s:VR>V. </s>Dóminus vobíscum.</p>
      <p:BodyL><s:VR>R. </s>Et cum spíritu tuo.</p>
     </td>
     <td:B1>
      <p:BodyE><s:VR>V. </s>The Lord be with you.</p>
      <p:BodyE><s:VR>R. </s>And with thy spirit.</p>
     </td>
    </tr>
   </table>
<?php endif; ?>

