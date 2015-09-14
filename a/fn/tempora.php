<?php

class tempora {
	var $year;
	private $days;

	function tempora($y) {
		$this->year = $y;
		$this->days = array();
	}

	function hodie($str) {
		$arr = explode('=',$str);
		if(count($arr)==4) {
			$day = $arr[0];
			$class = $arr[1];
			$prec = $arr[2];
			$descr = $arr[3];
		} else {
			//$day = $str;
			return;
		}
		//echo "$str<br>";


		// this will match moveable feasts
		$r = preg_match("/^(?P<fn>[a-z]+)(?P<wk>[-0-9]+)-(?P<day>[0-9]+)/i", $day, $m);
		if($r===1) {
			$d = $this->$m['fn']($m['wk']);
			if($d==null) return;
			$this->feriaAdd($m['day'], $d);
			if($d->format('Y-m-d')=='2015-02-01') {
				$x=1;
			}
			$this->addfeast($d, $class, $prec, $descr, $day);
			//if($d!=null) $df = $d->format('d M. l');
			//else $df = '';
			//echo "<b>$df</b> - <i>$descr</i><br>";
		}

		// this will match mm-yy feasts
		$r = preg_match("/^(?P<mm>[-0-9]+)-(?P<dd>[0-9]+)(?P<suffix>[a-z]*)/i", $day, $m);
		if($r===1) {
			$d = $this->getdate($m['mm'], $m['dd']);
			if($d==null) return;
			$this->addfeast($d, $class, $prec, $descr, $day);
		}
	}

	function display() {
		usort($this->days, "tempora::days_sort");
		echo "day count: ".count($this->days)."<br>";
		echo "year: ".$this->year."<br>";

		foreach($this->days as $d) 
			$d->display();
	}

	function addfeast($date, $class, $prec, $descr, $str='') {
		$day = $this->getday($date);
		$day->add($class, $prec, $descr, $str);
	}

	function getday($date) {
		$x=0;
		if($x) echo "<b>".$date->format('Y-m-d')."</b>: ";
		foreach($this->days as $d) {
			if($x) echo $d->date->format('Y-m-d').", ";
			$diff = $d->date->diff($date)->days;
			if($diff==0) {
				if($x) echo "<br>";
				return $d;
			}
		}
		if($x) echo "<br>";
		$d = new day($date);
		array_push($this->days, $d);
		usort($this->days, "tempora::days_sort");
		return $d;
	}

	private static function days_sort($a, $b) {
		if($a->date == $b->date) return 0;
		else if($a->date > $b->date) return 1;
		else if($a->date < $b->date) return -1;
	}

	function adv($i, $y=null) {
		if($y===null) $y=$this->year;
		$d = $this->nextsun(12,25, $y);
		tempora::weekadd(-4, $d);
		tempora::weekadd($i, $d);
		$y_check = $d->format('Y');
		if($i<0 && $y_check<$y) return $this->adv($i, $y+1);
		return $d;
	}

	function nat($i) {
		$d = $this->nextsun(12,25);
		tempora::weekadd($i, $d);
		return $d;
	}

	function epi($i) {
		$d = $this->nextsun(1,6);
		tempora::weekadd($i, $d);
		return $d;
	}

	function sges($i) {
		$d = $this->psch(-9);
		tempora::weekadd($i, $d);
		return $d;
	}

	function qges($i) {
		$d = $this->psch(-6);
		tempora::weekadd($i, $d);
		return $d;
	}
	function pass($i) {
		$d = $this->psch(-2);
		tempora::weekadd($i, $d);
		return $d;
	}

	function psch($i) {
		$y = $this->year;
		$a = $y % 19;
		$b = floor($y / 100);
		$c = $y % 100;
		$d = floor($b / 4);
		$e = $b % 4;
		$f = floor($c / 4);
		$g = $c % 4;
		$h = floor((8 * $b + 13) / 25);
		$j = (19 * $a + $b - $d - $h + 15) % 30;
		$m = floor(($a + 11 * $j) / 319);
		$k = (2 * $e + 2 * $f - $g - $j + $m + 32) % 7;
		$month = floor(($j - $m + $k + 90) / 25);
		$dom = ($j - $m + $k + 19 + $month) % 32;
		$d = new DateTime();
		$d->setDate($y, $month, $dom);
		tempora::weekadd($i, $d);
		return $d;
	}

	function pent($i) {
		$d = $this->psch(7);
		tempora::weekadd($i, $d);
		return $d;
	}

