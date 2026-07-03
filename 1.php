<?php
$root        = './';
$description = 'مقدمه';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$references = [
  [
    'url'   => 'https://docs.python.org/3/tutorial/introduction.php',
    'title' => 'مستندات رسمی پایتون',
    'desc'  => 'توضیح کامل متغیرها و انواع داده در مستندات رسمی Python.org',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/',
    'title' => 'وب سایت W3Schools',
    'desc'  => 'آموزش ساده و تعاملی با امکان اجرای کد آنلاین',
  ],
];

require_once $root . 'includes/head.php';
require_once $root . 'includes/nav.php';
?>

    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت ۱: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            سلام! من <strong>ادریس رنجبر</strong> هستم و به قسمت اول از دوره
            جامع «آموزش پایتون از صفر» خوش آمدید. این دوره کاملاً کاربردی، عملی
            و پروژه‌محور طراحی شده است. اگر تا انتهای این مسیر با من همراه
            باشید، زبان برنامه‌نویسی پایتون را به روشی کاربردی و عملی یاد خواهید
            گرفت.
          </p>
        </div>

        <!-- ─── VIDEOS ─── -->
        <section class="lesson-section" id="videos">
          <div class="section-label">
            <span class="section-label-icon">🎬</span>
            ویدیوهای آموزشی
          </div>

          <!-- VIDEO TABS -->
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
                src="https://www.youtube.com/embed/gKfQaUen7tQ"
                title="آموزش پایتون ۲۰۲۶: از صفر مطلق تا اولین درآمد! - قسمت ۱: مقدمه"
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
                href="https://www.youtube.com/watch?v=gKfQaUen7tQ"
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
                src="https://www.aparat.com/video/video/embed/videohash/hzhs404/vt/frame"
                allowfullscreen="true"
                webkitallowfullscreen="true"
                mozallowfullscreen="true"
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a
                href="https://aparat.com/v/hzhs404"
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
              <h2>در این دوره پایتون چه پروژه‌هایی می‌سازیم؟</h2>
              <p>
                ما در این دوره قصد داریم کارهای تکراری و دستی را خودکار کنیم و
                با هم پروژه‌های جذابی را پیاده‌سازی کنیم. برخی از این پروژه‌ها
                عبارتند از:
              </p>
              <ul>
                <li>ساخت ربات تلگرام</li>
                <li>توسعه بک‌اند (Back-end) وب‌سایت</li>
                <li>نوشتن اسکریپت‌های استخراج داده از وب (Web Scraping)</li>
                <li>طراحی ربات‌های خودکارساز برای کارهای روزمره</li>
              </ul>
              <p>
                <strong>یک نکته مهم:</strong> برای موفقیت و رسیدن به درآمد در
                این دوره، تنها تماشای ویدیوها کافی نیست. باید همگام با من پیش
                بیایید، کدهایی که می‌نویسم را اجرا کنید و تمرین‌ها را با دقت
                انجام دهید.
              </p>
            </section>

            <section>
              <h2>چرا در ارائه‌ها از زبان انگلیسی استفاده شده است؟</h2>
              <p>
                شاید بپرسید چرا متن ارائه‌های این دوره انگلیسی است؟ برنامه‌نویسی
                یک مهارت بین‌المللی است. شما برای مطالعه مستندات
                (Documentation)، کار با فریم‌ورک‌های جدید، بررسی مشکلات امنیتی و
                خواندن باگ‌ریپورت‌ها باید به زبان انگلیسی تسلط نسبی داشته باشید.
                این کار به شما کمک می‌کند تا در آینده بتوانید پروژه‌های واقعی را
                برای وب‌سایت‌های خارجی انجام دهید و پیشرفت چشمگیری داشته باشید.
              </p>
            </section>

            <section>
              <h2>معرفی مدرس دوره: ادریس رنجبر</h2>
              <p>
                من <strong>ادریس رنجبر</strong>، توسعه‌دهنده بک‌اند (Back-end
                Developer) هستم. بیش از ۱۰ سال سابقه برنامه‌نویسی دارم و در حال
                حاضر هم‌بنیان‌گذار تیم «آی‌تدبیر» در جزیره قشم هستم که در زمینه
                توسعه نرم‌افزار، طراحی وب و خدمات IT فعالیت می‌کنیم.
              </p>
            </section>

            <section>
              <h2>چرا باید زبان برنامه‌نویسی پایتون را یاد بگیریم؟</h2>
              <p>
                پایتون یکی از محبوب‌ترین و پرکاربردترین زبان‌های برنامه‌نویسی در
                دنیاست. دلایل زیر پایتون را به یک انتخاب بی‌نظیر برای شروع
                برنامه‌نویسی تبدیل می‌کند:
              </p>
              <ul>
                <li>
                  <strong>یادگیری بسیار آسان (Easy to Learn):</strong> در مقایسه
                  با زبان‌هایی مانند Java ،C یا #C، یادگیری پایتون بسیار ساده‌تر
                  است. در پایتون درگیر مفاهیم پیچیده نمی‌شوید و مفسر پایتون
                  بسیاری از کارها را به صورت خودکار انجام می‌دهد.
                </li>
                <li>
                  <strong>کاربرد چندمنظوره (General Purpose):</strong> پایتون در
                  حوزه‌های متنوعی مانند توسعه وب، هوش مصنوعی (AI)، یادگیری ماشین
                  (Machine Learning)، تحلیل داده، اینترنت اشیا (IoT) و
                  خودکارسازی کاربرد فراوان دارد.
                </li>
                <li>
                  <strong>جامعه کاربری بسیار بزرگ (Huge Community):</strong>
                  پایتون جامعه کاربری عظیمی دارد و به راحتی می‌توانید پاسخ
                  سوالات و مشکلات کدهای خود را حتی در انجمن‌های فارسی‌زبان پیدا
                  کنید.
                </li>
                <li>
                  <strong>بازار کار عالی و تقاضای بالا (High Demand):</strong>
                  فرصت‌های شغلی بسیار زیادی برای برنامه‌نویسان پایتون در ایران و
                  سراسر جهان وجود دارد و به اصطلاح زبانی بسیار روی بورس است.
                </li>
              </ul>
              <p>
                <em>نکته:</em> اگر هدف اصلی شما ساخت اپلیکیشن‌های موبایل است،
                پایتون بهترین گزینه نیست و بهتر است به سراغ فریم‌ورک‌هایی مثل
                فلاتر (Flutter) یا زبان جاوا بروید.
              </p>
            </section>

            <section>
              <h2>پیش‌نیازهای شرکت در دوره آموزش پایتون</h2>
              <p>برای شروع این دوره تنها به سه مورد نیاز دارید:</p>
              <ul>
                <li>
                  <strong>مهارت‌های اولیه کار با کامپیوتر:</strong> در حد
                  وب‌گردی و استفاده از اینترنت.
                </li>
                <li>
                  <strong>لپ‌تاپ یا کامپیوتر (PC):</strong> کدنویسی با موبایل
                  اصلاً توصیه نمی‌شود. برای یادگیری پایتون در سطح مقدماتی، به
                  سیستم قدرتمندی نیاز ندارید و هر لپ‌تاپ یا کامپیوتر معمولی
                  پاسخگوی نیاز شما خواهد بود.
                </li>
                <li>
                  <strong>انگیزه و تمرین مستمر:</strong> برنامه‌نویسی با تماشا
                  کردن یاد گرفته نمی‌شود. تمرین مداوم کلید تسلط و حرفه‌ای شدن
                  شماست.
                </li>
              </ul>
            </section>

            <section>
              <h2>اهداف و دستاوردهای این دوره آموزشی</h2>
              <ul>
                <li>
                  <strong>درک مفاهیم پایه‌ای:</strong> یادگیری اصولی سینتکس
                  پایتون که مسیر یادگیری سایر زبان‌های برنامه‌نویسی را نیز
                  برایتان هموار می‌کند.
                </li>
                <li>
                  <strong>انجام پروژه‌های واقعی:</strong> پیاده‌سازی تمرین‌های
                  عملی برای تسلط کامل به مباحث.
                </li>
                <li>
                  <strong>کار با داده‌ها (Data):</strong> درک نحوه دریافت،
                  پردازش و ذخیره‌سازی اطلاعات که قلب تپنده تمام نرم‌افزارهاست.
                </li>
                <li>
                  <strong>حل مسائل واقعی:</strong> یاد می‌گیرید چگونه کارهای
                  روتین را با کدنویسی حل کنید؛ مثلاً ساخت اسکریپت با کتابخانه
                  سلنیوم (Selenium) برای فعالیت خودکار در شبکه‌های اجتماعی و
                  وبلاگ‌ها.
                </li>
              </ul>
            </section>
          </div>
        </section>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <!-- ─── NAVIGATION ─── -->
        <div class="lesson-nav-btns">
          <a href="#" class="lesson-nav-btn lesson-nav-prev disabled">
            <span>&LeftAngleBracket;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">—</div>
            </div>
          </a>
          <a href="2.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">راه‌اندازی پیش‌نیازها</div>
            </div>
            <span>&RightAngleBracket;</span>
          </a>
        </div>
      </main>
    </div>

<?php require $root . 'includes/footer.php'; ?>
