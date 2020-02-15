let staticCacheName = 'pages-cache-v1';

self.addEventListener('install', event => {
	staticCacheName = self.location.hash.trim('#');
	logger('Service worker installing...cache ' + staticCacheName);
	self.skipWaiting();

	event.waitUntil((async () => {
		var hrefs = preCache.trim().split(/[\r\n]+/g);
		for (var href of hrefs) await cacheFile(href);
	})());
});

self.addEventListener('activate', function(event) {
	logger('Service worker activating...');
});

self.addEventListener('fetch', event => {
	// logger('Fetch ', event.request.url);
	event.respondWith(responder(event.request));
});

const responder = async request => {
	const response = await caches.match(request);
	if (response) {
		logger('Found ', request.url, ' in cache');
		return response;
	}
	logger('Network request for ', request.url);
	const fres = await fetch(request);
	if (fres.ok) {
		const cache = await caches.open(staticCacheName);
		logger('caching ' + request.url);
		cache.put(request, fres.clone());
	}
	return fres;
};

const cacheFile = async (href, suf = '') => {
	const resp = await caches.match(href);
	if (!resp) {
		logger('caching ' + href + suf);
		const cache = await caches.open(staticCacheName);
		const add = await cache.add(href);
	}
	// else logger('cached ' + href + suf);
};

let msgAbort = false;
let msgSource = null;
let logger = (...m) => {
	if (msgSource && msgSource.postMessage) msgSource.postMessage(m.join(' '));
	else console.log('*SW', ...m);
};
self.addEventListener('message', async event => {
	msgSource = event.source;
	logger('message: ' + event.data.substr(0, 50));
	if (event.data === 'del') {
		msgAbort = true;
		var success = await caches.delete(staticCacheName);
		if (success) event.source.postMessage('unreg');
		logger('cache cleared?', success);
		return;
	}
	msgAbort = false;
	const hrefs = JSON.parse(event.data);
	let i = 0;
	for (const href of hrefs) {
		const suf = ' ' + (++i) + '/' + hrefs.length;
		if (msgAbort) break;
		await cacheFile(href, suf);
	}
	msgAbort = false;
});

const preCache = `
/b/htm_p.css
/b/htm_p.js
/b/jquery-1.7.2.min.js
/b/font/freeserif.woff
/b/font/freeserifItalic.woff
/b/font/freeserifBoldItalic.woff
/b/font/freeserifBold.woff
/b/font/FancyVR.woff
/b/font/oldlondon.woff
/b/Images/FSSR/10_TR_Coat_of_Arms.png
/b/Images/FSSR/10_TR_Coat_of_Arms.jpg
/b/Images/FSSR/10_TR_Coat_of_Arms.jpg.svg
/b/Images/FSSR/omps_003.jpg
/b/Images/FSSR/omps_003_bw.jpg
/b/Images/FSSR/omps_003_edge.png
/b/Images/FSSR/omps_003.png
/b/Images/separator1.png
/b/Images/crucifix.png
/b/Images/svg/sanctus.svg
/b/Images/svg/amen.svg
/b/Images/svg/FreeSerif.ttf
/b/Images/svg/Separators.sfd
/b/Images/svg/dove.svg
/b/Images/svg/separator4.svg
/b/Images/01_sunday_vespers.png
/b/Images/benedicamus_domino.png
/b/Images/Saints/0815_assumption_bvm.png
/b/Images/Saints/0501_st_joseph_patron_of_church.png
/b/Images/Saints/0624_john_the_baptist.png
/b/Images/Saints/00_proper_of_saints.png
/b/Images/Saints/1007_holy_rosary_bvm.png
/b/Images/Saints/1101_all_saints.png
/b/Images/Saints/0629_ss_peter_and_paul.png
/b/Images/Saints/0319_st_joseph.png
/b/Images/Saints/1208_immaculate_conception.png
/b/Images/Saints/0325_annunciation.png
/b/Images/Saints/0908_nativity_of_bvm.png
/b/Images/Saints/0806_transfiguration.png
/b/Images/Saints/0929_dedication_st_michael.png
/b/Images/Title_JR.png
/b/Images/Tempore/t10_sacred_heart.png
/b/Images/Tempore/t05_ascension.png
/b/Images/Tempore/t02_circumcision.png
/b/Images/Tempore/t06_pentecost.png
/b/Images/Tempore/t07_trinity.png
/b/Images/Tempore/t01_christmas.png
/b/Images/Tempore/t00_proprium_tempore.png
/b/Images/Tempore/t03_epiphany.png
/b/Images/Tempore/t04_easter.png
/b/Images/Tempore/t08_corpus_christi.png
/b/Images/sanctus.png
/b/Images/dove.png
/b/Images/separator3.png
/b/Images/FP_Trinity_Saints.png
/b/Images/amen.png
/b/Images/print_bkg.svg
/b/Images/ihs.png
/b/Images/CS/00_common_of_saints.png
/b/Images/CS/01_dedication_of_church.png
/b/Images/border.png
/b/Images/00_ordinary.png
/b/Images/separator2.png
/b/Images/separator4.png
`;