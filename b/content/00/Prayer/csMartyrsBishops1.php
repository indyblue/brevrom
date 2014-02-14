   <table:table table:name="Table2182" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyLDrop">BEATÓRUM Mártyrum paritérque Pontíficum <?php
if($nameL=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> et <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameL;
?> nos, quæsumus, Dómine, festa tueántur: et eórum comméndet orátio veneránda. Per Dóminum.</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
		<text:p text:style-name="BodyEDrop">WE BESEECH thee, O Lord, that the festive commemoration of blessed <?php
if($nameE=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> and <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameE;
?> thy Martyrs and Bishops may assist us, and their venerable prayers obtain for us thy gracious favour. Through our Lord.</text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
