<?php
$root        = './';
$description = 'فرمت کردن رشته‌ها (String Formatting)';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'دو متغیر <code>name</code> و <code>age</code> بسازید. با استفاده از <strong>F-String</strong> جمله‌ای بسازید که نام و سن کاربر را در یک خط نمایش دهد.',
    'hint'  => '<span class="token-text">name</span> = <span class="token-string">"Ali"</span>
<span class="token-text">age</span> = <span class="token-number">25</span>
<span class="token-function">print</span>(f<span class="token-string">"My name is {name} and I am {age} years old."</span>)',
  ],
  [
    'level' => null,
    'desc'  => 'جمله بالا را این بار با استفاده از متد <code>.format()</code> نوشته و در خروجی چاپ کنید.',
    'hint'  => '<span class="token-text">name</span> = <span class="token-string">"Sara"</span>
<span class="token-text">age</span> = <span class="token-number">30</span>
<span class="token-function">print</span>(<span class="token-string">"My name is {} and I am {} years old."</span>.<span class="token-function">format</span>(name, age))',
  ],
  [
    'level' => 'medium',
    'desc'  => 'دو عدد ۵ و ۱۰ را در دو متغیر تعریف کنید. سپس با استفاده از F-String، مستقیماً در داخل آکولادها <code>{}</code> آن‌ها را جمع کرده و حاصل را چاپ کنید.',
    'hint'  => '<span class="token-text">a</span> = <span class="token-number">5</span>
<span class="token-text">b</span> = <span class="token-number">10</span>
<span class="token-function">print</span>(f<span class="token-string">"The sum of {a} and {b} is {a + b}."</span>)',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_string_formatting.asp',
    'title' => 'W3Schools — Python String Formatting',
    'desc'  => 'آموزش انواع روش‌های فرمت‌دهی متن در پایتون (متد format و روش‌های قدیمی)',
  ],
  [
    'url'   => 'https://realpython.com/python-f-strings/',
    'title' => 'Real Python — Python 3\'s f-Strings',
    'desc'  => 'راهنمای جامع و پیشرفته درباره F-Stringها، نحوه کارکرد آن‌ها و مزیتشان نسبت به روش‌های قدیمی',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="12">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 12: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            وقتی می‌خواهیم متن‌هایی بسازیم که مقادیر درون آن‌ها متغیر است (مثل پیام خوش‌آمدگویی به کاربران مختلف)، چسباندن رشته‌ها با علامت <code>+</code> می‌تواند بسیار خسته‌کننده و ناخوانا باشد. در این جلسه با <strong>فرمت کردن رشته‌ها (String Formatting)</strong> آشنا می‌شویم که روشی بسیار شیک‌تر و خواناتر برای جاسازی متغیرها در دل متن است.
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
                src="https://www.youtube.com/embed/skTM20zE7Bc"
                title="آموزش کامل پایتون 2026 - قسمت 12: فرمت کردن رشته ها"
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
              <a href="https://youtube.com/watch?v=skTM20zE7Bc" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/gwu7fdi/vt/frame"
                title="آموزش فرمت کردن رشته‌ها در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/gwu7fdi" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>چرا به String Formatting نیاز داریم؟</h2>
              <p>
                در جلسات قبل دیدیم که برای ترکیب یک عدد و یک متن، مجبور بودیم عدد را با تابع <code>str()</code> به رشته تبدیل کنیم و سپس با <code>+</code> آن‌ها را به هم متصل کنیم. این کار در متن‌های طولانی به شدت گیج‌کننده می‌شود. فرمت‌دهی این مشکل را کاملاً حل می‌کند.
              </p>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — متد کلاسیک <code>.format()</code></h2>
              <p>
                یکی از روش‌های استاندارد در پایتون، استفاده از متد <code>.format()</code> است. در این روش، هر کجا که قرار است مقداری قرار بگیرد، یک جفت آکولاد خالی <code>{}</code> می‌گذاریم و در انتها مقادیر را به ترتیب به متد پاس می‌دهیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">item</span> = <span class="token-string">"Laptop"</span>
<span class="token-text">price</span> = <span class="token-number">1200</span>

<span class="token-comment"># استفاده از آکولاد به عنوان نگه‌دارنده (Placeholder)</span>
<span class="token-text">text</span> = <span class="token-string">"The {} costs {}$."</span>.<span class="token-function">format</span>(item, price)

<span class="token-function">print</span>(text)  <span class="token-comment"># خروجی: The Laptop costs 1200$.</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — جادوی F-Strings (روش مدرن و پیشنهاد شده)</h2>
              <p>
                از نسخه ۳.۶ پایتون به بعد، ویژگی فوق‌العاده‌ای به نام <strong>F-String</strong> معرفی شد. فقط کافی است یک حرف <code>f</code> یا <code>F</code> (بدون فاصله) قبل از علامت نقل‌قولِ شروع رشته قرار دهید. حالا می‌توانید مستقیماً نام متغیرها را داخل آکولادها <code>{}</code> بنویسید!
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">user</span> = <span class="token-string">"Amir"</span>
<span class="token-text">score</span> = <span class="token-number">95</span>

<span class="token-comment"># حرف f قبل از شروع رشته قرار می‌گیرد</span>
<span class="token-text">message</span> = f<span class="token-string">"Hello {user}, your final score is {score}."</span>

<span class="token-function">print</span>(message)  <span class="token-comment"># خروجی: Hello Amir, your final score is 95.</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — انجام محاسبات در دل F-Strings</h2>
              <p>
                یکی از مزیت‌های بزرگ F-String این است که محدود به نام متغیرها نیست؛ شما می‌توانید عملیات‌های ریاضی، صدا زدن توابع یا متدها را هم مستقیماً درون آکولادها انجام دهید و پایتون حاصل آن‌ها را در متن قرار می‌دهد.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">count</span> = <span class="token-number">3</span>
<span class="token-text">price_per_item</span> = <span class="token-number">20</span>

<span class="token-comment"># ضرب دو متغیر مستقیماً داخل آکولاد</span>
<span class="token-function">print</span>(f<span class="token-string">"Total price: {count * price_per_item} dollars"</span>)
<span class="token-comment"># خروجی: Total price: 60 dollars</span>

<span class="token-comment"># استفاده از متدهای رشته درون F-String</span>
<span class="token-text">name</span> = <span class="token-string">"python"</span>
<span class="token-function">print</span>(f<span class="token-string">"We are learning {name.<span class="token-function">upper</span>()}!"</span>)
<span class="token-comment"># خروجی: We are learning PYTHON!</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>کدام روش بهتر است؟</strong> امروزه F-Stringها استاندارد صنعت برای پایتون محسوب می‌شوند، چون هم کد را بسیار خواناتر می‌کنند و هم از نظر سرعت اجرا (Performance) سریع‌تر از متد <code>.format()</code> هستند.
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
          <a href="11.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 11: توابع و متدهای رشته‌ها</div>
            </div>
          </a>
          <a href="13.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 13: ساختارهای شرطی</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
