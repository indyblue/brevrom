<?php 

space();
img('Saints/0908_nativity_of_bvm.png',100);
headSt(908,2,'in Nativitate B. Mariæ Virg.','Nativity of the B.V.M.');

hour('L');
ant('prSanct/0908L.php','20000');
rubrics('ps/SuL1.php');
ant('prSanct/0908L.php','02222');
lc('ecclus24_14.php','csBVMLlc','h','o_gloriosa_virginum.php');
vrS('prSanct/nativitas_est_hodie_sanctae_mariae_virginis.php');
ant('prSanct/0908b.php','B');
rubrics('head/Prayer.php');
prayer('prSanct/0908.php');
feast_saint(908,-1,'S. Hadriani','St. Adrian','M',array('csMartyr1.php','Adriáni','Adrian'));
space();

csref('csBVM',2,2);
PrV('qui_natus_es_de_maria_virgine.php');
space();

hour('V');
rubrics('ps/antLauds.php');
rubrics('ps/ComBVM.php');
lc('ecclus24_14.php','csBVMVlc','h','ave_maris_stella.php');
vrS('prSanct/nativitas_est_hodie_sanctae_mariae_virginis.php');
ant('prSanct/0908m2.php','M');
space('Line');
rubrics('prSanct/if1Vespers.php');
ant('prSanct/0908m1.php','M');
space('Line');
rubrics('prSanct/ComplineSun.php');

?>
