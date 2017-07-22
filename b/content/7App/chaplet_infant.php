<?php
	space();
	// hidden('Seven Dolours BVM',2);

	head('Corona Jesu Infanti','The Chaplet of the Infant Jesus',1);
	space();
	rubp('',
	//'Incipiens <snr>Jesu Infans Divine, adoro crucem tuum, et reqlinquo animam meam ad sanctis voluntatis.</s>', 
	'Begin by saying: <snr>Divine Infant Jesus, I adore Thy Cross and I abandon myself to Thy holy Will.');
space();
rubp('','On the Three Our Father beads');
txtp('', '<s:BRed>1.</s> Adorable Trinity, we offer Thee all the adorations of the Heart of the Infant Jesus.', 'Indent');

vrS('et_verbum_caro_factum_est.php');
vr('pater_noster.php');
space();

$paters = [
'<s:BRed>2</s>. Most Holy Trinity, we offer Thee that which Thou didst work in the soul of the Holy Virgin at the moment of the Incarnation.',
'<s:BRed>3</s>. Adorable Trinity, we thank Thee for the graces with which Thou didst fill St Joseph in order to serve Jesus and Mary.'
];
foreach($paters as $pater){
	txtp('', $pater, 'FRed');
	txtp('<s:VR>V.</s> Et Verbum. Pater.', '<s:VR>V.</s> And the Word. Our Father.');
	space();
}

rubp('', 'On the Twelve Ave beads:');
$ave = '<s:BRed>1.</s> The Incarnation of Our Lord. Holy Infant Jesus we adore the moment of Thy Incarnation.';
	txtp('', $ave, 'Indent');
vrS('et_verbum_caro_factum_est.php');
vr('ave_maria.php');
	space();

$aves = [
'<s:BRed>2.</s> His being in the womb of His Holy Mother. Adorable Infant, we adore Thee residing nine months in the womb of Thy Mother.',
'<s:BRed>3</s>. His Nativity. Divine Infant, we adore Thee being born in a poor stable.',
'<s:BRed>4</s>. His living in the stable. Most loving Infant, precious treasure of heaven and of earth, we adore Thee in the manger with the angels and the shepherds of Bethlehem.',
'<s:BRed>5</s>. His Circumcision. God of love, Who art Holiness itself, we adore Thee taking upon Thyself the mark of the covenant in Thy circumcision. Make our hearts like unto Thine.',
'<s:BRed>6</s>. His Epiphany. Holy Infant-Jesus, we prostrate ourselves at Thy sacred feet with the Magi. Be Thou for ever the only King of our hearts.',
'<s:BRed>7</s>. His Presentation in the Temple. Adorable Infant offer us with Thyself to God the Father, that we be entirely consecrated to Charity.',
'<s:BRed>8</s>. His Flight into Egypt. Holy Infant Who, being the mighty God, fled before the face of king Herod, make us flee, more than from death, the shadow of sin.',
'<s:BRed>9</s>. His return from Egypt. Most powerful Infant, uproot the worldly spirit from within us, and cause the desire for heaven to grow within us.',
'<s:BRed>10</s>. His Hidden Life at Nazareth. Most loving Infant, cause us to love the hidden and humble life and may we taste of the happiness of knowing that we are loved by the Holy Family.',
'<s:BRed>11</s>. His voyages with His Holy Mother and St Joseph. Divine Infant-Jesus, sanctify all our steps. Since Thou art our only treasure, may we often go in search of Thee in our churches to pray to Thee and to adore Thee; O Thou who art our Saviour and our God.',
'<s:BRed>12</s>. His sojourn in the Temple in the midst of the doctors. Admirable Infant Jesus in Whom art all the treasures of wisdom and science, come and do Thou establish Thy dwelling in our hearts for ever. Be Thou our only master, teach us Thy Will and give us the grace to accomplish it faithfully and with joy.'];
foreach($aves as $ave) {
	txtp('', $ave, 'Indent');
	txtp('<s:VR>V.</s> Et Verbum. Ave María.', '<s:VR>V.</s> And the Word. Hail Mary.');
	space();
}

txtp('', '<sr>Conclusion:</s> Holy Infant Jesus bless and protect us. <sr>(three times)</s>');
space();
txtp('In nómine Patris, et Fílii, et Spritus Sancti. Amen', 'In the name of the Father and of the Son and of the Holy Ghost. Amen.', 'Indent');
?>

