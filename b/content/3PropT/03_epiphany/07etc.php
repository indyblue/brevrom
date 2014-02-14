<?php
	space();
	hidden('Epiphany',1);
	hidden('Jan. 7',2);
	head_temp(4,'die 7 januarii', 'January 7');
	ant('PrTemp/epiphany/07b.php','B');
	rubp('Oratio, <snr>Deus, qui hodiérna</s>, ut infra.', 'Prayer, <snr>O God, who</s>, as below.');
	ant('PrTemp/epiphany/07m.php','M');
	
	space();
	hidden('Epiphany',1);
	hidden('Jan. 8',2);
	head_temp(4,'die 8 januarii', 'January 8');
	ant('PrTemp/epiphany/08b.php','B');
	rubrics('head/Prayer.php');
	head('Ante dominicam I post Epiphaniam', 'Before the first Sunday after Epiphany',4);
	prayer('PrTemp/epiphany/06.php');
	head('Post dominicam I post Epiphaniam', 'After the first Sunday after Epiphany',4);
	prayer('PrTemp/epiphany/e01.php');
	ant('PrTemp/epiphany/08m.php','M');

	space();
	hidden('Epiphany',1);
	hidden('Jan. 9',2);
	head_temp(4,'die 9 januarii', 'January 9');
	ant('PrTemp/epiphany/09b.php','B');
	rubp('Oratio, <snr>Deus, qui hodiérna</s> vel <snr>Vota, quǽsumus</s> ut supra.', 'Prayer, <snr>O God, who</s> or <snr>We beseech thee</s>, as above.');
	ant('PrTemp/epiphany/09m.php','M');

	space();
	hidden('Epiphany',1);
	hidden('Jan. 10',2);
	head_temp(4,'die 10 januarii', 'January 10');
	ant('PrTemp/epiphany/10b.php','B');
	rubp('Oratio, <snr>Deus, qui hodiérna</s> vel <snr>Vota, quǽsumus</s> ut supra.', 'Prayer, <snr>O God, who</s> or <snr>We beseech thee</s>, as above.');
	ant('PrTemp/epiphany/10m.php','M');

	space();
	hidden('Epiphany',1);
	hidden('Jan. 11',2);
	head_temp(4,'die 11 januarii', 'January 11');
	ant('PrTemp/epiphany/11b.php','B');
	rubp('Oratio, <snr>Deus, qui hodiérna</s> vel <snr>Vota, quǽsumus</s> ut supra.', 'Prayer, <snr>O God, who</s> or <snr>We beseech thee</s>, as above.');
	feast_saint(0111,-1,'S. Hygini','St. Hyginus','PM',
		array('csPope1.php','Hygínum','Hyginus'));
	ant('PrTemp/epiphany/11m.php','M');

	space();
	hidden('Epiphany',1);
	hidden('Jan. 12',2);
	head_temp(4,'die 12 januarii', 'January 12');
	ant('PrTemp/epiphany/12b.php','B');
	rubp('Oratio, <snr>Deus, qui hodiérna</s> vel <snr>Vota, quǽsumus</s> ut supra.', 'Prayer, <snr>O God, who</s> or <snr>We beseech thee</s>, as above.');
	ant('PrTemp/epiphany/06m2.php','M');

	space();
	hidden('Epiphany',1);
	hidden('Jan. 13',2);
	head_temp(2,'in Commemoratione Baptismatis D.N.J.C.', 'the Commemoration of the Baptism of our Lord Jesus Christ', 113);
	rubp('<snr>¶</s> Si Commemoratio Baptismatis Domini in dominica occurrit, fit de festo S. Familiæ sine ulla commemoratione.', '<snr>¶</s> If the Commmemoration of the Baptism of the Lord occurs on Sunday, all as on the feast of the Holy Family without any commemoration.');
	rubp('Ad Laudes, omnia dicuntur ut in festo Epiphaniæ, præter orationem sequentem:', 'At Lauds, all is said as on the feast of the Epiphany, except the following prayer:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/epiphany/13.php');
	rubp('Ad Horas, ant. et pss. de feria, reliqua ut in festo Epiphaniæ, cum oratione propria.', 'At the Little Hours, ant. and psalms of the feria, the rest as on the feast of the Epiphany, with the proper prayer.');
	rubp('Ad Vesperas omnia ut ad II Vesperas Epiphaniæ, pariter cum oratione propria.', 'At Vespers, all as in II Vespers of the Epiphany, together with the proper prayer.');
	rubp('Si tamen hoc festum in sabbato occurrerit, ad Vesperas non fit commemoratio sequentis dominicæ', 'If this feast occurs on Saturday, at Vespers no commmemoration is made of the following Sunday.');
	rubrics('prSanct/ComplineSun.php');


	space();
	hidden('Epiphany',1);
	hidden('First Sunday after Epiphany',2);
	head('Dominica I post Epiphaniam', 'First Sunday after Epiphany',1);
	rubp('Officium fit de Sancta Familia, sine commemoratione dominicæ, ut supra, <snr>p. '. bkref('HolyFamily') .'</s>.', 'The Office of the Holy Family is said, without commmemoration of the Sunday, as above, <snr>p. '. bkref('HolyFamily') .'</s>.');
	rubp('Oratio hujus dominicæ dicitur in Officio feriæ infra hebdomadam occurrenti.', 'The prayer of this Sunday is said in the ferial Office during the following week.');
	rubrics('head/Prayer.php');
	prayer('PrTemp/epiphany/e01.php');
	rubp('Post Completorium diei 13 januarii explicit tempus Epiphaniæ, et incipit tempus per annum ante Septuagesimam.', 'After Compline of January 13 the season of Epiphany is ended, and the season throughout the year before Septuageima begins.');


?>
