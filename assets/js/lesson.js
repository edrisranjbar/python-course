const LESSONS = [
  { id: 1, file: "1.html", title: "مقدمه" },
  { id: 2, file: "2.html", title: "راه‌اندازی پیش‌نیازها" },
  { id: 3, file: "3.html", title: "نوشتن و اجرای اولین برنامه" },
  { id: 4, file: "4.html", title: "نوشتن کامنت" },
  { id: 5, file: "5.html", title: "تابع پرینت" },
  { id: 6, file: "6.html", title: "متغیرها و انواع داده" },
  { id: 7, file: "7.html", title: "عملگرهای ریاضی" },
  { id: 8, file: "8.html", title: "عملگرهای مقایسه‌ای" },
  { id: 9, file: "9.html", title: "گرفتن ورودی از کاربر" },
  { id: 10, file: "10.html", title: "کار با رشته‌ها" },
  { id: 11, file: "11.html", title: "توابع رشته‌ها" },
  { id: 12, file: "12.html", title: "فرمت‌کردن رشته‌ها" },
  { id: 13, file: "13.html", title: "لیست‌ها" },
  { id: 14, file: "14.html", title: "تاپل‌ها" },
  { id: 15, file: "15.html", title: "مجموعه‌ها" },
  { id: 16, file: "16.html", title: "دیکشنری" },
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
    const target = document.querySelector(a.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth" });
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
