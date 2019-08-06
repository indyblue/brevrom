function cookieSave(name, val) {
	document.cookie = name + "=" + val
		+ ";domain=" + window.location.hostname + ";path=/";
}
function cookieGet(name) {
	var rx = RegExp("\\\\b" + name + "=(\\\\w*)", "i");
	var match = document.cookie.match(rx);
	if (Array.isArray(match) && match.length > 1)
		return match[1];
	return "";
}

$("#nd").click(function() {
	$("body").toggleClass("night");
	cookieSave("night", $("body").is(".night"));
});
$("#fadd, #fsub, #freset").click(function() {
	var type = $(this).attr("id");
	if (type == "freset") {
		$("body").css("font-size", "");
		cookieSave("font", "");
		$("#fsize").html("");
		return;
	}

	var size = $("body").css("font-size");
	var iSize = Math.round(size.replace(/[^0-9.]/g, ""))
	var uSize = size.replace(/[0-9.]/g, "");
	if (type == "fadd") iSize++;
	else iSize--;
	size = iSize + uSize;
	cookieSave("font", size);
	$("body").css("font-size", size);
	$("#fsize").html(size);
});
$("#par, #la, #en").click(function() {
	var type = $(this).attr("id");
	setcoltype(type);
	cookieSave("col", type);
});
function setcoltype(type) {
	if (type == "en") $("body").addClass("en");
	else $("body").removeClass("en");
	if (type == "par") $("body").removeClass("onecol");
	else $("body").addClass("onecol");
}
var coltype = cookieGet("col");
setcoltype(coltype);

var fontSize = cookieGet("font");
$("#fsize").html(fontSize);
$("body").css("font-size", fontSize);
var bodyNight = cookieGet("night");
if (bodyNight == "true")
	$("body").addClass("night");