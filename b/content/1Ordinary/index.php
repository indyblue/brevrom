<?php
	space('PgH');
	img('00_ordinary.png',100);
	space();
	bookmark('OrOrdinary');
	head('Ordinarium Divini Officii','Ordinary of the Divine Office',0);
	space();
	space('PgB');
	rubp('<snr>1</s> Officium divinum, nisi aliter suo loco indicetur, per totum annum et ad omnes Horas, absolvitur juxta formam, quæ in rubricis hujus Ordinarii exhibetur.', '<snr>1</s> The divine Office is carried out, through the whole year and at all Hours, according to the form, which is presented in the rubrics of this Ordinary, unless presented otherwise in its proper place.');
	space();

$matins = $_GET['matins'];
if($matins) require '01_matins.php';

require '02_lauds.php';
require '03_prime.php';
require '04_terce.php';
require '05_sext.php';
require '06_none.php';
require '07_vespers.php';
require '08_compline.php';

	space();
	img('sanctus.png',100);
	head('<sr>Pars Specialis</s>','<sr>Special Part</s>',1);
	space();
bookmark('orSeason');
require '11_advent.php';
require '12_nativity.php';
require '13_epiphany.php';
require '14_septuagesima.php';
require '15_lent.php';
require '16_passion.php';
require '17_easter.php';
require '18_ascension.php';
require '19_per_annum.php';

?>
