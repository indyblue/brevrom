(function setup() {
	const btnInst = document.createElement('button');
	btnInst.innerText = 'Install';
	const btnUninst = document.createElement('button');
	btnUninst.innerText = 'Uninstall';
	const divOut = document.createElement('div');
	divOut.style.maxHeight = '10em';
	divOut.style.overflowY = 'auto';
	divOut.style.fontSize = '10pt';
	divOut.style.border = '1px solid black';
	document.body.appendChild(btnInst);
	document.body.appendChild(btnUninst);
	document.body.appendChild(divOut);

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

		swReg = function(unreg) {
			if (unreg === undefined) unreg = localStorage.getItem('unreg');
			if (unreg < 0) return;
			navigator.serviceWorker.register('/b/htm_sw.js', { scope: '/' })
				.then(function(registration) {
					navigator.serviceWorker.addEventListener('message', event => {
						cbout(event.data);
						if (event.data === 'unreg') registration.unregister();
					});
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
			if (navigator.serviceWorker.controller)
				navigator.serviceWorker.controller.postMessage(n || strHrefs);
			else setTimeout(sendMessage, 500);
		}

	}
})();
