<?php
// column ratio is latin width,
// relative to 100
// 92 is optimal for equal font size
// 160 is optimal for 'ds' setting
$_GET['col_ratio'] = 92;
require '001_start.php';
/*
!!!!!!BACKUP BEFORE USING!!!!!!!!
set backup | set nomore | ar *.php *\*.php *\*\*.php *\*\*\*.php *\*\*\*\*.php *\*\*\*\*\*.php
ar *.php~ *\*.php~ *\*\*.php~ *\*\*\*.php~
redir >das.txt | argdo g/\vBodyL.*\v\c<(<u|\w*[b-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>
g/E486/-2,d
g/lines,/d
%s/<[^>]*>/<>/ig

s/^.*bookmark[^"]*"\([^"]*\).*$/<%php bookmark(\'\1\'); %>/

Check for whitespace and bad accents:
(Some whitespace is necessary in Prayers!!!!)
\v [ ;:!,\n]|[áéíóúý]\k*[áéíóúý]|\v\c<(u|\w*[b-fh-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>

\v [ ;:!,\n]|'

[ÁÉÍÓÚÝ]

Per Dóminum. - Through our Lord.
Per eúmdem Dóminum. - Through the same.
Per Dóminum...in unitáte ejúsdem Spíritus Sancti. - 
	Through our Lord...in the unity of the same Holy Spirit.
Qui vivis. - Who livest.
Qui tecum vivit. - Who liveth.

 */

require '/www/b/content/fn/0list.php';
require '/www/b/content/fn/psalm-al.php';




//Switch to determine if headings are in English or Latin
$_GET['L'] = 1;

//Switch to change page settings for Lulu &c:
//Settings can be:
//     '' (Blank) for 4.25x6.75
//     '7' for 4.25x7
//     'L4' for Lulu 4.25 x 6.875
//     'L5' for Lulu 5.5 x 8.5
//     'L6' for Lulu 6 x 9
$_GET['Style'] = '7';

//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;


// echo '   <p:P181/>';
// canticle('tedeum.php');
// psalm(118);

// echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
// echo '   </text:section>';

//hymn('vexilla_regis_prodeunt.php');

echo '   <p:P181/>';
// require 'Z:\www\b\content\5PropS\06_June.php';
require 'Z:\www\b\content\6ComS\610_Apostles.php';


// require '100_intro.php';
// require '110_toc.php';
// require '150_calendar.php';
// require '3PropT/index.php';
// $_GET['O'] = 1;
// require '1Ordinary/index.php';
// require '2Psalter/index.php';
// $_GET['O'] = 0;
// 
// require '5PropS/index.php';
// require '6ComS/index.php';
// 
// require '7App/index.php';
// require '998_indices.php';


require '999_end.php';
?>
