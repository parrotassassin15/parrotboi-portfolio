'use strict';

/* ─── Terminal Typewriter ─────────────────────────────────────────────────── */
const TERMINAL_SEQUENCE = [
  { type: 'prompt', text: 'parrotboi@lorikeetsecurity:~$ ', delay: 400 },
  { type: 'cmd',    text: 'whoami', delay: 60 },
  { type: 'enter',  delay: 300 },
  { type: 'output', text: 'ryan_wilke', delay: 0 },
  { type: 'blank',  delay: 200 },
  { type: 'prompt', text: 'parrotboi@lorikeetsecurity:~$ ', delay: 350 },
  { type: 'cmd',    text: 'cat /etc/role.txt', delay: 60 },
  { type: 'enter',  delay: 300 },
  { type: 'ok',     text: '[✓] CEO @ Lorikeet Security', delay: 0 },
  { type: 'ok',     text: '[✓] Red Teaming | Web · Mobile · API · Network · AD · Cloud', delay: 0 },
  { type: 'ok',     text: '[✓] 16 CVEs Discovered', delay: 0 },
  { type: 'ok',     text: '[✓] CTF Platform Architect | Security Educator', delay: 0 },
  { type: 'blank',  delay: 200 },
  { type: 'prompt', text: 'parrotboi@lorikeetsecurity:~$ ', delay: 300 },
  { type: 'cmd',    text: 'ls certs/', delay: 60 },
  { type: 'enter',  delay: 300 },
  { type: 'cert',   text: 'CRTID   eWPT   eCPPT   eJPT', delay: 0 },
  { type: 'blank',  delay: 200 },
  { type: 'prompt', text: 'parrotboi@lorikeetsecurity:~$ ', delay: 300 },
  { type: 'cmd',    text: 'echo $STATUS', delay: 60 },
  { type: 'enter',  delay: 300 },
  { type: 'output', text: 'open to opportunities → rwilke@lorikeetsecurity.com', delay: 0 },
  { type: 'blank',  delay: 400 },
  { type: 'done' },
];

const CLASS_MAP = { prompt: 't-prompt', cmd: 't-cmd', output: 't-output', ok: 't-ok', cert: 't-cert' };

async function runTerminal() {
  const el = document.getElementById('terminal-output');
  if (!el) return;

  let currentLine = null;

  function newLine() {
    currentLine = document.createElement('span');
    currentLine.className = 'terminal-line';
    el.appendChild(currentLine);
  }

  function appendCursor(parent) {
    const cur = document.createElement('span');
    cur.className = 'terminal-cursor';
    cur.id = 'term-cursor';
    parent.appendChild(cur);
    return cur;
  }

  function removeCursor() {
    const c = document.getElementById('term-cursor');
    if (c) c.remove();
  }

  function sleep(ms) {
    return new Promise(r => setTimeout(r, ms));
  }

  async function typeText(parent, text, className, charDelay = 55) {
    const span = document.createElement('span');
    span.className = className || '';
    parent.appendChild(span);
    const cursor = appendCursor(parent);
    for (const ch of text) {
      span.textContent += ch;
      await sleep(charDelay + Math.random() * 20);
    }
    removeCursor();
    return span;
  }

  newLine();
  await sleep(600);

  for (const step of TERMINAL_SEQUENCE) {
    if (step.type === 'done') {
      appendCursor(currentLine);
      const titleBlock = document.getElementById('hero-title-block');
      if (titleBlock) titleBlock.classList.add('revealed');
      break;
    }

    if (step.delay > 0) await sleep(step.delay);

    if (step.type === 'blank') {
      newLine();
      continue;
    }

    if (step.type === 'enter') {
      newLine();
      continue;
    }

    if (!currentLine) newLine();

    const cls = CLASS_MAP[step.type] || '';
    const charDelay = step.type === 'cmd' ? 70 : 0;
    await typeText(currentLine, step.text, cls, charDelay);

    if (step.type !== 'prompt') {
      newLine();
    }
  }
}

/* ─── Scroll Reveal ──────────────────────────────────────────────────────── */
function initScrollReveal() {
  const observer = new IntersectionObserver(
    (entries) => entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    }),
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  document.querySelectorAll('.reveal, .timeline-item').forEach((el, i) => {
    if (el.classList.contains('timeline-item')) {
      el.style.transitionDelay = `${i * 0.08}s`;
    }
    observer.observe(el);
  });
}

/* ─── Navbar Active State ────────────────────────────────────────────────── */
function initNavSpy() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          navLinks.forEach(l => l.classList.remove('active'));
          const active = document.querySelector(`.navbar-nav .nav-link[href="#${e.target.id}"]`);
          if (active) active.classList.add('active');
        }
      });
    },
    { threshold: 0.4 }
  );

  sections.forEach(s => observer.observe(s));
}

/* ─── Contact Form ───────────────────────────────────────────────────────── */
function initContactForm() {
  const form = document.getElementById('contact-form');
  if (!form) return;

  const btn   = document.getElementById('form-submit');
  const alert = document.getElementById('form-alert');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    btn.disabled = true;
    btn.textContent = 'Sending...';
    alert.className = 'form-alert';
    alert.textContent = '';

    try {
      const data = new FormData(form);
      const res  = await fetch('contact.php', { method: 'POST', body: data });
      const json = await res.json();

      if (json.success) {
        alert.className = 'form-alert success';
        alert.textContent = json.message;
        form.reset();
      } else {
        alert.className = 'form-alert error';
        alert.textContent = json.message;
      }
    } catch {
      alert.className = 'form-alert error';
      alert.textContent = 'Network error. Please try again.';
    } finally {
      btn.disabled = false;
      btn.textContent = 'Send Message';
    }
  });
}

/* ─── Navbar collapse on mobile link click ───────────────────────────────── */
function initMobileNavClose() {
  const toggler  = document.querySelector('.navbar-toggler');
  const collapse = document.querySelector('#navbarNav');
  if (!toggler || !collapse) return;

  document.querySelectorAll('#navbarNav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      if (collapse.classList.contains('show')) toggler.click();
    });
  });
}

/* ─── Boot ───────────────────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  runTerminal();
  initScrollReveal();
  initNavSpy();
  initContactForm();
  initMobileNavClose();
});
