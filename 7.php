<?php
$root        = './';
$description = 'عملگرهای ریاضی';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';
$exercises = [
  [
    'level' => null,
    'desc'  => 'دو متغیر با مقادیر ۱۰ و ۵ بسازید و آن‌ها را در یکدیگر ضرب کرده و نتیجه را چاپ کنید.',
    'hint'  => '<span class="token-text">a</span> = <span class="token-number">10</span>
<span class="token-text">b</span> = <span class="token-number">5</span>
<span class="token-function">print</span>(a * b)',
  ],
  [
    'level' => null,
    'desc'  => 'باقی‌مانده تقسیم عدد ۱۵ بر ۴ را با استفاده از عملگر مناسب پایتون به دست آورده و چاپ کنید.',
    'hint'  => '<span class="token-function">print</span>(<span class="token-number">15</span> % <span class="token-number">4</span>)  <span class="token-comment"># خروجی باید 3 شود</span>',
  ],
  [
    'level' => 'medium',
    'desc'  => 'تفاوت عملکرد تقسیم معمولی <code>/</code> و تقسیم صحیح <code>//</code> را با چاپ حاصل تقسیم عدد ۴ بر ۲ نشان دهید تا نوع داده خروجی مشخص شود.',
    'hint'  => '<span class="token-function">print</span>(<span class="token-number">4</span> / <span class="token-number">2</span>)   <span class="token-comment"># خروجی: 2.0 (فلوت)</span>
<span class="token-function">print</span>(<span class="token-number">4</span> // <span class="token-number">2</span>)  <span class="token-comment"># خروجی: 2 (اینتجر)</span>',
  ],
];
$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_operators.asp',
    'title' => 'W3Schools — Python Operators',
    'desc'  => 'آموزش تعاملی و مرجع کامل انواع عملگرهای ریاضی و محاسباتی در پایتون',
  ],
  [
    'url'   => 'https://docs.python.org/3/tutorial/introduction.html#using-python-as-a-calculator',
    'title' => 'مستندات رسمی پایتون — بکارگیری پایتون به عنوان ماشین حساب',
    'desc'  => 'توضیحات داکیومنت رسمی پایتون درباره رفتار اعداد و عملگرهای اصلی ریاضی',
  ],
];
require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="7">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 7: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            توی دنیای برنامه‌نویسی برای انجام هرگونه محاسبه روی داده‌ها، به ابزارهایی نیاز داریم که بهشون می‌گیم <strong>عملگر</strong>. توی این جلسه یاد می‌گیریم که چطور پایتون رو به یک ماشین‌حساب هوشمند تبدیل کنیم و تفاوت‌های حیاتی بعضی از عملگرهای شبیه به هم رو بررسی کنیم.
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
                src="https://www.youtube.com/embed/jW0RwE4ZKAs"
                title="آموزش کامل پایتون 2026 - قسمت 7: عملگرهای ریاضی"
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
              <a href="https://youtube.com/watch?v=jW0RwE4ZKAs" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <!-- APARAT -->
          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/rkhn952/vt/frame"
                title="آموزش عملگرهای ریاضی در پایتون - آپارات"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a href="https://aparat.com/v/rkhn952" target="_blank" rel="noopener">باز کردن در آپارات ↗</a>
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
              <h2>عملگر (Operator) و عملوند (Operand) چیست؟</h2>
              <p>
                وقتی یک عبارت ریاضی مثل <code>2 + 3</code> رو می‌نویسیم، به ساختار اجرای اون به این صورت نگاه می‌کنیم:
              </p>
              <ul>
                <li><strong>عملوند (Operand)</strong> — مقادیر یا متغیرهایی هستند که ما داریم روشون عملیاتی انجام می‌دیم (مثل عدد ۲ و ۳).</li>
                <li><strong>عملگر (Operator)</strong> — اون علامت یا نمادیه که کار اصلی یا دستور محاسباتی رو روی عملوندها اعمال می‌کنه (مثل علامت مثبت <code>+</code>).</li>
              </ul>
            </section>

            <!-- ── EXAMPLE 1 ── -->
            <section>
              <h2>مثال اول — عملگرهای ریاضی اصلی (جمع، تفریق، ضرب)</h2>
              <p>
                برای شروع دو متغیر تعریف می‌کنیم و عملیات‌های پایه ریاضی رو با علامت‌های استاندارد پایتون روشون اجرا می‌کنیم. علامت ضرب ستاره (<code>*</code>) است که با کلیدهای ترکیبی <kbd>Shift + 8</kbd> تایپ میشه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">x</span> = <span class="token-number">3</span>
