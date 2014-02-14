<?php
	img();
	bookmark('orCompline');
	hour('C','O');
	head('De lectione brevi','The brief lesson',2);
	rubp('<snr>54</s> Lector absolute incipit:',
		'<snr>54</s> The lector always begins:');
	vr('jube_domine.php');
	rubp('','<snr>¶</s> In recitation alone, or when a Priest or Deacon is not present, <snr>Dómine</s> is said in place of <snr>domne</s>.');
	vr('bened_noctem.php');
	lc('1pet5_8.php',0,2);

	head('De examine conscientiæ et confessione','The examination of conscience and confession',2);
	rubp('<snr>55</s> Deinde subditur:',
		'<snr>55</s> Then is said:');
	vrS('Ord/adjutorium+nostrum_in_nomine_domini.php');
	rubp('<snr>Pater noster</s>, quod dicitur totum secreto.',
		'<snr>Pater noster</s>, all of which is said silently.',1);
	rubp('<snr>56</s> Cum Completorium dicitur tamquam ultima precatio in fine diei, <snr>Pater noster</s> hoc loco dicendum omittitur, et ejus loco, in choro et in communi, fit examen conscientiæ per rationabile tempus protractum: quod confenienter servatur etiam in recitatione a solo.',
		'<snr>56</s> When Compline is said as the last prayer at the end of the day, the <snr>Pater noster</s> is not said and in its place, in choir and in common, an examination of conscience of reasonable length is made; which may also be observed in recitation alone.');
	space('Line');
	rubp('<snr>57</s> Post <snr>Pater noster</s>, vel post examen conscientiæ, hebdomadarius facit confessionem, ut infra, et ubi dicitur: <snr>tibi, pater</s>, et <snr>te, pater</s>, dicat: <snr>vobis, fratres</s>, et <snr>vos, fratres</s>.',
		'<snr>57</s> After the <snr>Pater noster</s>, or after the examination of conscience, the Officiant makes his confession, as below, but instead of <snr>tibi, pater</s>, et <snr>te, pater</s>, say <snr>vobis, fratres</s>, et <snr>vos, fratres</s>.');
	space();
	rubp('Chorus respondet:','Choir responds:',1);
	prayer('Ord/misereatur_tui.php',1);
	rubp('Deinde repetit confessionem:',
		'Then repeats the confession:',1);
	prayer('Ord/confiteor_tibi.php');
	rubp('Facta confessione a choro, hebdomadarius dicit:',
		'The confession of the choir being made, the Officiant says:');
	prayer('Ord/misereatur_vestri.php',1);
	prayer('Ord/indulgentiam.php',1);
	space('Line');
	rubp('<snr>58</s> In recitatione a solo, et quando non præest sacerdos, semel tantum ac simul ab omnibus ita fit confessio:',
		'<snr>58</s> In recitation alone, and when there is no Priest, all say simultaneously the confession:');
	prayer('Ord/confiteor.php');
	rubp('Deinde dicitur:','Then is said:',1);
	prayer('Ord/misereatur_nostri.php',1);
	prayer('Ord/indulgentiam.php',1);
	space('Line');
	space();
	rubp('<snr>59</s> Expleta confessione et absolutione, subjungitur:',
		'<snr>59</s> After the confession and absolution is said:');
	vrS('Ord/converte_nos_deus_salutaris_noster.php');
	rubp('<snr>¶</s> Signo crucis pectus sibi signant ad verba <snr>Convérte nos</s>.',
		'<snr>¶</s> The sign of the cross is made with the thumb on the breast, at the words <snr>Convérte nos</s>.');
	rubp('<snr>60</s> Postea incipitur:',
		'<snr>60</s> After which is said:');
	vr('deus_in_adjutorium.php');

	head('De antiphona et psalmis','The antiphon and psalms',2);
	rubp('<snr>61</s> Deinde, sub antiphona convenienti, dicuntur tres psalmi, prouti Officium occurrens requirit.',
		'<snr>61</s> Then, under proper antiphon, are said the three psalms, according to the Office of the day.');
	rubp('','The Psalms and Antiphon, unless proper, are given in the Psalter:
Sunday (<snr>p. '. bkref('psDC') .'</s>) 
Monday (<snr>'. bkref('ps2C') .'</s>) 
Tuesday (<snr>'. bkref('ps3C') .'</s>) 
Wednesday (<snr>'. bkref('ps4C') .'</s>) 
Thursday (<snr>'. bkref('ps5C') .'</s>) 
Friday (<snr>'. bkref('ps6C') .'</s>) 
Saturday (<snr>'. bkref('psSC') .'</s>).');

	head('De hymno','The hymn',2);
	rubp('<snr>62</s> Repetita post ultimum psalmum antiphona, dicitur:',
		'<snr>62</s> After the antiphon is repeated after the last psalm, is said:');
	hymn('te_lucis_ante_terminum.php',0);

	head('De capitulo et responorio brevi','The little chapter and brief response',2);
	rubp('<snr>63</s> Absoluto hymno, dicitur sequens capitulum et responsorium breve:',
		'<snr>63</s> After the hymn, the little chapter and brief response are said:');
	lc('jer14_9.php');
	rubrics('head/PTnot.php');
	brS('Ord/in_manus_tuas_domine_commendo_spiritum_meum.php');
	vrS('Ord/custodi_nos_domine_ut_pupillam_oculi.php');
	rubp('A sabbato ante dominicam I Passionis usque ad feriam IV Hebdomadæ sanctæ, in Officio de Tempore, in responsorio brevi omittitur <snr>Glória Patri</s>, et hujus loco repetitur responsorium.',
		'From the Saturday before the first Sunday of Passiontide until Friday of Holy Week, in the Office of the Season, in the brief response omit <snr>Glória Patri</s>.');
	space();
	rubp('A sabbato ante dominicam in albis usque ad Feriam VI infra octavam Pentecostes inclusive, responsorium breve dicitur hoc modo:',
		'From the Saturday before the first Sunday after Easter Sunday until the Friday in the octave of Pentecost, inclusive, the brief response is said in this form:');
	rubrics('head/PT.php');
	brS('Ord/in_manus_tuas_domine_commendo_spiritum_meum.php',1);
	vrS('Ord/custodi_nos_domine_ut_pupillam_oculi.php',1);

	head('De cantico <snr>Nunc dimíttis</s>',
		'The canticle <snr>Nunc dimíttis</s>',2);
	rubp('<snr>64</s> Postea ad canticum dicitur sequens:',
		'<snr>64</s> Before the canticle say the following:');
	ant('salva_nos.php','*',2);
	canticle('simeon.php');
	ant('salva_nos.php','1',2);

	head('De oratione','The Collect',2);
	rubp('<snr>65</s> Repetita antiphona post <snr>Nunc dimíttis</s>, statim dicitur:',
		'<snr>65</s> The antiphon being repeated after the <snr>Nunc dimíttis</s>, there is said immediately:');
	vr('dv_de.php');
	vr('oremus.php');
	prayer('Ord/compline01.php',1);

	head('De conclusione Completorii','The conclusion of Compline',2);
	rubp('<snr>66</s> Post orationem additur:',
		'<snr>66</s> After the prayer is added:');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');
	rubp('<snr>67</s> Et non dicitur versus <snr>Fidélium ánimæ</s>, sed immediate subjungitur una ex finalibus B. Mariæ Virginis antiphonis, quæ infra pro diversitate temporis assignantur.',
		'<snr>67</s> And the verse <snr>Fidélium ánimæ</s> is not said, but rather the final antiphon of the Blessed Virgin Mary follows immediately, as assigned below for the various seasons.');

	head('Antiphonæ Finales B. Mariæ Virg.',
		'Final Antiphons of the Blessed Virgin Mary',2);

	space();
	reading('almaredemptoris.php');
	space();
	rubp('Usque ad diem 23 decembris:','Until 23 December, inclusive:',1);
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	vr('oremus.php');
	prayer('Ord/compline02.php',1);
	space();
	rubp('A die 24 decembris:','From 24 December:',1);
	vrS('Ord/post_partum_virgo_inviolata_permansisti.php');
	vr('oremus.php');
	prayer('Ord/compline03.php',1);

	space();
	reading('averegina.php');
	vrS('Ord/dignare_me_laudare_te_virgo_sacrata.php');
	vr('oremus.php');
	prayer('Ord/compline04.php',1);

	space();
	reading('reginacaeli.php');
	vrS('Ord/gaude_et_laetare_virgo_maria.php',1);
	vr('oremus.php');
	prayer('Ord/compline05.php',1);

	space();
	reading('salveregina.php');
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	vr('oremus.php');
	prayer('Ord/compline06.php',1);

	space();
	rubp('Absoluta vero antiphona finali cum suis versu et oratione, concluditur:',
		'After the final antiphon with its verse and prayer, the following is said:');
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');
	rubp('Et ita absolvuntur cursus divini Officii.',
		'And thus the divine Office is ended.');

?>

