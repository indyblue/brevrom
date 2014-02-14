   <p:P181/>
	<p:Body/>
<?php img('sanctus.tif',100); ?>
   <p:RubricH/>
<?php hidden('',1); ?>
<?php hidden('Office of the Dead',2); ?>
<?php bookmark('offDef'); ?>
	<p:Head1><?php 
echo ($_GET['L']==1?'Officium Defunctorum':'Office of the Dead')
?></p>
   <p:Rubric>This Office is said in choir on the day of burial and at other times according to custom. Matins and Lauds are said after Lauds of the day, and Vespers after Vespers of the day. They are begun immediately after the versicle: <snr>Benedicámus Dómino, Deo grátias</s>.</p>

	<p:RubricH>At the end of all the psalms, in place of the <snr>Glória Patri</s>, there is always said:</p>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Rubric>It is always said in the plural.</p>

<?php rubrics('head/Matins.php'); ?>
<?php bookmark('offDefM'); ?>
	<p:RubricH>Matins begins immediatly with the invitatory:</p>
<?php ant('regem_cui_omnia_vivunt_venite_adoremus.php','+'); ?>
<?php rubrics('asIn.php','Ps94','Ordinary of Matins','The invitatory is said with Psalm 94,'); ?> 
	<p:RubricH>But in place of the <snr>Glória Patri</s> at the end of the psalm is said:</p>
<?php vrS('requiem_aeternam.php',6); ?>
	<p:BodySm/>

   <p:Rubric>If only one Nocturn is said: On the day of burial, the First Nocturn is always said. Otherwise, the Nocturn is selected by day of week:</p>
	<p:BodyEIndent><sr>Sun., Mon. &amp; Thurs.:</s> First Nocturn, as follows.</p>
	<p:BodyEIndent><sr>Tue. &amp; Fri.:</s> Second Nocturn, p. <?php echo bkref('offDefMn2'); ?>.</p>
	<p:BodyEIndent><sr>Wed. &amp; Sat.:</s> Third Nocturn, p. <?php echo bkref('offDefMn3'); ?>.</p>

   <p:Head2>First Nocturn</p>
	<p:Head3>(Sunday, Monday, and Thursday)</p>
<?php bookmark('offDefMn1'); ?>
   <p:BodySm/>

<?php ant('offDefMatins.php','200000000'); ?>
<?php /*
	psalm('005.php'); 
	vrS('requiem_aeternam.php',6); 
 */ ?>
<?php psref(5); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','120000000'); ?>
<?php psref(6); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','012000000'); ?>
<?php psref(7,2); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','001000000'); ?>
<?php rubrics('offDef/mPortaPater.php'); ?>

<?php lc('job7_16-21.php',0,'L1d'); ?>
<?php rubrics('offDef/mNoTuAutem.php'); ?>
<?php rm('offDef1.php',0,2,1,1) ?>
   <p:BodySm/>

<?php lc('job10_1-7.php',0,'L2d'); ?>
<?php rm('offDef2.php',0,2,1,1) ?>
   <p:BodySm/>

<?php lc('job10_8-12.php',0,'L3d'); ?>
<?php rm('offDef3.php',0,1,1) ?>
<?php rubrics('offDef/m1noctLauds.php'); ?>
   <p:BodySm/>


	<p:Head2>Second Nocturn</p>
	<p:Head3>(Tuesday and Friday)</p>
<?php bookmark('offDefMn2'); ?>
<?php ant('offDefMatins.php','000200000'); ?>
<?php psref(22); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000120000'); ?>
<?php psref(24,3); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000012000'); ?>
<?php psref(26,2); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000001000'); ?>
<?php rubrics('offDef/mPortaPater.php'); ?>

<?php lc('job13_22-28.php',0,'L4d'); ?>
<?php rubrics('offDef/mNoTuAutem.php'); ?>
<?php rm('offDef4.php',0,2,1,1) ?>
<p:BodySm/>

<?php lc('job14_1-6.php',0,'L5d'); ?>
<?php rm('offDef5.php',0,2,1,1) ?>
<p:BodySm/>

<?php lc('job14_13-16.php',0,'L6d'); ?>
<?php rm('offDef6.php',0,0,1,1) ?>
<?php rubrics('offDef/m1noctLauds.php'); ?>
   <p:BodySm/>


   <p:Head2>Third Nocturn</p>
   <p:Head3>(Wednesday and Saturday)</p>
