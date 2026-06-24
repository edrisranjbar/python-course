<footer>
  <div class="footer-content">
    <div class="footer-brand">
      <div class="footer-brand-name">
        دوره صفر تا صد برنامه نویسی پایتون
      </div>
      <p class="footer-brand-desc">
        آموزش رایگان برنامه‌نویسی پایتون از صفر تا صد با تدریس ادریس رنجبر.
      </p>
    </div>

    <div class="footer-col">
      <div class="footer-col-title">لینک‌ها</div>
      <ul class="footer-links">
        <li><a href="<?= $root ?>index.php#features">ویژگی‌های دوره</a></li>
        <li><a href="<?= $root ?>index.php#curriculum">سرفصل‌ها</a></li>
        <li><a href="<?= $root ?>index.php#instructor">درباره مدرس</a></li>
        <li><a href="<?= $root ?>index.php#faq">سوالات متداول</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <div class="footer-col-title">ارتباط</div>
      <ul class="footer-links">
        <li><a href="https://t.me/idrisranjbar" target="_blank">کانال تلگرام</a></li>
        <li><a href="https://instagram.com/idrisranjbar" target="_blank">اینستاگرام</a></li>
        <li><a href="https://github.com/idrisranjbar" target="_blank">گیت‌هاب</a></li>
        <li><a href="<?= $root ?>index.php#donate">حمایت مالی ❤️</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <span class="footer-copy">
      طراحی و توسعه با 💖 و ☕ توسط
      <a href="https://edrisranjbar.ir" target="_blank">ادریس رنجبر</a>
    </span>
  </div>
</footer>

<?php if (!empty($extraJs)): ?>
  <script src="<?= $root ?><?= $extraJs ?>"></script>
<?php endif; ?>
</body>
</html>
