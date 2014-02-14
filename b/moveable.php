<html><head></head>
<body><code>
<?php
	for($i=1962; $i<2100; $i++) {
		$ep = new DateTime('6 Jan '. $i);
		$e = easter($i);
		$tst = $e - $ep;
		echo $tst;
		date_modify($sept = $e,'-63 days');

		echo date_format($ep,'Ymd');
		//new DateTime(' '. $year .'-'. $month .'-'. $day);
		//echo date_format($e,'Ymd');
		echo '<br>';
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
</code></body>
</html>
