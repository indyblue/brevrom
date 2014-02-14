<?php
require '001_start.php';
/*
!!!!!!BACKUP BEFORE USING!!!!!!!!
set backup | set nomore | ar *.php *\*.php *\*\*.php *\*\*\*.php *\*\*\*\*.php *\*\*\*\*\*.php
ar *.php~ *\*.php~ *\*\*.php~ *\*\*\*.php~
redir >das.txt | argdo g/\vBodyL.*\v\c<(<u|\w*[b-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>
g/E486/-2,d
g/lines,/d
%s/<[^>]*>/<>/ig

s/^.*bookmark[^"]*"\([^"]*\).*$/<%php echo bookmark(\'\1\'); %>/

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

// function to insert caps tags

require '/www/b/content/fn/file_load.php';
require '/www/b/content/fn/first_word.php';
require '/www/b/content/fn/style_first_letter.php';
require '/www/b/content/fn/misc.php';

require '/www/b/content/fn/antiphon.php';
require '/www/b/content/fn/vr.php';
require '/www/b/content/fn/br_resp.php';
require '/www/b/content/fn/prayer.php';
require '/www/b/content/fn/psalm.php';

require '/www/b/content/fn/feast_saints.php';




//Switch to determine if headings are in English or Latin
$_GET['L'] = 1;
//Switch to change page settings for Lulu &c:
//Settings can be:
//     '' (Blank) for 4.25x6.75
//     '7' for 4.25x7
//     'L4' for Lulu 4.25 x 6.875
//     'L5' for Lulu 5.5 x 8.5
//     'L6' for Lulu 6 x 9
$_GET['Style'] = 'L5';

//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;

// require 'temp/050_hymns.php';
// require 'temp/051_my_hymns.php';
// require '6ComS/690_OfficeDead.php';

// echo '   <p:P181/>';
// psalm(94);
// psalm(118);
// canticle('magnificat.php');
// canticle('tedeum.php');
// canticle('almaredemptoris.php');
// canticle('averegina.php');
// canticle('reginacaeli.php');
// canticle('salveregina.php');
// echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
// echo '   </text:section>';

// require 'temp/210_part_proper_seasons.php';
// require 'temp/510_part_proper_saints.php';
// require 'temp/610_part_common_saints.php';

//hymn('vexilla_regis_prodeunt.php');

// brS('0test.php');
// echo '   <p:Head1NI/>';


 require '100_intro.php';
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
