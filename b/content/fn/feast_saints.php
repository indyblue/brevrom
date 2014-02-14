<?php 
/*
- hides long form for next term
+ plural (doesn't show)
H Holy Woman (doesn't show)
B Bl. Virg. Mary (doesn't show)
^ church (doesn't show)
e Eastertide/P.T. (doesn't show)
s vespers of the following...

A (Ap.)
G (Evang.)
M (Mart.)
P (Papæ)(Pope)
E (Ep.)(Bp.)
C (Conf.)
p (Presbyt.)(Priest)
d (Diaconi) (Deacon)
a (Abbot)
D (Eccl.Doct.)(Doct.)
V (Virgin)
W (Viduæ)(Widow)
K (Regis)(King)
Q (Reginæ)(Queen)
U (Ducis)(Duke)
I (Imperatoris)(Emperor)
R (Archangeli) (Archangel)
*/

function constr_type($type,$lang) {
	$Lcl = array( 'A' => 'Ap.', 'G' => 'Evang.', 
		'M' => 'Mart.', 'P' => 'Papæ', 
		'E' => 'Ep.', 'C' => 'Conf.', 'p' => 'Presbyt.', 'd' => 'Diaconi',
		'a' => 'Abbot', 'D' => 'Eccl. Doct.', 'V' => 'Virg.', 
		'W' => 'Viduæ', 'K' => 'Regis', 'Q' => 'Reginæ', 
		'I' => 'Imperatoris', 'U' => 'Ducis', 'R' => 'Archangeli');
	$Ecl = array( 'A' => 'Ap.', 'G' => 'Evang.', 
		'M' => 'Mart.', 'P' => 'Pope', 
		'E' => 'Bp.', 'C' => 'Conf.', 'p' => 'Priest', 'd' => 'Deacon', 
		'a' => 'Abbot', 'D' => 'Eccl. Doct.', 'V' => 'Virg.', 
		'W' => 'Widow', 'K' => 'King', 'Q' => 'Queen', 
		'I' => 'Emperor', 'U' => 'Duke', 'R' => 'Archangel');

	// $lang values:
	// 1 = Latin
	// 2 = English
	if($lang==1) $arr = $Lcl;
	else $arr = $Ecl;
	
	$ret = '';
	for($i=0;$i<strlen($type);$i++) {
		$tmp = substr($type,$i,1);
		if($tmp=='-') $i++;
		if(array_key_exists($tmp,$arr)) 
			$ret .= (strlen($ret)?', ':'') . $arr[$tmp];
	}	
	return $ret;
}


/*
------------------------------
Ash Wed Date Range: 2/4 - 3/10
Easter Date Range: 3/22 - 4/25

--- Optional P.T. ranges ---

3/29 (Earliest Low Sunday) to
4/17 (Latest Saturday before Palm Sunday)

-- and --

5/18 (Earliest Monday after Trinity Sunday) to
6/11 (Latest Friday before Pentecost Sunday)

------------------------------ */

