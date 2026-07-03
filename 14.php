<?php
$root        = './';
$description = 'تاپل‌ها (Tuples)';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'یک تاپل شامل ۳ کارت اعتباری یا نام سه شهر بزرگ ایران بسازید و سپس آخرین آیتم آن را با استفاده از ایندکس منفی چاپ کنید.',
    'hint'  => '<span class="token-text">cities</span> = (<span class="token-string">"Tehran"</span>, <span class="token-string">"Mashhad"</span>, <span class="token-string">"Isfahan"</span>)
<span class="token-function">print</span>(cities[-<span class="token-number">1</span>])',
  ],
  [
    'level' => null,
    'desc'  => 'یک تاپل از اعداد دلخواه بسازید که در آن عدد <code>5</code> چند بار تکرار شده باشد. سپس با استفاده از متد <code>count()</code> تعداد تکرار عدد ۵ را پیدا کرده و چاپ کنید.',
    'hint'  => '<span class="token-text">numbers</span> = (<span class="token-number">1</span>, <span class="token-number">5</span>, <span class="token-number">3</span>, <span class="token-number">5</span>, <span class="token-number">7</span>, <span class="token-number">5</span>)
<span class="token-function">print</span>(numbers.<span class="token-function">count</span>(<span class="token-number">5</span>))',
  ],
  [
    'level' => 'medium',
    'desc'  => 'یک تاپل دو عضوی بسازید. تلاش کنید یکی از اعضای آن را تغییر دهید تا خطای پایتون را در ترمینال ببینید. سپس در کامنت بنویسید چه خطایی دریافت کردید.',
    'hint'  => '<span class="token-text">my_tuple</span> = (<span class="token-number">10</span>, <span class="token-number">20</span>)
<span class="token-comment"># my_tuple[0] = 100  # ❌ TypeError: \'tuple\' object does not support item assignment</span>',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_tuples.asp',
    'title' => 'W3Schools — Python Tuples',
    'desc'  => 'آموزش کامل ساختار داده تاپل، ویژگی‌ها و تفاوت‌های کلیدی آن با لیست در پایتون',
  ],
  [
    'url'   => 'https://docs.python.org/3/tutorial/datastructures.html#tuples-and-sequences',
    'title' => 'مستندات رسمی پایتون — تاپل‌ها و سکوئنس‌ها',
    'desc'  => 'توضیحات عمیق و فنی داکیومنت پایتون درباره ساختار Tuple و کاربرد آن در پکینگ و آنپکینگ داده‌ها',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="14">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 14: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            در جلسه قبل با لیست‌ها آشنا شدیم. پایتون یک ساختار داده بسیار شبیه به لیست دارد که به آن <strong>تاپل (Tuple)</strong> می‌گویند. تاپل‌ها هم مجموعه‌ای از داده‌ها را در خود نگه می‌دارند، اما با یک تفاوت طلایی و بسیار مهم: آن‌ها <strong>تغییرناپذیر (Immutable)</strong> هستند! در این جلسه یاد می‌گیریم کجای پروژه باید به جای لیست از تاپل استفاده کنیم.
          </p>
        </div>

        <!-- ─── VIDEOS ─── -->
        <section class="lesson-section" id="videos">
          <div class="section-label">
            <span class="section-label-icon">🎬</span>
            ویدیوهای آموزشی
          </div>

          <div class="video-tabs">
            <button class="video-tab active" data-target="youtube-player">یوتیوب</button>
            <button class="video-tab" data-target="aparat-player">آپارات</button>
          </div>

          <!-- YOUTUBE -->
          <div class="video-player-wrap active" id="youtube-player">
            <div class="video-embed">
              <iframe
                src="https://www.youtube.com/embed/KWBj9Pa5gNo"
                title="آموزش کامل پایتون 2026 - قسمت 14: تاپل ها"
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
              <a href="https://youtube.com/watch?v=KWBj9Pa5gNo" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/djjfbhb/vt/frame"
                title="آموزش تاپل‌ها (Tuples) در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/djjfbhb" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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

            <!-- ── CONCEPT ── -->
            <section>
              <h2>تاپل (Tuple) چیست و چه فرقی با لیست دارد؟</h2>
              <p>
                تاپل یک مجموعه **مرتب‌شده (Ordered)** از داده‌هاست. بزرگترین تفاوت آن با لیست این است که لیست‌ها داخل کروشه <code>[]</code> نوشته می‌شوند اما تاپل‌ها داخل پرانتز <code>()</code> قرار می‌گیرند.
              </p>
              <p>
                تفاوت دوم و اصلی در موضوع امنیت داده‌هاست؛ لیست‌ها تغییرپذیرند (Mutable) یعنی می‌توانید عضوی را حذف یا اضافه کنید. اما تاپل‌ها پس از تعریف شدن، به هیچ وجه قابل تغییر، حذف یا اضافه کردن نیستند (Immutable).
              </p>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — ساخت و دسترسی به اعضای تاپل</h2>
              <p>
                دسترسی به اعضای یک تاپل دقیقاً مثل لیست با استفاده از شماره ایندکس (که از صفر شروع می‌شود) انجام می‌گیرد.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># ساخت یک تاپل با پرانتز</span>
<span class="token-text">coordinates</span> = (<span class="token-number">35.6892</span>, <span class="token-number">51.3890</span>)

<span class="token-comment"># دسترسی به آیتم‌ها از طریق ایندکس</span>
<span class="token-function">print</span>(<span class="token-string">"Latitude:"</span>, coordinates[<span class="token-number">0</span>])   <span class="token-comment"># خروجی: 35.6892</span>
<span class="token-function">print</span>(<span class="token-string">"Longitude:"</span>, coordinates[<span class="token-number">1</span>])  <span class="token-comment"># خروجی: 51.3890</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — چالش تغییرناپذیری (بقای داده‌ها)</h2>
              <p>
                اگر تلاش کنید مقداری را در تاپل بازنویسی کنید یا متدهایی مثل <code>append()</code> را روی آن صدا بزنید، با خطای مفسر مواجه خواهید شد. پایتون از این ویژگی برای داده‌هایی استفاده می‌کند که می‌خواهد مطمئن باشد در طول اجرای برنامه دست‌نخورده باقی می‌مانند (مثل روزهای هفته یا کدهای وضعیت شبکه).
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">days_of_week</span> = (<span class="token-string">"Sat"</span>, <span class="token-string">"Sun"</span>, <span class="token-string">"Mon"</span>)

<span class="token-comment"># ❌ تلاش برای تغییر مقدار جایگاه اول</span>
days_of_week[<span class="token-number">0</span>] = <span class="token-string">"Friday"</span>  <span class="token-comment"># ارور رخ می‌دهد!</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>خطای معروف TypeError:</strong> اجرای کد بالا خطای <code>TypeError: 'tuple' object does not support item assignment</code> را ایجاد می‌کند. این خطا یعنی ساختار تاپل اجازه انتساب یا تغییر مستقیم مقادیر را نمی‌دهد.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — ترفند تاپل تک‌عضوی و متدهای محدود</h2>
              <p>
                اگر می‌خواهید تاپلی بسازید که فقط **یک عضو** دارد، یک قانون عجیب در پایتون وجود دارد: باید حتماً بعد از عضو اول یک ویرگول (کاما) بگذارید! در غیر این صورت پایتون آن را یک متغیر معمولی (رشته یا عدد) فرض می‌کند. همچنین تاپل‌ها به دلیل ثابت بودن، فقط دو متد <code>count()</code> و <code>index()</code> را دارند.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># اشتباه: این یک رشته معمولی است، نه تاپل!</span>
<span class="token-text">wrong_tuple</span> = (<span class="token-string">"Apple"</span>)

<span class="token-comment"># درست: گذاشتن کاما باعث ایجاد تاپل تک‌عضوی می‌شود</span>
<span class="token-text">correct_tuple</span> = (<span class="token-string">"Apple"</span>,)

<span class="token-comment"># پیدا کردن ایندکس یک مقدار در تاپل</span>
<span class="token-text">languages</span> = (<span class="token-string">"Python"</span>, <span class="token-string">"PHP"</span>, <span class="token-string">"JS"</span>)
<span class="token-text">php_index</span> = languages.<span class="token-function">index</span>(<span class="token-string">"PHP"</span>)
<span class="token-function">print</span>(php_index)  <span class="token-comment"># خروجی: 1</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>چه زمانی از تاپل استفاده کنیم؟</strong> هر زمان که مجموعه‌ای از داده‌ها دارید که مطمئن هستید نیازی به اصلاح یا تغییر ندارند، از تاپل استفاده کنید. تاپل‌ها به دلیل ساختار ثابتشان در حافظه، سرعت پردازش بالاتری نسبت به لیست‌ها دارند و مصرف رم بهینه‌تری ارائه می‌دهند.
                </div>
              </div>
            </section>

          </div>
        </section>

        <!-- ─── EXERCISES ─── -->
         <?php require_once $root . 'includes/exercises.php'; ?>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <!-- ─── NAVIGATION ─── -->
        <div class="lesson-nav-btns">
          <a href="13.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 13: لیست‌ها (Lists)</div>
            </div>
          </a>
          <a href="15.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 15: مجموعه‌ها (Sets)</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
