<?php
$root        = './';
$description = 'کار با رشته‌ها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'دو متغیر بسازید که نام و نام خانوادگی شما را در خود ذخیره کنند. سپس آن‌ها را با یک فاصله (Space) به هم متصل کرده و چاپ کنید.',
    'hint'  => '<span class="token-text">first_name</span> = <span class="token-string">"Edris"</span>
<span class="token-text">last_name</span> = <span class="token-string">"Ranjbar"</span>
<span class="token-text">full_name</span> = first_name + <span class="token-string">" "</span> + last_name
<span class="token-function">print</span>(full_name)',
  ],
  [
    'level' => null,
    'desc'  => 'با استفاده از عملگر ضرب (<code>*</code>)، کلمه <code>"Python"</code> را ۵ بار پشت سر هم تکرار کرده و در خروجی نمایش دهید.',
    'hint'  => '<span class="token-function">print</span>(<span class="token-string">"Python"</span> * <span class="token-number">5</span>)',
  ],
  [
    'level' => 'medium',
    'desc'  => 'یک رشته چند خطی شامل یک پیام دلخواه بسازید و آن را چاپ کنید.',
    'hint'  => '<span class="token-text">message</span> = <span class="token-string">"""این یک
متن چند خطی
در پایتون است."""</span>
<span class="token-function">print</span>(message)',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_strings.asp',
    'title' => 'W3Schools — Python Strings',
    'desc'  => 'آموزش جامع نحوه تعریف و استفاده از رشته‌ها (Strings) در زبان پایتون',
  ],
  [
    'url'   => 'https://realpython.com/python-strings/',
    'title' => 'Real Python — Python Strings and Character Data',
    'desc'  => 'مقاله‌ای عمیق درباره نحوه مدیریت داده‌های متنی و کاراکترها در ساختار حافظه پایتون',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="10">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 10: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            بعد از کار با اعداد، نوبت به یکی از مهم‌ترین نوع‌های داده در برنامه‌نویسی می‌رسد: <strong>رشته‌ها (Strings)</strong>. رشته‌ها برای ذخیره و دستکاری متون استفاده می‌شوند. در این جلسه یاد می‌گیریم چطور متن‌ها را تعریف کنیم، به هم بچسبانیم و عملیات‌های پایه‌ای را روی آن‌ها انجام دهیم.
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
                src="https://www.youtube.com/embed/dQLRow4qIsY"
                title="آموزش کامل پایتون 2026 - قسمت 10: کار با رشته ها"
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
              <a href="https://youtube.com/watch?v=dQLRow4qIsY" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/nbu1tr0/vt/frame"
                title="آموزش کار با رشته‌ها در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/nbu1tr0" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>تعریف رشته‌ها در پایتون</h2>
              <p>
                برای تعریف یک رشته در پایتون، باید متن خود را داخل علامت نقل‌قول (Quotation) قرار دهید. شما می‌توانید از نقل‌قول تکی (<code>' '</code>) یا نقل‌قول دوتایی (<code>" "</code>) استفاده کنید و از نظر پایتون هیچ تفاوتی با هم ندارند.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># استفاده از نقل‌قول تکی (Single Quote)</span>
<span class="token-text">text1</span> = <span class="token-string">'Hello World'</span>

<span class="token-comment"># استفاده از نقل‌قول دوتایی (Double Quote)</span>
<span class="token-text">text2</span> = <span class="token-string">"Hello World"</span>

<span class="token-function">print</span>(text1 == text2)  <span class="token-comment"># خروجی: True (هر دو دقیقاً یکی هستند)</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — رشته‌های چند خطی (Multi-line Strings)</h2>
              <p>
                اگر بخواهید متنی بنویسید که شامل چندین خط (پاراگراف) باشد، باید از سه نقل‌قول تکی (<code>''' '''</code>) یا سه نقل‌قول دوتایی (<code>""" """</code>) استفاده کنید.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">paragraph</span> = <span class="token-string">"""این یک متن طولانی است.
می‌توانیم به خط بعدی برویم.
و فرمت نوشته کاملاً حفظ می‌شود."""</span>

<span class="token-function">print</span>(paragraph)</code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — متصل کردن رشته‌ها (Concatenation)</h2>
              <p>
                در پایتون می‌توانیم با استفاده از علامت جمع (<code>+</code>) دو یا چند رشته را به هم بچسبانیم. فقط دقت کنید که پایتون به صورت خودکار بین آن‌ها فاصله نمی‌اندازد، بنابراین باید خودتان فضای خالی (Space) را به عنوان یک رشته اضافه کنید.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">part1</span> = <span class="token-string">"Python"</span>
<span class="token-text">part2</span> = <span class="token-string">"is awesome"</span>

<span class="token-comment"># اضافه کردن یک رشته شامل فاصله (" ") بین دو متغیر</span>
<span class="token-text">result</span> = part1 + <span class="token-string">" "</span> + part2
<span class="token-function">print</span>(result)  <span class="token-comment"># خروجی: Python is awesome</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — تکرار رشته‌ها با ضرب (Repetition)</h2>
              <p>
                یکی از ویژگی‌های جذاب پایتون این است که به شما اجازه می‌دهد یک رشته را در یک عدد صحیح ضرب کنید تا آن رشته به تعداد آن عدد تکرار شود!
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">word</span> = <span class="token-string">"Ha"</span>

<span class="token-comment"># ضرب رشته در عدد</span>
<span class="token-text">laugh</span> = word * <span class="token-number">3</span>
<span class="token-function">print</span>(laugh)  <span class="token-comment"># خروجی: HaHaHa</span>

<span class="token-comment"># ساخت یک خط جداکننده سریع</span>
<span class="token-function">print</span>(<span class="token-string">"-"</span> * <span class="token-number">20</span>)  <span class="token-comment"># خروجی: --------------------</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>محدودیت‌ها:</strong> شما نمی‌توانید یک رشته را در یک عدد اعشاری (Float) ضرب کنید و یا دو رشته را در هم ضرب کنید. این کارها باعث بروز خطای <code>TypeError</code> می‌شود.
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
          <a href="9.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 9: گرفتن ورودی از کاربر</div>
            </div>
          </a>
          <a href="11.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 11: متدهای رشته</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
