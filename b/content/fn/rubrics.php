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

function rubp($Ltxt, $Etxt, $Par=0) {
	if($Par==0 && strlen($Ltxt)>0 && strlen($Etxt)>0) {
		if($_GET['L']==1) {
			if(strlen($Ltxt . $Etxt)<50 && strlen($Etxt)>0);
			// else $Etxt = '';
		} else { 
			if(strlen($Ltxt . $Etxt)<50 && strlen($Ltxt)>0) $Ltxt='';
			else $Ltxt = '';
		}
	}

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

