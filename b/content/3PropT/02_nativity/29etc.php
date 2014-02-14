<?php
	space();
	rubp('<snr>¶</s> Diebus 29, 30, et 31 decembris, Officium ordinatur hoc modo:', '<snr>¶</s> On December 29, 30 and 31, the Office is arranged in this way:');
	rubp('Ad Laudes, omnia ut in festo Nativitatis Domini.', 'At Lauds: all as in the feast of the Nativity of the Lord.');
	rubp('Ad Horas minores dicuntur antiphonæ et psalmi de die currenti, ut in Psalterio; reliqua ut in festo Nativitatis.', 'The Little Hours are said with the antiphons and pslams of the current feria, as in the Psalter; the rest as in the fest of the Nativity.');
	rubp('Ad Vesperas, excepto die 31 decembris, antiphonæ et psalmi sumuntur e II Vesperis diei Nativitatis; a capitulo autem fit de octava, ut in festo, nisi faciendum sit de sequenti dominica aut de sequenti festo I classis.', 'At Vespers, except December 31, antiphons and psalms are taken from II Vespers of the Nativity; from the little chapter on, as in the feast, unless they are to be said of the following Sunday or of a following feast of the first class.');
	rubrics('prSanct/ComplineSun.php');
	space();

	hidden('Christmas',1);
	hidden('Dec. 29',2);
	head_temp(2,'de V Die Infra Oct. Nativitatis', 'Fifth day within the octave of Christmas',1229);
	feast_saint(1229,-2,'S. Thomæ','St. Thomas','EM');
	space();

	hidden('Christmas',1);
	hidden('Dec. 30',2);
	head_temp(2,'de VI Die Infra Oct. Nativitatis', 'Sixth day within the octave of Christmas',1230);
	space();

	hidden('Christmas',1);
	hidden('Dec. 31',2);
	head_temp(2,'de VII Die Infra Oct. Nativitatis', 'Seventh day within the octave of Christmas',1230);
	feast_saint(1231,-2,'S. Silvestri','St. Sylvester I','PC',
		array('csPope1.php','Silvéstrum','Sylvester'));
	space();
	rubp('Vesperæ dicuntur de sequenti, sine commemoratione.', 'Vespers is said of the following, without commmemoration.');
	rubp('<snr>¶</s> Ubi tamen S. Silvester gradu I classis recolatur, ad II Vesperas antiphonæ et psalmi dicuntur de Nativitate Domini; a capitulo fit de festo occurrenti, et fit commemoratio sequentis diei octavi.', '<snr>¶</s> However, where St. Sylvester is honored with a I class feast, at II Vespers the antiphons and psalms are said from the feast of the Nativity of the Lord; from the little chapter on is said from the occurring feast, and a commemoration is made of the following octave day.');

?>
