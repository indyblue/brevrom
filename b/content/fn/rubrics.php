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

function rubp($Ltxt, $Etxt, $par=0, $sm=0) {
	if($_GET['par']) $par=1;
	if($par==0 && strlen($Ltxt)>0 && strlen($Etxt)>0) {
		if($_GET['L']==1) {
			if(strlen($Ltxt . $Etxt)<50 && strlen($Etxt)>0);
			// else $Etxt = '';
		} else { 
			if(strlen($Ltxt . $Etxt)<50 && strlen($Ltxt)>0) $Ltxt='';
			else $Ltxt = '';
		}
	}
	
	if($sm) $sm='Sm';
	else $sm='';

	if(strlen($Ltxt)==0) echo '
<p:BodyE'. $sm .'><sr>'. $Etxt .'</s></p>
';
	elseif(strlen($Etxt)==0) echo '
<p:BodyL'. $sm .'><sr>'. $Ltxt .'</s></p>
';
	else echo '
  <table>
   <tr><td:A1>
   <p:BodyL'. $sm .'><sr>'. $Ltxt .'</s></p>
   </td><td:B1>
   <p:BodyE'. $sm .'><sr>'. $Etxt .'</s></p>
  </td></tr></table>
';
}

