<?php
$root        = './';
$description = 'نوشتن کامنت';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_comments.asp',
    'title' => 'W3Schools — Python Comments',
    'desc'  => 'آموزش تعاملی و تمرین انواع روش‌های کامنت‌گذاری در پایتون',
  ],
  [
    'url'   => 'https://peps.python.org/pep-0008/#comments',
    'title' => 'PEP 8 — Style Guide for Python Code',
    'desc'  => 'قوانین استاندارد جهانی (PEP 8) برای نوشتن کامنت‌های اصولی در پروژه‌ها',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>

    <div class="lesson-layout" style="position: relative; z-index: 1">
      <main class="lesson-main" data-lesson="4">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <div class="lesson-header">
          <h1 class="lesson-title">قسمت ۴: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            در این جلسه به سراغ یک مفهوم بسیار ساده اما فوق‌العاده مهم می‌رویم:
            کامنت‌گذاری (Commenting). مهارتی که تفاوت یک کدنویس مبتدی و یک
            برنامه‌نویس منظم و حرفه‌ای را مشخص می‌کند و کدهای شما را خواناتر
            می‌سازد.
          </p>
        </div>

        <section class="lesson-section" id="videos">
          <div class="section-label">
            <span class="section-label-icon">🎬</span>
            ویدیوهای آموزشی
          </div>

          <div class="video-tabs">
            <button class="video-tab active" data-target="youtube-player">
              یوتیوب
            </button>
            <button class="video-tab" data-target="aparat-player">
              آپارات
            </button>
          </div>

          <div class="video-player-wrap active" id="youtube-player">
            <div class="video-embed">
              <iframe
                src="https://www.youtube.com/embed/jqRJGsCobvo"
                title="آموزش پایتون ۲۰۲۶ - نوشتن کامنت"
                frameborder="0"
                allow="
                  accelerometer;
                  autoplay;
                  clipboard-write;
                  encrypted-media;
                  gyroscope;
                  picture-in-picture;
                  web-share;
                "
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              📺 برای تماشا در یوتیوب:
              <a
                href="https://youtube.com/watch?v=jqRJGsCobvo"
                target="_blank"
                rel="noopener"
                >باز کردن در یوتیوب ↗</a
              >
            </div>
          </div>

          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/pshc795/vt/frame"
                title="آموزش پایتون - نوشتن کامنت"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a
                href="https://www.aparat.com/v/pshc795"
                target="_blank"
                rel="noopener"
                >باز کردن در آپارات ↗</a
              >
            </div>
          </div>
        </section>

        <section class="lesson-section" id="description">
          <div class="section-label">
            <span class="section-label-icon">📖</span>
            توضیحات جلسه
          </div>

          <div class="lesson-content">
            <section>
              <h2>کامنت (Comment) چیست و چه کاربردی دارد؟</h2>
              <p>
                کامنت‌ها یا توضیحات، بخش‌هایی از متن در میان کدهای ما هستند که
                توسط مفسر پایتون کاملاً <strong>نادیده گرفته می‌شوند</strong> و
                در خروجی برنامه هیچ تاثیری ندارند. این متون در واقع یادداشت‌هایی
                برای خود برنامه‌نویس یا سایر اعضای تیم هستند.
              </p>
              <p>چرا باید در کدهای خود کامنت بنویسیم؟</p>
              <ul>
                <li>
                  <strong>توضیح دادن منطق کد:</strong> وقتی کدهای پیچیده‌ای
                  می‌نویسید، با یک کامنت ساده مشخص می‌کنید که این قطعه کد دقیقاً
                  قرار است چه کاری انجام دهد تا در آینده به راحتی آن را به یاد
                  بیاورید.
                </li>
                <li>
                  <strong>غیرفعال کردن موقت کدها برای دیباگ:</strong> هنگام تست
                  برنامه یا پیدا کردن یک خطا (Bug)، می‌توانید به جای پاک کردن
                  کد، موقتاً آن را تبدیل به کامنت کنید تا اجرا نشود.
                </li>
                <li>
                  <strong>افزایش خوانایی پروژه:</strong> کدی که مستندسازی شده
                  باشد، کار تیمی را به شدت آسان کرده و کدهای شما را استاندارد
                  می‌کند.
                </li>
              </ul>
            </section>

            <section>
              <h2>انواع روش‌های نوشتن کامنت در پایتون</h2>
              <p>
                در زبان پایتون به دو شکل کلی می‌توانیم توضیحات خود را به کدها
                اضافه کنیم:
              </p>

              <h3>۱. کامنت‌های یک خطی (Single-line Comments)</h3>
              <p>
                پرکاربردترین روش برای نوشتن کامنت، استفاده از علامت هشتگ
                (<code>#</code>) است. هر متنی که بعد از علامت <code>#</code> در
                یک خط نوشته شود، کامنت محسوب می‌شود.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># این یک پیام برای خودم است و در برنامه اجرا نمی‌شود</span>
<span class="token-function">print</span>(<span class="token-string">"سلام دنیا"</span>) <span class="token-comment"># این دستور اجرا می‌شود و متن را چاپ می‌کند</span></code></pre>
              </div>

              <h3>۲. کامنت‌های چند خطی (Multi-line Comments)</h3>
              <p>
                برای توضیحات طولانی، می‌توانید از سه علامت دابل‌کوتیشن
                (<code>"""</code>) یا سینگل‌کوتیشن (<code>'''</code>) در ابتدا و
                انتهای متن خود استفاده کنید:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-string">"""
این یک کامنت چند خطی است.
شما می‌توانید توضیحات مربوط به پروژه،
راهنمای استفاده از کد و جزئیات دیگر را
اینجا به صورت کامل بنویسید.
"""</span></code></pre>
              </div>
            </section>

            <section>
              <h2>ترفند حرفه‌ای: کلید میانبر کامنت در VS Code</h2>
              <p>
                در ویرایشگر ویژوال استودیو کد (VS Code) نیازی نیست برای هر خط به
                صورت دستی علامت <code>#</code> را تایپ کنید. از کلیدهای میانبر
                زیر استفاده کنید:
              </p>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  ابتدا خطوط مورد نظر را انتخاب (Highlight) کنید. سپس در
                  <strong>ویندوز و لینوکس</strong>، کلیدهای
                  <code>Ctrl + /</code> و در سیستم‌عامل <strong>مک</strong>،
                  کلیدهای <code>Cmd + /</code> را همزمان فشار دهید. برای خارج
                  کردن از حالت کامنت (Uncomment) نیز همین کلیدها را مجدداً
                  بزنید.
                </div>
              </div>
            </section>

            <section>
              <h2>نتیجه‌گیری</h2>
              <p>
                یادگیری نحوه استفاده درست از کامنت‌ها یکی از بهترین عادت‌هایی
                است که می‌توانید در خود پرورش دهید. همیشه سعی کنید کدهای خود را
                تمیز و با توضیحات کافی بنویسید. در جلسه بعدی وارد دنیای جذاب
                <strong>متغیرها (Variables)</strong> خواهیم شد.
              </p>
            </section>
          </div>
        </section>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <div class="lesson-nav-btns">
          <a href="3.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">نوشتن و اجرای اولین برنامه</div>
            </div>
          </a>
          <a href="5.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">متغیرها در پایتون</div>
            </div>
            <span>›</span>
          </a>
        </div>
      </main>
    </div>
<?php require $root . 'includes/footer.php'; ?>