	function pp($i) {
		$d = $this->psch(8);
		tempora::weekadd($i, $d);
		return $d;
	}

	function aug($i) { return $this->month(8,$i); }
	function sep($i) { return $this->month(9,$i); }
	function oct($i) { return $this->month(10,$i); }
	function nov($i) { return $this->month(11,$i); }

	function ssnom() {
		$d = $this->getdate(1,2);
		$dow = $d->format('N');
		if($dow>3)
			$d->add(new DateInterval('P'.(7-$dow).'D'));
		return $d;
	}

	private function getdate($month, $day, $y=null) {
		if($y===null) $y = $this->year;
		$d = new DateTime();
		$d->setDate($y, $month, $day);
		$d->setTime(0,0,0);
		return $d;
	}
	private function nextsun($month, $day, $y=null) {
		if($y===null) $y = $this->year;
		$d = $this->getdate($month,$day, $y);
		$dow = $d->format('N');
		$d->add(new DateInterval('P'.(7-$dow).'D'));
		return $d;
	}
	private function month($month, $i) {
		$d = $this->nextsun($month,1);
		tempora::weekadd($i, $d);
		$month_check = $d->format('n');
		if($i<0 || $month-$month_check==0) return $d;
		else return null;
	}
	private static function weekadd($i, $d) {
		if($i>1)
			$d->add(new DateInterval('P'.($i-1).'W'));
		else if($i<0) {
			$i = abs($i);
			$d->sub(new DateInterval('P'.$i.'W'));
		}
	}
	private static function feriaAdd($i, $d) {
		$d->add(new DateInterval('P'.($i-1).'D'));
	}
	// 1cl transfer rules: If a 1cl feast is impeded by a superior feast, 
	// it is transferred to the nearest following day which is not 1 or 2cl.
	/* Proposed file format:
		date=class=precedence=name
		date: normally mm-dd, with the following for moveable feasts:
			- season week-day (e.g. adv1-1)
				seasons: adv, nat, epi, sges, qges, pass, psch, pent, pp, aug, sep, oct, nov
				*precedence 6,15 are sundays, which get used on feriae of following week
				exceptions: ssnom = holy name, Sunday between 2-5 Jan, or 2 Jan.
		class: 1, 2, 3, 4, c(for comm)
		precedence: sec numbers from below (e.g. 4, 12.1c, 19.5, &c)
		name: Name of saint(s), 
			- minor text delimited by ~ (e.g. S. Joannis Chrysostomi ~Episcopi, Confessoris, Ecclesiae Doctoris~)
			- should we have standard abbrevs which can be substituted, either to expand or contract? (e.g. Episcopi=Ep.)
			- if left blank and is seasonal, will default to something like: adv1-2 = I Advent, Feria Secunda
	*/
	/* 
		1cl precedence:
			1. Nativity, Ressurection, Pentecost
			2. Triduum
			3. Epiphany, Ascension, Trinity, Corpus Christi, Sacred Heart, Christ the King
			4. Immaculate Conception
			5. Vigil and octave days of Nativity
			6. Sundays of Advent, Lent, Passiontide, low Sunday
			7. 1cl Feriae: Ash Wed, II,III,IV Holy Week
			8. All Souls (But gives way to Sunday?)
			9. Vigil Pentecost
			10. Days in octave of Easter and Pentecost
			11. All other universal 1cl feasts
			12. Local 1cl feasts:
				1. Patronal feast: 
					a. nation; 
					b. region or province, either ecclesial or civil
					c. diocese
					d. place or town or city
				2. Anniversary dedication of cathedral
				3. Patronal feast of place, town or city.
				4. Anniversary of dedication of church or oratory
				5. Titular feast of church
				6. Titular feast of order or congregation
				7. Feast of canonized founder of order or congregation
				8. Feast of principal patrons of order or congregation, and religious province
			13. Indult 1cl feasts: first moveable, then fixed.
		2cl precedence:
			14. 2cl Feasts of the Lord, first moveable then fixed.
			15. 2cl Sundays
			16. 2cl universal, which are not of the Lord
			17. days in the octave of Nativity
			18. 2cl feriae, namely: Advent 17-23 Dec, Ember days in Advent, Lent & Sept.
			19. Proper 2cl feasts, namely:
				1. Secondary patronal feasts of: 
					a. nation; 
					b. region or province, either ecclesial or civil
					c. diocese
					d. place or town or city
				2. Feasts of saints and blessed, who in in that diocese had their origin, lived a longer time, or died.
				3. Feasts of saints, whose body is preserved in that church or oratory
				4. Feast of beatified founder of order or congregation
				5. Feast of secondary patrons of order or congregation, and religious province
				6. Feasts of saints or blessed, who have been associated with that order or congregation
			20. Indult 2cl feasts: first moveable, then fixed.
			21. 2cl vigils
		3cl precedence:
			22. Feriae lent and passiontide, feriae from Ash Wed to the saturday before 2nd Sunday of Passiontide inclusive, excluding ember days
			23. 3cl feasts, which are only inscribed in the local calendar, namely:
				1. Feasts of saints and blessed, who in in that diocese had their origin, lived a longer time, or died.
				2. Feasts of blessed, whose body is preserved in that church or oratory
				3. Feasts of saints or blessed, who have been associated with that order or congregation; tehn indult feasts, first mobile then fixed.
			24. 3cl feasts in universal calendar; first mobile, then fixed.
			25. Feriae of Advent until 16 Dec inclusive, excluding ember days
			26. 3cl vigils
		4cl precedence:
			27. Saturdays of our Lady
			28. 4cl feriae.
	*/

}