<?php bookmark('offDefMn3'); ?>
<?php ant('offDefMatins.php','000000200'); ?>
<?php psref(39,3); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000000120'); ?>
<?php psref(40); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000000012'); ?>
<?php psref(41,2); ?>
   <p:Spacer/>
<?php ant('offDefMatins.php','000000001'); ?>
<?php rubrics('offDef/mPortaPater.php'); ?>



<?php lc('job17_1-3_11-15.php',0,'L7d'); ?>
<?php rubrics('offDef/mNoTuAutem.php'); ?>
<?php rm('offDef7.php',0,2,1,1) ?>
<p:BodySm/>

<?php lc('job19_20-27.php',0,'L8d'); ?>
<?php rm('offDef8.php',0,2,1,1) ?>
<p:BodySm/>

<?php lc('job10_18-22.php',0,'L9d'); ?>
   <p:BodySm/>
<p:RubricH>The following Respond is said when the Third Nocturn only is said:</p>
<?php rm('offDef9n1.php',0,0,1,1) ?>
   <p:BodySm/>
   <p:RubricH>The following Respond is said when all three Nocturns have been said:</p>
<?php rm('offDef9n3.php',0,0,1,1) ?>
   <p:BodySm/>

	<p:Rubric>If Lauds is not said at all, the Prayers are said, as at Lauds <snr>p. <?php echo bkref('offDefLpr'); ?></s></p>

<p:Rubric>If Matins is separated from Lauds, the following is added after the last Responsory:</p>
<?php rubrics('offDef/mConcl.php'); ?>


	<p:Head1NI>ad Laudes</p>
<?php bookmark('offDefL'); ?>
   <p:Rubric>Lauds begins at once with the first antiphon.</p>
<?php ant('offDefL.php','20000'); ?>
<?php psalm('050.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefL.php','12000'); ?>
<?php psalm('064.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefL.php','01200'); ?>
<?php psalm('062.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefL.php','00120'); ?>
<?php canticle('ezechiel.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefL.php','00012'); ?>
<?php psalm('150.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefL.php','00001'); ?>
	<p:BodySm/>

<?php vrS('audivi_vocem_de_caelo_dicentem_mihi.php'); ?>

<?php rubrics('head/Benedictus.php'); ?>
<?php ant('offDefb.php','B'); ?>
<p:RubricH>The <snr>Benedictus</s> is then said <snr>(p. <?php echo bkref('benedictus'); ?>)</s>, but in place of the <snr>Gloria Patri</s> is said:</p>
<?php vrS('requiem_aeternam.php',6); ?>
<p:Rubric>The antiphon is then repeated.</p>
	<p:BodySm/>

<?php bookmark('offDefLpr'); ?>
<?php rubrics('offDef/preces_concl.php'); ?>

	<p:Head1NI>Collects</p>
<?php bookmark('offDefPrayer'); ?>
<p:Rubric>In the following prayers, masculine variations are denoted by “m.”; feminine variations by “f.”; plural variations by “pl.”</p>
	<p:RubricH>On the day of the burial:</p>
<?php prayer('offDef/burial1.php'); ?>
   <p:RubricH>Or:</p>
<?php prayer('offDef/burial2.php'); ?>
	<p:BodySm/>
   <p:RubricH>On the third, seventh, and thirtieth day after the burial of the deceased:</p>
<?php prayer('offDef/3_7_30.php'); ?>
	<p:BodySm/>
   <p:RubricH>On the anniversary:</p>
<?php prayer('offDef/anniv.php'); ?>
	<p:BodySm/>
   <p:RubricH>For a Pope deceased:</p>
<?php prayer('offDef/pope.php'); ?>
	<p:BodySm/>
   <p:RubricH>For a Bishop deceased:</p>
<?php prayer('offDef/bishop.php'); ?>
   <p:Rubric>The following substitutions are made for N.:</p>
   <p:Rubric>For a Cardinal Bishop: (N. <snr>Epíscopum Cardinálem</s> / <snr>Cardinal Bishop</s> N.)</p>
   <p:Rubric>For a Cardinal Priest: (N. <snr>Presbýterum Cardinálem</s> / <snr>Cardinal Priest</s> N.)</p>
   <p:Rubric>For a Cardinal Deacon: (N. <snr>Diáconum Cardinálem</s> / <snr>Cardinal Deacon</s> N.)</p>
   <p:RubricH>If the Cardinal Priest or Cardinal Deacon have not been raised to the episcopal dignity, the following substitution is made as well:</p>

	<p:BodySm/>
   <p:Rubric>For a Priest: (<snr>sacerdotáli, priesthood</s>) are said instead of (<snr>pontificáli, episcopate</s>)</p>
	<p:RubricH>Another prayer for a Priest:</p>
