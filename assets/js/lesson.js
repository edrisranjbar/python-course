const LESSONS = [
  { id: 1, file: "1.php", title: "مقدمه" },
  { id: 2, file: "2.php", title: "راه‌اندازی پیش‌نیازها" },
  { id: 3, file: "3.php", title: "نوشتن و اجرای اولین برنامه" },
  { id: 4, file: "4.php", title: "نوشتن کامنت" },
  { id: 5, file: "5.php", title: "تابع پرینت" },
  { id: 6, file: "6.php", title: "متغیرها و انواع داده" },
  { id: 7, file: "7.php", title: "عملگرهای ریاضی" },
  { id: 8, file: "8.php", title: "عملگرهای مقایسه‌ای" },
  { id: 9, file: "9.php", title: "گرفتن ورودی از کاربر" },
  { id: 10, file: "10.php", title: "کار با رشته‌ها" },
  { id: 11, file: "11.php", title: "توابع رشته‌ها" },
  { id: 12, file: "12.php", title: "فرمت‌کردن رشته‌ها" },
  { id: 13, file: "13.php", title: "لیست‌ها" },
  { id: 14, file: "14.php", title: "تاپل‌ها" },
  { id: 15, file: "15.php", title: "مجموعه‌ها" },
  { id: 16, file: "16.php", title: "دیکشنری" },
  { id: 16, file: "17.php", title: "حلقه‌ها" },
];

// ─── VIDEO TABS ───
document.querySelectorAll(".video-tab").forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = tab.dataset.target;
    document
      .querySelectorAll(".video-tab")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".video-player-wrap")
      .forEach((p) => p.classList.remove("active"));
    tab.classList.add("active");
    document.getElementById(target).classList.add("active");
  });
});

// ─── COPY CODE ───
function copyCode(btn) {
  const pre = btn.closest(".code-block").querySelector("pre");
  const text = pre.innerText;
  navigator.clipboard.writeText(text).then(() => {
    btn.textContent = "✓ کپی شد";
    btn.classList.add("copied");
    setTimeout(() => {
      btn.textContent = "کپی";
      btn.classList.remove("copied");
    }, 2000);
  });
}

// ─── SMOOTH SCROLL ───
document.querySelectorAll('a[href^="#"]').forEach((a) => {
  a.addEventListener("click", (e) => {
    const href = a.getAttribute("href");
    if (!href || href === "#") return; // skip bare # links
    try {
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    } catch (err) {
      // invalid selector, ignore
    }
  });
});

const lessonNum = parseInt(
  document.querySelector(".lesson-main")?.dataset.lesson,
);
if (lessonNum) {
  const idx = LESSONS.findIndex((l) => l.id === lessonNum);
  const prev = LESSONS[idx - 1];
  const next = LESSONS[idx + 1];

  const prevBtn = document.querySelector(".lesson-nav-prev");
  const nextBtn = document.querySelector(".lesson-nav-next");

  if (prev) {
    prevBtn.href = prev.file;
    prevBtn.querySelector(".nav-btn-title").textContent = prev.title;
  } else {
    prevBtn.classList.add("disabled");
  }

  if (next) {
    nextBtn.href = next.file;
    nextBtn.querySelector(".nav-btn-title").textContent = next.title;
  } else {
    nextBtn.classList.add("disabled");
  }
}
