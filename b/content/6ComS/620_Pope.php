   <p:Body/>
<?php img('separator3.tif',933,170,100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Pope</p>
<?php echo bookmark('csPope'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Unius aut Plurium Summorum Pontificum':'Common of One or Many Supreme Pontiffs') 
?></p>
   <p:Rubric>All as in the Common of one or several Martyrs, <snr>p. <text:bookmark-ref text:reference-format="page" text:ref-name="csMm"/></s>, or of a Confessor Bishop, <snr>p. <text:bookmark-ref text:reference-format="page" text:ref-name="csCB"/></s> except for the following:</p>
<?php prayer('csPope1r.php') ?>
   <p:RubricH>Or in the plural:</p>
<?php prayer('csPope2r.php') ?>
   <p:RubricH>If a commemoration of a second Supreme Pontiff is to be made, the following Prayer is said:</p>
<?php prayer('csPope3r.php') ?>

