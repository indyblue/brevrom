<?php

$file = './test.php';
if(file_exists($file)) {
	echo "$file<br/>";
	$m = filemtime($file);
	$n = time();
	echo " - modified ".($n-$m)." s ago<br/>";
}

exit;
$test = [
	'fred' => 1,
	'joe' => 2,
	];
echo "<pre>";
echo "{$test['fred']}";
var_dump($test);
echo "</pre>";

const FRED = 'joe';
function FRED() {
	echo 2;
}

FRED();

exit;
/*******************************************************************/




	function psch($y) {
		//$y = $this->year;
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
		//tempora::weekadd($i, $d);
		return $d;
	}

	function xgetdate($month, $day, $y) {
		$d = new DateTime();
		$d->setDate($y, $month, $day);
		$d->setTime(0,0,0);
		return $d;
	}

	function nextsun($month, $day, $y) {
		$d = xgetdate($month,$day, $y);
		$dow = $d->format('N');
		$d->add(new DateInterval('P'.(7-$dow).'D'));
		return $d;
	}
	function weekadd($i, $d) {
		if($i>1)
			$d->add(new DateInterval('P'.($i-1).'W'));
		else if($i<0) {
			$i = abs($i);
			$d->sub(new DateInterval('P'.$i.'W'));
		}
	}

	function adv($y) {
		$d = nextsun(12,25, $y);
		weekadd(-4, $d);
		return $d;
	}

for($y=1900;$y<2300;$y++) {
	$d = adv($y);
	echo $d->format('Y  m/d')."<br>";
}

?>
