<?php
$root        = './';
$description = 'راه‌اندازی پیش‌نیازها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$references = [
  [
    'url'   => 'https://www.python.org/downloads/',
    'title' => 'python.org — صفحه دانلود رسمی',
    'desc'  => 'آخرین نسخه پایدار پایتون برای ویندوز، مک و لینوکس',
  ],
  [
    'url'   => 'https://code.visualstudio.com/',
    'title' => 'code.visualstudio.com — دانلود VS Code',
    'desc'  => 'صفحه رسمی دانلود ویژوال استودیو کد برای همه سیستم‌عامل‌ها',
  ],
  [
    'url'   => 'https://marketplace.visualstudio.com/items?itemName=ms-python.python',
    'title' => 'افزونه Python برای VS Code',
    'desc'  => 'افزونه رسمی مایکروسافت برای پشتیبانی کامل از پایتون در VS Code',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <main class="lesson-main" data-lesson="2">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت ۲: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            در این جلسه پیش‌نیازهای ضروری برای شروع کدنویسی را روی سیستم‌عامل
            نصب و آماده می‌کنیم. به دو ابزار اصلی نیاز داریم:
            <strong>مفسر پایتون</strong> که کدهایمان را اجرا می‌کند، و
            <strong>VS Code</strong> که محیط نوشتن کد است.
          </p>
        </div>

        <!-- ─── VIDEOS ─── -->
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

          <!-- YOUTUBE -->
          <div class="video-player-wrap active" id="youtube-player">
            <div class="video-embed">
              <iframe
                src="https://www.youtube.com/embed/933R9o_Kv9c?si=eFuPK33UnGvaw-Ky"
                title="آموزش پایتون ۲۰۲۶ - قسمت ۲: راه‌اندازی پیش‌نیازها"
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
                href="https://www.youtube.com/watch?v=933R9o_Kv9c"
                target="_blank"
                rel="noopener"
                >باز کردن در یوتیوب ↗</a
              >
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/APARAT_HASH/vt/frame"
                title="آموزش پایتون - قسمت ۲: راه‌اندازی پیش‌نیازها"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a
                href="https://aparat.com/v/APARAT_HASH"
                target="_blank"
                rel="noopener"
                >باز کردن در آپارات ↗</a
              >
            </div>
          </div>
        </section>

        <!-- ─── DESCRIPTION ─── -->
        <section class="lesson-section" id="description">
          <div class="section-label">
            <span class="section-label-icon">📖</span>
            توضیحات جلسه
          </div>

          <div class="lesson-content">
            <section>
              <h2>مرحله اول: دانلود و نصب پایتون در ویندوز</h2>
              <p>برای نصب پایتون مراحل زیر را به دقت دنبال کنید:</p>
              <ul>
                <li>
                  در مرورگر خود عبارت <code>Download Python</code> را جستجو کنید
                  یا مستقیماً به سایت رسمی پایتون به آدرس
                  <strong>python.org</strong> مراجعه کنید.
                </li>
                <li>
                  به بخش <strong>Downloads</strong> بروید. در این بخش همیشه
                  آخرین نسخه پایدار پایتون برای دانلود قرار دارد (در زمان ضبط
                  این ویدیو، نسخه ۳.۱۳.۷ آخرین نسخه است).
                </li>
                <li>
                  روی دکمه زردرنگ دانلود کلیک کنید تا فایل نصبی دریافت شود. تا
                  زمانی که نسخه اصلی شما سری ۳ باشد، تفاوت اعداد اعشاری بعدی
                  مربوط به تغییرات جزئی است و مشکلی ایجاد نمی‌کند.
                </li>
                <li>
                  پس از اجرای فایل دانلود شده، قبل از کلیک روی
                  <code>Install Now</code>، حتماً تیک گزینه
                  <strong>Add Python to PATH</strong> را در پایین پنجره بزنید.
                  اگر این تیک را نزنید، در آینده برای اجرای برنامه‌ها با مشکل
                  مواجه می‌شوید.
                </li>
                <li>
                  سپس روی <code>Install Now</code> کلیک کنید تا نصب به پایان
                  برسد.
                </li>
              </ul>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>نکته برای سیستم‌های ۳۲ بیتی:</strong> اگر ویندوز شما
                  ۳۲ بیتی است، در همان صفحه دانلود وارد بخش Windows شوید و نسخه
                  x86 را انتخاب کنید.
                </div>
              </div>
            </section>

            <section>
              <h2>مرحله دوم: دانلود و نصب VS Code</h2>
              <p>
                برای کدنویسی به یک محیط حرفه‌ای نیاز داریم. ویژوال استودیو کد
                بهترین انتخاب است:
              </p>
              <ul>
                <li>
                  عبارت <code>Download VS Code</code> را جستجو کنید و وارد سایت
                  <strong>code.visualstudio.com</strong> شوید. دقت کنید نسخه
                  حجیم Visual Studio را اشتباه دانلود نکنید.
                </li>
                <li>
                  با توجه به سیستم‌عامل خود (ویندوز، لینوکس یا مک)، نسخه مناسب
                  را دانلود کنید.
                </li>
                <li>
                  فایل نصب را اجرا کنید، قوانین را بپذیرید و روی Next کلیک کنید.
                </li>
                <li>
                  در مرحله تنظیمات، پیشنهاد می‌شود تیک گزینه‌هایی که عبارت
                  <strong>Open with Code</strong> دارند بزنید تا بتوانید با کلیک
                  راست روی هر پوشه، آن را مستقیم در VS Code باز کنید.
                </li>
              </ul>
            </section>

            <section>
              <h2>مرحله سوم: بررسی صحت نصب پایتون</h2>
              <p>
                برای اینکه مطمئن شویم پایتون درست نصب شده، باید از خط فرمان
                سیستم استفاده کنیم:
              </p>
              <ul>
                <li>
                  در ویندوز برنامه <strong>Terminal</strong> یا
                  <strong>CMD</strong> را باز کنید.
                </li>
                <li>
                  عبارت <code>python --version</code> را تایپ کرده و Enter
                  بزنید.
                </li>
                <li>
                  اگر نصب موفق بوده، نسخه نصب‌شده (مثلاً Python 3.13.7) نمایش
                  داده می‌شود.
                </li>
              </ul>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  اگر بعد از نصب با خطای
                  <code>'python' is not recognized</code> مواجه شدید، احتمالاً
                  تیک <strong>Add Python to PATH</strong> را نزده‌اید. پایتون را
                  uninstall و دوباره با آن تیک نصب کنید.
                </div>
              </div>
            </section>

            <section>
              <h2>نصب و تنظیم پایتون در لینوکس و مک</h2>
              <p>
                در اکثر سیستم‌عامل‌های مبتنی بر یونیکس مثل مک، اوبونتو و دبیان،
                پایتون ۳ به صورت پیش‌فرض نصب است. برای بررسی، ترمینال را باز
                کرده و دستور <code>python3 --version</code> را وارد کنید.
              </p>
              <p>
                اگر پایتون نصب نبود، در توزیع‌های مبتنی بر دبیان مثل اوبونتو با
                این دو دستور نصب کنید:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Terminal</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code>sudo apt update
sudo apt install python3</code></pre>
              </div>

              <h2>ترفند: اجرای پایتون ۳ فقط با دستور python در لینوکس</h2>
              <p>
                در لینوکس معمولاً دستور <code>python</code> به نسخه قدیمی ۲
                اشاره دارد و برای نسخه جدید باید <code>python3</code> تایپ کنید.
                اگر می‌خواهید با نوشتن <code>python</code> مستقیماً پایتون ۳
                اجرا شود، باید یک Alias بسازید:
              </p>
              <ul>
                <li>
                  فایل تنظیمات شِل خود را باز کنید — برای zsh:
                  <code>vi ~/.zshrc</code> یا برای bash:
                  <code>vi ~/.bashrc</code>
                </li>
                <li>
                  در انتهای فایل این خط را اضافه کنید:
                  <code>alias python='python3'</code>
                </li>
                <li>
                  فایل را ذخیره کرده و ترمینال را ببندید و دوباره باز کنید، یا
                  دستور <code>source ~/.zshrc</code> را بزنید.
                </li>
              </ul>
              <p>
                حالا با دستور <code>python --version</code> نسخه ۳ برای شما اجرا
                خواهد شد.
              </p>
            </section>

            <section>
              <h2>نتیجه‌گیری</h2>
              <p>
                در این جلسه مفسر پایتون و ویرایشگر VS Code را روی ویندوز و
                لینوکس نصب کردیم. در جلسه بعدی، نوشتن اولین خطوط کد پایتون را با
                هم شروع می‌کنیم.
              </p>
            </section>
          </div>
        </section>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <!-- ─── NAVIGATION ─── -->
        <div class="lesson-nav-btns">
          <a href="1.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">مقدمه</div>
            </div>
          </a>
          <a href="3.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">نوشتن و اجرای اولین برنامه</div>
            </div>
            <span>›</span>
          </a>
        </div>
      </main>
    </div>
    <!-- end lesson-layout -->
<?php require $root . 'includes/footer.php'; ?>
