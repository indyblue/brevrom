<?php
// get and store base path information:
$_GET['root'] = dirname(__FILE__);

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
redir >das.txt | argdo g/rubrics(/p
redir END

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




//
// Switch to change page settings for Lulu &c:
// Settings can be:
//     '6' (Blank) for 4.25x6.75
//     '7' for 4.25x7
//     'L5' for Lulu 5.5 x 8.5
//     'L8' for Lulu 8.5 x 11
//     'A4' for 1/4 of A4
//
$_GET['Style'] = 'L5';

// 
// these are only used if 'Style' is not a valid preset
//
$_GET['PgW'] = 4.25;
$_GET['PgH'] = 7;
$_GET['PgMar'] = .25;
$_GET['PgGMar'] = .25;
$_GET['BodyFont'] = 9;

// Switch to determine size of headings:
//  0 = smaller headings (used in propers)
//  1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;

// psalm commentary
//  0 = off
//  1 = footnotes
//  2 = inter-tabular text (doesn't actually work yet)
$_GET['comm'] = 0;

// Switch to determine if headings are in English or Latin
$_GET['L'] = 0;
// Forces parallel headings
$_GET['par'] = 1;

// Short/Long form
//  0 = short form
//  1 = long form
$_GET['long'] = 1;
$_GET['weekly'] = 0;
// matins option 
// * currently only
// office of the dead
$_GET['matins'] = 1;


// space('PgB');
// require 'z_hymns.php';
// require 'z_psalms.php';

/*
require '0Intro/101_aperi.php';
require '0Intro/105_sacrosancte.php';
require '0Intro/110_collect.php';
space('PgB');
$_GET['old'] = 1;
//require '6ComS/677_BVMp.php';
/*
$_GET['matins'] = 0;
require '6ComS/690_OfficeDead.php';
require '7App/index.php';
require '7App/7_dolours.php';
// */

// Monastic Stuff
/*
$_GET['Style'] = 'custom';
$_GET['PgW'] = 8.5;
$_GET['PgH'] = 11;
$_GET['PgMar'] = .75;
$_GET['PgGMar'] = .75;
$_GET['BodyFont'] = 12;
space('Pg');
//require '2MonPsalter/1sunday.php';
require '2MonPsalter/6friday_sext.php';
// */

/*
$_GET['Style'] = 'A4';
space('PgH');
require '7App/7_dolours.php';
// require '7App/zzz_st_joseph.php';
// */

/*
bklist('test');
$_GET['long'] = 1;
space('PgB');
// require '5PropS/11b_November.php';
// require '5PropS/12_December.php';
// require '5PropS/01_January.php';
// require '5PropS/02_February.php';
// require '5PropS/03_March.php';
// require '5PropS/04_April.php';
// require '5PropS/05_May.php';
// require '5PropS/06_June.php';
 require '5PropS/07_July.php';
// require '5PropS/08_August.php';
// require '5PropS/09_September.php';
// require '5PropS/10_October.php';
// require '5PropS/11_November.php';
echo bklist(0);
// require '3PropT\01_advent\index.php';
// */

$_GET['old'] = 0;
$_GET['matins'] = 0;
$_GET['long'] = 1;

//*
require '100_intro.php';
require '110_toc.php';
require '150_calendar.php';
require '3PropT/index.php';
require '1Ordinary/index.php';

$_GET['long'] = 1;
require '2Psalter/index.php';
$_GET['long'] = 0;

require '5PropS/index.php';
// $_GET['matins'] = 1;
require '6ComS/index.php';
require '6ComS/677_BVMp.php';
require '6ComS/690_OfficeDead.php';
// require '7App/index.php';
// */

// require '998_indices.php';


require '999_end.php';
?>
