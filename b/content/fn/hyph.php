<?php
/*
$test = "TÆDET ánimam meam vitæ meæ, dimíttam advérsum me elóquium meum, loquar in amaritúdine ánimæ meæ. Dicam Deo: Noli me condemnáre: índica mihi cur me ita júdices. Numquid bonum tibi vidétur, si calumniéris me, et ópprimas me, opus mánuum tuárum, et consílium impiórum ádjuves? Numquid óculi cárnei tibi sunt; aut, sicut videt homo, et tu vidébis? Numquid sicut dies hóminis dies tui, et anni tui sicut humána sunt témpora, ut quæras iniquitátem meam, et peccátum meum scrutéris? Et scias quia nihil ímpium fécerim, cum sit nemo qui de manu tua possit erúere. <br><span class='r'>R.</span> Qui Lázarum resuscitásti a monuménto fœ́tidum, * Tu eis, Dómine, dona réquiem, et locum indulgéntiæ. V. Qui ventúrus es judicáre vivos et mórtuos, et sǽculum per ignem. Tu eis, Dómine, dona réquiem, et locum indulgéntiæ.";
$test = "V. Ora pro nobis, sancta Dei Génitrix.  R. Ut digni efficiámur promissiónibus Christi.";
$test = "déspicis designare";

//ob_start(); // start buffer
//require 'temp.htm';
//$txtContent = ob_get_contents(); // assign buffer contents to variable
//ob_end_clean(); // end buffer and remove buffer contents
//echo strlen($txtContent);

echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
echo "<div style='white-space:pre-wrap;'>";

$hyph = new hyph();
$hyph->hyphen='-';
$testh = $hyph->text($test, 'la');
//$testx = $hyph->html($txtContent);

echo $testh;
echo "</div>";

//print $dom->saveHTML();
// */

class hyph {
	public $charmin = 1;
	public $charmax = 7;
	public $leftmin = 2;
	public $rightmin = 2;
	public $hyphen = '&shy;';
	public $words = array();
	public $langpatterns;

	public function __construct() {
		mb_internal_encoding('utf-8');
		$this->langpatterns = array(
			'la' => $this->hyphdict('la'),
			'en' => $this->hyphdict('en')
		);

	}

	public $xpClasses = [
		'la'=> ['BodyL', 'BodyLDrop', 'BodyLIndent', 'BodyLSm'],
		'en'=> ['BodyE', 'BodyEDrop', 'BodyEIndent', 'BodyESm']
	];
	public $xpExClasses = ['VR','NH'];
	public function html($txt) {
		$this->hyphen = $this->h2u('&shy;');
		//$this->hyphen = '-';
		$dom = new DOMDocument();
		libxml_use_internal_errors(true);
		$dom->loadHTML($txt);
		$dxp = new DOMXPath($dom);

		// for each language
		foreach($this->xpClasses as $la=>$cl) {
			$xs = "//*[@class='". implode("']//text() | //*[@class='",$cl) . "']//text()";

			$clns = $dxp->query($xs);

			// for each html element matching the class list for the language
			foreach($clns as $cln) {
				if(!in_array($cln->parentNode->getAttribute('class'), $this->xpExClasses)) {
					$val = $cln->nodeValue;
					$hyphtxt = $this->text($val, $la);
					$cln->nodeValue = $hyphtxt;
				}
			}
		}

		return $dom->saveHTML();
	}

	public function text($txt, $lang) {
		$pat = $this->langpatterns[$lang];
		return $this->hyphenation($txt, $pat);
	}

	// Text hyphenation
	private function hyphenation($text, $patterns) {
		$exclude_tags = array("code", "pre", "script", "style"); 
		$word = ""; $tag = ""; $tag_jump = 0; $output = array();
		$word_boundaries = "<>\t\n\r\0\x0B !\"§$%&/()=?….,;:-–_„”«»‘’'/\\‹›()[]{}*+´`^|©℗®™℠¹²³";
		$text = $text . " ";
		
		for($i = 0; $i < mb_strlen($text); $i++) {
			$char = mb_substr($text, $i, 1);
			if(mb_strpos($word_boundaries, $char) === false && $tag == "") {
				$word .= $char;
			} else {
				if($word != "") { $output[] = $this->word_hyphenation($word, $patterns); $word = ""; }
				if($tag != "" || $char == "<") $tag .= $char;
				if($tag != "" && $char == ">") {
					$tag_name = (mb_strpos($tag, " ")) ? mb_substr($tag, 1, mb_strpos($tag, " ") - 1) : mb_substr($tag, 1, mb_strpos($tag, ">") - 1);
					if($tag_jump == 0 && in_array(mb_strtolower($tag_name), $exclude_tags)) { 
						$tag_jump = 1;
					} else if($tag_jump == 0 || mb_strtolower(mb_substr($tag, -mb_strlen($tag_name) - 3)) == '</' . mb_strtolower($tag_name) . '>') { 
						$output[] = $tag;
						$tag = '';
						$tag_jump = 0;
					} 
				}
				if($tag == "" && $char != "<" && $char != ">") $output[] = $char;
			}
		}
		
		$text = join($output);
		return substr($text, 0, strlen($text) - 1);
	}