<?php prayer('offDef/Priest2.php'); ?>
      <p:BodyEDrop>GRANT, we beseech thee, O Lord, that the soul of thy servant <sr>N.</s>, the Priest, whom you adorned with the graces proper to the sacred ministry while he was in this world, may always rejoice in the glory of heaven. Through our Lord.</p>

	<p:BodySm/>
	<p:RubricH>For a man deceased:</p>
<?php prayer('offDef/man.php'); ?>

	<p:BodySm/>
	<p:RubricH>For a woman deceased:</p>
<?php prayer('offDef/woman.php'); ?>

	<p:BodySm/>
	<p:RubricH>For deceased brethren, relatives, and benefactors:</p>
<?php prayer('offDef/brethren.php'); ?>

	<p:BodySm/>
	<p:RubricH>For a father and a mother:</p>
<?php prayer('offDef/parents2.php'); ?>

   <p:Rubric>For parents (plural):</p>
   <table> <tr> <td:A1>
      <p:BodyL><sr>dicátur:</s> animábus paréntum nostrórum <sr>et ubi dícitur</s> meque<sr>, dicátur</s> nosque</p>
     </td> <td:B1>
      <p:BodyE><sr>say:</s> the souls of our parents, <sr>and in place of </s>me<sr>, say </s>us</p>
     </td> </tr> </table>

	<p:RubricH>For a father only:</p>
   <table> <tr> <td:A1>
      <p:BodyL><sr>dicátur: </s>ánimæ patris mei <sr>(</s>nostri<sr>)</s>, ejúsque<sr>, et ubi dícitur </s>eos<sr>, dicátur </s>eum.</p>
     </td> <td:B1>
      <p:BodyE><sr>say:</s> the soul of my <sr>(</s>our<sr>)</s> father, forgive him, <sr>and in place of </s>them, <sr>say </s>him.</p>
     </td> </tr> </table>

	<p:RubricH>For a mother only:</p>
   <table> <tr> <td:A1>
      <p:BodyL><sr>dicátur: </s>ánimæ matris meæ <sr>(vel </s>nostræ<sr>)</s>, ejúsque<sr>, et ubi dícitur </s>eos<sr>, dicátur </s>eam.</p>
     </td> <td:B1>
      <p:BodyE><sr>say:</s> the soul of my <sr>(</s>our<sr>)</s> mother, forgive her, <sr>and in place of </s>them, <sr>say </s>her.</p>
     </td> </tr> </table>

	<p:BodySm/>
	<p:RubricH>In the Office of the Dead in general:</p>
<?php prayer('offDef/offDef.php'); ?>

   <p:BodySm/>
   <p:Head1NI>ad Vésperas</p>
<?php bookmark('offDefV'); ?>
   <p:Rubric>Vespers begins at once with the first antiphon.</p>
<?php ant('offDefV.php','20000'); ?>
<?php psalm('114.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefV.php','12000'); ?>
<?php psalm('119.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefV.php','01200'); ?>
<?php psalm('120.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefV.php','00120'); ?>
<?php psalm('129.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefV.php','00012'); ?>
<?php psalm('137.php'); ?>
<?php vrS('requiem_aeternam.php',6); ?>
   <p:Spacer/>
<?php ant('offDefV.php','00001'); ?>
	<p:BodySm/>

<?php vrS('audivi_vocem_de_caelo_dicentem_mihi.php'); ?>

<?php rubrics('head/Magnificat.php'); ?>
<?php ant('offDefm.php','M'); ?>
<p:RubricH>The <snr>Magnificat</s> is then said <snr>(p. <?php echo bkref('magnificat'); ?>)</s>, but in place of the <snr>Gloria Patri</s> is said:</p>
<?php vrS('requiem_aeternam.php',6); ?>
<p:Rubric>The antiphon is then repeated.</p>
	<p:BodySm/>

<?php rubrics('offDef/preces_concl.php'); ?>

   <p:BodySm/>
<?php img(); ?>
