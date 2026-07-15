<?php
$root        = './';
$description = 'توابع';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$exercises = [
  [
    'level' => null,
    'desc'  => 'تابعی به اسم <code>rial_to_toman</code> بنویس که یک مقدار ریال بگیره و اون رو به تومان تبدیل کنه و برگردونه (هر ۱۰ ریال، ۱ تومانه). بعد تابع رو با چند مقدار مختلف تست کن.',
    'hint'  => '<span class="token-keyword">def</span> <span class="token-function">rial_to_toman</span>(rial):
    <span class="token-keyword">return</span> rial / <span class="token-number">10</span>

<span class="token-function">print</span>(<span class="token-function">rial_to_toman</span>(<span class="token-number">50000</span>))   <span class="token-comment"># 5000.0</span>
<span class="token-function">print</span>(<span class="token-function">rial_to_toman</span>(<span class="token-number">1250000</span>)) <span class="token-comment"># 125000.0</span>',
  ],
  [
    'level' => 'hard',
    'desc'  => 'تابعی به اسم <code>is_prime</code> بنویس که یک عدد بگیره و <code>True</code> یا <code>False</code> برگردونه (آیا عدد اول هست یا نه). سپس با یک حلقه، همه اعداد اول بین ۱ تا ۵۰ رو با کمک این تابع چاپ کن.',
    'hint'  => '<span class="token-keyword">def</span> <span class="token-function">is_prime</span>(n):
    <span class="token-keyword">if</span> n < <span class="token-number">2</span>:
        <span class="token-keyword">return</span> <span class="token-keyword">False</span>
    <span class="token-keyword">for</span> i <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">2</span>, n):
        <span class="token-keyword">if</span> n % i == <span class="token-number">0</span>:
            <span class="token-keyword">return</span> <span class="token-keyword">False</span>
    <span class="token-keyword">return</span> <span class="token-keyword">True</span>

<span class="token-keyword">for</span> num <span class="token-keyword">in</span> <span class="token-function">range</span>(<span class="token-number">1</span>, <span class="token-number">51</span>):
    <span class="token-keyword">if</span> <span class="token-function">is_prime</span>(num):
        <span class="token-function">print</span>(num)',
  ],
  [
    'level' => 'hard',
    'desc'  => 'تابعی به اسم <code>calculate_bill</code> بنویس که سه پارامتر بگیره: <code>amount</code> (مبلغ خرید)، <code>discount_percent</code> (درصد تخفیف، پیش‌فرض ۰) و <code>tax_percent</code> (درصد مالیات، پیش‌فرض ۹). تابع باید اول تخفیف رو کم کنه، بعد مالیات رو اضافه کنه و مبلغ نهایی رو برگردونه.',
    'hint'  => '<span class="token-keyword">def</span> <span class="token-function">calculate_bill</span>(amount, discount_percent=<span class="token-number">0</span>, tax_percent=<span class="token-number">9</span>):
    <span class="token-text">after_discount</span> = amount - (amount * discount_percent / <span class="token-number">100</span>)
    <span class="token-text">final</span> = after_discount + (after_discount * tax_percent / <span class="token-number">100</span>)
    <span class="token-keyword">return</span> final

<span class="token-function">print</span>(<span class="token-function">calculate_bill</span>(<span class="token-number">100000</span>))
<span class="token-function">print</span>(<span class="token-function">calculate_bill</span>(<span class="token-number">100000</span>, discount_percent=<span class="token-number">20</span>))',
  ],
];

