<?php
namespace fssr;
$h = $_REQUEST['h'];
$t = $_REQUEST['t'];
$f = $_REQUEST['f'];
$s = $_REQUEST['s'];

$p = new pars();

echo hora($h, $t, $f, $s);

// $hour = m,l,p,t,s,n,v,c
// $type = s,t (sanctus, tempore)
// $file = file name
// $season = season abbrev (optionally with week-feria)
function hora($hour, $type, $file, $season) {
}

/* 
Variable parts to be handled:
[psalmi]
[rbr]
[martyrologium]
[lectio_brevis]
[antiphona_finalis]

Other things to be handled
@alleluja_laus_tibi

class horas {
	$tp = false;
	function matutinum() {
	}
	function laudes() {
	}
	function prima() {
	}
	function sexta() {
	}
	function nona() {
	}
	function vesperae() {
	}

	function completorium($feria=1) {
		
	}

	public $head_parallel=true;
	private $in_table=false;

	function parallelus($txt1, $txt2) {
		if(!$this->in_table) {
			echo "<table>";
			$this->in_table=true;
		}
		return "<tr><td class='C1'>$txt1</td><td class='C2'>$txt2</td></tr>";
	}
	function perficere() {
		if($this->in_table) {
			echo "</table>";
			$this->in_table=false;
		}
	}

}
*/

?>
