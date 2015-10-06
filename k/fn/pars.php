<?php
namespace fssr;

class pars {
	public $lang;
	function pars() {
		global $la;
		$this->lang = $la; // LA, EN
	}

	function titulus($txt, $level) {
		$txt = $this->file_check($txt, TITULI);
	}

	// tp = 0 - no changes
	// tp = 1 - add alleluia to V/R (if not already there)
	// tp = -1 - remove alleluia, if there
	function vr($txt, $tp=0) {
		$txt = $this->file_check($txt, VERSICULI);
	}
	// tp=1 will add * alleluja, alleluja to versicle
	// gl=0 will suppress gloria (passiontide &c)
	function rbr($txt, $gl=1, $tp=0) {
		$txt = $this->file_check($txt, VERSICULI);
	}
	// gl=1 will add gloria
	function resp($txt, $gl=0) {
		$txt = $this->file_check($txt, VERSICULI);
	}

	// Endings:
	// 0 - use default setting
	// 1 - short ending
	// 2 - long ending
	// -1 - abbrev long ending
	function oratio($txt, $ending=0, $name='') {
		$txt = $this->file_check($txt, ORATIONES);
	}

	//$incs is the include pattern:
	// 0 - not displayed
	// '-' - not displayed, not counted.
	// 1 - for no astrisk no number
	// * - for astrisk but no number
	// + - for astrisk, no number, no "Ant."
	// # - for number but no astrisk
	// 2 - for both astrisk & number
	// M - Ad Magnif.Ant. + astrisk
	// m - Ad Magnif [short], ut supra.
	// B - Ad Bened.Ant. + astrisk
	// C - Ad Nunc dimittis + astrisk
	// N - adds appropriate "Nocturn" before antiphon
	// P - P.T. Ant. + astrisk
	// p - P.T. Ant., no astrisk
	// e - Extra T.P. Ant., no astrisk
	// I - Invit.
	// R - Repetit.
	function ant($txt, $type, $name='') {
		$txt = $this->file_check($txt, ANTIPHONAE);
	}

	function psalmus($txt) {
		$txt = $this->file_check($txt, PSALMI);
	}
	function canticum($txt) {
		$txt = $this->file_check($txt, CANTICA);
	}
	function hymnus($txt) {
		$txt = $this->file_check($txt, HYMNI);
	}

	function objectum($tag, $class, $txt) {
		return "<$tag class='$class'>$txt</$tag>";
	}

	function spacium($em=0.5) {
		return "<div style='font-size:{$em}em;'>&nbsp;</div>";
	}

	function txt_load($txt) {
		$dir = $_GET['root'] . "/00/Antiphon/";
	}

	function file_check($txt, $folder) {
		if(!is_string($txt)) return $txt;

		$root = $_SERVER["DOCUMENT_ROOT"];
		$fn = "$root/$lang/$folder/$txt";
		if(file_exists($fn)) return file_load($fn);
		else return $txt;
	}

	function file_load($file) {
		ob_start();
		require ($file);
		
		$txtContent = ob_get_contents();
		ob_end_clean();
		
		$cr = chr(13).chr(10);
		if(strpos($txtContent,$cr)===false)
			$cr = chr(13);
		if(strpos($txtContent,$cr)===false)
			$cr = chr(10);
		$pieces = explode($cr,$txtContent);
		$pieces = array_map('trim',$pieces);
		return $pieces;
	}

}

?>