$references = [
  [
    'url'   => 'https://docs.python.org/3/tutorial/controlflow.html#defining-functions',
    'title' => 'مستندات رسمی پایتون — تعریف توابع',
    'desc'  => 'توضیح رسمی نحوه تعریف و فراخوانی توابع در Python.org',
  ],
  [
    'url'   => 'https://realpython.com/defining-your-own-python-function/',
    'title' => 'Real Python — Defining Your Own Python Function',
    'desc'  => 'مقاله جامع درباره توابع، پارامترها و مقادیر پیش‌فرض با مثال‌های متنوع',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/python_functions.asp',
    'title' => 'W3Schools — Python Functions',
    'desc'  => 'آموزش تعاملی توابع با امکان اجرای کد در مرورگر',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="19">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">توابع در پایتون (Functions)</h1>
          <p class="lesson-lead">
            تا الان هر بار که می‌خواستی یه کار رو تکرار کنی، مجبور بودی همون
            کد رو دوباره بنویسی. توابع دقیقاً همین مشکل رو حل می‌کنن — یه
            قطعه کد رو یه بار می‌نویسی، بهش اسم می‌دی، و هر جا لازم شد فقط
            صداش می‌زنی. در این جلسه یاد می‌گیریم تابع چیه، چرا انقدر مهمه،
            و چطور با پارامتر و مقدار برگشتی کارش رو انعطاف‌پذیر کنیم.
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
                title="آموزش توابع در پایتون - جلسه ۱۹"
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
                title="آموزش توابع در پایتون - آپارات"
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
              <h2>تابع چیست و چرا بهش نیاز داریم؟</h2>
              <p>
                فرض کن توی برنامه‌ت سه جای مختلف نیاز داری قیمت یه محصول رو
                با مالیات محاسبه کنی. بدون تابع، باید همون فرمول رو سه بار
                کپی کنی. حالا اگه یه روز درصد مالیات عوض بشه، باید بری هر
                سه جا رو دستی ویرایش کنی — جایی که یادت بره، باگ می‌سازه.
              </p>
              <p>
                تابع یا <code>function</code> یه بلوک کد قابل استفاده مجدده
                که یه بار می‌نویسیش و هر جا لازم شد فقط صداش می‌زنی. مزایای
                اصلیش:
              </p>
              <ul>
                <li>
                  <strong>جلوگیری از تکرار کد (DRY):</strong> یه بار
                  می‌نویسی، هزار بار استفاده می‌کنی.
                </li>
                <li>
                  <strong>خوانایی بهتر:</strong> کد با اسم‌های معنادار مثل
                  <code>calculate_tax()</code> خودش توضیح می‌ده چیکار می‌کنه.
                </li>
                <li>
                  <strong>نگهداری آسون‌تر:</strong> اگه منطق عوض بشه، فقط یه
                  جا رو ویرایش می‌کنی، نه ده جا رو.
                </li>
                <li>
                  <strong>تست‌پذیری:</strong> می‌تونی هر تابع رو جدا و مستقل
                  تست کنی.
                </li>
              </ul>
            </section>

            <!-- ── EXAMPLE 1: defining and calling ── -->
            <section>
              <h2>مثال اول: تعریف و فراخوانی یک تابع ساده</h2>
              <p>
                یه تابع با کلیدواژه <code>def</code> تعریف می‌شه، بعدش اسم
                تابع، پرانتز و دونقطه. کدهای داخل تابع مثل <code>if</code>
                باید تو رفتگی داشته باشن.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">greet</span>():
    <span class="token-function">print</span>(<span class="token-string">"سلام! خوش اومدی"</span>)

<span class="token-comment"># تا اینجا فقط تابع رو تعریف کردیم، هنوز اجرا نشده</span>
<span class="token-comment"># برای اجرا، باید صداش بزنیم:</span>
<span class="token-function">greet</span>()
<span class="token-function">greet</span>()   <span class="token-comment"># می‌تونیم چندبار صداش بزنیم</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>تعریف کردن ≠ اجرا کردن:</strong> وقتی
                  <code>def</code> می‌نویسی، فقط داری به پایتون می‌گی «این
                  دستورالعمل رو یاد بگیر». تا وقتی خودت با
                  <code>greet()</code> صداش نزنی، هیچ کدی اجرا نمی‌شه.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 2: parameters & return ── -->
            <section>
              <h2>مثال دوم: پارامتر گرفتن و مقدار برگردوندن</h2>
              <p>
                تابعی که همیشه یه کار ثابت انجام بده خیلی به درد نمی‌خوره.
                قدرت واقعی توابع وقتیه که بتونن ورودی (پارامتر) بگیرن و یه
                خروجی (مقدار برگشتی) بدن.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">add</span>(a, b):
    <span class="token-keyword">return</span> a + b

<span class="token-text">result</span> = <span class="token-function">add</span>(<span class="token-number">5</span>, <span class="token-number">3</span>)
<span class="token-function">print</span>(result)   <span class="token-comment"># 8</span>

<span class="token-comment"># خود تابع رو مستقیم توی print هم می‌تونی صدا بزنی</span>
<span class="token-function">print</span>(<span class="token-function">add</span>(<span class="token-number">10</span>, <span class="token-number">20</span>))   <span class="token-comment"># 30</span></code></pre>
              </div>

              <p>
                <code>a</code> و <code>b</code> پارامتر هستن — جاهای خالی که
                موقع فراخوانی باید پر بشن. <code>return</code> مقداری رو که
                تابع محاسبه کرده به بیرون می‌فرسته تا بتونی توی متغیر
                ذخیره‌ش کنی یا مستقیم استفاده‌ش کنی.
              </p>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>فرق return و print:</strong> <code>print</code> فقط
                  یه چیزی رو روی صفحه نشون می‌ده و تمام — هیچ مقداری به کد
                  بیرون از تابع برنمی‌گرده. اما <code>return</code> مقدار رو
                  واقعاً به بیرون تابع می‌فرسته تا بتونی باهاش کار بیشتری
                  انجام بدی. تابعی که فقط <code>print</code> داره و
                  <code>return</code> نداره، توی متغیر ذخیره بشه مقدار
                  <code>None</code> می‌گیره.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3: default params ── -->
            <section>
              <h2>مثال سوم: پارامتر پیش‌فرض و چند خروجی</h2>
              <p>
                می‌تونی به پارامترها مقدار پیش‌فرض بدی تا اگه کاربر چیزی
                نفرستاد، از همون مقدار پیش‌فرض استفاده بشه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">greet</span>(name, greeting=<span class="token-string">"سلام"</span>):
    <span class="token-keyword">return</span> <span class="token-string">f"{greeting}, {name}!"</span>

<span class="token-function">print</span>(<span class="token-function">greet</span>(<span class="token-string">"ادریس"</span>))                 <span class="token-comment"># سلام, ادریس!</span>
<span class="token-function">print</span>(<span class="token-function">greet</span>(<span class="token-string">"سارا"</span>, <span class="token-string">"درود"</span>))       <span class="token-comment"># درود, سارا!</span>

<span class="token-comment"># می‌تونی با اسم پارامتر هم صداش بزنی (خواناتره)</span>
<span class="token-function">print</span>(<span class="token-function">greet</span>(name=<span class="token-string">"رضا"</span>, greeting=<span class="token-string">"چطوری"</span>))</code></pre>
              </div>

              <p>
                یه تابع می‌تونه بیشتر از یه مقدار هم برگردونه — کافیه با کاما
                جداشون کنی. پایتون خودش اون‌ها رو به شکل tuple بسته‌بندی
                می‌کنه:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">min_max</span>(numbers):
    <span class="token-keyword">return</span> <span class="token-function">min</span>(numbers), <span class="token-function">max</span>(numbers)

<span class="token-text">smallest</span>, <span class="token-text">largest</span> = <span class="token-function">min_max</span>([<span class="token-number">4</span>, <span class="token-number">9</span>, <span class="token-number">1</span>, <span class="token-number">7</span>])
<span class="token-function">print</span>(<span class="token-string">f"کمترین: {smallest}, بیشترین: {largest}"</span>)
<span class="token-comment"># کمترین: 1, بیشترین: 9</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>قانون مهم:</strong> پارامترهای بدون مقدار پیش‌فرض
                  باید همیشه قبل از پارامترهای دارای مقدار پیش‌فرض بیان.
                  یعنی <code>def f(a, b=5)</code> درسته ولی
                  <code>def f(a=5, b)</code> خطا می‌ده.
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
          <a href="18.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">دستورات شرطی</div>
            </div>
          </a>
          <a href="20.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title"></div>
            </div>
            <span>›</span>
          </a>
        </div>

      </main>
    </div>
    <!-- end lesson-layout -->
<?php require $root . 'includes/footer.php'; ?>
