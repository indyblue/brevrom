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