<?php

class txt {
	var $L; // latin text
	var $E; // english text
	var $C; // commentary

	function txt() {
		$this->L = array();
		$this->E = array();
		$this->C = array();
	}
	function add($L=null, $E=null, $C=null) {
		if(!is_null($L)) $this->L[] = $L;
		if(!is_null($E)) $this->E[] = $E;
		if(!is_null($C)) $this->C[] = $C;
	}
	function count() { return count($this->L; }
	function Llen($i) { return strlen($this->L[$i]); }
	function Elen($i) { return strlen($this->E[$i]); }
	function Clen($i) { return strlen($this->C[$i]); }

}

class hour {
	var $co;  // common
	var $psa; // psalm antiphons
	var $psl; // psalm location
	var $ps1; // psalms/canticles
	var $ps2;
	var $ps3;
	var $ps4;
	var $ps5;
	var $c;   // little chapter
	var $h;   // hymn
	var $br;  // brief response
	var $vr;  // versicle/response
	var $ca;  // antiphon for gospel canticle
	var $c;   // gospel canticle
	var $pr;  // prayer
	var $c1;  // first commem
	var $c2;  // second commem
}

class commem {
	var $ant; // antiphon
	var $vr;  // versicle/response
	var $pr;  // prayer
}

class feast {
	var $h1; // primary header
	var $hd; // date
	var $h2; // secondary header

	var $v1; // 1 vespers
	var $l;  // lauds
	var $p;  // prime
	var $t;  // terce
	var $s;  // sext
	var $n;  // none
	var $v;  // vespers
	var $c;  // compline
}
