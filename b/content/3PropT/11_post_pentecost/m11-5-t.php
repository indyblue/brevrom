<?php
space();
feria(2,4);

/*
%s/<\_[^>]*>//eig | %s/&nbsp;/ /eig
\v<[^aeiouyæœëAEIOUYÆŒ]{-}(([Aa][Uu]|[qgQG][Uu][aeiouyæœëAEIOUYÆŒ]|[aeiouyæœëAEIOUYÆŒ])[^aeiouyæœëAEIOUYÆŒ]{-}){,2}>|<\k*[áéíóúýǽœ́ǼÁÉÍÓÚÝ]\k*>
\<[a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*\>
 [;:?!]
æǽ œœ́ áéíóúý m̃
ÆǼ ŒŒ́ ÁÉÍÓÚÝ
lions’
*/

$cap1 = '1, 1-2';
$cap2 = '1, 3-5';
$cap3 = '1, 6-8';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Amos Prophéta',
		"lr|1|Cap. $cap1",
		''];
$l1r = [''];

$l2 = ["lr|2|Cap. $cap2",
		''];
$l2r = [''];

$l3 = ["lr|3|Cap. $cap3",
		''];
$l3r = [''];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Amos the Prophet',
		"lr|1|Chap. $cap1",
		''];
$e1r = [''];

$e2 = ["lr|2|Chap. $cap2",
		''];
$e2r = [''];

$e3 = ["lr|3|Chap. $cap3",
		''];
$e3r = [''];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
