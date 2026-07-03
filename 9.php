<?php
$root        = './';
$description = 'گرفتن ورودی از کاربر';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'برنامه‌ای بنویسید که نام کاربر را دریافت کرده و سپس پیام خوش‌آمدگویی به صورت <code>Hello Name</code> چاپ کند.',
    'hint'  => '<span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Enter your name: "</span>)
<span class="token-function">print</span>(<span class="token-string">"Hello"</span>, name)',
  ],
  [
    'level' => null,
    'desc'  => 'دو عدد را از کاربر دریافت کرده، آن‌ها را به عدد صحیح (Integer) تبدیل کنید و حاصل‌جمع آن‌ها را چاپ کنید.',
    'hint'  => '<span class="token-text">num1</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"Number 1: "</span>))
<span class="token-text">num2</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"Number 2: "</span>))
<span class="token-function">print</span>(num1 + num2)',
  ],
  [
    'level' => 'medium',
    'desc'  => 'سن کاربر را به عنوان ورودی دریافت کنید و با استفاده از عملگرهای مقایسه‌ای، بررسی کنید آیا سن او بزرگتر یا مساوی ۱۸ است یا خیر (خروجی باید <code>True</code> یا <code>False</code> باشد).',
    'hint'  => '<span class="token-text">age</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"Enter your age: "</span>))
<span class="token-function">print</span>(age >= <span class="token-number">18</span>)',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_user_input.asp',
    'title' => 'W3Schools — Python User Input',
    'desc'  => 'آموزش ساده و کاربردی نحوه استفاده از تابع input در نسخه‌های مختلف پایتون',
  ],
  [
    'url'   => 'https://docs.python.org/3/library/functions.html#input',
    'title' => 'مستندات رسمی پایتون — تابع built-in input',
    'desc'  => 'توضیحات فنی و دقیق داکیومنت پایتون درباره رفتار استاندارد تابع دریافت ورودی و مدیریت خط انتهای رشته',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="9">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 9: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            تا اینجای کار تمام مقادیری که در برنامه‌هامون استفاده می‌کردیم رو خودمون دستی وارد کد می‌کردیم. اما یک برنامه واقعی باید بتونه با کاربر تعامل داشته باشه! توی این جلسه یاد می‌گیریم چطور با تابع <strong><code dir="ltr">input()</code></strong> اطلاعات رو از کاربر بگیریم و چالش‌های تغییر نوع داده‌ها رو حل کنیم.
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
                src="https://www.youtube.com/embed/1Dbi2mSES3w"
                title="آموزش کامل پایتون 2026 - قسمت 9: گرفتن ورودی از کاربر"
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
              <a href="https://youtube.com/watch?v=1Dbi2mSES3w" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/APARAT_HASH/vt/frame"
                title="آموزش گرفتن ورودی از کاربر در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/APARAT_HASH" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>تابع <code>input()</code> چطور کار می‌کند؟</h2>
              <p>
                وقتی مفسر پایتون به دستور <code>input()</code> می‌رسه، اجرای کُد رو کاملاً متوقف می‌کنه و منتظر می‌مونه تا کاربر متنی رو تایپ کنه و کلید <kbd>Enter</kbd> رو فشار بده. پیامی که داخل پرانتز این تابع می‌نویسید، به عنوان راهنما به کاربر نشون داده میشه.
              </p>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — دریافت متن ساده (رشته)</h2>
              <p>
                در ساده‌ترین حالت، ورودی گرفته شده رو مستقیماً داخل یک متغیر بریزید و ازش استفاده کنید.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># دریافت رنگ مورد علاقه کاربر</span>
<span class="token-text">favorite_color</span> = <span class="token-function">input</span>(<span class="token-string">"What is your favorite color? "</span>)

<span class="token-comment"># چاپ نتیجه تعاملی</span>
<span class="token-function">print</span>(<span class="token-string">"Wow,"</span>, favorite_color, <span class="token-string">"is a great choice!"</span>)</code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — چالش طلایی (ورودی‌ها همیشه رشته هستند!)</h2>
              <p>
                یک قانون تغییر ناپذیر در پایتون وجود داره: <strong>خروجی تابع <code>input()</code> همیشه و تحت هر شرایطی یک رشته (String) است.</strong> حتی اگر کاربر عدد ۵ را وارد کند، پایتون آن را به صورت متنی یعنی <code>"5"</code> می‌بیند. به مثال زیر و خطای معروفی که رخ می‌دهد دقت کنید:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-function">input</span>(<span class="token-string">"Enter your age: "</span>)  <span class="token-comment"># مثلاً کاربر می‌نویسد 20</span>
<span class="token-text">next_year</span> = age + <span class="token-number">1</span>           <span class="token-comment"># ❌ خطا! نمی‌توان یک رشته را با عدد جمع کرد</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>خطای نوع داده (TypeError):</strong> در کد بالا ارور <code>TypeError: can only concatenate str (not "int") to str</code> رخ می‌دهد؛ چون پایتون فکر می‌کند شما می‌خواهید کلمه "20" را با عدد ۱ ریاضی جمع کنید!
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — حل مشکل با تغییر نوع داده (Type Casting)</h2>
              <p>
                برای اینکه بتونیم روی اعداد ورودی محاسبات ریاضی انجام بدیم، باید کل دستور <code>input()</code> رو داخل توابع تبدیل‌کننده مثل <code>int()</code> (برای اعداد صحیح) یا <code>float()</code> (برای اعداد اعشاری) کپسوله‌سازی کنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># تبدیل همزمان ورودی به عدد صحیح</span>
<span class="token-text">age</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"Enter your age: "</span>))

<span class="token-text">next_year</span> = age + <span class="token-number">1</span>
<span class="token-function">print</span>(<span class="token-string">"Next year you will be:"</span>, next_year)  <span class="token-comment"># بدون خطا اجرا می‌شود</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>نکته پرانتزها:</strong> به تعداد پرانتزهای باز و بسته شده در دستور <code>int(input(...))</code> دقت کنید. همیشه به تعداد توابعی که باز می‌کنید، باید در انتها پرانتزها رو به درستی ببندید تا برنامه با خطای ساختاری مواجه نشه.
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
          <a href="8.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 8: عملگرهای مقایسه‌ای</div>
            </div>
          </a>
          <a href="10.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 10: عملگرهای منطقی</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
