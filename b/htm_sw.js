// const filesToCache = [
// 	'/b/htm_k.htm',
// 	'/b/htm_k.css',
// 	'/b/font/FancyVR.ttf',
// 	'/b/font/oldlondon.ttf',
// ];

const staticCacheName = 'pages-cache-v1';

self.addEventListener('install', event => {
	logger('Attempting to install service worker and cache static assets, no wait');

	//caches.delete(staticCacheName);
	// event.waitUntil(
	// 	caches.open(staticCacheName)
	// 		.then(cache => {
	// 			return cache.addAll(filesToCache);
	// 		})
	// );
	self.skipWaiting();
});

let msgAbort = false;
let msgSource = null;
let logger = (...m) => {
	console.log('*SW', ...m);
	if (msgSource && msgSource.postMessage) msgSource.postMessage(m.join(' '));
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
		const resp = await caches.match(href);
		if (msgAbort) break;
		if (!resp) {
			logger('caching ' + href + suf);
			const cache = await caches.open(staticCacheName);
			const add = await cache.add(href);
		}
		// else logger('cached ' + href + suf);
	}
	msgAbort = false;
});

self.addEventListener('activate', function(event) {
	logger('Service worker activating...');
	// Perform some task
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
	const cache = await caches.open(staticCacheName);
	logger('caching ' + request.url);
	cache.put(request, fres.clone());
	return fres;
};