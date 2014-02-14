<html><head></head>
<body><pre>
BEGIN:VCALENDAR
VERSION:2.0
CALSCALE:GREGORIAN
METHOD:PUBLISH
X-WR-TIMEZONE:America/New_York
BEGIN:VTIMEZONE
TZID:America/New_York
X-LIC-LOCATION:America/New_York
BEGIN:DAYLIGHT
TZOFFSETFROM:-0500
TZOFFSETTO:-0400
TZNAME:EDT
DTSTART:19700308T020000
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:-0400
TZOFFSETTO:-0500
TZNAME:EST
DTSTART:19701101T020000
RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
END:STANDARD
END:VTIMEZONE
<?php
//phpinfo();

	$from = floor($_GET['from']);
	$to = floor($_GET['to']);
	for($i=$from; $i<=$to; $i++) {
		$cal = array();
		$ep = new DateTime("6 Jan $i");
		$hf = presun($ep);
		$hf->modify('+7 day');

		array_push($cal, 
			array('The Holy Name of Jesus',2,holy_name($ep)),
			array('The Holy Family: Jesus, Mary & Joseph',2,$hf) );

		$e = easter($i);
		$sept = nd($e,'-63 day');
		$diff = date_diff($sept, $hf, 7);

		if($diff>1) array_push($cal, array('Second Sunday after Epiphany',2,nd($hf,'7 day')) );
		if($diff>2) array_push($cal, array('Third Sunday after Epiphany',2,nd($hf,'14 day')) );
		if($diff>3) array_push($cal, array('Fourth Sunday after Epiphany',2,nd($hf,'21 day')) );
		if($diff>4) array_push($cal, array('Fifth Sunday after Epiphany',2,nd($hf,'28 day')) );
		if($diff>5) array_push($cal, array('Sixth Sunday after Epiphany',2,nd($hf,'35 day')) );

		array_push($cal, 
			array('Septuagesima',2,$sept),
			array('Sexagesima',2,nd($sept,'7 day')),
			array('Quinquagesima',2,nd($sept,'14 day')),

			array('Ash Wednesday',1,nd($e,'-46 day')),
			array('First Sunday in Lent',1,nd($e,'-42 day')),

			array('Ember Wednesday',2,nd($e,'-39 day')),
			array('Ember Friday',2,nd($e,'-37 day')),
			array('Ember Saturday',2,nd($e,'-36 day')),

			array('Second Sunday in Lent',1,nd($e,'-35 day')),
			array('Third Sunday in Lent',1,nd($e,'-28 day')),
			array('Fourth Sunday in Lent (Laetare)',1,nd($e,'-21 day')),
			array('First Sunday in Passiontide',1,nd($e,'-14 day')),
			array('Seven Dolours of the B.V.M.',0,nd($e,'-9 day')),

			array('Palm Sunday',1,nd($e,'-7 day')),
			array('Holy Thursday',1,nd($e,'-3 day')),
			array('Good Friday',1,nd($e,'-2 day')),
			array('Holy Saturday',1,nd($e,'-1 day')),
			array('Easter Sunday',1,$e) );

		for($j=1;$j<7;$j++)
			array_push($cal, array('Octave of Easter',1,nd($e,"+$j day")) );

		array_push($cal, 
			array('Low Sunday',1,nd($e,'+7 day')),
			array('Second Sunday after Easter',2,nd($e,'+14 day')),
			array('Third Sunday after Easter',2,nd($e,'+21 day')),
			array('Fourth Sunday after Easter',2,nd($e,'+28 day')),
			array('Fifth Sunday after Easter',2,nd($e,'+35 day')),

			array('Vigil of the Ascension',2,nd($e,'+38 day')),
			array('Ascension Thursday',1,nd($e,'+39 day')),
			array('Sunday after the Ascension',2,nd($e,'+42 day')),

			array('Vigil of Pentecost',1,nd($e,'+48 day')),
			array('Pentecost',1,$p = nd($e,'+49 day')),
			array('Octave of Petecost',1,nd($p,"+1 day")),
			array('Octave of Petecost',1,nd($p,"+2 day")),
			array('Octave of Petecost (Ember Wednesday)',1,nd($p,"+3 day")),
			array('Octave of Petecost',1,nd($p,"+4 day")),
			array('Octave of Petecost (Ember Friday)',1,nd($p,"+5 day")),
			array('Octave of Petecost (Ember Saturday)',1,nd($p,"+6 day")),
			array('Trinity Sunday',1,nd($p,"+7 day")),

			array('Corpus Christi',1,nd($p,"+11 day")),
			array('Second Sunday after Pentecost',2,nd($p,"+14 day")),
			array('Sacred Heart',1,nd($p,"+19 day")),
			array('Third Sunday after Pentecost',2,nd($p,"+21 day")),
			array('Fourth Sunday after Pentecost',2,nd($p,"+28 day")),
			array('Fifth Sunday after Pentecost',2,nd($p,"+35 day")),
			array('Sixth Sunday after Pentecost',2,nd($p,"+42 day")),
			array('Seventh Sunday after Pentecost',2,nd($p,"+49 day")),
			array('Eighth Sunday after Pentecost',2,nd($p,"+56 day")),
			array('Ninth Sunday after Pentecost',2,nd($p,"+63 day")),
			array('Tenth Sunday after Pentecost',2,nd($p,"+70 day")),

			array('Eleventh Sunday after Pentecost',2,nd($p,"+77 day")),
			array('Twelfth Sunday after Pentecost',2,nd($p,"+84 day")),
			array('Thirteenth Sunday after Pentecost',2,nd($p,"+91 day")),
			array('Fourteenth Sunday after Pentecost',2,nd($p,"+98 day")),
			array('Fifteenth Sunday after Pentecost',2,nd($p,"+105 day")),
			array('Sixteenth Sunday after Pentecost',2,nd($p,"+112 day")),
			array('Seventeenth Sunday after Pentecost',2,nd($p,"+119 day")),
			array('Eighteenth Sunday after Pentecost',2,nd($p,"+126 day")),
			array('Nineteenth Sunday after Pentecost',2,nd($p,"+133 day")),
			array('Twentieth Sunday after Pentecost',2,nd($p,"+140 day")),

			array('Twenty-first Sunday after Pentecost',2,nd($p,"+147 day")),
			array('Twenty-second Sunday after Pentecost',2,nd($p,"+154 day")) );

		$ch = new DateTime("25 Dec $i");
		$a1 = advent($ch);
		$diff = date_diff($p, $a1, 7);

		$sept = presun(new DateTime("1 Sept $i"));
		$ctk = presun(new DateTime("1 Nov $i"));
		array_push($cal, 
			array('Ember Wednesday',2,nd($sept,"+24 day")),
			array('Ember Friday',2,nd($sept,"+26 day")),
			array('Ember Saturday',2,nd($sept,"+27 day")),
			array('Christ the King',1,$ctk ) );

		if($diff>24) array_push($cal, array('Twenty-third Sunday after Pentecost',2,nd($p,"+161 day")) );
		if($diff>28) array_push($cal, array('Third Resumed Sunday after Epiphany',2,nd($a1,"-35 day")) );
		if($diff>27) array_push($cal, array('Fourth Resumed Sunday after Epiphany',2,nd($a1,"-28 day")) );
		if($diff>26) array_push($cal, array('Fifth Resumed Sunday after Epiphany',2,nd($a1,"-21 day")) );
		if($diff>25) array_push($cal, array('Sixth Resumed Sunday after Epiphany',2,nd($a1,"-14 day")) );

		array_push($cal, 
			array('Twenty-fourth and Last Sunday after Pentecost',2,nd($a1,"-7 day")),
			array('First Sunday in Advent',1,nd($a1,"+0 day")),
			array('Second Sunday in Advent',1,nd($a1,"+7 day")),
			array('Third Sunday in Advent (Gaudete)',1,nd($a1,"+14 day")),
			array('Ember Wednesday',2,nd($a1,"+17 day")),
			array('Ember Friday',2,nd($a1,"+19 day")),
			array('Ember Saturday',2,nd($a1,"+20 day")),
			array('Fourth Sunday in Advent',1,nd($a1,"+21 day")) );


		for($j = 0;$j < count($cal); $j++) {
			$d = $cal[$j][2];
			$s = $cal[$j][0];
			$cl = $cal[$j][1];
			ical($d, $s, $cl);
		}

		echo "<br>\n";
	}

	function ical($dt, $descr, $cl) {
		//echo "$descr: ".date_format($dt,'D, m/d/Y')."\n";
		switch($cl) {
			case 1: $c = 'I cl.'; break;
			case 2: $c = 'II cl.'; break;
			case 3: $c = 'III cl.'; break;
			case 4: $c = 'IV cl.'; break;
			case 0: $c = 'Commem.'; break;
		}

		echo "
BEGIN:VEVENT 
DTSTART;VALUE=DATE:".date_format($dt,'Ymd')."
DTEND;VALUE=DATE:".date_format(nd($dt,'+1 day'),'Ymd')."
SUMMARY:$descr
LOCATION:II cl.
SEQUENCE:0
STATUS:CONFIRMED
TRANSP:TRANSPARENT
END:VEVENT";
	}

	function nd($date, $diff) {
		$d2 = clone $date;
		$d2->modify($diff);
		return $d2;
	}

	function date_diff($d1, $d2, $days=1) {
		$u1 = $d1->format('U');
		$u2 = $d2->format('U');
		$diff = abs($u1 - $u2);
		$spd = 24 * 60 * 60;
		return floor($diff / ($spd * $days));
	}

	function presun($d) {
		$d2 = clone $d;
		$dow = date_format($d, 'N');
		date_modify($d2, "-$dow day");
		return $d2;
	}

	function advent($ch) {
		$adv = presun($ch);
		$dow = (7*3);
		date_modify($adv, "-$dow day");
		return $adv;
	}
	function holy_name($ep) {
		$d = clone $ep;
		$dow = date_format($d, 'N') %7;
		if($dow>4) $dow = 4;
		date_modify($d, "-$dow day");
		return $d;
	}

	function easter($year) {
		$a = $year % 19;
		$b = floor($year/100);
		$c = $year % 100;
		$d = floor($b/4);
		$e = $b % 4;
		$f = floor(($b+8)/25);
		$g = floor(($b-$f+1)/3);
		$h = (19*$a + $b - $d - $g + 15) % 30;
		$i = floor($c/4);
		$k = $c % 4;
		$L = (32 + 2*$e + 2*$i - $h - $k) % 7;
		$m = floor(($a + 11*$h + 22*$L)/451);
		$month = floor(($h + $L - 7*$m + 114)/31);
		$day = (($h + $L - 7*$m + 114) % 31) + 1;
		$easter = new DateTime($year .'-'. $month .'-'. $day);
		return $easter;
	}



?>
END:VCALENDAR
</pre></body>
</html>
