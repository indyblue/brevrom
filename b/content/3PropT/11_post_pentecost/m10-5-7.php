<?php
space();
feria(7,4);

/******************************* LATINA **************************************/
$l1 = ['c|De libro secúndo Machabæórum',
		'lr|1|Cap. 15, 7-11',
		'Machabǽus autem semper 
      confidébat cum omni spe auxílium sibi a Deo affutúrum et hortabátur suos 
      ne formidárent ad advéntum natiónum, sed in mente habérent adjutória sibi 
      facta de cælo et nunc sperárent ab Omnipoténte sibi affutúram victóriam.  
      Et allocútus eos de lege et prophétis, ádmonens étiam certámina quæ 
      fécerant prius, promptióres constítuit eos.  Et, ita ánimis eórum 
      eréctis, simul ostendébat Géntium falláciam et juramentórum 
      prævaricatiónem.  Síngulos autem illórum armávit non clýpei et hastæ 
      munitióne, sed sermónibus óptimis et exhortatiónibus, expósito digno fide 
      sómnio, per quod univérsos lætificávit.'];
$l1r = ['Refúlsit sol in clýpeos áureos, et resplenduérunt montes ab eis: *
      Et fortitúdo Géntium dissipáta est.',
      'Erat enim exércitus magnus valde et 
      fortis: et appropiávit Judas et exércitus ejus in prœ́lio.'];

$l2 = ['lr|2|Cap. 15, 12-16',
		'Erat autem hujuscémodi 
      visus: Oníam, qui fúerat summus sacérdos, 
      virum bonum et benígnum, verecúndum visu, modéstum móribus et elóquio 
      decórum et qui a púero in virtútibus exercitátus sit, manus protendéntem 
      oráre pro omni pópulo Judæórum; post hoc apparuísse et álium virum ætáte 
      et glória mirábilem et magni decóris habitúdine circa illum.  
      Respondéntem vero Oníam dixísse: Hic est fratrum amátor et pópuli Ísraël: 
		hic est, qui multum orat pro pópulo et univérsa sancta civitáte, 
      Jeremías prophéta Dei; extendísse autem Jeremíam dextram et dedísse Judæ 
      gládium áureum dicéntem: Áccipe sanctum gládium, munus a Deo, in quo 
      dejícies adversários pópuli mei Ísraël. Exhortáti ítaque Judæ 
      sermónibus bonis valde, de quibus extólli posset ímpetus et ánimi júvenum 
      confortári, statuérunt dimicáre et conflígere fórtiter, ut virtus de 
      negótiis judicáret, eo quod cívitas sancta et templum periclitaréntur.  
      Erat enim pro uxóribus et fíliis itémque pro frátribus et cognátis minor 
      sollicitúdo; máximus vero et primus pro sanctitáte timor erat templi.  
      Sed et eos qui in civitáte erant non mínima sollicitúdo habébat pro his 
      qui congressúri erant.'];
$l2r = ['In hymnis et confessiónibus benedicébant Dóminum, * Qui 
      magna fecit in Ísraël, et victóriam dedit illis Dóminus omnípotens.',
      'Ornavérunt fáciem templi corónis áureis, et 
      dedicavérunt altáre Dómino.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Latter Book of Maccabees',
		'lr|1|Chap. 15, 7-11',
		'But Maccabeus had ever sure confidence that the Lord 
      would help him: wherefore he exhorted his people not to fear the coming of 
      the heathen against them, but to remember the help which in former times 
      they had received from heaven, and now to expect the victory and aid, 
      which should come unto them from the Almighty.  And so comforting 
      them out of the law and the prophets, and withal putting them in mind of 
      the battles that they won afore, he made them more cheerful.  And 
      when he had stirred up their minds, he gave them their charge, shewing 
      them therewithall the falsehood of the heathen, and the breach of oaths.  
      Thus he armed every one of them, not so much with defence of shields and 
      spears, as with comfortable and good words: and beside that, he told them 
      a dream worthy to be believed, as if it had been so indeed, which did not 
      a little rejoice them.'];
$e1r = ['The sun shone upon the shields of gold, and 
      the mountains glistered therewith: *  
      And the army of the heathens was spread abroad.',
      'For the army was very great and mighty; 
      then Judas and his host drew near and entered into battle.'];

$e2 = ['lr|2|Chap. 15, 12-16',
		'And this was his vision: That Onias, who had been high 
      priest, a virtuous and a good man, reverend in conversation, gentle in 
      condition, well spoken also, and exercised from a child in all points of 
      virtue, holding up his hands prayed for the whole body of the Jews.  
      This done, in like manner there appeared a man with gray hairs, and 
      exceeding glorious, who was of a wonderful and excellent majesty.  
      Then Onias answered, saying, This is a lover of the brethren, who prayeth 
      much for the people, and for the holy city, to wit, Jeremias the prophet 
      of God.  Whereupon Jeremias holding forth his right hand gave to 
      Judas a sword of gold, and in giving it spake thus, Take this holy sword, 
      a gift from God, with the which thou shalt wound the adversaries of my 
      people Israel. Thus being well comforted by the words of Judas, which 
      were very good, and able to stir them up to valour, and to encourage the 
      hearts of the young men, they determined not to pitch camp, but 
      courageously to set upon them, and manfully to try the matter by conflict, 
      because the city and the sanctuary and the temple were in danger.  
      For the care that they took for their wives, and their children, their 
      brethren, and folks, was in least account with them: but the greatest and 
      principal fear was for the holy temple.  Also they that were in the 
      city took not the least care, being troubled for the conflict abroad.'];
$e2r = ['They praised the Lord with Psalms and thanksgiving, * Who had done so 
		great things in Israel, and given them the victory, the Lord Almighty.',
      'They decked the forefront of the temple with 
      crowns of gold, and dedicated the altar unto the Lord.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

rubrics('de_officio_festi_vel_bvm_sat_lectio3.php');

?>
