<?php

/******************************* LATINA **************************************/
$la = [
'Martínus, * adhuc catechúmenus, hac me veste contéxit.',
'Sanctæ Trinitátis * fidem Martínus conféssus est, et baptísmi grátiam percépit.',
'Ego signo crucis, * non clýpeo protéctus aut gálea, hóstium cúneos penetrábo secúrus.',
'Confído in Dómino * quod fília mea, précibus tuis, reddénda sit sanitáti.',
'Tetrádius, * cógnita Dei virtúte, ad baptísmi grátiam pervénit.',
'O ineffábilem virum, * per quem nobis tanta mirácula corúscant!',
'Dóminus Jesus Christus, * non purpurátum aut diadémate reniténtem, se ventúrum esse prædíxit.',
'Sacérdos Dei, Martíne, * apérti sunt tibi cæli et regnum Patris mei.',
'Sacérdos Dei, Martíne, * pastor egrégie, ora pro nobis Deum.'];

$l1 = ['',
	'',
	'Fidélis sermo: si quis episcopátum desíderat, bonum opus desíderat. Opórtet ergo epíscopum irreprehensíbilem esse, uníus uxóris virum, sóbrium, prudéntem, ornátum, pudícum, hospitálem, doctórem, non vinoléntum, non percussórem, sed modéstum; non litigiósum, non cúpidum, sed suæ dómui bene præpósitum, fílios habéntem súbditos cum omni castitáte. Si quis autem dómui suæ præésse nescit, quómodo Ecclésiæ Dei diligéntiam habébit? Non neóphytum, ne in supérbiam elátus, in judícium íncidat diáboli. Opórtet autem illum et testimónium habére bonum ab iis qui foris sunt, ut non in oppróbrium íncidat, et in láqueum diáboli.'];

$l1r = ['Hic est Martínus, eléctus Dei Póntifex, cui Dóminus post Apóstolos tantam grátiam conférre dignátus est, * Ut in virtúte Trinitátis Deíficæ mererétur fíeri trium mortuórum suscitátor magníficus.',
'Sanctæ Trinitátis fidem Martínus conféssus est.'];

$l2 = ['',
	'Opórtet enim epíscopum sine crímine esse, sicut Dei dispensatórem: non supérbum, non iracúndum, non vinoléntum, non percussórem, non turpis lucri cúpidum; sed hospitálem, benígnum, sóbrium, justum, sanctum, continéntem, amplecténtem eum, qui secúndum doctrínam est, fidélem sermónem: ut potens sit et exhortári in doctrína sana, et eos, qui contradícunt, argúere. Sunt enim multi étiam inobediéntes, vaníloqui et seductóres: máxime qui de circumcisióne sunt: quos opórtet redárgui: qui univérsas domos subvértunt, docéntes quæ non opórtet, turpis lucri grátia. Tu autem lóquere quæ decent sanam doctrínam: Senes ut sóbrii sint, pudíci, prudéntes, sani in fide, in dilectióne, in patiéntia: Anus simíliter in hábitu sancto, non criminatríces, non multo vino serviéntes, bene docéntes: ut prudéntiam dóceant adolescéntulas, ut viros suos ament, fílios suos díligant, prudéntes, castas, sóbrias, domus curam habéntes, benígnas, súbditas viris suis, ut non blasphemétur verbum Dei. Júvenes simíliter hortáre ut sóbrii sint. In ómnibus teípsum præbe exémplum bonórum óperum, in doctrína, in integritáte, in gravitáte, verbum sanum irreprehensíbile: ut is, qui ex advérso est, vereátur, nihil habens malum dícere de nobis.'];

$l2r = ['O beátum virum Martínum antístitem, * Qui nec mori tímuit, nec vívere recusávit!',
'Dómine, si adhuc pópulo tuo sum necessárius, non recúso labórem: fiat volúntas tua.'];

$l3 = ['',
	'Martínus, Sabáriæ in Pannónia natus, cum décimum attigísset annum, invítis paréntibus ad ecclésiam confúgiens, in catechumenórum númerum adscríbi vóluit. Aduléscens quíndecim annórum in milítiam proféctus, primum in Constántii, deínde Juliáni exércitu militávit. Decem et octo annos natus, Ambiáni partem clámydis cuídam páuperi donásset, mira exínde Jesu Christi apparitióne recreátus, álacri ánimo baptízmum suscépit; tum, relícta militári vita, ab Hilário Pictaviénsi epíscopo in acolythórum númerum est recéptus. Póstea factus epíscopus Turonénsis, monastérium ædificávit, ubi cum octogínta mónachis sanctíssime aliquámdiu vixit. Qui, cum ad Candacénsem vicum suæ di\oecésis in gravem febrim incidísset, suórum miserátus disciplórum, sic Deum rogábat: Dómine, si adhuc pópulo tuo sum necessárius, non recúso labórem. Mox instánte jam morte, viso humáni géneris hoste, Quid, inquit, astas, cruénta béstia? nihil in me funéste repéries. Ea in voce, unum et octogínta annos natus, multis miráculis gloriósus, ánimam Deo réddidit.'];

/******************************* ENGLISH **************************************/

$e1 = $l1;
$e1r = $l1r;
$e2 = $l2;
$e2r = $l2r;
$e3 = $l3;

/******************************* CODE **************************************/
ant('Matins/sb1_ille_nos_benedicat.php','b');
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

ant('Matins/sb2_cujus.php','b');
lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

ant('Matins/n3b3_ad_societatem.php','b');
lectio($l3, $e3);
rubrics('te_deum.php');
space();

?>
