<?php
$root        = './';
$description = 'لیست‌ها (Lists)';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'یک لیست شامل نام سه رنگ مورد علاقه خود بسازید. سپس با استفاده از ایندکس (Index)، رنگ دوم لیست را در خروجی چاپ کنید.',
    'hint'  => '<span class="token-text">colors</span> = [<span class="token-string">"Red"</span>, <span class="token-string">"Green"</span>, <span class="token-string">"Blue"</span>]
<span class="token-function">print</span>(colors[<span class="token-number">1</span>])',
  ],
  [
    'level' => null,
    'desc'  => 'با استفاده از متد <code>append()</code> یک رنگ جدید به انتهای لیست بالا اضافه کنید و سپس کل لیست را چاپ کنید.',
    'hint'  => '<span class="token-text">colors</span>.<span class="token-function">append</span>(<span class="token-string">"Yellow"</span>)
<span class="token-function">print</span>(colors)',
  ],
  [
    'level' => 'medium',
    'desc'  => 'رنگ اول لیست را با یک رنگ دیگر جایگزین کنید (تغییر مقدار) و سپس تعداد کل آیتم‌های لیست را با تابع مناسب نمایش دهید.',
    'hint'  => '<span class="token-text">colors</span>[<span class="token-number">0</span>] = <span class="token-string">"Black"</span>
<span class="token-function">print</span>(<span class="token-function">len</span>(colors))',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_lists.asp',
    'title' => 'W3Schools — Python Lists',
    'desc'  => 'آموزش جامع لیست‌ها در پایتون، نحوه دسترسی به آیتم‌ها و تغییر آن‌ها به زبان ساده',
  ],
  [
    'url'   => 'https://docs.python.org/3/tutorial/datastructures.html#more-on-lists',
    'title' => 'مستندات رسمی پایتون — ساختار داده لیست‌ها',
    'desc'  => 'مرجع تخصصی داکیومنت پایتون درباره متدهای پیشرفته لیست‌ها مانند insert, remove, pop و غیره',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="13">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 13: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            تا به اینجا هر متغیری که می‌ساختیم فقط می‌توانست یک مقدار (مثل یک عدد یا یک متن) را در خود ذخیره کند. اما اگر بخواهیم نام ۱۰۰ دانش‌آموز را ذخیره کنیم چه؟ در این جلسه با <strong>لیست‌ها (Lists)</strong> آشنا می‌شویم که به ما اجازه می‌دهند مجموعه‌ای از مقادیر را درون یک متغیرِ واحد نگهداری کنیم.
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
                src="https://www.youtube.com/embed/0LKww5R_0mA"
                title="آموزش کامل پایتون 2026 - قسمت 13: لیست ها"
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
              <a href="https://youtube.com/watch?v=0LKww5R_0mA" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/efpea68/vt/frame"
                title="آموزش لیست‌ها در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/efpea68" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>ساخت و دسترسی به مقادیر یک لیست</h2>
              <p>
                لیست‌ها در پایتون با استفاده از براکت یا کروشه <code>[]</code> ساخته می‌شوند و مقادیر داخل آن‌ها با کاما <code>,</code> از هم جدا می‌شوند. لیست‌ها دارای <strong>ایندکس (Index)</strong> هستند؛ یعنی هر آیتم شماره جایگاه مخصوص به خود را دارد که از <code>0</code> شروع می‌شود.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># ساخت یک لیست از میوه‌ها</span>
<span class="token-text">fruits</span> = [<span class="token-string">"Apple"</span>, <span class="token-string">"Banana"</span>, <span class="token-string">"Cherry"</span>]

<span class="token-comment"># چاپ کل لیست</span>
<span class="token-function">print</span>(fruits)  <span class="token-comment"># خروجی: ['Apple', 'Banana', 'Cherry']</span>

<span class="token-comment"># دسترسی به آیتم اول (ایندکس 0)</span>
<span class="token-function">print</span>(fruits[<span class="token-number">0</span>])  <span class="token-comment"># خروجی: Apple</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>لیست‌ها تغییرپذیرند (Mutable)</h2>
              <p>
                برخلاف رشته‌ها که نمی‌توانستیم کاراکترهایشان را مستقیماً تغییر دهیم، در لیست‌ها به راحتی می‌توانیم مقادیر جدید اضافه کنیم یا مقادیر قبلی را تغییر دهیم. متد <code>append()</code> رایج‌ترین روش برای اضافه کردن یک آیتم به انتهای لیست است.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">cars</span> = [<span class="token-string">"BMW"</span>, <span class="token-string">"Benz"</span>]

<span class="token-comment"># اضافه کردن آیتم جدید به انتهای لیست</span>
cars.<span class="token-function">append</span>(<span class="token-string">"Ford"</span>)
<span class="token-function">print</span>(cars)  <span class="token-comment"># خروجی: ['BMW', 'Benz', 'Ford']</span>

<span class="token-comment"># تغییر مقدار دومین آیتم (ایندکس 1)</span>
cars[<span class="token-number">1</span>] = <span class="token-string">"Audi"</span>
<span class="token-function">print</span>(cars)  <span class="token-comment"># خروجی: ['BMW', 'Audi', 'Ford']</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>انواع داده در یک لیست</h2>
              <p>
                در بسیاری از زبان‌های برنامه‌نویسی، لیست‌ها (یا آرایه‌ها) فقط می‌توانند یک نوع داده (مثلاً فقط عدد یا فقط متن) ذخیره کنند. اما در پایتون یک لیست می‌تواند ترکیبی از اعداد، رشته‌ها، مقادیر منطقی (True/False) و حتی لیست‌های دیگر باشد! همچنین می‌توانیم از تابع <code>len()</code> برای دریافت تعداد آیتم‌های لیست استفاده کنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># لیستی با انواع مختلف داده‌ها</span>
<span class="token-text">mixed_list</span> = [<span class="token-number">10</span>, <span class="token-string">"Hello"</span>, <span class="token-keyword">True</span>, <span class="token-number">3.14</span>]

<span class="token-comment"># تعداد آیتم‌های لیست را نمایش می‌دهد</span>
<span class="token-text">list_length</span> = <span class="token-function">len</span>(mixed_list)

<span class="token-function">print</span>(f<span class="token-string">"This list has {list_length} items."</span>)  <span class="token-comment"># خروجی: This list has 4 items.</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>ایندکس‌های منفی:</strong> در پایتون می‌توانید از ایندکس منفی هم استفاده کنید. مثلاً <code>[-1]</code> به معنای <strong>آخرین</strong> آیتم لیست، و <code>[-2]</code> به معنای یکی مانده به آخر است. این ترفند برای زمان‌هایی که طول لیست را نمی‌دانید بسیار کاربردی است.
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
          <a href="12.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 12: فرمت کردن رشته‌ها</div>
            </div>
          </a>
          <a href="14.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 14: تاپل‌ها (Tuples)</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
