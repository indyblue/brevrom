var ctlEl = document.querySelector('#controls');
var h = preact.h;
preact.render(h(preact.c.menu, null,
	h(preact.c.fontSize, {lsName:'brev-font-size'}),
	h(preact.c.themeToggle, {lsName:'brev-night-theme'}),
	h(parTxt),
	h(preact.c.menuNav, { sel: '.A1 .Head1, .A1 .Head2 ', asel: '.A1 .Head2Ps, .A1 .Head2Cant, .A1 .Head4' })
), ctlEl);

function parTxt(p) {
	return h('div', null,
		h('button', { type: 'par', onClick: setcoltype }, 'Parallel'),
		h('button', { type: 'la', onClick: setcoltype }, 'Latin'),
		h('button', { type: 'en', onClick: setcoltype }, 'English')
	);
}

function setcoltype(type) {
	if (type instanceof Event) {
		type = type.target.attributes.type.value;
	}
	var body = document.body
	if (type == "en") body.classList.add("en");
	else body.classList.remove("en");
	if (type == "par") body.classList.remove("onecol");
	else body.classList.add("onecol");
	localStorage.setItem("col", type);
}

var coltype = localStorage.getItem("col");
setcoltype(coltype);


var timeout;
document.addEventListener('selectionchange', function(e) {
	if (timeout) clearTimeout(timeout);
	timeout = setTimeout(showHyph.bind(null, e), 250);
});
function showHyph(ev) {
	var sel = document.getSelection();
	var el = sel.anchorNode ? sel.anchorNode.parentElement : null;
	var txt = sel.toString().trim().replace(/(\xad)/g, '-');
	var fel = document.querySelector('#float-hyph');
	if ((!el || !txt)) {
		if (fel) fel.style.display = 'none';
		return;
	}

	if (!fel) {
		fel = document.createElement('div');
		fel.id = 'float-hyph';
		Object.assign(fel.style, {
			display: 'block',
			position: 'fixed',
			backgroundColor: 'gray',
			bottom: '0px',
			color: 'yellow',
			maxHeight: '3em'
		});
		document.body.append(fel);
	}
	fel.textContent = txt;
	fel.style.display = 'block';
}

addEvent(document.body, 'click', 'a', function(e) {
	e.stopImmediatePropagation();
});
addEvent(document.body, 'click', 'tr', function(e) {
	var sel = document.getSelection().toString();
	if (typeof sel == "string" && sel.length > 0) return;
	var hyphEl = document.querySelector('#float-hyph');
	if (hyphEl && hyphEl.style.display !== 'none') return;
	this.classList.toggle('visible');
	var visibles = document.querySelectorAll('tr.visible');
	for (var i = 0; i < visibles.length; i++) {
		var vel = visibles[i];
		if (vel !== this) vel.classList.remove('visible');
	}
})
