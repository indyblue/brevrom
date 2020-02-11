const filesToCache = [
	'/b/htm_k.htm',
	'/b/htm_k.css',
	'/b/font/FancyVR.ttf',
	'/b/font/oldlondon.ttf',
	'/b/kindle/100_intro.php',
	'/b/kindle/en/7App/7_dolours.php',
	'/b/kindle/en/7App/index.php',
	'/b/kindle/en/7App/mp_succour.php',
	'/b/kindle/1Ordinary/index.php',
	'/b/kindle/2Psalter/1sunday.php',
	'/b/kindle/2Psalter/2monday.php',
	'/b/kindle/2Psalter/3tuesday.php',
	'/b/kindle/2Psalter/4wednesday.php',
	'/b/kindle/2Psalter/5thursday.php',
	'/b/kindle/2Psalter/6friday.php',
	'/b/kindle/2Psalter/7saturday.php',
	'/b/kindle/3PropT/01_advent/index.php',
	'/b/kindle/3PropT/02_nativity/index.php',
	'/b/kindle/3PropT/03_epiphany/index.php',
	'/b/kindle/3PropT/04_post_epiphany/index.php',
	'/b/kindle/3PropT/05_septuagesima/index.php',
	'/b/kindle/3PropT/06_lent/index.php',
	'/b/kindle/3PropT/07_passiontide/index.php',
	'/b/kindle/3PropT/08_easter/index.php',
	'/b/kindle/3PropT/09_ascension/index.php',
	'/b/kindle/3PropT/10_pentecost.php',
	'/b/kindle/3PropT/11_post_pentecost/index.php',
	'/b/kindle/5PropS/01_January.php',
	'/b/kindle/5PropS/02_February.php',
	'/b/kindle/5PropS/03_March.php',
	'/b/kindle/5PropS/04_April.php',
	'/b/kindle/5PropS/05_May.php',
	'/b/kindle/5PropS/06_June.php',
	'/b/kindle/5PropS/07_July.php',
	'/b/kindle/5PropS/08_August.php',
	'/b/kindle/5PropS/09_September.php',
	'/b/kindle/5PropS/10_October.php',
	'/b/kindle/5PropS/11_November_all.php',
	'/b/kindle/5PropS/12_December.php',
	'/b/kindle/6ComS/610_Apostles.php',
	'/b/kindle/6ComS/612_ApostlesPT.php',
	'/b/kindle/6ComS/620_Pope.php',
	'/b/kindle/6ComS/630_Martyr.php',
	'/b/kindle/6ComS/632_Martyrs.php',
	'/b/kindle/6ComS/640_ConfBishop.php',
	'/b/kindle/6ComS/645_Confessor.php',
	'/b/kindle/6ComS/650_Virgin.php',
	'/b/kindle/6ComS/655_HolyWomen.php',
	'/b/kindle/6ComS/660_DedicationChurch.php',
	'/b/kindle/6ComS/670_BVM.php',
	'/b/kindle/6ComS/675_BVMSat.php',
	'/b/kindle/6ComS/677_BVMp.php',
	'/b/kindle/6ComS/690_OfficeDead.php',
	'/b/kindle/6ComS/BVMp/677_BVMp1.php',
	'/b/kindle/6ComS/BVMp/677_BVMp2.php',
	'/b/kindle/6ComS/BVMp/677_BVMp3.php',
	'/b/kindle/6ComS/FSSR/690_OfficeDead.php',
	'/b/kindle/7App/chaplet_infant.php',
	'/b/kindle/7App/index.php',
	'/b/kindle/7App/psalms_js.php',
	'/b/kindle/7App/rosary.php',
	'/b/kindle/en/2Psalter/1sunday.php',
	'/b/kindle/en/6ComS/BVMp/677_BVMp1.php',
	'/b/kindle/en/6ComS/BVMp/677_BVMp2.php',
	'/b/kindle/en/6ComS/BVMp/677_BVMp3.php',
	'/b/kindle/en/6ComS/FSSR/690_OfficeDead.php',
	'/b/kindle/en/6ComS/FSSR/prayers.php',
];
const staticCacheName = 'pages-cache-v1';

self.addEventListener('install', event => {
	console.log('Attempting to install service worker and cache static assets, no wait');
	event.waitUntil(
		caches.open(staticCacheName)
			.then(cache => {
				return cache.addAll(filesToCache);
			})
	);
	self.skipWaiting();
});

self.addEventListener('activate', function(event) {
	console.log('Service worker activating...');
	// Perform some task
});

self.addEventListener('fetch', event => {
	console.log('Fetch event for ', event.request.url);
	event.respondWith(
		caches.match(event.request)
			.then(response => {
				if (response) {
					console.log('Found ', event.request.url, ' in cache');
					return response;
				}
				console.log('Network request for ', event.request.url);
				return fetch(event.request)

				// TODO 4 - Add fetched files to the cache

			}).catch(error => {

				// TODO 6 - Respond with custom offline page

			})
	);
});