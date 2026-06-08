// ─── VIDEO TABS ───
document.querySelectorAll('.video-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    const target = tab.dataset.target;
    document.querySelectorAll('.video-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.video-player-wrap').forEach(p => p.classList.remove('active'));
    tab.classList.add('active');
    document.getElementById(target).classList.add('active');
  });
});

// ─── COPY CODE ───
function copyCode(btn) {
  const pre = btn.closest('.code-block').querySelector('pre');
  const text = pre.innerText;
  navigator.clipboard.writeText(text).then(() => {
    btn.textContent = '✓ کپی شد';
    btn.classList.add('copied');
    setTimeout(() => {
      btn.textContent = 'کپی';
      btn.classList.remove('copied');
    }, 2000);
  });
}

// ─── TOC ACTIVE ON SCROLL ───
const sections = document.querySelectorAll('.lesson-section');
const tocLinks = document.querySelectorAll('.toc-link');

const tocObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      tocLinks.forEach(l => l.classList.remove('active'));
      const active = document.querySelector(`.toc-link[href="#${entry.target.id}"]`);
      if (active) active.classList.add('active');
    }
  });
}, { rootMargin: '-20% 0px -70% 0px' });

sections.forEach(s => tocObserver.observe(s));

// ─── SMOOTH SCROLL ───
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
  });
});
