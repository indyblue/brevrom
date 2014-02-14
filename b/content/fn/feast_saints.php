<?php 
/*
- hides long form for next term
+ plural (doesn't show)
H Holy Woman (doesn't show)
^ church (doesn't show)
e Eastertide/P.T. (doesn't show)

A (Ap.)
G (Evang.)
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
	
	if(is_array($date)) {
		$Ldate = $date[0];
		$Edate = $date[1];
	} elseif($date>100) {
		$date = convert_date($date);
		$Ldate = $date[0];
		$Edate = $date[1];
	} else {
		$Ldate = $date;
		$Edate = $date;
	}

	echo '
  <p:Hidden1>' . $date . ' - ' .$nameE .'</p>
  <text:p text:style-name="Head1' . 
  ($class==1||$class==2?'':'NI') . '">' . ($_GET['L']==1?$nameL:$nameE) .'</p>
  <text:p text:style-name="Head5">' . ($_GET['L']==1?$nameE:$nameL) .'</p>
  <p:Head2>'. $descr . ($descr?' - ':'') . $clname . ' - ' . ($_GET['L']==1?$Ldate:$Edate) .'</p>
';

}
function feast_saint($date, $class, $nameL, $nameE, $type, $prayer=0, $commem=0, $ant=0) {

	// arrays defining types/classifications: (case sensitive)
	$Lcl = array( 'A' => 'Ap.', 'G' => 'Evang.', 'M' => 'Mart.', 'P' => 'Papæ', 
		'E' => 'Ep.', 'C' => 'Conf.', 'p' => 'Presbyt.', 'a' => 'Abbot', 
		'D' => 'Eccl. Doct.', 'V' => 'Virgin', 'W' => 'Viduæ', 'K' => 'Regis', 
		'Q' => 'Reginæ');
	$Ecl = array( 'A' => 'Ap.', 'G' => 'Evang.', 'M' => 'Mart.', 'P' => 'Pope', 
		'E' => 'Bp.', 'C' => 'Conf.', 'p' => 'Priest', 'a' => 'Abbot', 
		'D' => 'Eccl. Doct.', 'V' => 'Virgin', 'W' => 'Widow', 'K' => 'King', 
		'Q' => 'Queen');

	// break up and format the date
	if(is_array($date)) {
		$Ldate = $date[0];
		$Edate = $date[1];
	} elseif($date>100) {
		$tdate = convert_date($date);
		$Ldate = $tdate[0];
		$Edate = $tdate[1];
	} else {
		$Ldate = $date;
		$Edate = $date;
	}
	// echo $date;
	// if no prayer has already been inserted, 
	// construct prayer name from date
	if(!$prayer) 
		if($class<0)
			$prayer = sprintf("prSanct/%04sc.php",$date);
		else
			$prayer = sprintf("prSanct/%04s.php",$date);
	
	// find appropriate common
	$pl=0; $pt=0; $fem=0; $mart=0; $doct=0; 
	if(strpos($type,'+')!==false) $pl = 1;
	if(strpos($type,'e')!==false) $pt = 1;
	if(ereg('[HVWQ]',$type)!==false) $fem = 1;
	if(strpos($type,'M')!==false) $mart = 1;
	if(strpos($type,'a')!==false) $abb = 1;
	if(strpos($type,'D')!==false) $doct = 1;
	
	if(ereg('[AG]',$type)!==false) {
		if($pt) {
			$cs = 'csApPT';
			$Lvr = 'pretiosa_in_conspectu_domini.php';
			$Lant = 'filiae_jerusalem_venite_et_videte_martyres.php';
		} else {
			$cs = 'csAp';
			$Lvr = 'annuntiaverunt_opera_dei.php';
			$Lant = 'vos_qui_reliquistis_omnia.php';
		}
	}
	elseif(strpos($type,'M')!==false && !$fem) {
		if($pt) {
			$cs = 'csApPT';
			$Lvr = 'pretiosa_in_conspectu_domini.php';
			$Lant = 'filiae_jerusalem_venite_et_videte_martyres.php';
		} elseif($pl) {
			$cs = 'csMm';
			$Lvr = 'exultabunt_sancti_in_gloria.php';
			$Lant = 'vestri_capilli_capitis_omnes_numerati_sunt.php';
		}
		else {
			$cs = 'csM';
			$Lvr = 'justus_ut_palma_florebit.php';
			$Lant = 'qui_odit_animam_suam_in_hoc_mundo.php';
		}
	}
	elseif(ereg('[EP]',$type)!==false) {
		$cs = 'csCB';
		$Lvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Lant = 'euge_serve_bone_et_fidelis.php';
	}
	elseif(ereg('[aC]',$type)!==false) {
		$cs = 'csC';
		$Lvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Lant = 'euge_serve_bone_et_fidelis-tui.php';
	}
	elseif(strpos($type,'V')!==false) {
		$cs = 'csV';
		if($pl && $mart) {
			$Lvr = 'adducentur_regi_virgines_post_eam.php';
			$Lant = 'prudentes_virgines_aptate_vestras_lampades.php';
		} else {
			$Lvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Lant = 'simile_est_regnum_caelorum_homini_negotiatori.php';
		}
	}
	elseif($fem) {
		$cs = 'csHW';
		if($pl && $mart) {
			$Lvr = 'gloria_et_honore_coronasti_eum_domine.php';
			$Lant = 'istorum_est_enim_regnum_caelorum.php';
		} else {
			$Lvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Lant = 'date_ei_de_fructu_manuum_suarum.php';
		}
	}
	elseif(strpos($type,'^')!==false) {
		$cs = 'csChurch';
		$Lvr = 'haec_est_domus_domini_firmiter_aedificata.php';
		$Lant = 'zachaee_festinans_descende.php';
	}
	else trigger_error('Problem parsing type string for '. $Edate
	  	.' ('. $nameE .'): '. $type, E_USER_ERROR);

	
	// construct long form type
	$Ltype = ''; $Etype = '';
	for($i=0;$i<strlen($type);$i++) {
		$tmp = substr($type,$i,1);
		if($tmp=='-') $i++;
		if(strlen($Lcl[$tmp])) {
			$Ltype .= (strlen($Ltype)?', ':'') . $Lcl[$tmp];
			$Etype .= (strlen($Etype)?', ':'') . $Ecl[$tmp];
		}
	}	
	// var_dump($Ldate,$Ltype,$Etype,$cs);

	// a negative class value signifies that this is a 
	// commemoration which concurs with another feast
	// The character 'H' signifies header only
	// Otherwise if positive, print everything as normal
	if($class>=10) {
		headSt($Edate, $class-10, $nameL, $nameE, $Etype);
	} elseif($class>=0) {
		// add image... (the only image that can be added
		// automatically is the default separator)
		space();
		img();
	
		// write heading
		headSt($Edate, $class, $nameL, $nameE, $Etype);
	
		// if it's a 3rd class feast, add this line
		if($class==3)
			rubrics('ps/Feria.php');
	
		// Add line naming the common:
		// Commune vide p. / Common see p.
		rubrics('prSanct/all_else.php',$cs);
	
		// prayer
		if(is_array($prayer)) {
			if(count($prayer)<3)
				trigger_error('Problem with prayer for '. $Edate
					.' ('. $nameE .') ', E_USER_ERROR);
			prayer($prayer[0],$prayer[1],$prayer[2]);
		} else
			prayer($prayer);
		if($commem) 
			eval($commem);
		if(is_array($ant)) {
			if(count($ant)<2)
				trigger_error('Problem with antiphon for '. $Edate
					.' ('. $nameE .') ', E_USER_ERROR);
			if($doct) {
				space('Spacer');
				ant('csConfessorDoctorAnt.php','M',$ant[0],$ant[1]);
			}
		}
	} else {
		// this is the brief form of commemoration used if the above is negative.
		// it will automatically insert the default V/R and Antiphon of Lauds 
		// from the correct common.
		echo '
  <p:RubricH>Commemoration is made of '. $nameE .', '. $Etype .':</p>
';
		ant($Lant,1);
		vrS($Lvr,$pt);
		rubrics('oremus.php');
		if(is_array($prayer)) {
			if(count($prayer)<3)
				trigger_error('Problem with prayer for '. $Edate
					.' ('. $nameE .') ', E_USER_ERROR);
			prayer($prayer[0],$prayer[1],$prayer[2]);
		} else
			prayer($prayer);
	}		
}

function convert_date($date) {
	// arrays defining month text to be used in dates
	$Lm = array('', 'Januarii', 'Februarii', 'Martii', 'Aprilis', 'Maii', 'Juni', 
		'Julii', 'Augusti', 'Septembris', 'Octobris', 'Novembris', 'Decembris');		
	$Lms = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'Maii', 'Juni', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		
	$Em = array('', 'January', 'February', 'March', 'April',	'May', 'June', 
		'July', 'August', 'September', 'October', 'November', 'December');		
	$Ems = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		

	$month = (int)($date/100);
	$day = $date - $month*100;

	if($month>0 && $day>0) {
		$Ldate = $Lms[$month] . ' ' . $day;
		$Edate = $Ems[$month] . ' ' . $day;
		if($month==2 && $day>23) {
			$Ldate .= ' ('. ($day+1) .' in anno bissextili)';
			$Edate .= ' ('. ($day+1) .' in leap year)';
		}
	} 
	return array($Ldate,$Edate);
}
?>
