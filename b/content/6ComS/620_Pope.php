   <text:p text:style-name="Body"/>
<?php img('separator3.tif',933,170,100); ?>
   <text:p text:style-name="RubricH"/>
   <text:p text:style-name="Hidden1">Common of Saints</text:p>
   <text:p text:style-name="Hidden2">Pope</text:p>
<text:p text:style-name="BkHidden"><text:bookmark text:name="csPope"/></text:p>
	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'Commune Unius aut Plurium Summorum Pontificum':'Common of One or Many Supreme Pontiffs') 
?></text:p>
   <text:p text:style-name="Rubric">All as in the Common of one or several Martyrs, <text:span text:style-name="NonRubric">p. <text:bookmark-ref text:reference-format="page" text:ref-name="csMm"/></text:span>, or of a Confessor Bishop, <text:span text:style-name="NonRubric">p. <text:bookmark-ref text:reference-format="page" text:ref-name="csCB"/></text:span> except for the following:</text:p>
<?php prayer('csPope1.php') ?>
   <text:p text:style-name="RubricH">Or in the plural:</text:p>
<?php prayer('csPope2.php') ?>
   <text:p text:style-name="RubricH">If a commemoration of a second Supreme Pontiff is to be made, the following Prayer is said:</text:p>
<?php prayer('csPope3.php') ?>

