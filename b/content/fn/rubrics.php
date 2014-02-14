<?php

/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function rubrics($file, $link='', $location='I Vespers', $content='Psalms and antiphons') {
	$dir = "/www/b/content/00/Rubrics/";
		require $dir.$file;
}

function rubf($fname, $link='') {
	$pieces = file_load($fname);
	if(count($pieces)<2) 
		trigger_error('Rubrics in '. $fname .' does not have at least two lines.', E_USER_ERROR);
	rubp($pieces[0], $pieces[1]);
}

function rubp($Ltxt, $Etxt) {
	if(strlen($Ltxt)==0) echo '
<p:BodyE><sr>'. $Etxt .'</s></p>
';
	elseif(strlen($Etxt)==0) echo '
<p:BodyL><sr>'. $Ltxt .'</s></p>
';
	else echo '
  <table>
   <tr><td:A1>
   <p:BodyL><sr>'. $Ltxt .'</s></p>
   </td><td:B1>
   <p:BodyE><sr>'. $Etxt .'</s></p>
  </td></tr></table>
';
}

