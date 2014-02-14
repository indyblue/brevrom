function easter(year) {
	var a, b, c, d, e, f, g, h, j, k, m, month, dom;
	a = year % 19;
	b = Math.floor(year / 100);
	c = year % 100;
	d = Math.floor(b / 4);
	e = b % 4;
	f = Math.floor(c / 4);
	g = c % 4;
	h = Math.floor((8 * b + 13) / 25);
	j = (19 * a + b - d - h + 15) % 30;
	m = Math.floor((a + 11 * j) / 319);
	k = (2 * e + 2 * f - g - j + m + 32) % 7;
	month = Math.floor((j - m + k + 90) / 25);
	dom = (j - m + k + 19 + month) % 32;
	var date = new Date(year, month-1, dom);
	return date;
}

function season(date) {
	this.date = date;
	this.year = date.getFullYear();
	this.easter = easter(this.year);
	this.septuagesima = addDays(this.easter, -62);
	this.ashwed = addDays(this.easter, -45);
	this.lent1 = addDays(this.easter, -41);
	this.passion = addDays(this.easter, -14);
	this.ascension = addDays(this.easter, 39);
	this.pentecost = addDays(this.easter, 49);
	this.trinity = addDays(this.easter, 56);

	this.christmas = new Date(this.year, 11, 25);
	this.advent1 = addDays(this.christmas, 
			-(4*7 + this.christmas.getDay()) );
	this.epiphany = new Date(this.year, 0, 6);
	this.holyfamily = addDays(this.epiphany, 7-this.epiphany.getDay());
	this.baptism = new Date(this.year, 0, 13);
	this.purification = new Date(this.year, 1, 2);
	this.weeksAP = Math.floor(dateSub(this.advent1, this.pentecost, 0)/7);
	this.feria = date.getDay()+1;
	if(this.christmas <= date || date < this.epiphany) {
		this.abbr = "c";
		this.name = "Christmas";
	} else if (this.epiphany <= date && date <= this.baptism) {
		this.abbr = "e";
		this.name = "Epiphanytide";
	} else if (this.baptism < date && date <= this.ashwed) {
		this.abbr = "o";
		this.name = "Per Annum";
		this.week = Math.floor(dateSub(date, this.holyfamily, 0)/7);
	} else if (this.septuagesima <= date && date < this.ashwed) {
		this.abbr = "s";
		this.name = "Septuagesima";
		this.week = Math.ceil(dateSub(date, this.septuagesima, 0)/7);
	} else if (this.ashwed <= date && date < this.passion) {
		this.abbr = "l";
		this.name = "Lent";
		this.week = Math.ceil(dateSub(date, this.lent1, 0)/7);
	} else if (this.passion <= date && date < this.easter) {
		this.abbr = "t";
		this.name = "Passiontide";
		this.week = Math.ceil(dateSub(date, this.passion, 0)/7);
	} else if (this.easter <= date && date < this.ascension) {
		this.abbr = "e";
		this.name = "Eastertide";
		this.week = Math.ceil(dateSub(date, this.easter, 0)/7);
	} else if (this.ascension <= date && date < this.pentecost) {
		this.abbr = "a";
		this.name = "Ascensiontide";
	} else if (this.pentecost <= date && date < this.trinity) {
		this.abbr = "p";
		this.name = "Pentecost";
	} else {
		this.abbr = 'o';
		this.name = "Per Annum";
		this.week = Math.ceil(dateSub(date, this.pentecost, 0)/7);
	}

	var ediff = dateSub(this.easter, date, 1);

	var s = this;
	this.str = '<table><tr><td colspan=2>Year of our Lord ' + s.year + '</td></tr>'
			+ '<tr><td width=200>Date: </td><td>' 
				+ s.date.toDateString() + '</td></tr width=200>'
			+ '<tr><td>Season: </td><td>' 
				+ s.name + '</td></tr>'
			+ '<tr><td>Week: </td><td>w' 
				+ s.week + ' - f' + s.feria + '</td></tr>'
			+ '<tr><td>Epiphany: </td><td>' 
				+ s.epiphany.toDateString() + '</td></tr>'
			+ '<tr><td>Septuagesima: </td><td>' 
				+ s.septuagesima.toDateString() + '</td></tr>'
			+ '<tr><td>Ash Wednesday: </td><td>' 
				+ s.ashwed.toDateString() + '</td></tr>'
			+ '<tr><td>Passion Sunday: </td><td>' 
				+ s.passion.toDateString() + '</td></tr>'
			+ '<tr><td>Easter: </td><td>' 
				+ s.easter.toDateString() + '</td></tr>'
			+ '<tr><td>Ascension: </td><td>' 
				+ s.ascension.toDateString() + '</td></tr>'
			+ '<tr><td>Pentecost: </td><td>' 
				+ s.pentecost.toDateString() + '</td></tr>'
			+ '<tr><td>Sundays after Pentecost: </td><td>' 
				+ s.weeksAP + '</td></tr>'
			+ '<tr><td>First Sunday of Advent: </td><td>' 
				+ s.advent1.toDateString() + '</td></tr></table>';

}

function dateSub(date1, date2, round) {
	var msd = 1000 * 60 * 60 * 24; //milliseconds in a day
	if(round>0)
		return Math.ceil((date1 - date2) / msd);
	else if(round < 0)
		return Math.floor((date1 - date2) / msd);
	else
		return (date1.getTime() - date2.getTime()) / msd;
}
function addDays(date, days) {
	var msd = 1000 * 60 * 60 * 24; //milliseconds in a day
	var newms = date.getTime() + days*msd;
	return new Date(newms);
}
