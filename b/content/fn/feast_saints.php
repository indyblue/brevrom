<?php 
/*
+ plural (doesn't show)
H Holy Woman (doesn't show)
^ church (doesn't show)

A (Ap.)
M (Mart.)
P (Papæ)(Pope)
E (Ep.)(Bp.)
C (Conf.)
p (Presbyt.)(Priest)
a (Abbot)
D (Eccl.Doct.)(Doct.)
V (Virgin)
W (Viduæ)(Widow)
K (Regis)(King)
Q (Reginæ)(Queen)
 */
function headSt($date, $class, $nameL, $nameE, $descr='') {
	if($class==1) $clname = 'I class';
	if($class==2) $clname = 'II class';
	if($class==3) $clname = 'III class';
	if($class==0) $clname = 'Commem.';
?>
	<p:Hidden1><?php echo $date . ' - ' .$nameE; ?></p>
	<text:p text:style-name="Head1<?php 
echo ($class==1||$class==2?'':'NI') . '">' . ($_GET['L']==1?$nameL:$nameE) 
?></p>
	<p:Head2><?php
	echo $descr . ($descr?' - ':'') . $clname . ' - ' . $date; ?></p>
   <p:BodySm/>
<?php

}
function feast_saint($date, $class, $nameL, $nameE, $type, $prayer=0, $commem=0) {
	// arrays defining month text to be used in dates
	$Lm = array('', 'Januarii', 'Februarii', 'Martii', 'Aprilis', 'Maii', 'Juni', 
		'Julii', 'Augusti', 'Septembris', 'Octobris', 'Novembris', 'Decembris');		
	$Lms = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'Maii', 'Juni', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		
	$Em = array('', 'January', 'February', 'March', 'April',	'May', 'June', 
		'July', 'August', 'September', 'October', 'November', 'December');		
	$Ems = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		

	// arrays defining types/classifications: (case sensitive)
	$Lcl = array( 'A' => 'Ap.', 'M' => 'Mart.', 'P' => 'Papæ', 'E' => 'Ep.',
		'C' => 'Conf.', 'p' => 'Presbyt.', 'a' => 'Abbot', 'D' => 'Eccl. Doct.',
		'V' => 'Virgin', 'W' => 'Viduæ', 'K' => 'Regis', 'Q' => 'Reginæ');
	$Ecl = array( 'A' => 'Ap.', 'M' => 'Mart.', 'P' => 'Pope', 'E' => 'Bp.',
		'C' => 'Conf.', 'p' => 'Priest', 'a' => 'Abbot', 'D' => 'Eccl. Doct.',
		'V' => 'Virgin', 'W' => 'Widow', 'K' => 'King', 'Q' => 'Queen');

	// break up and format the date
	$month = (int)($date/100);
	$day = $date - $month*100;
	$Ldate = $Lms[$month] . ' ' . $day;
	$Edate = $Ems[$month] . ' ' . $day;
	// if no prayer has already been inserted, 
	// construct prayer name from date
	if(!$prayer) 
		$prayer = sprintf("prSanct/%04s.php",$date);
	
	// find appropriate common
	$pl=0; $fem=0; $mart=0;
	if(strpos($type,'+')!==false) $pl = 1;
	if(ereg('[HVWQ]',$type)!==false) $fem = 1;
	if(strpos($type,'M')!==false) $mart = 1;
	if(strpos($type,'a')!==false) $abb = 1;
	if(strpos($type,'D')!==false) $doct = 1;
	
	if(strpos($type,'A')!==false) $cs = 'csAp';
	elseif(strpos($type,'M')!==false && !$fem) 
		if($pl) $cs = 'csMm';
		else $cs = 'csM';
	elseif(ereg('[EP]',$type)!==false) $cs = 'csCB';
	elseif(strpos($type,'C')!==false) $cs = 'csC';
	elseif(strpos($type,'V')!==false) $cs = 'csV';
	elseif($fem) $cs = 'csHW';
	elseif(strpos($type,'^')!==false) $cs = 'csChurch';
	else trigger_error('Problem parsing type string for '. $Edate
	  	.' ('. $nameE .'): '. $type, E_USER_ERROR);

	// construct long form type
	$Ltype = ''; $Etype = '';
	for($i=0;$i<strlen($type);$i++) {
		$tmp = substr($type,$i,1);
		$Ltype .= (strlen($Ltype)?', ':'') . $Lcl[$tmp];
		$Etype .= (strlen($Etype)?', ':'') . $Ecl[$tmp];
	}	
	// var_dump($Ldate,$Ltype,$Etype,$cs);

	// write heading
	headSt($Edate, $class, $nameL, $nameE, $Etype);

	// Add line naming the common:
	// Commune vide p. / Common see p.
	
}

?>
