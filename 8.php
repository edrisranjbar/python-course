<?php
$root        = './';
$description = 'عملگرهای مقایسه‌ای';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'دو متغیر با مقادیر ۱۲ و ۱۵ بسازید. بررسی کنید آیا متغیر اول بزرگتر از متغیر دوم است یا خیر و حاصل را چاپ کنید.',
    'hint'  => '<span class="token-text">a</span> = <span class="token-number">12</span>
<span class="token-text">b</span> = <span class="token-number">15</span>
<span class="token-function">print</span>(a > b)  <span class="token-comment"># خروجی: False</span>',
  ],
  [
    'level' => null,
    'desc'  => 'با استفاده از عملگر نامساوی (<code>!=</code>)، بررسی کنید آیا عدد ۵ با عدد ۵- نامساوی است یا خیر و خروجی را چاپ کنید.',
    'hint'  => '<span class="token-function">print</span>(<span class="token-number">5</span> != -<span class="token-number">5</span>)  <span class="token-comment"># خروجی: True</span>',
  ],
  [
    'level' => 'medium',
    'desc'  => 'بررسی کنید که آیا حاصل کُد <code>"Python" == "python"</code> برابر با <code>True</code> می‌شود یا <code>False</code>؟ دلیل آن را با کامنت بنویسید.',
    'hint'  => '<span class="token-function">print</span>(<span class="token-string">"Python"</span> == <span class="token-string">"python"</span>)  <span class="token-comment"># خروجی: False (چون پایتون به حروف بزرگ و کوچک حساس است)</span>',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_operators.asp',
    'title' => 'W3Schools — Python Comparison Operators',
    'desc'  => 'مرجع و ابزار تمرین آنلاین برای انواع عملگرهای مقایسه‌ای در زبان پایتون',
  ],
  [
    'url'   => 'https://realpython.com/python-operators-expressions/',
    'title' => 'Real Python — Operators and Expressions in Python',
    'desc'  => 'راهنمای جامع و عمیق درباره مفاهیم عملگرها و نحوه ارزیابی عبارات منطقی و مقایسه‌ای',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="8">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 8: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            وقتی می‌خواهیم در برنامه‌نویسی تصمیم‌گیری کنیم، نیاز داریم مقادیر مختلف را با هم بسنجیم. <strong>عملگرهای مقایسه‌ای (Comparison Operators)</strong> ابزارهایی هستند که دو مقدار را با هم مقایسه کرده و در نهایت یک پاسخ بله (<code>True</code>) یا خیر (<code>False</code>) به ما برمی‌گردانند.
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
                src="https://www.youtube.com/embed/zFx-wmvDeKs"
                title="آموزش کامل پایتون 2026 - قسمت 8: عملگرهای مقایسه‌ای"
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
              <a href="https://youtube.com/watch?v=zFx-wmvDeKs" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/sqw70kj/vt/frame"
                title="آموزش عملگرهای مقایسه‌ای در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/sqw70kj" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>خروجی عملگرهای مقایسه‌ای چیست؟</h2>
              <p>
                نکته طلایی این جلسه این است که حاصل هر نوع مقایسه‌ای در پایتون، همیشه یک داده از نوع <strong>بولیین (Boolean)</strong> است؛ یعنی یا <code>True</code> (درست) است یا <code>False</code> (غلط). ما از این خروجی‌ها بعداً در دستورات شرطی استفاده‌های حیاتی خواهیم کرد.
              </p>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — عملگر مساوی (<code>==</code>) و نامساوی (<code>!=</code>)</h2>
              <p>
                حواستان باشد که یک مساوی (<code>=</code>) برای مقداردهی به متغیرهاست. برای اینکه بررسی کنیم آیا دو چیز با هم برابر هستند، باید از دو تا مساوی پشت سر هم (<code>==</code>) استفاده کنیم. علامت جفتِ آن یعنی نامساوی هم به صورت علامت تعجب و مساوی (<code>!=</code>) نوشته می‌شود.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">x</span> = <span class="token-number">5</span>
<span class="token-text">y</span> = <span class="token-number">8</span>

<span class="token-comment"># آیا x با y برابر است؟</span>
<span class="token-function">print</span>(x == y)  <span class="token-comment"># خروجی: False</span>

<span class="token-comment"># آیا x با y نامساوی است؟</span>
<span class="token-function">print</span>(x != y)  <span class="token-comment"># خروجی: True</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — عملگرهای بزرگتر و کوچکتر (<code>&gt;</code> و <code>&lt;</code>)</h2>
              <p>
                این عملگرها دقیقاً مثل ریاضیات مدرسه کار می‌کنند و سمت چپ را با سمت راست می‌سنجند.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-number">20</span>

<span class="token-comment"># آیا سن بزرگتر از ۱۸ است؟</span>
<span class="token-function">print</span>(age > <span class="token-number">18</span>)  <span class="token-comment"># خروجی: True</span>

<span class="token-comment"># آیا سن کوچکتر از ۱۵ است؟</span>
<span class="token-function">print</span>(age < <span class="token-number">15</span>)  <span class="token-comment"># خروجی: False</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — بزرگتر یا مساوی و کوچکتر یا مساوی (<code>&gt;=</code> و <code>&lt;=</code>)</h2>
              <p>
                اگر بخواهیم خودِ آن عدد مرز هم شامل مقایسه شود، علامت مساوی را بعد از علامت‌های بزرگتر یا کوچکتر قرار می‌دهیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">score</span> = <span class="token-number">10</span>

<span class="token-comment"># آیا امتیاز بزرگتر یا مساوی ۱۰ است؟</span>
<span class="token-function">print</span>(score >= <span class="token-number">10</span>)  <span class="token-comment"># خروجی: True (چون خود ۱۰ با ۱۰ برابر است)</span>

<span class="token-comment"># آیا امتیاز کوچکتر یا مساوی ۹ است؟</span>
<span class="token-function">print</span>(score <= <span class="token-number">9</span>)   <span class="token-comment"># خروجی: False</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>نکته کاربردی:</strong> ترتیب نوشتن در عملگرهای ترکیبی مهم است؛ همیشه علامت مساوی باید در سمت راست قرار بگیرد (<code>&gt;=</code>). اگر بنویسید <code>=&gt;</code> برنامه با خطای گرامری مواجه خواهد شد.
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
          <a href="7.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 7: عملگرهای ریاضی</div>
            </div>
          </a>
          <a href="9.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 9: عملگرهای منطقی</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
