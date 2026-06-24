<?php
$root        = './';
$description = 'تابع پرینت';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>

    <div class="lesson-layout" style="position: relative; z-index: 1">
      <main class="lesson-main" data-lesson="5">
        <div class="breadcrumb">
          <a href="index.php">خانه</a>
          <span class="bc-sep">›</span>
          <a href="index.php#curriculum">فصل ۱</a>
          <span class="bc-sep">›</span>
          <span>تابع پرینت</span>
        </div>

        <div class="lesson-header">
          <h1 class="lesson-title">قسمت ۵: بررسی عمیق‌تر تابع پرینت (print)</h1>
          <p class="lesson-lead">
            حالا که اولین برنامه خود را نوشته‌اید، وقت آن است که یکی از
            پرکاربردترین دستورات پایتون یعنی تابع <code>print</code> را به صورت
            دقیق‌تر بررسی کنیم. در این جلسه یاد می‌گیریم چگونه مقادیر مختلف را
            در خروجی نمایش دهیم و رفتار این تابع را با استفاده از پارامترها
            کنترل کنیم.
          </p>
        </div>

        <section class="lesson-section" id="videos">
          <div class="section-label">
            <span class="section-label-icon">🎬</span>
            ویدیوهای آموزشی
          </div>

          <div class="video-tabs">
            <button class="video-tab active" data-target="youtube-player">
              یوتیوب
            </button>
            <button class="video-tab" data-target="aparat-player">
              آپارات
            </button>
          </div>

          <div class="video-player-wrap active" id="youtube-player">
            <div class="video-embed">
              <iframe
                src="https://www.youtube.com/embed/ek9uIOb_erI"
                title="آموزش پایتون ۲۰۲۶ - قسمت ۵: تابع پرینت"
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
                href="https://youtube.com/watch?v=ek9uIOb_erI"
                target="_blank"
                rel="noopener"
                >باز کردن در یوتیوب ↗</a
              >
            </div>
          </div>

          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/APARAT_HASH/vt/frame"
                title="آموزش پایتون - قسمت ۵: تابع پرینت"
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

        <section class="lesson-section" id="description">
          <div class="section-label">
            <span class="section-label-icon">📖</span>
            توضیحات جلسه
          </div>

          <div class="lesson-content">
            <section>
              <h2>معرفی و ساختار اولیه تابع print</h2>
              <p>
                تابع <code>print()</code> برای چاپ و نمایش اطلاعات در خروجی
                (ترمینال) استفاده می‌شود. ساختار آن شامل کلمه پرینت و یک جفت
                پرانتز است. برای نمایش یک متن (رشته یا String)، باید آن متن را
                داخل علامت‌های دابل‌کوتیشن (<code>""</code>) یا سینگل‌کوتیشن
                (<code>''</code>) قرار دهید.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-function">print</span>(<span class="token-string">"سلام"</span>)
<span class="token-function">print</span>(<span class="token-string">"ادریس"</span>)</code></pre>
              </div>
              <p>
                نکته: هر بار که از تابع <code>print</code> استفاده می‌کنید،
                پایتون به طور پیش‌فرض پس از چاپ آن عبارت، یک اینتر (Enter) زده و
                به خط بعدی می‌رود. بنابراین خروجی کدهای بالا در دو خط مجزا نمایش
                داده می‌شود.
              </p>
            </section>

            <section>
              <h2>چاپ چند مقدار در یک خط (استفاده از کاما)</h2>
              <p>
                گاهی اوقات نیاز داریم چندین کلمه، متغیر یا مقدار مختلف را به
                صورت همزمان و در یک خط نمایش دهیم. برای این کار کافیست مقادیر
                مختلف را درون پرانتز با استفاده از علامت کامای انگلیسی
                (<code>,</code>) از یکدیگر جدا کنیم.
              </p>
              <p>
                در این حالت، پایتون به صورت خودکار بین مقادیری که با کاما جدا
                شده‌اند، یک فاصله (Space) قرار می‌دهد:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># چاپ دو مقدار مجزا در یک دستور پرینت</span>
