/* global preact, Event, localStorage, addEvent, location, history */
const ctlEl = document.querySelector('#controls');
const h = preact.h;
preact.render(h(preact.c.stdMenu,
  {
    lsPrefix: 'brev',
    ctlChildren: [h(parTxt)],
  },
  h(preact.c.menuNav, {
    sel: '.A1 .Head1, .A1 .Head2 ',
    asel: '.A1 .Head2Ps, .A1 .Head2Cant, .A1 .Head4',
  }),
), ctlEl);

function parTxt(p) {
  return h('div', null,
    h('button', { type: 'par', onClick: setcoltype }, 'Par'),
    h('button', { type: 'la', onClick: setcoltype }, 'Lt'),
    h('button', { type: 'en', onClick: setcoltype }, 'En'),
  );
}

function setcoltype(type) {
  if (type instanceof Event) {
    type = type.target.attributes.type.value;
  }
  const body = document.body;
  if (type === 'en') body.classList.add('en');
  else body.classList.remove('en');
  if (type === 'par') body.classList.remove('onecol');
  else body.classList.add('onecol');
  localStorage.setItem('col', type);
}

const coltype = localStorage.getItem('col');
setcoltype(coltype);

let timeout;
document.addEventListener('selectionchange', function(e) {
  if (timeout) clearTimeout(timeout);
  timeout = setTimeout(showHyph.bind(null, e), 250);
});
function showHyph(ev) {
  const sel = document.getSelection();
  const el = sel.anchorNode ? sel.anchorNode.parentElement : null;
  const txt = sel.toString().trim().replace(/(\xad)/g, '-');
  let fel = document.querySelector('#float-hyph');
  if ((!el || !txt)) {
    if (fel) fel.style.display = 'none';
    return;
  }

  if (!fel) {
    fel = document.createElement('div');
    fel.id = 'float-hyph';
    Object.assign(fel.style, {
      display: 'block',
      position: 'fixed',
      backgroundColor: 'gray',
      bottom: '0px',
      color: 'yellow',
      maxHeight: '3em',
    });
    document.body.append(fel);
  }
  fel.textContent = txt;
  fel.style.display = 'block';
}

addEvent(document.body, 'click', 'a', function(e) {
  e.stopImmediatePropagation();
});
addEvent(document.body, 'click', 'tr', function(e, trEl) {
  const sel = document.getSelection().toString();
  if (typeof sel === 'string' && sel.length > 0) return;
  const hyphEl = document.querySelector('#float-hyph');
  if (hyphEl && hyphEl.style.display !== 'none') return;
  trEl.classList.toggle('visible');
  const visibles = document.querySelectorAll('tr.visible');
  for (let i = 0; i < visibles.length; i++) {
    const vel = visibles[i];
    if (vel !== trEl) vel.classList.remove('visible');
  }
});

let stoCursor = null;
function clearCursor() {
  console.log('cursor auto');
  document.body.style.cursor = '';
  if (stoCursor) {
    clearTimeout(stoCursor);
    stoCursor = null;
  }
}
function setCursor() {
  clearCursor();
  stoCursor = setTimeout(function() {
    console.log('cursor none');
    document.body.style.cursor = 'none';
  }, 100);
}
document.body.addEventListener('mousemove', clearCursor);
document.body.addEventListener('touchstart', clearCursor);
document.body.addEventListener('touchend', setCursor);
window.addEventListener('load', e => {
  const hash = location.hash?.replace(/^#/, '');
  if (!hash) return;
  const el = document.querySelector('#' + hash)
    || document.querySelector(`[name="${hash}"]`);
  if (!el) return;
  el.scrollIntoView();
  const newLoc = location.toString().replace(/#.*/, '');
  history.replaceState(null, null, newLoc);
});