function headSt($date, $class, $nameL, $nameE, $descr='') {
	if($class==1) $clname = 'I class';
	elseif($class==2) $clname = 'II class';
	elseif($class==3) $clname = 'III class';
	elseif($class==0) $clname = 'Commem.';
	else trigger_error('Invalid class for '. $date
	  	.' ('. $nameE .')', E_USER_ERROR);

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


//  <p:Hidden1>' . $Edate . ' - ' .$nameE .'</p>
//  <p:Head3>' . ($_GET['L']==1?$nameE:$nameL) .'</p>
	hidden('Proper of Saints',1);
	hidden($Edate);
	echo '
  <p:Head1' . 
  ($class==1&&$class==2?'':'NI') . '>' . ($_GET['L']==1?$nameL:$nameE) .'</p>
  <p:Head5>' . preg_replace('/<[^>]*>/','',($_GET['L']==1?$nameE:$nameL)) .'</p>
  <p:Head4>'. $descr . ($descr?' - ':'') . $clname . ' - ' . ($_GET['L']==1?$Edate:$Edate) .'</p>
';

}
function feast_saint($date, $class, $nameL, $nameE, $type, $prayer=0, $commem=0, $ant=0) {

	$long = $_GET['long'];

	//has to be set before the date calculations
	$pt = 0; $lent = 0; $advent = 0;

	// break up and format the date
	if(is_array($date)) {
		$Ldate = $date[0];
		$Edate = $date[1];
	} elseif($date>100) {
		$tdate = convert_date($date);
		$Ldate = $tdate[0];
		$Edate = $tdate[1];

		// advent commem. range
		if(1130 <= $date && $date <= 1223)
			$advent = 1;

		// lent option range
		if(208 <= $date && $date <= 309)
			$lent = -1;
		// lent commem. range
		if(310 <= $date && $date <= 329)
			$lent = 1;

		//PT date calculations
		//first check is for lenten/paschaltide optional range
		//($pt=-1): PT propers should be listed,
		//but with the proper ant & v/r for a lenten commem.
		if(330 <= $date && $date <= 417)
			$pt = -1;

		//this range consists of the dates which are always PT
		//($pt=1): PT propers only should be listed
		elseif(418 <= $date && $date <= 517)
			$pt = 1;

		//this range is the PT/Triniytide optional range
		//($pt=2): PT/non-PT options should both be listed
		elseif(518 <= $date && $date <= 611)
			$pt = 2;

	} else {
		$Ldate = $date;
		$Edate = $date;
	}
	// echo $date;
	// if no prayer has already been inserted, 
	// construct prayer name from date
	if($prayer===0) {
		if($class<0)
			$prayer = sprintf("prSanct/%04sc.php",$date);
		else
			$prayer = sprintf("prSanct/%04s.php",$date);
	}
	
	// find appropriate common
	$cs=0; $csP=0;
	$pl=0; $fem=0; $mart=0; $doct=0; $vseq=0; 
	$Lant=''; $Lvr=''; $LantP=''; $LvrP='';
	$Vant=''; $Vvr=''; $VantP=''; $VvrP='';
	if(strpos($type,'+')!==false) $pl = 1;
	//this only changes the value of $pt if it is still
	//set to 0; the date method above is preferable,
	//as it detects optional times.
	if(strpos($type,'e')!==false && $pt==0) $pt = 1;

	//the PT switch for antiphons needs to be either 0, 1 or 2.
	//If $pt=-1 (lent/easter optional), 
	//then something different has to happen
	if($pt==-1) $pta = 2;
	else $pta = $pt;

	if(ereg('[HVWQ]',$type)!==false) $fem = 1;
	if(strpos($type,'M')!==false) $mart = 1;
	if(strpos($type,'a')!==false) $abb = 1;
	if(strpos($type,'D')!==false) $doct = 1;
	if(strpos($type,'s')!==false) $vseq = 1;
	
	if(ereg('[AG]',$type)!==false) {
		if($pt==2 || $pt==-1) {
			$csP = 'csApPT';
			$LvrP = 'pretiosa_in_conspectu_domini.php';
			$LantP = 'filiae_jerusalem_venite_et_videte_martyres.php';
			$VvrP = 'pretiosa_in_conspectu_domini.php';
			$VantP = 'sancti_et_justi_in_domino_gaudete.php';
			$cs = 'csAp';
			$Lvr = 'annuntiaverunt_opera_dei.php';
			$Lant = 'vos_qui_reliquistis_omnia.php';
			$Vvr = 'annuntiaverunt_opera_dei.php';
			$Vant = 'estote_fortes_in_bello.php';
		} elseif($pt) {
			$cs = 'csApPT';
			$Lvr = 'pretiosa_in_conspectu_domini.php';
			$Lant = 'filiae_jerusalem_venite_et_videte_martyres.php';
			$Vvr = 'pretiosa_in_conspectu_domini.php';
			$Vant = 'sancti_et_justi_in_domino_gaudete.php';
		} else {
			$cs = 'csAp';
			$Lvr = 'annuntiaverunt_opera_dei.php';
			$Lant = 'vos_qui_reliquistis_omnia.php';
			$Vvr = 'annuntiaverunt_opera_dei.php';
			$Vant = 'estote_fortes_in_bello.php';
		}
	}
	elseif(strpos($type,'M')!==false && !$fem) {
		if($pt==2 || $pt==-1) {
			$csP = 'csApPT';
			$LvrP = 'pretiosa_in_conspectu_domini.php';
			$LantP = 'filiae_jerusalem_venite_et_videte_martyres.php';
			$VvrP = 'pretiosa_in_conspectu_domini.php';
			$VantP = 'sancti_et_justi_in_domino_gaudete.php';
		}	
		if($pt==1) {
			$cs = 'csApPT';
			$Lvr = 'pretiosa_in_conspectu_domini.php';
			$Lant = 'filiae_jerusalem_venite_et_videte_martyres.php';
			$Vvr = 'pretiosa_in_conspectu_domini.php';
			$Vant = 'sancti_et_justi_in_domino_gaudete.php';
		} elseif($pl) {
			$cs = 'csMm';
			$Lvr = 'exultabunt_sancti_in_gloria.php';
			$Lant = 'vestri_capilli_capitis_omnes_numerati_sunt.php';
			$Vvr = 'exultabunt_sancti_in_gloria.php';
			$Vant = 'gaudent_in_caelis_animae_sanctorum.php';
		} else {
			$cs = 'csM';
			$Lvr = 'justus_ut_palma_florebit.php';
			$Lant = 'qui_odit_animam_suam_in_hoc_mundo.php';
			$Vvr = 'justus_ut_palma_florebit.php';
			$Vant = 'qui_vult_venire_post_me_abneget_semetipsum.php';
		}
	}
	elseif(ereg('[EP]',$type)!==false) {
		$cs = 'csCB';
		$Lvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Lant = 'euge_serve_bone_et_fidelis.php';
		$Vvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Vant = 'amavit_eum_dominus_et_ornavit_eum.php';
		if(ereg('[P]',$type)!==false && !$pl)
			$Vant = 'dum_esset_summus_pontifex.php';
		if($doct)
			$Vant = 'csConfessorDoctorAnt.php';
	}
	elseif(ereg('[aC]',$type)!==false) {
		$cs = 'csC';
		$Lvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Lant = 'euge_serve_bone_et_fidelis-tui.php';
		$Vvr = 'justum_deduxit_dominus_per_vias_rectas.php';
		$Vant = 'hic_vir_despiciens_mundum_et_terrena_triumphans.php';
		if($doct)
			$Vant = 'csConfessorDoctorAnt.php';
	}
	elseif(strpos($type,'V')!==false) {
		$cs = 'csV';
		if($pl && $mart) {
			$Lvr = 'adducentur_regi_virgines_post_eam.php';
			$Lant = 'prudentes_virgines_aptate_vestras_lampades.php';
			$Vvr = 'adducentur_regi_virgines_post_eam.php';
			$Vant = 'prudentes_virgines_aptate_vestras_lampades.php';
		} else {
			$Lvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Lant = 'simile_est_regnum_caelorum_homini_negotiatori.php';
			$Vvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Vant = 'veni_sponsa_christi_accipe_coronam.php';
		}
	}
	elseif($fem) {
		$cs = 'csHW';
		if($pl && $mart) {
			$Lvr = 'gloria_et_honore_coronasti_eum_domine.php';
			$Lant = 'istorum_est_enim_regnum_caelorum.php';
			$Vvr = 'gloria_et_honore_coronasti_eum_domine.php';
			$Vant = 'istorum_est_enim_regnum_caelorum.php';
		} else {
			$Lvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Lant = 'date_ei_de_fructu_manuum_suarum.php';
			$Vvr = 'diffusa_est_gratia_in_labiis_tuis.php';
			$Vant = 'manum_suam_aperuit_inopi.php';
		}
	}
	elseif(strpos($type,'^')!==false) {
		$cs = 'csChurch';
		$Lvr = 'haec_est_domus_domini_firmiter_aedificata.php';
		$Lant = 'zachaee_festinans_descende.php';
		$Vvr = 'domum_tuam_domine_decet_sanctitudo.php';
		$Vant = 'o_quam_metuendus_est_locus_iste.php';
	} elseif(strpos($type,'B')!==false) {
		$cs = 'csBVM';
		$Lvr = 'diffusa_est_gratia_in_labiis_tuis.php';
		$Lant = 'beata_es_maria_quae_credidisti.php';
		$Vvr = 'dignare_me_laudare_te_virgo_sacrata.php';
		$Vant = 'beatam_me_dicent_omnes_generationes.php';
	} elseif(strpos($type,'R')!==false) {
		$Lvr = 'prSanct/stetit_angelus_juxta_aram_templi.php';
		$Vvr = 'prSanct/in_conspectu_angelorum_psallam_tibi_deus_meus.php';
	}
	else trigger_error('Problem parsing type string for '. $Edate
	  	.' ('. $nameE .'): '. $type, E_USER_ERROR);

	$custL=0; $custV=0;
	if(is_string($ant) && strlen($ant)>0) {
		$Lant = $ant; $custL = 1; }
	if(is_array($ant) && !$doct) {
		if(count($ant)>=1 && strpos($ant[0],'.php')>0) {
			$Lvr = $ant[0]; $custL = 1; }
		if(count($ant)>=2 && strpos($ant[1],'.php')>0) { 
			$Lant = $ant[1]; $custL = 1; }
		elseif(count($ant)>=2 && $ant[1]===1) { 
			$Lant = sprintf("prSanct/%04sb.php",$date); $custL = 1; }
		if(count($ant)>=3 && strpos($ant[2],'.php')>0) {
					$Vvr = $ant[2]; $custV = 1; }
		if(count($ant)>=4 && strpos($ant[3],'.php')>0) {
				$Vant = $ant[3]; $custV = 1; }
		elseif(count($ant)>=4 && $ant[3]===1) { 
			$Vant = sprintf("prSanct/%04sm.php",$date); $custV = 1; }
		if(count($ant)>=5 && strpos($ant[4],'.php')>0) {
				$LantP = $ant[4]; $custL = 1; }
		if(count($ant)>=6 && strpos($ant[5],'.php')>0) {
				$LvrP = $ant[5]; $custL = 1; }
	}

	// construct long form type
	$Ltype = constr_type($type,1);
  	$Etype = constr_type($type,2);
	
	// format the saint names: (red "with/ac,and/et,also/atque"),
	// also some feasts have multiple "types" of saints,
	// (i.e. Seven Brothers, [M] with Ss. Rufina and Secunda, [VM])
	// replace bracketed terms with long form
	$nameL = preg_replace('/ (ac|et|atque) /',' <r>\1</s> ',$nameL);
	$nameE = preg_replace('/ (with|and|also) /',' <r>\1</s> ',$nameE);
	$nameL = preg_replace_callback('/\[[^\]]*\]/',
		create_function('$matches','
			return "<r>".constr_type($matches[0],1)."</s>";'),$nameL);
	$nameE = preg_replace_callback('/\[[^\]]*\]/',
		create_function('$matches','
			return "<r>".constr_type($matches[0],2)."</s>";'),$nameE);
/*
	$nameE = preg_replace_callback('/\[[^\]]*\]/',
		create_function('$matches','
			global $Ecl; $repl = "";
			trigger_error("first: ".$Ecl[0]." length:".count($Ecl));
			for($i=0;$i<strlen($matches[0]);$i++) {
				$tmp = substr($matches[0],$i,1);
				if(array_key_exists($tmp,$Ecl))
					$repl .= (strlen($repl)?", ":"") . $Ecl[$tmp];
			}
			return $repl;'),$nameE);
 */

	// var_dump($Ldate,$Ltype,$Etype,$cs);

	// a negative class value signifies that this is a 
	// commemoration which concurs with another feast
	// The character 'H' signifies header only
	// Otherwise if positive, print everything as normal
	if($class>=10) {
		headSt(array($Ldate,$Edate), $class-10, $nameL, $nameE, $Etype);
	} elseif($class>=0) {
		// add image... (the only image that can be added
		// automatically is the default separator)
		space();
		img();
	
		// write heading
		headSt(array($Ldate,$Edate), $class, $nameL, $nameE, $Etype);
	
		// if it's a 3rd class feast, set flag to include 
		// "ferial psalm" indication in common reference
		if($class==3) $psF = 1;
		else $psF = 0;
		// if it's a 3rd class feast, say "all else"
		$csOpt = $psF+1;
		// if there is a prayer, add "...except as follows"
		if($prayer) $csOpt += 10;

		// Add line naming the common:
		// Commune vide p. / Common see p.
		if($class>0 && $lent!=1)
			csref($cs, $psF, $csOpt);
	
		// lauds v/r & ant
		if($class==0 || $lent==1) {
			if($pta==2 && strlen($LantP)>0) {
				ant($LantP,'p',1);
				vrS($LvrP,1);
				ant($Lant,'e');
				vrS($Lvr);
			} else {
				if($lent==1 && $class>0) rubp('Tempore quadrageimali fit com. in Laudibus tantum.',
								'In Lent commmem. is made in Lauds only.');
				if($custL) ant($Lant,'*',$pta);
				else ant($Lant,1,$pta);
				vrS($Lvr,$pta);
			}
			rubrics('oremus.php');
		} elseif(($long || $custL) && $class>0) {
			if($pta==2 && strlen($LantP)>0) {
				if($pt==-1) {
					space('Line');
					rubp('Pro commemoratione extra tempus paschale:', 'Before Easter, a comm. is made at Lauds using:');
					ant($Lant,1);
					vrS($Lvr,0);
					space('Line');
					vrS($LvrP,1,'L');
					ant($LantP,'B',1);
				} else {
					rubrics('head/PT.php');
					vrS($LvrP,1,'L');
					ant($LantP,'B',1);
					rubrics('head/PTnot.php');
					vrS($Lvr,0,'L');
					ant($Lant,'B');
				}
			} else {			
				vrS($Lvr,$pta,'L');
				ant($Lant,'B',$pta);
			}
			rubrics('head/Prayer.php');
		}

		// prayer
		$pr_ret = '';
		ob_start(); // start buffer
		if(is_array($prayer)) {
			if(count($prayer)<3)
				trigger_error('Problem with prayer for '. $Edate
					.' ('. $nameE .') ', E_USER_ERROR);
			prayer($prayer[0],$prayer[1],$prayer[2],$pr_ret);
		} elseif(is_string($prayer))
			prayer($prayer,'','',$pr_ret);
		$prayer = ob_get_contents(); // assign buffer contents to variable
		ob_end_clean(); // end buffer and remove buffer contents
		echo $prayer;

		// commemorations
		if($advent && $class>0)
			rubp('Et fit com. feriæ in Laudibus et in Vesperis',' And a commem. is made of the feria at Lauds and Vespers.');
		if($lent && $class==2)
			rubp('Et, tempore quadragesimali, fit com. feriæ in Laudibus et in Vesperis.', 'And, if in Lent, commem. is made of the feria at Lauds and Vespers.');
		if($commem) {
			ob_start(); // start buffer
			eval($commem);
			$commem = ob_get_contents(); // assign buffer contents to variable
			ob_end_clean(); // end buffer and remove buffer contents
			echo $commem;
		}

		// if vespers is of the following, print note 
		// and supress printing of v/r & ant for vespers.
		if($vseq)
			rubp('Vesperæ de sequenti.','Vespers of the following.');
		else {
			$use_pr_ref = false;
			// vespers v/r & ant
			// if long form or custom vespers...
			// and it's not a commem...
			// and it's not a 3rd class feast in lent...
			// and it's not a doctor (handled differently, below)
			if(($long || $custV) && $class>0 && !($lent==1 && $class==3) && !$doct) {
				if($pta==2 && strlen($VantP)>0) {
					if($pt==-1) {
						vrS($VvrP,1,'V');
						ant($VantP,'M',1);
					} else {
						rubrics('head/PT.php');
						vrS($VvrP,1,'V');
						ant($VantP,'M',1);
						rubrics('head/PTnot.php');
						vrS($Vvr,0,'V');
						ant($Vant,'M');
					}
				} else {
					if($Lvr===$Vvr) vrS($Vvr,3,'V');
					else vrS($Vvr,$pta,'V');
					if($Lant===$Vant) ant($Vant,'m');
					else ant($Vant,'M',$pta);
				}
				if($commem!==0) $use_pr_ref = true;
			} elseif($doct && is_array($ant)) {
				if(count($ant)<2)
					trigger_error('Problem with antiphon for '. $Edate
						.' ('. $nameE .') ', E_USER_ERROR);
				if($doct) {
					if($Lvr===$Vvr) vrS($Vvr,3,'V');
					else vrS($Vvr,$pta,'V');
					ant($Vant,'M',$pta,$ant[0],$ant[1]);
				}
				if($commem!==0) $use_pr_ref = true;
			}

			// if there is a commem., give prayer reference...
			if($use_pr_ref) {
				preg_match('/BodyLDrop>([^<]*)</',$prayer,$prL);
				preg_match('/BodyLDrop>([^<]*)</',$commem,$prC);
				//trigger_error($prL[1]);
				if(count($prL)>1 && count($prC)>1) {
					$prL = explode(' ',$prL[1]);
					$prC = explode(' ',$prC[1]);
					for($i=1;$i<count($prL);$i++) {
						if(trimP($prL[0])!=trimP($prC[0]) & strlen($prL[0])>4) break;
						$prL[0] .= ' '. $prL[$i];
						$prC[0] .= ' '. $prC[$i];
					}
					$prL = substr($pr_ret[0],0,strlen(trimP($prL[0])));
	
					preg_match('/BodyEDrop>([^<]*)</',$prayer,$prE);
					preg_match('/BodyEDrop>([^<]*)</',$commem,$prC);
					$prE = explode(' ',$prE[1]);
					$prC = explode(' ',$prC[1]);
					for($i=1;$i<count($prE);$i++) {
						if(trimP($prE[0])!=trimP($prC[0]) & strlen($prE[0])>4) break;
						$prE[0] .= ' '. $prE[$i];
						$prC[0] .= ' '. $prC[$i];
					}
					$prE = substr($pr_ret[1],0,strlen(trimP($prE[0])));
					rubp('Oratio <snr>'.$prL.'</s>, ut supra.','Prayer <snr>'.$prE.'</s>, as above.');
				}
			}

			if(0<$class && $class<=2) rubrics('prSanct/ComplineSun.php');
		}
	} else {
		// this is the brief form of commemoration used if the above is negative.
		// it will automatically insert the default V/R and Antiphon of Lauds 
		// from the correct common.
		rubp('Et fit com. '. preg_replace('/<[^>]*>/','',$nameL) .', '. $Ltype .':',
			'Commem. is made of '. preg_replace('/<[^>]*>/','',$nameE) .', '. $Etype .':');

		if($pta==2 && strlen($LantP)>0) {
			ant($LantP,'p',1);
			vrS($LvrP,1);
			ant($Lant,'e');
			vrS($Lvr);
		} else {			
			ant($Lant,1,$pta);
			vrS($Lvr,$pta);
		}
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


?>