<span class="token-text">y</span> = <span class="token-number">2</span>

<span class="token-comment"># جمع دو عدد (Addition)</span>
<span class="token-function">print</span>(x + y)  <span class="token-comment"># خروجی: 5</span>

<span class="token-comment"># تفریق دو عدد (Subtraction)</span>
<span class="token-function">print</span>(x - y)  <span class="token-comment"># خروجی: 1</span>

<span class="token-comment"># ضرب دو عدد (Multiplication)</span>
<span class="token-function">print</span>(x * y)  <span class="token-comment"># خروجی: 6</span></code></pre>
              </div>
            </section>

            <!-- ── EXAMPLE 2 ── -->
            <section>
              <h2>مثال دوم — تفاوت حیاتی تقسیم معمولی و تقسیم صحیح</h2>
              <p>
                پایتون دو نوع عملگر برای تقسیم داره: اسلش تکی (<code>/</code>) برای تقسیم اعشاری معمولی، و اسلش دوتایی (<code>//</code>) برای تقسیم صحیح (Floor Division) که بخش اعشاری رو کلاً حذف می‌کنه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">x</span> = <span class="token-number">3</span>
<span class="token-text">y</span> = <span class="token-number">2</span>

<span class="token-comment"># تقسیم معمولی — همیشه خروجی اعشاری یا Float میده</span>
<span class="token-function">print</span>(x / y)   <span class="token-comment"># خروجی: 1.5</span>

<span class="token-comment"># تقسیم صحیح — فقط عضو صحیح رو میده و اعشار رو می‌ندازه دور</span>
<span class="token-function">print</span>(x // y)  <span class="token-comment"># خروجی: 1</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>چرا خروجی تقسیمِ دو عدد صحیح باز هم اعشاری میشه؟</strong> توی پایتون ۳، عملگر <code>/</code> طراحی شده تا خروجی همواره یکنواخت و از نوع <code>float</code> باشه؛ مثلاً حاصل کُد <code>4 / 2</code> برابر با <code>2.0</code> میشه تا رفتارش در تمام شرایط برنامه قابل پیش‌بینی باقی بمونه.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3 ── -->
            <section>
              <h2>مثال سوم — باقی‌مانده تقسیم (Modulus) و توان (Exponentiation)</h2>
              <p>
                عملگر درصد (<code>%</code>) باقی‌مانده تقسیم دو عدد بر هم رو به ما میده. همچنین با استفاده از دو تا ستاره پشت سر هم (<code>**</code>) می‌تونیم عملیات توان رو انجام بدیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># باقی‌مانده تقسیم ۵ بر ۲</span>
<span class="token-function">print</span>(<span class="token-number">5</span> % <span class="token-number">2</span>)   <span class="token-comment"># خروجی: 1 (چون 2*2=4 و یک واحد باقی می‌مونه)</span>

<span class="token-comment"># توان — عدد ۳ به توان ۲</span>
<span class="token-text">x</span> = <span class="token-number">3</span>
<span class="token-text">y</span> = <span class="token-number">2</span>
<span class="token-function">print</span>(x ** y)  <span class="token-comment"># خروجی: 9</span></code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>یک اشتباه بسیار رایج:</strong> خیلیا علامت <code>%</code> (ماجولس) رو با درصد ریاضی اشتباه می‌گیرن و فکر می‌کنن مثلاً یعنی ۵۲ درصد؛ یادتون باشه این عملگر فقط و فقط به معنی باقی‌مانده تقسیم هست و کاربردهای مهمی مثل تشخیص زوج یا فرد بودن اعداد داره.
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
          <a href="6.php" class="lesson-nav-btn lesson-nav-prev">
            <span>&langle;</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">قسمت 6: متغیرها</div>
            </div>
          </a>
          <a href="8.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">قسمت 8: عملگرهای انتصابی</div>
            </div>
            <span>&rangle;</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->

<?php require $root . 'includes/footer.php'; ?>
