const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const header = document.querySelector('.site-header');

// Mobile navigation toggle
const navToggle = document.querySelector('.nav-toggle');
const siteNav = document.getElementById('site-nav');

if (navToggle && siteNav) {
    navToggle.addEventListener('click', () => {
        const open = siteNav.classList.toggle('is-open');
        header.classList.toggle('menu-open', open);
        navToggle.setAttribute('aria-expanded', open);
        navToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    });
}

// Header style + scroll progress bar
const progress = document.querySelector('.scroll-progress');

const onScroll = () => {
    const y = window.scrollY;
    header.classList.toggle('is-scrolled', y > 40);
    const max = document.documentElement.scrollHeight - window.innerHeight;
    if (progress) progress.style.setProperty('--progress', max > 0 ? y / max : 0);
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// Split headings into words for the staggered reveal
document.querySelectorAll('[data-split]').forEach((heading) => {
    let i = 0;
    const wrap = (node) => {
        [...node.childNodes].forEach((child) => {
            if (child.nodeType === Node.TEXT_NODE) {
                const frag = document.createDocumentFragment();
                child.textContent.split(/(\s+)/).forEach((part) => {
                    if (!part) return;
                    if (/^\s+$/.test(part)) {
                        frag.append(part);
                    } else {
                        const word = document.createElement('span');
                        word.className = 'word';
                        word.innerHTML = `<span style="--i:${i++}"></span>`;
                        word.firstChild.textContent = part;
                        frag.append(word);
                    }
                });
                child.replaceWith(frag);
            } else {
                wrap(child);
            }
        });
    };
    wrap(heading);
});

// Reveal elements as they scroll into view
const revealEls = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window && !reduceMotion) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach((el) => revealObserver.observe(el));
} else {
    revealEls.forEach((el) => el.classList.add('is-visible'));
}

// Count-up animation for impact numbers ([data-count]), runs once when visible.
// The final value is already in the HTML, so the page still works without JS.
const counters = document.querySelectorAll('[data-count]');

if (counters.length && 'IntersectionObserver' in window && !reduceMotion) {
    const animate = (el) => {
        const target = Number(el.dataset.count);
        const duration = 2000;
        const start = performance.now();

        const step = (now) => {
            const t = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - t, 4);
            el.textContent = Math.round(target * eased).toLocaleString('en-US');
            if (t < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animate(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach((el) => {
        el.textContent = '0';
        counterObserver.observe(el);
    });
}

// Falling petals, styled after the flower in the logo
const flowerSvg = (color) => `
    <svg viewBox="-12 -12 24 24">
        <g fill="${color}">
            ${[0, 72, 144, 216, 288].map((a) => `<ellipse cx="0" cy="-5.6" rx="3" ry="5.6" transform="rotate(${a})"/>`).join('')}
        </g>
        <circle r="1.7" fill="#b8443a"/>
    </svg>`;

if (!reduceMotion) {
    document.querySelectorAll('.petals').forEach((container) => {
        const soft = container.classList.contains('petals-soft');
        const count = window.innerWidth < 700 ? 8 : (soft ? 10 : 18);
        const rand = (min, max) => Math.random() * (max - min) + min;

        for (let n = 0; n < count; n++) {
            const petal = document.createElement('span');
            const duration = rand(14, 26);
            petal.className = 'petal';
            petal.style.cssText = `
                --x:${rand(0, 100)}%;
                --s:${rand(14, 30)}px;
                --o:${soft ? rand(.15, .35) : rand(.35, .8)};
                --t:${duration}s;
                --delay:${-rand(0, duration)}s;
                --r:${rand(-360, 360)}deg;`;
            petal.innerHTML = flowerSvg(Math.random() > .3 ? '#e0b0b0' : '#f1d3cf');
            container.append(petal);
        }
    });
}

// Cursor spotlight on program cards
document.querySelectorAll('.program-card').forEach((card) => {
    card.addEventListener('pointermove', (e) => {
        const r = card.getBoundingClientRect();
        card.style.setProperty('--mx', `${e.clientX - r.left}px`);
        card.style.setProperty('--my', `${e.clientY - r.top}px`);
    });
});