<span class="token-function">print</span>(<span class="token-string">"سلام"</span>, <span class="token-string">"ادریس"</span>)</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>خروجی کد بالا:</strong> <code>سلام ادریس</code> (در یک
                  خط چاپ می‌شود).
                </div>
              </div>
            </section>

            <section>
              <h2>کنترل انتهای خط با پارامتر end</h2>
              <p>
                همان‌طور که پیش‌تر اشاره کردیم، تابع پرینت در انتهای کار خود به
                صورت خودکار یک کاراکتر خط‌شکن یا همان اینتر (که در پایتون با
                <code>\n</code> نشان داده می‌شود) اضافه می‌کند. اما ما می‌توانیم
                این رفتار پیش‌فرض را تغییر دهیم!
              </p>
              <p>
                با اضافه کردن پارامتری به نام <code>end</code> در انتهای دستور،
                می‌توانیم مشخص کنیم که پرینت با چه کاراکتری به پایان برسد. به
                عنوان مثال، فرض کنید می‌خواهیم به جای رفتن به خط بعد، یک خط تیره
                (<code>-</code>) قرار گیرد و پرینت بعدی در ادامه همان خط چاپ
                شود:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-function">print</span>(<span class="token-string">"سلام ادریس"</span>, end=<span class="token-string">"-"</span>)
<span class="token-function">print</span>(<span class="token-string">"This is a test"</span>)</code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>خروجی:</strong> <code>سلام ادریس-This is a test</code
                  ><br />
                  همان‌طور که مشاهده می‌کنید، استفاده از پارامتر
                  <code>end</code> مانع از شکسته شدن خط شده و رشته دوم دقیقاً پس
                  از خط تیره در همان خط چاپ می‌شود. شما می‌توانید هر کاراکتر
                  دلخواهی (مثل ستاره، فاصله خالی یا کاما) را به
                  <code>end</code> اختصاص دهید.
                </div>
              </div>
            </section>

            <section>
              <h2>نتیجه‌گیری</h2>
              <p>
                در این جلسه یاد گرفتیم که چگونه از انعطاف‌پذیری تابع
                <code>print</code> استفاده کنیم. توانایی نمایش صحیح و قالب‌بندی
                شده اطلاعات در خروجی، یکی از مهم‌ترین مهارت‌ها برای خطایابی
                (دیباگ) و تعامل با کاربر است. حتماً حالت‌های مختلف این تابع را
                در سیستم خود تمرین کنید.
              </p>
            </section>
          </div>
        </section>

        <section class="lesson-section" id="references">
          <div class="section-label">
            <span class="section-label-icon">📎</span>
            منابع و مطالعه بیشتر
          </div>

          <div class="reference-list">
            <a
              href="https://docs.python.org/3/library/functions.php#print"
              target="_blank"
              rel="noopener"
              class="reference-card"
            >
              <div class="ref-icon ref-icon-blue">🌐</div>
              <div class="ref-body">
                <div class="ref-title">مستندات رسمی پایتون — تابع print</div>
                <div class="ref-desc">
                  توضیح کامل تابع print و تمامی آرگومان‌های آن (مثل sep و end)
                </div>
              </div>
              <span class="ref-arrow">↗</span>
            </a>

            <a
              href="https://www.w3schools.com/python/ref_func_print.asp"
              target="_blank"
              rel="noopener"
              class="reference-card"
            >
              <div class="ref-icon ref-icon-blue">🌐</div>
              <div class="ref-body">
                <div class="ref-title">W3Schools — Python print()</div>
                <div class="ref-desc">
                  آموزش تعاملی و تمرین‌های آنلاین برای یادگیری پارامترهای تابع
                  پرینت
                </div>
              </div>
              <span class="ref-arrow">↗</span>
            </a>
          </div>
        </section>

        <div class="lesson-nav-btns">
          <a href="4.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">نوشتن کامنت</div>
            </div>
          </a>
          <a href="6.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">متغیرها در پایتون</div>
            </div>
            <span>›</span>
          </a>
        </div>
      </main>
    </div>
<?php require $root . 'includes/footer.php'; ?>
