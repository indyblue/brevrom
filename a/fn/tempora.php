<?php

class tempora {
	var $year;
	function tempora($y) {
		$this->year = $y;
	}

	function hodie($str) {
		$arr = explode('=',$str);
		if(count($arr)==4) {
			$day = $arr[0];
			$class = $arr[1];
			$prec = $arr[2];
			$descr = $arr[3];
		} else {
			$day = $str;
		}

		// this will match moveable feasts
		$r = preg_match("/(?P<fn>[a-z]+)(?P<wk>[-0-9]+)-(?P<day>[0-9]+)/i", $day, $m);
		if($r===1) {
			$d = $this->$m['fn']($m['wk']);
			if($d==null) return;
			$this->feriaAdd($m['day'], $d);
			if($d!=null) $df = $d->format('d M. l');
			else $df = '';
			echo "<b>$df</b> - <i>$descr</i><br>";
		}
	}

	function adv($i) {
		$d = $this->nextsun(12,25);
		tempora::weekadd(-4, $d);
		tempora::weekadd($i, $d);
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

	private function getdate($month, $day) {
		$y = $this->year;
		$d = new DateTime();
		$d->setDate($y, $month, $day);
		return $d;
	}
	private function nextsun($month, $day) {
		$d = $this->getdate($month,$day);
		$dow = $d->format('N');
		$d->add(new DateInterval('P'.(7-$dow).'D'));
		return $d;
	}
	private function month($month, $i) {
		$d = $this->nextsun($month,1);
		tempora::weekadd($i, $d);
		$month_check = $d->format('n');
		if($month-$month_check==0) return $d;
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
		precedence: sec numbers from below (e.g. 4, 12.1.c, 19.5, &c)
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
?>
