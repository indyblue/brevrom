$("#nd").click(function() {
	$("body").toggleClass("night");
	localStorage.setItem("night", $("body").is(".night"));
});
$("#fadd, #fsub, #freset").click(function() {
	var type = $(this).attr("id");
	if (type == "freset") {
		$("body").css("font-size", "");
		localStorage.setItem("font", "");
		$("#fsize").html("");
		return;
	}

	var size = $("body").css("font-size");
	var iSize = Math.round(size.replace(/[^0-9.]/g, ""))
	var uSize = size.replace(/[0-9.]/g, "");
	if (type == "fadd") iSize++;
	else iSize--;
	size = iSize + uSize;
	localStorage.setItem("font", size);
	$("body").css("font-size", size);
	$("#fsize").html(size);
});
$("#par, #la, #en").click(function() {
	var type = $(this).attr("id");
	setcoltype(type);
	localStorage.setItem("col", type);
});
function setcoltype(type) {
	if (type == "en") $("body").addClass("en");
	else $("body").removeClass("en");
	if (type == "par") $("body").removeClass("onecol");
	else $("body").addClass("onecol");
}
var coltype = localStorage.getItem("col");
setcoltype(coltype);

var fontSize = localStorage.getItem("font");
$("#fsize").html(fontSize);
$("body").css("font-size", fontSize);
var bodyNight = localStorage.getItem("night");
if (bodyNight == "true")
	$("body").addClass("night");

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
	if ((!el || !txt) && fel) return fel.style.display = 'none';

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

var $doc = $(document);
$doc.on('click', 'a', function(e) {
	e.stopImmediatePropagation();
});
$doc.on('click', 'tr', function() {
	// no toggle if text is selected, to allow for copy/paste
	var sel = document.getSelection().toString();
	if (typeof sel == "string" && sel.length > 0) return;
	var hyphEl = document.querySelector('#float-hyph');
	if(hyphEl && hyphEl.innerHTML) return;
	var $trs = $('tr');
	var $this = $(this);
	$(this).toggleClass("visible");
	$trs.not(this).removeClass("visible");
});
$doc.keydown(function(e) {
	if (!/android/i.test(navigator.userAgent)) return;
	if (e.keyCode == 40 || e.keyCode == 74) { //down, j
		var y = $doc.scrollTop();
		$doc.scrollTop(y + 50);
		return false;
	} else if (e.keyCode == 38 || e.keyCode == 75) { //up, k
		var y = $doc.scrollTop();
		$doc.scrollTop(y - 50);
		return false;
	} else if (e.keyCode == 84) { //t = top
		$doc.scrollTop(0);
		return false;
	} else if (e.keyCode == 66) { //b = bottom
		$doc.scrollTop($doc.height());
		return false;
	} else return;
});