	// Word hyphenation
	private function word_hyphenation($word, $patterns) {
		$d = 0;
		$charmin = $this->charmin;
		$charmax = $this->charmax;
		$leftmin = $this->leftmin;
		$rightmin = $this->rightmin;
		$hyphen = $this->hyphen;
		$words = $this->words;

		if($d) echo "$word - ";
		if(mb_strlen($word) < $charmin) return $word;
		if(mb_strpos($word, $hyphen) !== false) return $word;
		if(isset($words[mb_strtolower($word)])) return $words[mb_strtolower($word)];
		
		$text_word = '_' . $word . '_';
		$word_length = mb_strlen($text_word);
		$single_character = $this->mb_split_chars($text_word);
		$text_word = mb_strtolower($text_word);
		$hyphenated_word = array();
		$hyphenated_pats = array();
		$numb3rs = array('0' => true, '1' => true, '2' => true, '3' => true, '4' => true, '5' => true, '6' => true, '7' => true, '8' => true, '9' => true);
		
		for($position = 0; $position <= ($word_length - $charmin); $position++) {
			$maxwins = min(($word_length - $position), $charmax);

			for($win = $charmin; $win <= $maxwins; $win++) {
				if(isset($patterns[mb_substr($text_word, $position, $win)])) {
					if($d) echo " {$patterns[mb_substr($text_word, $position, $win)]}, ";
					$pattern = $patterns[mb_substr($text_word, $position, $win)];
					$digits = 1;
					$pattern_length = mb_strlen($pattern);
					
					for($i = 0; $i < $pattern_length; $i++) {
						$char = mb_substr($pattern,$i,1);
						if(isset($numb3rs[$char])) {
							$zero = ($i == 0) ? $position - 1 : $position + $i - $digits;
							if(!isset($hyphenated_word[$zero]) || $hyphenated_word[$zero] < $char) {
								$hyphenated_word[$zero] = $char;
								$hyphenated_pats[$zero] = "$char, i:$i, p:$position, d:$digits, w:$win, $pattern";
							}
							$digits++;				
						}
					}
				}
			}
		}

		$inserted = 0;
		for($i = $leftmin; $i <= (mb_strlen($word) - $rightmin); $i++) {
			if(isset($hyphenated_word[$i]) && $hyphenated_word[$i] % 2 != 0) {
				array_splice($single_character, $i + $inserted + 1, 0, $hyphen);
				$inserted++;
			}
		}


		$ret = implode('', array_slice($single_character, 1, -1));
		/*
		echo "<pre>$text_word - $ret\n";
		//print_r($hyphenated_word);
		print_r($hyphenated_pats);
		echo "</pre>";
		// */
		if($d) echo "-- $ret<br/>";
		return $ret;
	}


	private function mb_split_chars($string) {
		$strlen = mb_strlen($string);
		while($strlen) {
			$array[] = mb_substr($string, 0, 1, 'utf-8');
			$string = mb_substr($string, 1, $strlen, 'utf-8');
			$strlen = mb_strlen($string);
		}
		return $array;
	}

	private function hyphdict($lang) {
		//$pattern = array();
		if($lang=='la') {
			$patterns = $this->lahyph();
		} else if($lang=='en') {
			$patterns = $this->enhyph();
		} else 
			$patterns = array();

		$new_patterns = array();
		for($i = 0; $i < count($patterns); $i++) {
			$value = $patterns[$i];
			$new_patterns[preg_replace('/[0-9]/', '', $value)] = $value;
		}
		return $new_patterns;
	}

	private function lahyph() {
		$path = __DIR__ . "/../../hyph/curr/";
		$txt = file_get_contents($path."hyph.la.liturgical.txt");
		error_log(substr($txt, 0, 200));
		$txt = preg_replace("/^\.|\.$/m", "_", $txt);
		error_log(substr($txt, 0, 200));
		$ret = preg_split("/[\\r\\n]+/", $txt);
		error_log(substr(json_encode($ret), 0, 200));
		return $ret;
	}
	private function h2u($code) {
		return mb_convert_encoding($code, 'UTF-8', 'HTML-ENTITIES');
	}

	private function enhyph() {
		$path = __DIR__ . "/../../hyph/curr/";
		$txt = file_get_contents($path."hyph_en_GB.dic");
		$txt = preg_replace("/^\\.|\\.$/m", "_", $txt);
		$ret = preg_split("/[\\r\\n]+/", $txt);
		return $ret;
	}
}
?>
