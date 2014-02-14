<?php 
$old = $_GET['old'];
rubrics('head/Preces.php');
rubp('Preces infrascriptæ dicuntur flexis genibus:','The following prayers are said kneeling:');
vr('pater_silent_vr.php');
if($old==1) {
	rubp('<snr>¶</s> Sequens Ps. <snr>Lauda, ánima mea,</s> non dicitur in die obitus seu despositionis defuncti.','<snr>¶</s> The following Ps. <snr>Praise the Lord, O my soul,</s> is not said on the day of death or burial.');
	psalm(145);
}

vrS('a_porta_inferi_sing.php');
vrS('requiescant_in_pace_sing.php');
vrS('domine_exaudi_orationem_meam.php'); 
?>
<p:RubricH>When a Priest or Deacon presides in choir or in community, the following is said:</p>
<?php vrS('dominus_vobiscum.php'); ?>
<?php vr('oremus.php'); ?>
<p:RubricH>Then the Prayer (or Prayers) are said (<snr>p. <?php echo bkref('offDefPrayer'); ?></s>), followed by:</p>
<?php vrS('requiem_aeternam.php'); ?>
<?php vrS('requiescant_in_pace.php'); ?>
   <p:BodySm/>

