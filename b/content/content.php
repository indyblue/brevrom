<?php
// column ratio is latin width,
// relative to 100
// 92 is optimal for equal font size
// 160 is optimal for 'ds' setting
$_GET['col_ratio'] = 92;
require '001_start.php';
/*
!!!!!!BACKUP BEFORE USING!!!!!!!!
vim/ /*.php *\*.php *\*\*.php *\*\*\*.php *\*\*\*\*.php *\*\*\*\*\*.php
set backup | set nomore | ar *.php *\*.php *\*\*.php *\*\*\*.php *\*\*\*\*.php *\*\*\*\*\*.php
ar *.php~ *\*.php~ *\*\*.php~ *\*\*\*.php~
redir >das.txt | argdo g/\%3l/p
redir OFF

g/E486/-2,d
g/lines,/d
%s/<[^>]*>/<>/ig

Per Dóminum. - Through our Lord.
Per eúmdem Dóminum. - Through the same.
Per Dóminum...in unitáte ejúsdem Spíritus Sancti. - 
	Through our Lord...in the unity of the same Holy Spirit.
Qui vivis. - Who livest.
Qui tecum vivit. - Who liveth.

echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
echo '   </text:section>';

 */

require 'fn/0list.php';




//Switch to determine if headings are in English or Latin
$_GET['L'] = 0;

//
// Switch to change page settings for Lulu &c:
// Settings can be:
//     '6' (Blank) for 4.25x6.75
//     '7' for 4.25x7
//     'L5' for Lulu 5.5 x 8.5
//     'L8' for Lulu 8.5 x 11
//
$_GET['Style'] = '7';

// 
// these are only used if 'Style' is not a valid preset
//
$_GET['PgW'] = 4.25;
$_GET['PgH'] = 7;
$_GET['PgMar'] = .25;
$_GET['PgGMar'] = .25;
$_GET['BodyFont'] = 9;

//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;


// space('PgB');
// require '1Ordinary\index.php';
// new is 313
// old is 295
// require '2Psalter/index.php';
// require '2Psalter/index_OLD.php';

$_GET['comm'] = 1;

// space('PgB');
// ant('csApV.php','22222');

// require 'z_hymns.php';
// require 'z_psalms.php';

require '100_intro.php';
// require '110_toc.php';
// require '150_calendar.php';
// require '3PropT/index.php';
// require '1Ordinary/index.php';
// require '2Psalter/index.php';
// 
// require '5PropS/index.php';
// require '6ComS/index.php';
// require '7App/index.php';


// require '998_indices.php';


require '999_end.php';
?>
