<?php 
$solo = 0;
if(isset($_GET['solo'])) $solo = $_GET['solo'];
if($solo==0){
	vrS('dominus_vobiscum_de.php');
	//rubp('In recitatione a solo facta, et ab iis qui in ordine diaconatus non sunt constituti, loco <snr>Dóminus vobíscum</s>, semper dicitur sequens:', 'In recitation by one alone, and by those who have not been ordained Deacons, in place of <snr>Dóminus vobíscum</s> is always said the following:');
	vrS('domine_exaudi_orationem_meam.php');
} else {
	vrS('domine_exaudi_orationem_meam.php');
}
?>

