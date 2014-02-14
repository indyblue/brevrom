function params(url, varname) {
	jQuery.ajax({
		url:url,
		beforeSend: function(x) {
			if(x && x.overrideMimeType)
				x.overrideMimeType("application/json;charset=UTF-8");
		},	
		dataType:"json",
		success: function(a) {
			window[varname] = a;
		}
	});
}

function get(url, obj, proc) {
	jQuery.ajax({
		url:url,
		beforeSend: function(x) {
			if(x && x.overrideMimeType)
				x.overrideMimeType("text/plain;charset=UTF-8");
		},	
		dataType:"text",
		success: function(a) {
			var out = proc(a);
			out = sub(out);
			obj.html(out);
		}
	});
}

function get2(url1, url2, obj, proc) {
	var x1=false;
	var s1='';
	var x2=false;
	var s2='';
	jQuery.ajax({
		url:url1,
		beforeSend: function(x) {
			if(x && x.overrideMimeType)
				x.overrideMimeType("text/plain;charset=UTF-8");
		},	
		dataType:"text",
		success: function(a) {
			x1=true;
			s1=a;
			if(x2) {
				var out = proc(s1,s2);
				out = sub(out);
				obj.html(out);
			}
		}
	});
	jQuery.ajax({
		url:url2,
		beforeSend: function(x) {
			if(x && x.overrideMimeType)
				x.overrideMimeType("text/plain;charset=UTF-8");
		},	
		dataType:"text",
		success: function(a) {
			x2=true;
			s2=a;
			if(x1) {
				var out = proc(s1,s2);
				out = sub(out);
				obj.html(out);
			}
		}
	});
}

function sub(str) {
	str = str.replace(/<l>/ig,'<s:L>');
	str = str.replace(/<r>/ig,'<s:Red>');
	str = str.replace(/<sr>/ig,'<s:Rubric>');
	str = str.replace(/<srh>/ig,'<s:RubricH>');
	str = str.replace(/<snr>/ig,'<s:NonRubric>');
	str = str.replace(/<sb>/ig,'<s:Bold>');
	str = str.replace(/<si>/ig,'<s:Italic>');
	str = str.replace(/<[ph]:([^\/>]*)>/ig,'<div class="$1">');
	str = str.replace(/<[ph]:([^\/>]*)\/>/ig,'<div class="$1">&nbsp;</div>');
	str = str.replace(/<\/[ph]>/ig,'</div>');
	str = str.replace(/<s:([^\/>]*)\b>/ig,'<span class="$1">');
	str = str.replace(/<s:([^\/>]*)\b\/>/ig,'<span class="$1">&nbsp;</span>');
	str = str.replace(/<td:([^\/>]*)\b>/ig,'<td class="$1">');
	str = str.replace(/<\/s>/ig,'</span>');
	str = str.replace(/<t2>/ig,'<span style="float:right;">');
	str = str.replace(/<t>/ig,'&nbsp;');
	//str = str.replace(/\n/g,'<br/>');
	str = str.replace(/<br\/*>/ig,'<br/>');
	return str;
}

function d2h(d) {return d.toString(16);}
function h2d(h) {return parseInt(h,16);} 

function pad(number, length) {
	var str = '' + number;
	while (str.length < length)
		str = '0' + str;
	return str;
}

String.prototype.format = function() {
  var args = arguments;
  return this.replace(/{(\d+)}/g, function(match, number) { 
    return typeof args[number] != 'undefined'
      ? args[number]
      : match
    ;
  });
};

