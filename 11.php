<?php
$root        = './';
$description = 'توابع رشته‌ها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'برنامه‌ای بنویسید که یک رشته را از کاربر دریافت کرده و طول آن (تعداد کاراکترها) را با تابع مناسب در خروجی چاپ کند.',
    'hint'  => '<span class="token-text">text</span> = <span class="token-function">input</span>(<span class="token-string">"Enter text: "</span>)
<span class="token-function">print</span>(<span class="token-function">len</span>(text))',
  ],
  [
    'level' => null,
    'desc'  => 'متغیری شامل متن <code>"Learning Python"</code> بسازید و آن را تماماً به حروف بزرگ و سپس تماماً به حروف کوچک تبدیل و چاپ کنید.',
    'hint'  => '<span class="token-text">txt</span> = <span class="token-string">"Learning Python"</span>
<span class="token-function">print</span>(txt.<span class="token-function">upper</span>())
<span class="token-function">print</span>(txt.<span class="token-function">lower</span>())',
  ],
  [
    'level' => 'medium',
    'desc'  => 'در متن <code>"I love PHP"</code> با استفاده از متد جایگزینی، کلمه <code>"PHP"</code> را با <code>"Python"</code> عوض کرده و نتیجه را نمایش دهید.',
    'hint'  => '<span class="token-text">sentence</span> = <span class="token-string">"I love PHP"</span>
<span class="token-text">new_sentence</span> = sentence.<span class="token-function">replace</span>(<span class="token-string">"PHP"</span>, <span class="token-string">"Python"</span>)
<span class="token-function">print</span>(new_sentence)',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_ref_string.asp',
    'title' => 'W3Schools — Python String Methods',
    'desc'  => 'لیست کامل و پر از مثال از تمامی متدهای توکار رشته‌ها در پایتون به همراه اجرای آنلاین',
  ],
  [
    'url'   => 'https://docs.python.org/3/library/stdtypes.html#string-methods',
    'title' => 'مستندات رسمی پایتون — متدهای استاندارد نوع داده متنی',
    'desc'  => 'مرجع فنی و دقیق داکیومنت پایتون درباره رفتار و آرگومان‌های ورودی انواع متدهای رشته‌ای',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="11">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 11: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            رشته‌ها در پایتون فقط یک متن ساده نیستند؛ آن‌ها مجهز به ابزارهای بسیار قدرتمندی به نام <strong>متد (Method)</strong> و <strong>تابع (Function)</strong> هستند که اجازه می‌دهند هر تغییری که بخواهید (از شمارش کاراکترها گرفته تا بزرگ‌سازی حروف و جایگزینی کلمات) را به سادگی یک خط کد روی متن‌ها اعمال کنید.
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
                src="https://www.youtube.com/embed/dOS981jwMcM"
                title="آموزش کامل پایتون 2026 - قسمت 11: توابع و متدهای رشته ها"
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
              <a href="https://youtube.com/watch?v=dOS981jwMcM" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/gmix835/vt/frame"
                title="آموزش متدهای رشته در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/gmix835" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>تفاوت تابع (Function) و متد (Method) چیست؟</h2>
              <p>
                قبل از هر چیز باید یک تفاوت ساختاری ساده اما مهم را یاد بگیریم:
              </p>
              <ul>
                <li><strong>تابع (مثل <code>len</code>)</strong> — به صورت مستقل صدا زده می‌شود و متغیر یا رشته را به عنوان ورودی داخل پرانتزهایش دریافت می‌کند؛ مثل: <code>len(text)</code></li>
                <li><strong>متد (مثل <code>upper</code>)</strong> — اختصاصاً متعلق به یک نوع داده (اینجا رشته) است و با گذاشتن یک نقطه (<code>.</code>) بعد از نام متغیر صدا زده می‌شود؛ مثل: <code>text.upper()</code></li>
              </ul>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — به دست آوردن طول متن با تابع <code>len()</code></h2>
              <p>
                تابع <code>len</code> (مخفف length) تعداد کل کاراکترهای یک رشته (شامل حروف، اعداد، علائم نگارشی و حتی فضاهای خالی یا همان Spaceها) را محاسبه می‌کند.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">message</span> = <span class="token-string">"Hello! "</span>

<span class="token-comment"># محاسبه طول رشته (حروف + علامت تعجب + اسپیس انتها)</span>
<span class="token-text">length</span> = <span class="token-function">len</span>(message)
<span class="token-function">print</span>(length)  <span class="token-comment"># خروجی: 7</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — تغییر حالت حروف با <code>upper()</code> و <code>lower()</code></h2>
              <p>
                این دو متد پرکاربرد برای استانداردسازی متون انگلیسی استفاده می‌شوند. متد <code>upper()</code> تمام حروف را به بزرگ و متد <code>lower()</code> تمام حروف را به کوچک تبدیل می‌کند.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">user_input</span> = <span class="token-string">"Edris Ranjbar"</span>

<span class="token-comment"># تبدیل به حروف بزرگ</span>
<span class="token-function">print</span>(user_input.<span class="token-function">upper</span>())  <span class="token-comment"># خروجی: EDRIS RANJBAR</span>

<span class="token-comment"># تبدیل به حروف کوچک</span>
<span class="token-function">print</span>(user_input.<span class="token-function">lower</span>())  <span class="token-comment"># خروجی: edris ranjbar</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>رشته‌ها تغییرناپذیرند! (Immutable):</strong> جالب است بدانید که اجرای متدهایی مثل <code>()upper</code> مقدار متغیر اصلی را در حافظه تغییر نمی‌دهد، بلکه یک نسخه جدید و تغییریافته از آن ایجاد می‌کند. برای ذخیره دائمی تغییرات، باید حاصل را دوباره در متغیر بریزید: <code>text = text.upper()</code>
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — جایگزینی و شمارش کلمات با <code>replace()</code> و <code>count()</code></h2>
              <p>
                متد <code>replace()</code> دو ورودی می‌گیرد: کلمه‌ای که می‌خواهید عوض شود و کلمه جدید. متد <code>count()</code> هم تعداد تکرار یک کاراکتر یا عبارت را در متن می‌شمارد.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">text</span> = <span class="token-string">"I like apples, apples are great."</span>

<span class="token-comment"># جایگزینی کلمه apples با oranges</span>
<span class="token-text">new_text</span> = text.<span class="token-function">replace</span>(<span class="token-string">"apples"</span>, <span class="token-string">"oranges"</span>)
<span class="token-function">print</span>(new_text)  <span class="token-comment"># خروجی: I like oranges, oranges are great.</span>

<span class="token-comment"># شمارش تعداد تکرار کلمه "apples" در متن اصلی</span>
<span class="token-text">count_apples</span> = text.<span class="token-function">count</span>(<span class="token-string">"apples"</span>)
<span class="token-function">print</span>(count_apples)  <span class="token-comment"># خروجی: 2</span></code></pre>
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
          <a href="10.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 10: کار با رشته‌ها</div>
            </div>
          </a>
          <a href="12.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 12: ساختارهای شرطی</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
