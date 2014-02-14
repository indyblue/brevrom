<?php

	img();
	space('RubricH');
	headSt(1102,1,'in Commem. Omnium Fidelium Defunctorum','the Commem. of all the Faithful Departed');
	
	rubp('<snr>¶</s> Commemoratio omnium Fidelium defunctorum excludit tum festa occurrentia, tum festa transferenda cujusvis ritus. Si tamen inciderit in dominicam, iisdem cum juribus, in seq. feria secunda celebratur, translato, vel penitus omisso, juxta rubricas, quolibet alio festa.','<snr>¶</s> This feast excludes all occuring feasts and also all transferred feasts of any rite. If it should fall on a Sunday, it is celebrated with the same priveleges on the following Monday; any other feast being transferred or omitted, according to the rubrics.');
	rubp('Omnia dicuntur ut in communi Officio Defunctorum, circa finem Breviarii <snr>p. '. bkref('offDef') .'</s>, præter ea quæ hic habentur propria.','All as in the Office of the Dead, <snr>p. '. bkref('offDef') .'</s>, except those parts given as proper.');
	rubrics('head/Prayer.php');
	prayer('offDef/offDef.php');

	hour('P');
	rubp('Absolute incipitur a psalmis sequentibus.','The hour begins immediately with the first Psalm (without Antiphon):');
	psalm('087.php');
	vrS('requiem_aeternam.php',6);
	psalm('027.php');
	vrS('requiem_aeternam.php',6);
	psalm('031.php');
	vrS('requiem_aeternam.php',6);
	space();
	rubp('Expletis psalmis, dicitur flexis genibus','After the psalms, the following are said kneeling:');
	vr('pater_silent_vr.php');
	vrS('a_porta_inferi_sing.php');
	vrS('requiescant_in_pace_sing.php');
	vrS('domine_exaudi_orationem_meam.php');
	vrS('dominus_vobiscum_non.php');
	rubrics('oremus.php');
	prayer('offDef/prime1.php');

	rubp('Deinde in choro legitur Martyrologium, ut ibi suo loco notatur.','Next, in choir, the Martyrology is read, as noted its own place.');
	rubp('Deinde, etiam extra chorum, licet omissa fuerit lectio Martyrologii, subjungitur:','Next, even out of choir, although the Martyrology may have been omitted, is said:');
	vrS('in_memoria_aeterna_erunt_justi.php');
	rubrics('oremus.php');
	prayer('offDef/prime2.php');
	vrS('requiem_aeternam.php');
	vrS('requiescant_in_pace.php');
	space();

	hour('T');
	rubp('Absolute incipitur a psalmis sequentibus.','The hour begins immediately with the first Psalm (without Antiphon):');
	psalm('037-1.php');
	vrS('requiem_aeternam.php',6);
	psalm('037-2.php');
	vrS('requiem_aeternam.php',6);
	psalm('055.php');
	vrS('requiem_aeternam.php',6);
	rubrics('offDef/1102_preces_concl.php');
	space();

	hour('S');
	rubp('Absolute incipitur a psalmis sequentibus.','The hour begins immediately with the first Psalm (without Antiphon):');
	psalm('069.php');
	vrS('requiem_aeternam.php',6);
	psalm('084.php');
	vrS('requiem_aeternam.php',6);
	psalm('085.php');
	vrS('requiem_aeternam.php',6);
	rubrics('offDef/1102_preces_concl.php');
	space();

	hour('N');
	rubp('Absolute incipitur a psalmis sequentibus.','The hour begins immediately with the first Psalm (without Antiphon):');
	psalm('101-1.php');
	vrS('requiem_aeternam.php',6);
	psalm('101-2.php');
	vrS('requiem_aeternam.php',6);
	psalm('101-3.php');
	vrS('requiem_aeternam.php',6);
	rubrics('offDef/1102_preces_concl.php');
	space();

	hour('C');
	rubp('Non dicitur <snr>Jube, domne</s>, nec lectio brevis, neque versus <snr>Adjutórium nostrum</s>, neque oratio dominica; sed, facta confessione et absolutione, statim sine antiphona incipitur a psalmis sequentibus.','<snr>Jube, domne</s> is not said, nor the brief lesson, nor the verse <snr>Adjutórium nostrum</s>, nor the Lord’s prayer: but, after the confession and absolution, the following psalms are begun immediately without antiphon.');
	rubp('Ubi vero, juxta rubricas, Completorium dicitur tamquam ultima diei precatio, in qua fit examen conscientiæ, tunc, si recitatur in choro vel in communi, moderator chori vel communitatis, signo dato, indicat esse examen conscientiæ; quo absoluto, dicitur <snr>Confíteor, Misereátur, Indulgéntiam.</s>','When, according to the rubrics, Compline is said as the final prayer of the day and the examination of conscience is made, then, if said in choir or community, the leader of the choir or community gives a sign to indicate the beginning of the examination of conscience; when finished, the <snr>Confíteor, Misereátur, Indulgéntiam</s> are said.');
	psalm('122.php');
	vrS('requiem_aeternam.php',6);
	psalm('141.php');
	vrS('requiem_aeternam.php',6);
	psalm('142.php');
	vrS('requiem_aeternam.php',6);
	rubp('Expletis psalmis, statim subjungitur.','After the psalms, the following is said immediately.');
	canticle('simeon.php');
	vrS('requiem_aeternam.php',6);

	rubrics('head/Preces.php');
	rubp('Deinde dicitur flexis genibus','Then the following are said kneeling:');
	vr('pater_silent_vr.php');
	vrS('a_porta_inferi_sing.php');
	vrS('requiescant_in_pace_sing.php');
	vrS('domine_exaudi_orationem_meam.php');
	vrS('dominus_vobiscum_non.php');
	rubrics('oremus.php');
	prayer('offDef/compline.php');
	vrS('requiem_aeternam.php');
	vrS('requiescant_in_pace.php');
	rubp('Et ita absolvitur Completorium, nequi aliud adjungitur.','The hour of Compline is thus concluded, and nothing else is added.');
	space();
?>
