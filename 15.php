<?php
$root        = './';
$description = 'مجموعه‌ها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$exercises = [
  [
    'level' => null,
    'desc'  => 'یک لیست بساز که چند عدد تکراری داشته باشد. سپس با استفاده از <code>set</code> تکراری‌ها را حذف کن و نتیجه را دوباره به لیست تبدیل و چاپ کن.',
    'hint'  => '<span class="token-text">nums</span> = [<span class="token-number">1</span>, <span class="token-number">2</span>, <span class="token-number">2</span>, <span class="token-number">3</span>, <span class="token-number">4</span>, <span class="token-number">4</span>, <span class="token-number">5</span>]
<span class="token-text">unique</span> = <span class="token-function">list</span>(<span class="token-function">set</span>(nums))
<span class="token-function">print</span>(unique)',
  ],
  [
    'level' => null,
    'desc'  => 'دو set از نام دانش‌آموزان کلاس ریاضی و کلاس فیزیک بساز. سپس: الف) دانش‌آموزانی که در هر دو کلاس هستند را پیدا کن. ب) دانش‌آموزانی که فقط در کلاس ریاضی هستند را پیدا کن.',
    'hint'  => '<span class="token-text">math</span> = {<span class="token-string">"علی"</span>, <span class="token-string">"سارا"</span>, <span class="token-string">"رضا"</span>, <span class="token-string">"مینا"</span>}
<span class="token-text">physics</span> = {<span class="token-string">"سارا"</span>, <span class="token-string">"مینا"</span>, <span class="token-string">"حسن"</span>}

<span class="token-function">print</span>(math &amp; physics)   <span class="token-comment"># اشتراک</span>
<span class="token-function">print</span>(math - physics)   <span class="token-comment"># تفاضل</span>',
  ],
  [
    'level' => 'hard',
    'desc'  => 'یک رشته از کاربر بگیر و تعداد حروف <strong>یکتا</strong> آن را بشمار و چاپ کن. مثلاً برای کلمه <code>"python"</code> جواب ۶ است و برای <code>"mississippi"</code> جواب ۴.',
    'hint'  => '<span class="token-text">word</span> = <span class="token-function">input</span>(<span class="token-string">"یک کلمه وارد کن: "</span>)
<span class="token-text">unique_chars</span> = <span class="token-function">set</span>(word)
<span class="token-function">print</span>(<span class="token-string">"تعداد حروف یکتا:"</span>, <span class="token-function">len</span>(unique_chars))',
  ],
];

