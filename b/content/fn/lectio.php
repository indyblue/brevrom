<?php

function lectio($la, $en) {
	$rn = array('','i','ii','iii','iv','v','vi','vii','viii','ix');
	$lah1 = ''; $lanum = ''; $lacap = ''; $latxt = '';
	$enh1 = ''; $ennum = ''; $encap = ''; $entxt = '';
	if(is_array($la)) {
		$lah1 = $la[0];
		$lanum = $la[1];
		$lacap = $la[2];
		$latxt = caps_first_word($la[3]);
	} 
	if(is_array($en)) {
		$enh1 = $en[0];
		$ennum = $en[1];
		$encap = $en[2];
		$entxt = sizeof($en)>3 ? caps_first_word($en[3]) : '';
	}
	
	$latxt = ''; $entxt = '';
	$ina = ['la','en'];
	$LE = ['L','E'];
	$lec = ['Lectio', 'Lesson'];
	$outv = ['latxt','entxt'];
	$tu = [' Tu autem.', ' But Thou.'];

	for($i=0;$i<2;$i++){
		foreach(${$ina[$i]} as $j=>$itxt) {
			if(mb_strlen($itxt)==0) continue;
			$txt = mb_split('\|',$itxt);
			$cl = "Body{$LE[$i]}Drop";
			$s = ''; $sc = '';
			if(count($txt)>1) {
					$tb = $txt[1];
					switch($txt[0]) {
					case "c": $cl = 'Head3ni'; break;
					case "cr": $cl = 'Head4'; break;
					case "lr": $cl = "Body{$LE[$i]}"; $s = '<sr>'; $sc = '</s>'; break;
				}
			}	else $tb = $txt[0] . $tu[$i];
			if(is_numeric($tb)) $tb = $lec[$i] . ' ' . $rn[$txt[1]];
			if(count($txt)>2) $tb .= "<t2>" . $txt[2];

			${$outv[$i]} .= "\n<p:$cl>$s$tb$sc</p>";
		}
	}

	echo "<table><tr><td:A1>$latxt</td>
		<td:B1>$entxt</td></tr></table>\n";
}

function lectioN($n, $la, $en, $b8=null) {
	vr('pater_silent_vr.php');
	space();

	if($en==null) $en = $la;
	if($n==1) {
		ant('Matins/n1a_exaudi_domine.php','A');
		ant('Matins/n1b1_benedictione_perpetua.php','b');
	} elseif($n==2) {
		ant('Matins/n2a_ipsius_pietas.php','A');
		ant('Matins/n2b1_deus_pater.php','b');
	} elseif($n==3) {
		ant('Matins/n3a_a_vinculis.php','A');
		ant('Matins/n3b1_evangelica_lectio.php','b');
	}
	space();
	lectio($la[0], $en[0]);
	rm([$la[1],$en[1]],0,1);
	space();

	if($n==1) ant('Matins/n1b2_unigenitus_dei.php','b');
	else if($n==2) ant('Matins/n2b2_christus_perpetuae.php','b');
	else if($n==3) {
		if($b8=='m') ant('Matins/sb2f_cujus.php','b');
		elseif($b8=='f') ant('Matins/sb2m_cujus.php','b');
		elseif($b8=='quorum') ant('Matins/sb2m_quorum.php','b');
		elseif($b8=='quarum') ant('Matins/sb2f_quarum.php','b');
		else ant('Matins/n3b2_divinum_auxilium.php','b');
	}
	lectio($la[2], $en[2]);
	$gl=1;
	if($n==3) $gl=0;
	rm([$la[3],$en[3]],0,$gl);
	space();

	if($n==1) ant('Matins/n1b3_spiritus_sancti_gratia.php','b');
	else if($n==2) ant('Matins/n2b3_ignem_sui_amoris.php','b');
	else if($n==3) ant('Matins/n3b3_ad_societatem.php','b');
	lectio($la[4],$en[4]);
	if($n==3) rubrics('te_deum.php');
	else rm([$la[5],$en[5]],0,0);
	space();

}
?>
