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

document.addEventListener('selectionchange', function(e) {
	console.log(document.getSelection());
});

var $doc = $(document);
$doc.on('click', 'tr', function() {
	// no toggle if text is selected, to allow for copy/paste
	var sel = document.getSelection().toString();
	if (typeof sel == "string" && sel.length > 0) return;
	$(this).toggleClass("visible");
	if ($(this).hasClass('visible')) {
		this.innerHTML = this.innerHTML.replace(/(\xad)/g, '$1-')
	} else {
		this.innerHTML = this.innerHTML.replace(/(\xad)-/g, '$1')
	};
	$('tr').not(this).removeClass("visible");
});
$doc.keydown(function(e) {
	//console.log(e);
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
