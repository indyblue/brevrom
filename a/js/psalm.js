function psalm(num, sec, obj) {
	var snum = pad(num,3);
	var ssec = sec ? '-' + d2h(sec) : '';
	var url = "../b/content/00/Psalm/{0}{1}.php".format(snum, ssec);
	var ret = get(url, obj, psformat);
}

function psformat(txt) {
	var arr = txt.split(/\n/g);
	var out = '';
	if(arr.length>1) {
		out+= '<p:Head2ps>' + arr[0] + '</p>';
		out+= '<p:BodyLDrop>' + arr[1] + '<br>\n';
		for(var i=2; i<arr.length; i++)
			out+= arr[i].replace(/^(.)/,'<sb>$1</s>') + '<br>\n';
		out+= '</p>';
	}
	return out;
}

function psalm2(num, sec, obj) {
	var snum = pad(num,3);
	var ssec = sec ? '-' + d2h(sec) : '';
	var url1 = "../b/content/00/Psalm/{0}{1}.php".format(snum, ssec);
	var url2 = "../b/content/00/Psalm/E/{0}{1}.php".format(snum, ssec);
	var ret = get2(url1, url2, obj, psclick2);
}

function psclick2(txt1, txt2) {
	var arr1 = txt1.split(/\n/g);
	var arr2 = txt2.split(/\n/g);
	var out = '';
	gx++;
	if(arr1.length>1) {
		out+= '<p:Head2ps>' + arr1[0] + '</p>';
		out+= '<div onclick="$(\'#note'+gx+'\').toggle()">';
		out+= '<p:BodyLDrop>' + arr1[1] + '</p></div>\n';
		out+= '<div id="note'+gx+'" class="note">' + arr2[1] + '</div>';
		for(var i=2; i<arr1.length; i++) {
			gx++;
			out+= '<div onclick="$(\'#note'+gx+'\').toggle()">';
			out+= '<p:BodyL>' + arr1[i].replace(/^(.)/,'<sb>$1</s>') + '</p></div>';
			out+= '<div id="note'+gx+'" class="note">' + arr2[i] + '</div>';
		}
		out+= '</p></tr></table>';
	}
	return out;
}

function psformat2(txt1, txt2) {
	var arr1 = txt1.split(/\n/g);
	var arr2 = txt2.split(/\n/g);
	var out = '';
	if(arr1.length>1) {
		out+= '<table><tr>';
		out+= '<td><p:Head2ps>' + arr1[0] + '</p></td>';
		out+= '<td><p:Head2ps>' + arr2[0] + '</p></td>';
		out+= '</tr><tr>';
		out+= '<td:A1><p:BodyLDrop>' + arr1[1] + '<br></td>\n';
		out+= '<td:B1><p:BodyLDrop>' + arr2[1] + '<br></td>\n';
		for(var i=2; i<arr1.length; i++) {
			out+= '</tr><tr>';
			out+= '<td:A1>' + arr1[i].replace(/^(.)/,'<sb>$1</s>') + '</td>';
			out+= '<td:B1>' + arr2[i].replace(/^(.)/,'<sb>$1</s>') + '</td>';
		}
		out+= '</p></tr></table>';
	}
	return out;
}

