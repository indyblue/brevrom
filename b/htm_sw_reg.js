(function setup() {
	const btnInst = document.createElement('button');
	btnInst.innerText = 'Install';
	const btnUninst = document.createElement('button');
	btnUninst.innerText = 'Uninstall';
	const divOut = document.createElement('div');
	divOut.style.maxHeight = '10em';
	divOut.style.overflowY = 'auto';
	divOut.style.fontSize = '10pt';
	divOut.style.border = '1px solid #888';
	const divTools = document.createElement('div');
	divTools.style.paddingTop = '4em';
	divTools.appendChild(btnInst);
	divTools.appendChild(btnUninst);
	divTools.appendChild(divOut);

	const divBody = document.querySelector('#body') || document.body;
	divBody.appendChild(divTools);

	const cbout = (...o) => {
		console.log(...o);
		divOut.innerHTML += '<br/>' + o.join(' ');
		divOut.scrollTop = divOut.scrollHeight;
	}
	btnInst.onclick = e => swReg(0);
	btnUninst.onclick = e => swReg(1);

	let sendMessage = n => { };
	let swReg = n => { };
	if ('serviceWorker' in navigator) {
		const cacheName = 'pages-cache-v1' + location.pathname.replace(/[^\w]+/g, '_').trim('_');
		swReg = function(unreg) {
			if (unreg === undefined) unreg = localStorage.getItem('unreg');
			if (unreg < 0) return;
			navigator.serviceWorker.register('/b/htm_sw.js#' + cacheName)
				.then(async function(registration) {
					navigator.serviceWorker.onmessage = event => {
						cbout(event.data);
						if (event.data === 'unreg') registration.unregister();
					};
					cbout('Registration successful, scope is:', registration.scope);
					if (unreg === 1) {
						sendMessage('del');
						//registration.unregister();
						cbout('cache cleared!');
						localStorage.setItem('unreg', -1);
					} else {
						sendMessage();
						registration.update();
						localStorage.setItem('unreg', 0);
						if (navigator.storage && navigator.storage.persist) {
							const isp = await navigator.storage.persist();
							cbout('Persistant storage? ' + isp);
						}
					}
				})
				.catch(function(error) {
					cbout('Service worker registration failed, error:', error);
				});
		}
		swReg();

		const hrefs = [...document.querySelectorAll('a[href]')]
			.map(x => x.href.replace(/^.*\/b/g, '/b').replace(/#.*/, ''))
			.filter((x, i, a) => a.indexOf(x) === i);
		const strHrefs = JSON.stringify(hrefs);
		sendMessage = function(n) {
			if (navigator.serviceWorker.controller) {
				cbout('message');
				navigator.serviceWorker.controller.postMessage(n || strHrefs);
			} else if (!n) setTimeout(sendMessage, 500);
		}

	}
})();
