	<table:table table:name="Table2182" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyLDrop">GREGEM tuum, Pastor ætérne, placátus inténde: et per beátos <?php
if($nameL=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> et <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameL;
echo ($mart<0?'<text:span text:style-name="Rubric">(</text:span>':'') .
	($mart!=0?'Mártyres tuos atque':'') . 
	($mart<0?'<text:span text:style-name="Rubric">)</text:span> ':'') .
	($mart>0?' ':'');
?>Summos Pontífices perpétua protectióne custódi; quos totíus Ecclésiæ præstitísti esse pastóres. Per Dóminum.</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
		<text:p text:style-name="BodyEDrop">LOOK forgivingly on thy flock, Eternal Shepherd, and keep it in thy constant protection, by the intercession of blessed <?php
if($nameE=='N.') 
	echo '<text:span text:style-name="Rubric">N.</text:span> and <text:span text:style-name="Rubric">N.</text:span>';
else
	echo $nameE;
echo ($mart<0?'<text:span text:style-name="Rubric">(</text:span>':'') .
	($mart!=0?'Martyrs and':'') . 
	($mart<0?'<text:span text:style-name="Rubric">)</text:span> ':'') .
	($mart>0?' ':'');
?>Sovereign Pontiffs, whom thou didst constitute Shepherds of the whole Church. Through our Lord.</text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
