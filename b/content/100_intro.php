<?php 
echo '<!--sec 2col -->';
space('PgI');
require '0Intro/101_aperi.php'; 

?>

	<p:Body><sr>The Canonical hours then begin as described in the Ordinary: 
Lauds (</s>p. <?php echo bkref('orLauds'); ?><sr>) 
Prime (</s><?php echo bkref('orPrime'); ?><sr>) 
Terce (</s><?php echo bkref('orTerce'); ?><sr>) 
Sext (</s><?php echo bkref('orSext'); ?><sr>) 
None (</s><?php echo bkref('orNone'); ?><sr>) 
Vespers (</s><?php echo bkref('orVespers'); ?><sr>) 
Compline (</s><?php echo bkref('orCompline'); ?><sr>)</s></p>

<?php 
	require '0Intro/105_sacrosancte.php';
	require '0Intro/106_o_clementissime.php';
	require '0Intro/110_collect.php'; 
?>

<?php
	space();
	canticle('benedictus.php');
	space();
	canticle('magnificat.php');
	space();
	rubp('','<snr>¶</s> On some feasts, one of the following psalms is said in place of the fifth psalm at Sunday Vespers (<snr>p. '. bkref('psDV') .'</s>), Ps. 113 <snr>In éxitu Israël</s>:');
	psalm(115);
	psalm(131);
	psalm(137);
	psalm(147); 
	echo '<!--sec 2col end -->';
	
	if($_GET['Style'] == '6') {
		$wid = 'scale';
		$hei = '100%';
	} else {
		$wid = '100%';
		$hei = 'scale';
	}
?>
	<p:Spacer/>
	<p:P1><draw:frame draw:style-name="fr6" draw:name="graphics2" text:anchor-type="paragraph" svg:width="7.24in" style:rel-width="<?= $wid ?>" svg:height="11.15in" style:rel-height="<?= $hei ?>" draw:z-index="0"><draw:image xlink:href="../Images/FP_Trinity_Saints.png" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/>
    </draw:frame></p>
   <p:P1><draw:frame draw:style-name="fr6" draw:name="graphics1" text:anchor-type="paragraph" svg:width="16.56in" style:rel-width="<?= $wid ?>" svg:height="26.26in" style:rel-height="<?= $hei ?>" draw:z-index="0"><draw:image xlink:href="../Images/border.png" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/>
    </draw:frame><draw:frame draw:style-name="fr3" draw:name="Frame3" text:anchor-type="paragraph" svg:width="3in" draw:z-index="1">
     <draw:text-box fo:min-height="2in">
      <p:Head1NI>Diurnale Romanum</p>
		<p:P160>REFORMED BY ORDER OF THE<text:line-break/>HOLY ECUMENICAL COUNCIL OF TRENT<text:line-break/>REVISED RITE<text:line-break/>IN ACCORD WITH MOTU PROPRIO<text:line-break/><s:T4>RUBRICARUM INSTRUCTUM</s><text:line-break/>JOHN XXIII<text:line-break/>IV FEBRUARII MCMLXI</p>
      <p:P159/>
<?php img('Title_JR.png',35); ?>
      <p:P159/>
		<p:P161>Gallican Latin Psalter of St. Jerome
      <text:line-break/>Douay-Rheims (Challoner) English Psalter</p>
      <p:P159/>
      <p:P201>English text of prayers from</p>
      <p:P201>"The Day Hours of the Church" (1921)</p>
      <p:P201>Compiled and Translated by</p>
      <p:P201>The Benedictine Nuns of Stanbrook Abbey</p>
      <p:P201>(et al.)</p>
      <p:P159/>
      <p:P159>This volume was published on</p>
      <p:P159><draw:frame draw:style-name="fr10" draw:name="Object1" text:anchor-type="as-char" svg:width="2.3902in" svg:height="0.178in" draw:z-index="43"><draw:object xlink:href="./pubon" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/><draw:image xlink:href="./ObjectReplacements/pubon" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/>
       </draw:frame></p>
     </draw:text-box>
    </draw:frame></p>
   <p:P1/>

