<?php
space();
head('Mense Februario','Month of February',2);

/******************************* LATINA **************************************/
$l3 = ['c|Ex libro sancti Hierónymi Presbýteri advérsus Joviniánum',
		'cr|Apologia ad Pammach, pro lib. adversus Jovinianum, in fine',
		'cr|3',
		'Christus virgo, Mater vírginis nostri virgo perpétua, mater et virgo.  Jesus enim clausis ingréssus est óstiis; et in sepúlcro ejus, quod novum et in petra duríssima fúerat excísum, nec ántea quis nec póstea pósitus est.  Hortus conclúsus, fons signátus.  De quo fonte ille flúvius manat, juxta Joël, qui írrigat torréntem vel fúnium vel spinárum: fúnium, peccatórum, quibus ante alligabámur; spinárum, quæ suffócant seméntem patrisfamílias.  Hæc est porta orientális, ut ait Ezéchiel, semper clausa et lúcida, opériens in se vel ex se próferens Sancta sanctórum; per quam Sol justítiæ et Póntifex noster secúndum órdinem Melchísedech ingréditur et egréditur.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Book against Jovinian by St. Jerome the Priest',
		'cr|3',
		'Christ was virgin.  And so the Mother of our virgin Lord was virgin also; yea, the Ever-Virgin, the Virgin Mother.  She was like unto those locked doors whereof we read: The doors were shut: and yet: Jesus came: for those locked doors were to him a means of entrance.  She was like the sepulchre, newly hewn out of the rock, whereof we read: In the garden was a new sepulchre, wherein was never man yet laid.  And this sepulchre is like unto that whereof we read in the Canticles: A garden inclosed, a spring shut up, a fountain sealed.  Of such a well of living waters, doth Joel speak: A fountain shall come forth of the house of the Lord, and shall water the torrent of cords or thorns: the cords of our sins, which once held us fast bound; the thorns which choke the seed of the good man of the house.  Yea, and she is like unto that eastern gate whereof Ezekiel said is ever closed and shining, concealing in itself, revealing from itself the Holy of holies; and by this gate the Sun of justice, our High Priest according to the order of Melchisedech, goeth in and out.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
