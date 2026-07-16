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
  { id: 17, file: "17.php", title: "حلقه‌ها" },
  { id: 18, file: "18.php", title: "دستورات شرطی" },
  { id: 19, file: "19.php", title: "توابع" },
  { id: 20, file: "20.php", title: "کار با فایل‌ها" },
  { id: 21, file: "21.php", title: "پروژه مدیریت مخاطبین" },
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

// ─── QUIZ: SELECTION HIGHLIGHT ───
document
  .querySelectorAll('.quiz-option input[type="radio"]')
  .forEach((input) => {
    input.addEventListener("change", () => {
      const name = input.name;
      document.querySelectorAll(`input[name="${name}"]`).forEach((radio) => {
        radio
          .closest(".quiz-option")
          .classList.remove("selected", "correct", "incorrect");
      });
      input.closest(".quiz-option").classList.add("selected");
    });
  });

// ─── QUIZ: GENERIC GRADING ───
// Works for any quiz rendered via includes/quiz.php — reads data-correct
// attributes at runtime, so the same function serves every lesson's quiz.
function checkQuiz(quizId) {
  const container = document.getElementById(quizId);
  if (!container) return;

  const cards = container.querySelectorAll(".quiz-card");
  const total = cards.length;
  let answered = 0;
  let score = 0;

  cards.forEach((card) => {
    const checked = card.querySelector('input[type="radio"]:checked');
    if (checked) answered++;

    card.querySelectorAll(".quiz-option").forEach((opt) => {
      opt.classList.remove("correct", "incorrect", "selected");
      const input = opt.querySelector("input");
      const isCorrectOption = opt.dataset.correct === "1";

      if (isCorrectOption) {
        opt.classList.add("correct");
      } else if (input.checked) {
        opt.classList.add("incorrect");
      }
    });

    if (checked && checked.closest(".quiz-option").dataset.correct === "1") {
      score++;
    }
  });

  const result = document.getElementById(quizId + "-result");
  if (!result) return;

  const icon = result.querySelector(".quiz-result-icon");
  const label = result.querySelector(".quiz-result-score");
  const fill = result.querySelector(".quiz-result-fill");
  const msg = result.querySelector(".quiz-result-msg");
  const toFa = (n) => n.toLocaleString("fa-IR");

  if (answered < total) {
    result.classList.add("visible");
    icon.textContent = "⚠️";
    label.textContent = "هنوز کامل نیست";
    fill.style.width = "0%";
    msg.textContent = `لطفاً قبل از بررسی، به همه ${toFa(total)} سؤال پاسخ بده.`;
    result.scrollIntoView({ behavior: "smooth", block: "center" });
    return;
  }

  const percent = Math.round((score / total) * 100);
  fill.style.width = percent + "%";

  if (score === total) {
    icon.textContent = "🎉";
    fill.style.background = "linear-gradient(90deg, #10b981, #34d399)";
    msg.textContent = "عالی بود! کاملاً آماده تمرین‌ها هستی.";
  } else if (score / total >= 0.6) {
    icon.textContent = "👏";
    fill.style.background = "linear-gradient(90deg, #f59e0b, #fbbf24)";
    msg.textContent =
      "خوب بود؛ گزینه‌های سبز رو یک بار مرور کن تا نکته‌های جامونده رو ببینی.";
  } else {
    icon.textContent = "📚";
    fill.style.background = "linear-gradient(90deg, #ef4444, #f87171)";
    msg.textContent =
      "پیشنهاد می‌کنیم قبل از تمرین‌ها، توضیحات بالا رو یک بار دیگه مرور کنی.";
  }

  label.textContent = `${toFa(score)} از ${toFa(total)}`;
  result.classList.add("visible");
  result.scrollIntoView({ behavior: "smooth", block: "center" });
}
