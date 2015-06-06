<?php
$solo = 0;
if(isset($_GET['solo'])) $solo = $_GET['solo'];
if($solo==0){
	rubp('<s:VR>V. </s><snr>Dóminus vobíscum</s> vel <snr>Dómine exáudi</s>, ut supra.', '<s:VR>V. </s><snr>The Lord be with you</s> or <snr>O Lord, hear</s>, as above.');
} else {
	vrS('domine_exaudi_orationem_meam.php');
}
?>
