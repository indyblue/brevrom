	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<pre>
<?php
$arrayOne = array('a', 'b', 'c', 'd');
$arrayTwo = array('w', 'x', 'y', 'z');
$arrayThree = array('m', 'n', 'o', 'p');

foreach ($arrayOne as $key => $valueOne) {
  $valueTwo = $arrayTwo[$key];
  $valueThree = $arrayThree[$key];
  echo "key: $key one: $valueOne two: $valueTwo three: $valueThree<br/>";
}

require 'b/content/fn/head.php';
head('asdf-la','asdf-en', '2Ps');
exit;
$x='2Ps';
echo $x;
if($x<2) echo "x lt 2";
phpinfo();
$t_records = ['a'=>'fred', 'joe', 's'=>'smith'];
?>

<script>
var variableName = <?= json_encode($t_records) ?>;
console.log(variableName);
</script>
<?php

exit;
/*
echo "\n---123456789\n";
	for($i=0;$i<10;$i++) {
		$am = '000000000';
		$am = substr($am,0,$i-1) . '12' . substr($am,$i+1);
		if($i==0) $am = '2' . substr($am,$i);
		$am = substr($am,0,9);
		echo "$i  $am\n";
	}
exit;
*/

$t = ['a'=>'fred', 'joe', 's'=>'smith'];
var_dump($t);
$t2 = var_export($t,1);
echo "$t2\n";
$t2 = json_encode($t,true);
echo "$t2\n";
$t2 = json_decode($t2,true);
var_export($t2);

$t = "{a:'fred', r1:{a:'joe',b:'fred'}, s:'smith'}";
echo "$t\n";

$t2 = preg_replace(['/([^"])([a-z0-9]+)\s*:/i',"|'|"], ['$1"$2":','"'], $t);
echo "$t2\n";
$td = json_decode($t2,1);
//echo $td['r1']['a'], "\n";
var_dump($td);
exit;

$t = '  
asdf|De libro asdf secúndo Machabæórum';
$x = preg_split('/^\s*(asdf)/',$t,2, PREG_SPLIT_DELIM_CAPTURE);
//$x = mb_split('\|',$t);
var_export($x);
exit;
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