class day {
	var $date;
	var $feasts;
	function day($date) {
		$this->date = $date;
		$this->feasts = array();
	}
	function add($class, $precedence, $title, $str='') {
		$feast = new feast($class, $precedence, $title, $str);
		// need to handle transferrence of feasts.
		// all souls' - if on a Sunday, transfers
		// 1st class - transfers to next day of lower than 2cl.
		// might need to change the way we're doing the "year," since you could have local 1cl feasts in Christmas octave that would get transferred to after 1 Jan. If we go from 1 Advent, would this solve the problem?
		array_push($this->feasts, $feast);
		usort($this->feasts, 'day::f_cmp');
	}

	function display() {
		$d = $this->date;
		if($d!=null) $df = $d->format('d M. l');
		//if($d!=null) $df = $d->format('Y-m-d');
		else $df = '';
		$f = $this->feast();
		$descr = $f->title;
		$str = $f->str;
		$cl = $f->class;
		if($cl>0) $cl .= ' cl.';
		echo "<b>$df</b> - $descr <i>$cl</i> ($str)<br>";
		$cs = $this->commems();
		if(count($cs)>0) {
			foreach($cs as $c) {
				echo "<div style='margin-left:2em;'>";
				$descr = $c->title;
				$str = $c->str;
				$cl = $c->class;
				echo "* $descr <i>$cl</i> ($str)<br>";
				echo "</div>";
			}
		}
	}

	function feast() {
		usort($this->feasts, 'day::f_cmp');
		if(count($this->feasts)>0) return $this-> feasts[0];
		else return null;
	}
	function commems($i=null) {
		usort($this->feasts, 'day::f_cmp');
		if(count($this->feasts)>1) {
			if($i!==null) return $this->feasts[$i];
			else return array_slice($this->feasts, 1);
		}
		else return null;
	}

	private static function f_cmp($a, $b) {
		$ap = $a->precedence;
		$bp = $b->precedence;
		preg_match_all("/[0-9]+|[a-z]+/i", $a->precedence, $ap);
		preg_match_all("/[0-9]+|[a-z]+/i", $b->precedence, $bp);
		$ac = count($ap[0]);
		$bc = count($bp[0]);
		for($i=0;$i<max($ac,$bc);$i++) {
			$ai = $ac>$i ? $ap[0][$i] : null;
			$bi = $bc>$i ? $bp[0][$i] : null;
			if($ai === $bi) continue;
			// if $a=9 and $b=9.1, this would reach the second iteration,
			// and $ai=null, while $bi=1. So null trumps any value.
			else if($ai === null && $bi !== null) return 1;
			else if($ai !== null && $bi === null) return -1;

			else if($ai > $bi) return 1;
			else if($ai < $bi) return -1;
		}
		// if we get here they must be identical!
		return 0;
	}
}

class feast {
	function feast($class, $precedence, $title, $str, $date = null) {
		$this->class = $class;
		$this->precedence = $precedence;
		$this->title = $title;
		$this->str = $str;
		$this->trans = false;
		if($date!=null) {
			$this->trans = true;
			$this->date = $date;
		}
	}
	// in case of transferred feasts
	var $trans;
	var $date; 

	var $class;
	var $precedence;
	var $title;
	var $str;
}

?>
