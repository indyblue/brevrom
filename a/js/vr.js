function vr2(url, obj) {
	var i = url.lastIndexOf("/");
	var url2 = url.substr(0,i) + '/E' + url.substr(i);
	var ret = get2(url, url2, obj, vrclick2);
}

function vrclick2(txt1, txt2) {
	var arr1 = txt1.split(/\n/g);
	var arr2 = txt2.split(/\n/g);
	var out = '';
	if(arr1.length>1) {
		for(var i=0; i<arr1.length-1; i+=2) {
			gx++;
			out+= '<div onclick="$(\'#note'+gx+'\').toggle()">';
			out+= '<p:BodyL><s:VR>V.</s> ' + arr1[i] +
				' <s:VR>R.</s> ' + arr1[i+1] + '</p></div>';
			out+= '<div id="note'+gx+'" class="note"><s:VR>V.</s> ' + arr2[i] + 
					' <s:VR>V.</s> ' + arr2[i+1] + '</div>';
		}
	}
	alert(out);
	return out;
}

