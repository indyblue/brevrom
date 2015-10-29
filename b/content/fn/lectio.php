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
		$entxt = caps_first_word($en[3]);
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
			$tb = $txt[1];
			if(count($txt)>1) switch($txt[0]) {
				case "c": $cl = 'Head3ni'; break;
				case "cr": $cl = 'Head4'; break;
				case "lr": $cl = "Body{$LE[$i]}"; $s = '<sr>'; $sc = '</s>'; break;
			}
			else $tb = $txt[0] . $tu[$i];
			if(is_numeric($tb)) $tb = $lec[$i] . ' ' . $rn[$txt[1]];
			if(count($txt)>2) $tb .= "<t2>" . $txt[2];

			${$outv[$i]} .= "\n<p:$cl>$s$tb$sc</p>";
		}
	}

	echo "<table><tr><td:A1>$latxt</td>
		<td:B1>$entxt</td></tr></table>\n";
}
?>