$references = [
  [
    'url'   => 'https://docs.python.org/3/library/stdtypes.php#set-types-set-frozenset',
    'title' => 'مستندات رسمی پایتون — Set Types',
    'desc'  => 'توضیح کامل تمام متدها و عملیات set در مستندات رسمی Python.org',
  ],
  [
    'url'   => 'https://realpython.com/python-sets/',
    'title' => 'Real Python — Sets in Python',
    'desc'  => 'مقاله جامع انگلیسی درباره set با مثال‌های کاربردی و توضیح عملکرد داخلی',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/python_sets.asp',
    'title' => 'W3Schools — Python Sets',
    'desc'  => 'آموزش تعاملی set با امکان اجرای کد آنلاین مستقیم در مرورگر',
  ],
  [
    'url'   => 'https://docs.python.org/3/library/stdtypes.php#frozenset',
    'title' => 'مستندات رسمی — frozenset',
    'desc'  => 'آشنایی با frozenset و تفاوت آن با set معمولی',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="15">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 15: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            در این جلسه با یکی از ساختارهای داده مهم پایتون آشنا می‌شیم:
            <strong>مجموعه یا Set</strong>. مجموعه‌ها مثل لیست‌اند با یک تفاوت
            کلیدی؛ هیچ مقدار تکراری ندارن و ترتیب خاصی هم ندارن. این ویژگی‌ها
            کاربردهای خیلی جالبی ایجاد می‌کنه.
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
                src="https://www.youtube.com/embed/rXycN0BCxz0?si=jAuBPWBSNYsUv4-G"
                title="آموزش مجموعه‌ها در پایتون - جلسه ۱۵"
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
                href="https://www.youtube.com/watch?v=rXycN0BCxz0&list=PLjmYP2ltjzGNsXdeNCgOiuyF1ZJyTDDYg&index=2"
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
                title="آموزش مجموعه‌ها در پایتون - آپارات"
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
              <h2>Set چیست؟</h2>
              <p>
                مجموعه یا <code>set</code> یک ساختار داده در پایتون است که
                مجموعه‌ای از مقادیر <strong>یکتا</strong> (بدون تکرار) را نگه
                می‌دارد. برخلاف لیست، ترتیب عناصر در set تضمین نمی‌شود و
                نمی‌توان با ایندکس به عناصرش دسترسی داشت.
              </p>
              <p>سه ویژگی اصلی set:</p>
              <ul>
                <li>
                  <strong>بدون تکرار:</strong> هر مقدار فقط یک بار ذخیره می‌شود
                </li>
                <li><strong>بدون ترتیب:</strong> ترتیب عناصر ثابت نیست</li>
                <li>
                  <strong>تغییرپذیر:</strong> می‌توان عناصر اضافه یا حذف کرد
                </li>
              </ul>
            </section>

            <section>
              <h2>ساخت یک Set</h2>
              <p>
                برای ساخت set از آکولاد <code>{}</code> یا تابع
                <code>set()</code> استفاده می‌کنیم:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># ساخت set با آکولاد</span>
<span class="token-text">fruits</span> = {<span class="token-string">"سیب"</span>, <span class="token-string">"پرتقال"</span>, <span class="token-string">"موز"</span>}
<span class="token-function">print</span>(fruits)

<span class="token-comment"># ساخت set از یک لیست (حذف تکراری‌ها)</span>
<span class="token-text">numbers</span> = <span class="token-function">set</span>([<span class="token-number">1</span>, <span class="token-number">2</span>, <span class="token-number">2</span>, <span class="token-number">3</span>, <span class="token-number">3</span>, <span class="token-number">3</span>])
<span class="token-function">print</span>(numbers)  <span class="token-comment"># {1, 2, 3}</span>

<span class="token-comment"># set خالی — باید از set() استفاده کنی نه {}</span>
<span class="token-text">empty</span> = <span class="token-function">set</span>()
<span class="token-function">print</span>(<span class="token-function">type</span>(empty))  <span class="token-comment"># &lt;class 'set'&gt;</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>توجه:</strong> اگر بنویسی <code>x = {}</code> پایتون
                  یک <code>dict</code> خالی می‌سازد، نه set. برای ساختن یک set
                  خالی حتماً از <code>set()</code> استفاده کن.
                </div>
              </div>
            </section>

            <section>
              <h2>اضافه و حذف کردن عناصر</h2>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">colors</span> = {<span class="token-string">"قرمز"</span>, <span class="token-string">"آبی"</span>, <span class="token-string">"سبز"</span>}

<span class="token-comment"># اضافه کردن یک عنصر</span>
colors.<span class="token-function">add</span>(<span class="token-string">"زرد"</span>)
<span class="token-function">print</span>(colors)

<span class="token-comment"># حذف عنصر — خطا می‌ده اگه نباشه</span>
colors.<span class="token-function">remove</span>(<span class="token-string">"آبی"</span>)

<span class="token-comment"># حذف عنصر — خطا نمی‌ده اگه نباشه</span>
colors.<span class="token-function">discard</span>(<span class="token-string">"مشکی"</span>)

<span class="token-comment"># حذف و برگرداندن یک عنصر تصادفی</span>
<span class="token-text">item</span> = colors.<span class="token-function">pop</span>()
<span class="token-function">print</span>(item)

<span class="token-comment"># خالی کردن کامل set</span>
colors.<span class="token-function">clear</span>()</code></pre>
              </div>
            </section>

            <section>
              <h2>عملیات ریاضی روی Set‌ها</h2>
              <p>
                قدرت اصلی set در عملیات ریاضی مثل اجتماع، اشتراک و تفاضل است —
                درست مانند مجموعه‌ها در ریاضی:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">a</span> = {<span class="token-number">1</span>, <span class="token-number">2</span>, <span class="token-number">3</span>, <span class="token-number">4</span>}
<span class="token-text">b</span> = {<span class="token-number">3</span>, <span class="token-number">4</span>, <span class="token-number">5</span>, <span class="token-number">6</span>}

<span class="token-comment"># اجتماع — همه عناصر هر دو</span>
<span class="token-function">print</span>(a | b)          <span class="token-comment"># {1, 2, 3, 4, 5, 6}</span>
<span class="token-function">print</span>(a.<span class="token-function">union</span>(b))

<span class="token-comment"># اشتراک — عناصر مشترک</span>
<span class="token-function">print</span>(a &amp; b)          <span class="token-comment"># {3, 4}</span>
<span class="token-function">print</span>(a.<span class="token-function">intersection</span>(b))

<span class="token-comment"># تفاضل — عناصر a که در b نیستند</span>
<span class="token-function">print</span>(a - b)          <span class="token-comment"># {1, 2}</span>
<span class="token-function">print</span>(a.<span class="token-function">difference</span>(b))

<span class="token-comment"># تفاضل متقارن — عناصری که فقط در یکی هستند</span>
<span class="token-function">print</span>(a ^ b)          <span class="token-comment"># {1, 2, 5, 6}</span>
<span class="token-function">print</span>(a.<span class="token-function">symmetric_difference</span>(b))</code></pre>
              </div>
            </section>

            <section>
              <h2>بررسی عضویت و زیرمجموعه</h2>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">langs</span> = {<span class="token-string">"Python"</span>, <span class="token-string">"JavaScript"</span>, <span class="token-string">"Go"</span>}

<span class="token-comment"># بررسی عضویت با in</span>
<span class="token-function">print</span>(<span class="token-string">"Python"</span> <span class="token-keyword">in</span> langs)     <span class="token-comment"># True</span>
<span class="token-function">print</span>(<span class="token-string">"Java"</span> <span class="token-keyword">not in</span> langs)   <span class="token-comment"># True</span>

<span class="token-comment"># زیرمجموعه و مجموعه برتر</span>
<span class="token-text">sub</span> = {<span class="token-string">"Python"</span>, <span class="token-string">"Go"</span>}
<span class="token-function">print</span>(sub.<span class="token-function">issubset</span>(langs))    <span class="token-comment"># True — sub زیرمجموعه langs است</span>
<span class="token-function">print</span>(langs.<span class="token-function">issuperset</span>(sub))  <span class="token-comment"># True</span>

<span class="token-comment"># آیا دو set هیچ عنصر مشترکی ندارند؟</span>
<span class="token-text">other</span> = {<span class="token-string">"Ruby"</span>, <span class="token-string">"Rust"</span>}
<span class="token-function">print</span>(langs.<span class="token-function">isdisjoint</span>(other))  <span class="token-comment"># True</span></code></pre>
              </div>
            </section>

            <section>
              <h2>کاربرد عملی: حذف تکراری‌ها از لیست</h2>
              <p>
                یکی از پرکاربردترین استفاده‌های set، حذف سریع مقادیر تکراری از
                یک لیست است:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">scores</span> = [<span class="token-number">85</span>, <span class="token-number">92</span>, <span class="token-number">85</span>, <span class="token-number">70</span>, <span class="token-number">92</span>, <span class="token-number">100</span>, <span class="token-number">70</span>]

<span class="token-comment"># حذف تکراری‌ها</span>
<span class="token-text">unique_scores</span> = <span class="token-function">list</span>(<span class="token-function">set</span>(scores))
<span class="token-function">print</span>(unique_scores)  <span class="token-comment"># [85, 92, 70, 100] — بدون تکرار</span>

<span class="token-comment"># پیدا کردن کاربران مشترک دو سیستم</span>
<span class="token-text">system_a</span> = {<span class="token-string">"ali"</span>, <span class="token-string">"sara"</span>, <span class="token-string">"reza"</span>}
<span class="token-text">system_b</span> = {<span class="token-string">"sara"</span>, <span class="token-string">"mina"</span>, <span class="token-string">"reza"</span>}
<span class="token-text">common_users</span> = system_a &amp; system_b
<span class="token-function">print</span>(common_users)   <span class="token-comment"># {'sara', 'reza'}</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>نکته عملکردی:</strong> بررسی عضویت (<code>in</code>)
                  در set بسیار سریع‌تر از لیست است. اگر فقط نیاز داری بررسی کنی
                  که یه چیزی وجود داره یا نه، از set استفاده کن نه list.
                </div>
              </div>
            </section>

            <section>
              <h2>frozenset — مجموعه تغییرناپذیر</h2>
              <p>
                اگر بخوای یک set داشته باشی که قابل تغییر نباشد (مثلاً برای
                استفاده به عنوان کلید دیکشنری)، از
                <code>frozenset</code> استفاده کن:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">fs</span> = <span class="token-function">frozenset</span>([<span class="token-number">1</span>, <span class="token-number">2</span>, <span class="token-number">3</span>])
<span class="token-function">print</span>(fs)           <span class="token-comment"># frozenset({1, 2, 3})</span>

<span class="token-comment"># این خطا می‌ده — frozenset قابل تغییر نیست</span>
<span class="token-comment"># fs.add(4)  → AttributeError</span></code></pre>
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
          <a href="14.php" class="lesson-nav-btn lesson-nav-prev disabled">
            <span>&LeftAngleBracket;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title"></div>
            </div>
          </a>
          <a href="16.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title"></div>
            </div>
            <span>&RightAngleBracket;</span>
          </a>
        </div>
      </main>
    </div>
    <!-- end lesson-layout -->
<?php require $root . 'includes/footer.php'; ?>
