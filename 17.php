<?php
$root        = './';
$description = 'حلقه‌ها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'با استفاده از <code>range()</code> و یک حلقه <code>for</code>، اعداد ۱ تا ۱۰۰ را چاپ کن. سپس فقط اعداد زوج را چاپ کن.',
    'hint'  => '<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">1</span>, <span class="token-number">101</span>):
    <span class="token-function">print</span>(i)

<span class="token-comment"># فقط زوج‌ها</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">2</span>, <span class="token-number">101</span>, <span class="token-number">2</span>):
    <span class="token-function">print</span>(i)',
  ],
  [
    'level' => null,
    'desc'  => 'یک لیست از نمرات بساز. با حلقه <code>for</code> روی لیست بگرد و مجموع نمرات را حساب کن. سپس بدون استفاده از تابع <code>sum()</code> میانگین رو هم بده.',
    'hint'  => '<span class="token-text">grades</span> = [<span class="token-number">15</span>, <span class="token-number">18</span>, <span class="token-number">12</span>, <span class="token-number">20</span>, <span class="token-number">14</span>]
<span class="token-text">total</span> = <span class="token-number">0</span>

<span class="token-keyword">for</span> grade <span class="token-keyword">in</span> grades:
    total += grade

<span class="token-function">print</span>(<span class="token-string">"مجموع:"</span>, total)
<span class="token-function">print</span>(<span class="token-string">"میانگین:"</span>, total / <span class="token-function">len</span>(grades))',
  ],
  [
    'level' => 'hard',
    'desc'  => 'یک عدد از کاربر بگیر و با حلقه <code>while</code> تعیین کن آیا اول (prime) هست یا نه. عدد اول عددیه که فقط بر ۱ و خودش بخش‌پذیره.',
    'hint'  => '<span class="token-text">n</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"یک عدد وارد کن: "</span>))
<span class="token-text">is_prime</span> = <span class="token-keyword">True</span>
<span class="token-text">i</span> = <span class="token-number">2</span>

<span class="token-keyword">while</span> i < n:
    <span class="token-keyword">if</span> n % i == <span class="token-number">0</span>:
        is_prime = <span class="token-keyword">False</span>
        <span class="token-keyword">break</span>
    i += <span class="token-number">1</span>

<span class="token-keyword">if</span> is_prime <span class="token-keyword">and</span> n > <span class="token-number">1</span>:
    <span class="token-function">print</span>(n, <span class="token-string">"عدد اول است"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(n, <span class="token-string">"عدد اول نیست"</span>)',
  ],
];
$references = [
  [
    'url'   => 'https://docs.python.org/3/tutorial/controlflow.html#for-statements',
    'title' => 'مستندات رسمی پایتون — حلقه for',
    'desc'  => 'توضیح کامل حلقه for و تابع range در Python.org',
  ],
  [
    'url'   => 'https://realpython.com/python-for-loop/',
    'title' => 'Real Python — Python for Loop',
    'desc'  => 'مقاله جامع درباره حلقه for با مثال‌های متنوع و کاربردی',
  ],
  [
    'url'   => 'https://realpython.com/python-while-loop/',
    'title' => 'Real Python — Python while Loop',
    'desc'  => 'آموزش کامل حلقه while، break، continue و else در حلقه‌ها',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/python_for_loops.asp',
    'title' => 'W3Schools — Python Loops',
    'desc'  => 'آموزش تعاملی حلقه‌های for و while با امکان اجرای کد در مرورگر',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="17">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 17: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            یکی از قدرتمندترین مفاهیم برنامه‌نویسی اینه که بتونی یه کار رو بارها تکرار کنی بدون اینکه کد رو دوباره بنویسی. <strong>حلقه‌ها</strong> دقیقاً همین کار رو می‌کنن. در این جلسه با دو نوع حلقه در پایتون آشنا می‌شیم و با ۳ مثال کاربردی یادشون می‌گیریم.
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
                src="https://www.youtube.com/embed/VIDEO_ID"
                title="آموزش حلقه‌ها در پایتون - جلسه ۱۷"
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
              <a href="https://youtube.com/watch?v=VIDEO_ID" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/APARAT_HASH/vt/frame"
                title="آموزش حلقه‌ها در پایتون - آپارات"
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
              <h2>حلقه چیست؟</h2>
              <p>
                فرض کن می‌خوای اسم ۱۰۰ دانش‌آموز رو چاپ کنی. بدون حلقه باید ۱۰۰ بار <code>print()</code> بنویسی. با حلقه، چند خط کد کافیه. پایتون دو نوع حلقه داره:
              </p>
              <ul>
                <li><strong>حلقه for</strong> — وقتی می‌دونی چند بار می‌خوای تکرار کنی، یا روی یه دنباله (لیست، رشته، ...) می‌خوای حلقه بزنی</li>
                <li><strong>حلقه while</strong> — وقتی نمی‌دونی چند بار تکرار لازمه و فقط یه شرط داری</li>
              </ul>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — حلقه for روی لیست و رشته</h2>
              <p>
                حلقه <code>for</code> یکی یکی روی عناصر یه دنباله می‌گرده. هر بار یه عنصر رو برمی‌داره، کد داخل حلقه رو اجرا می‌کنه، بعد می‌ره سراغ بعدی.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># حلقه روی یک لیست</span>
<span class="token-text">fruits</span> = [<span class="token-string">"سیب"</span>, <span class="token-string">"پرتقال"</span>, <span class="token-string">"موز"</span>]

<span class="token-keyword">for</span> fruit <span class="token-keyword">in</span> fruits:
    <span class="token-function">print</span>(fruit)

<span class="token-comment"># سیب</span>
<span class="token-comment"># پرتقال</span>
<span class="token-comment"># موز</span>

<span class="token-comment"># حلقه روی یک رشته — هر بار یک حرف</span>
<span class="token-keyword">for</span> char <span class="token-keyword">in</span> <span class="token-string">"Python"</span>:
    <span class="token-function">print</span>(char)

<span class="token-comment"># حلقه با range() — اعداد ۰ تا ۴</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">5</span>):
    <span class="token-function">print</span>(i)  <span class="token-comment"># 0, 1, 2, 3, 4</span>

<span class="token-comment"># range با شروع و پایان و گام</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">1</span>, <span class="token-number">10</span>, <span class="token-number">2</span>):
    <span class="token-function">print</span>(i)  <span class="token-comment"># 1, 3, 5, 7, 9</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>تابع range():</strong> سه پارامتر داره: <code>range(start, stop, step)</code>. فقط <code>stop</code> اجباریه. عدد stop خودش داخل نمی‌شه — <code>range(5)</code> اعداد ۰ تا ۴ رو می‌ده نه ۵.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — حلقه while و کنترل حلقه</h2>
              <p>
                حلقه <code>while</code> تا وقتی شرطش برقرار باشه ادامه می‌ده. دو دستور مهم هم داریم: <code>break</code> که حلقه رو کامل متوقف می‌کنه، و <code>continue</code> که فقط اون تکرار رو رد می‌کنه و می‌ره سراغ بعدی.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># حلقه while ساده</span>
<span class="token-text">count</span> = <span class="token-number">1</span>

<span class="token-keyword">while</span> count <= <span class="token-number">5</span>:
    <span class="token-function">print</span>(count)
    count += <span class="token-number">1</span>

<span class="token-comment"># break — خروج از حلقه</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">10</span>):
    <span class="token-keyword">if</span> i == <span class="token-number">5</span>:
        <span class="token-keyword">break</span>   <span class="token-comment"># وقتی به ۵ رسیدیم متوقف می‌شه</span>
    <span class="token-function">print</span>(i)  <span class="token-comment"># 0, 1, 2, 3, 4</span>

<span class="token-comment"># continue — رد کردن یک تکرار</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">6</span>):
    <span class="token-keyword">if</span> i == <span class="token-number">3</span>:
        <span class="token-keyword">continue</span>  <span class="token-comment"># عدد ۳ چاپ نمی‌شه</span>
    <span class="token-function">print</span>(i)    <span class="token-comment"># 0, 1, 2, 4, 5</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>حلقه بی‌نهایت:</strong> اگه شرط <code>while</code> هیچ‌وقت False نشه، حلقه تا ابد ادامه می‌ده. همیشه مطمئن شو که یه جایی شرط False می‌شه یا از <code>break</code> استفاده کن.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — حلقه تودرتو و enumerate</h2>
              <p>
                می‌توان حلقه‌ها را داخل هم گذاشت. همچنین تابع <code>enumerate()</code> کمک می‌کنه هم ایندکس و هم مقدار رو با هم داشته باشی — خیلی پرکاربرده.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># حلقه تودرتو — جدول ضرب</span>
<span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">1</span>, <span class="token-number">4</span>):
    <span class="token-keyword">for</span> j <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">1</span>, <span class="token-number">4</span>):
        <span class="token-function">print</span>(<span class="token-string">f"{i} x {j} = {i*j}"</span>)

<span class="token-comment"># enumerate — ایندکس + مقدار با هم</span>
<span class="token-text">students</span> = [<span class="token-string">"علی"</span>, <span class="token-string">"سارا"</span>, <span class="token-string">"رضا"</span>]

<span class="token-keyword">for</span> index, name <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(students):
    <span class="token-function">print</span>(<span class="token-string">f"{index + 1}. {name}"</span>)

<span class="token-comment"># 1. علی</span>
<span class="token-comment"># 2. سارا</span>
<span class="token-comment"># 3. رضا</span>

<span class="token-comment"># حلقه روی دیکشنری</span>
<span class="token-text">scores</span> = {<span class="token-string">"علی"</span>: <span class="token-number">18</span>, <span class="token-string">"سارا"</span>: <span class="token-number">20</span>, <span class="token-string">"رضا"</span>: <span class="token-number">15</span>}

<span class="token-keyword">for</span> name, score <span class="token-keyword">in</span> scores.<span class="token-function">items</span>():
    <span class="token-function">print</span>(<span class="token-string">f"{name}: {score}"</span>)</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>enumerate از کجا شروع کنه؟</strong> می‌تونی بنویسی <code>enumerate(students, start=1)</code> تا ایندکس از ۱ شروع بشه نه ۰.
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
          <a href="16.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">دیکشنری</div>
            </div>
          </a>
          <a href="18.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title"></div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
