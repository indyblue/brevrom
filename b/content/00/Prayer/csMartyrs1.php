   <table:table table:name="Table2182" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyLDrop">DEUS, qui nos concédis sanctórum Mártyrum tuórum <?php
if($nameL=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> et <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameL;
?> natalícia cólere: da nobis in ætérna beatitúdine de eórum societáte gaudére. Per Dóminum.</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
		<text:p text:style-name="BodyEDrop">O GOD, who givest unto us to celebrate the festival of thy holy Martyrs <?php
if($nameE=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> and <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameE;
?>, grant to us to rejoice in their company in eternal happiness. Through our Lord.</text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
