<?php
// column ratio is latin width,
// relative to 100
// 92 is optimal for equal font size
// 160 is optimal for 'ds' setting
$_GET['col_ratio'] = 100;
require '001_start.php';

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

echo '   <p:P181/>';

require '01 Morning Prayer.php';
require '02 Morning Meditation.php';

// require 'temp/210_part_proper_seasons.php';
// require 'temp/510_part_proper_saints.php';
// require 'temp/610_part_common_saints.php';


// require '998_indices.php';


require '099_end.php';
?>
