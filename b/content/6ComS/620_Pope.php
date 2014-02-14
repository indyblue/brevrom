   <p:Body/>
<?php img('separator3.tif',100); ?>
   <p:RubricH/>
   <p:Hidden1>Common of Saints</p>
   <p:Hidden2>Pope</p>
<?php bookmark('csPope'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Commune Unius aut Plurium Summorum Pontificum':'Common of One or Many Supreme Pontiffs') 
?></p>
   <p:Rubric>All as in the Common of one or several Martyrs, <snr>p. <?php echo bkref('csMm'); ?></s>, or of a Confessor Bishop, <snr>p. <?php echo bkref('csCB'); ?></s> except for the following:</p>
<?php prayer('csPope1r.php') ?>
   <p:RubricH>Or in the plural:</p>
<?php prayer('csPope2r.php') ?>
   <p:RubricH>If a commemoration of a second Supreme Pontiff is to be made, the following Prayer is said:</p>
<?php prayer('csPope3r.php') ?>

