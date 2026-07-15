<?php
$root        = './';
$description = 'کار با فایل‌ها';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$exercises = [
  [
    'level' => null,
    'desc'  => 'یک فایل به نام <code>message.txt</code> بساز و با استفاده از <code>open()</code> و حالت <code>w</code> متن <code>Hello Python</code> را داخلش بنویس. بعد فایل را ببند، دوباره با حالت <code>r</code> بازش کن و محتوای آن را چاپ کن.',
    'hint'  => '<span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>)
<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"Hello Python"</span>)
<span class="token-text">file</span>.<span class="token-function">close</span>()

<span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)
<span class="token-function">print</span>(<span class="token-text">file</span>.<span class="token-function">read</span>())
<span class="token-text">file</span>.<span class="token-function">close</span>()',
  ],
  [
    'level' => null,
    'desc'  => 'فایلی به نام <code>students.txt</code> بساز و نام ۵ دانش‌آموز را طوری داخل آن ذخیره کن که هر اسم در یک خط باشد. سپس فایل را بخوان و همه نام‌ها را همراه با شماره ردیف چاپ کن.',
    'hint'  => '<span class="token-text">students</span> = [<span class="token-string">"Ali"</span>, <span class="token-string">"Sara"</span>, <span class="token-string">"Reza"</span>, <span class="token-string">"Nika"</span>, <span class="token-string">"Mina"</span>]

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"students.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-keyword">for</span> <span class="token-text">student</span> <span class="token-keyword">in</span> <span class="token-text">students</span>:
        <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-text">student</span> + <span class="token-string">"\\n"</span>)

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"students.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-keyword">for</span> <span class="token-text">number</span>, <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(<span class="token-text">file</span>, start=<span class="token-number">1</span>):
        <span class="token-function">print</span>(<span class="token-text">number</span>, <span class="token-text">line</span>.<span class="token-function">strip</span>())',
  ],
  [
    'level' => 'hard',
    'desc'  => 'یک برنامه ثبت گزارش بساز. برنامه باید در هر اجرا از کاربر یک متن بگیرد و آن را بدون پاک کردن گزارش‌های قبلی به فایل <code>logs.txt</code> اضافه کند. سپس کل فایل را بخواند، تعداد گزارش‌های ثبت‌شده را حساب کند و آخرین گزارش را نمایش دهد. اگر فایل هنوز وجود نداشت، برنامه نباید خطا بدهد.',
    'hint'  => '<span class="token-text">log</span> = <span class="token-function">input</span>(<span class="token-string">"گزارش جدید: "</span>)

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"logs.txt"</span>, <span class="token-string">"a"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-text">log</span> + <span class="token-string">"\\n"</span>)

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"logs.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-text">logs</span> = <span class="token-text">file</span>.<span class="token-function">readlines</span>()

<span class="token-text">clean_logs</span> = [<span class="token-text">line</span>.<span class="token-function">strip</span>() <span class="token-keyword">for</span> <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-text">logs</span> <span class="token-keyword">if</span> <span class="token-text">line</span>.<span class="token-function">strip</span>()]
<span class="token-function">print</span>(<span class="token-string">"تعداد گزارش‌ها:"</span>, <span class="token-function">len</span>(<span class="token-text">clean_logs</span>))

<span class="token-keyword">if</span> <span class="token-text">clean_logs</span>:
    <span class="token-function">print</span>(<span class="token-string">"آخرین گزارش:"</span>, <span class="token-text">clean_logs</span>[-<span class="token-number">1</span>])',
  ],
];

$references = [
  [
    'url'   => 'https://docs.python.org/3/tutorial/inputoutput.html#reading-and-writing-files',
    'title' => 'مستندات رسمی پایتون — خواندن و نوشتن فایل‌ها',
    'desc'  => 'توضیح رسمی تابع open، حالت‌های باز کردن فایل و کار با with در Python.org',
  ],
  [
    'url'   => 'https://docs.python.org/3/library/functions.html#open',
    'title' => 'مستندات رسمی تابع open()',
    'desc'  => 'مرجع کامل پارامترهای تابع open و حالت‌های مختلف باز کردن فایل',
  ],
  [
    'url'   => 'https://realpython.com/read-write-files-python/',
    'title' => 'Real Python — Reading and Writing Files in Python',
    'desc'  => 'آموزش کاربردی کار با فایل‌ها، مدیریت منابع و روش‌های مختلف خواندن و نوشتن',
  ],
];

// ─── QUIZ DATA ───
$quiz = [
  'id'    => 'file-quiz',
  'intro' => 'قبل از رفتن سراغ تمرین‌ها، به سؤال‌های زیر پاسخ بده و بعد پاسخ درست را بررسی کن.',
  'questions' => [
    [
      'question' => 'کدام Mode برای خواندن یک فایل استفاده می‌شود؟',
      'options'  => ['<code>w</code>', '<code>r</code>', '<code>a</code>', '<code>x</code>'],
      'correct'  => 1,
    ],
    [
      'question' => 'اگر فایلی را با Mode برابر w باز کنیم چه اتفاقی می‌افتد؟',
      'options'  => [
        'فقط می‌توانیم آن را بخوانیم',
        'فقط اطلاعات جدید به انتهای فایل اضافه می‌شود',
        'محتوای قبلی فایل پاک می‌شود و امکان نوشتن داریم',
        'اگر فایل وجود داشته باشد خطا می‌دهد',
      ],
      'correct'  => 2,
    ],
    [
      'question' => 'کدام متد کل محتوای فایل را معمولاً به‌صورت یک رشته می‌خواند؟',
      'options'  => ['<code>write()</code>', '<code>read()</code>', '<code>close()</code>', '<code>append()</code>'],
      'correct'  => 1,
    ],
    [
      'question' => 'مزیت اصلی استفاده از with هنگام کار با فایل چیست؟',
      'options'  => [
        'فایل را سریع‌تر می‌کند',
        'فایل بعد از پایان بلوک به‌صورت خودکار بسته می‌شود',
        'فقط برای فایل‌های تصویری استفاده می‌شود',
        'باعث حذف خطاهای برنامه می‌شود',
      ],
      'correct'  => 1,
    ],
    [
      'question' => 'برای اضافه کردن متن جدید بدون پاک کردن محتوای قبلی از کدام Mode استفاده می‌کنیم؟',
      'options'  => ['<code>r</code>', '<code>w</code>', '<code>a</code>', '<code>x</code>'],
      'correct'  => 2,
    ],
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="20">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">کار با فایل‌ها در پایتون (File Handling)</h1>
          <p class="lesson-lead">
            تا اینجا اطلاعاتی که داخل متغیرها ذخیره می‌کردیم فقط تا زمانی وجود
            داشتن که برنامه در حال اجرا بود. با بسته شدن برنامه، همه‌چیز از بین
            می‌رفت. فایل‌ها به ما اجازه می‌دن اطلاعات رو به‌صورت دائمی روی سیستم
            ذخیره کنیم، دوباره بخونیم، تغییر بدیم یا به انتهای اون‌ها اطلاعات جدید
            اضافه کنیم. در این جلسه قدم‌به‌قدم یاد می‌گیریم فایل چیه، چطور بازش
            کنیم، حالت‌های مختلف <code>open()</code> چه تفاوتی دارن و چطور عملیات
            خواندن، نوشتن و بستن فایل رو به شکل درست انجام بدیم.
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

          <div class="video-player-wrap active" id="youtube-player">
            <div class="video-embed">
              <iframe
                src="https://www.youtube.com/embed/VIDEO_ID"
                title="آموزش کار با فایل‌ها در پایتون - جلسه ۲۰"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              📺 برای تماشا در یوتیوب:
              <a href="https://youtube.com/watch?v=VIDEO_ID" target="_blank" rel="noopener">باز کردن در یوتیوب ↗</a>
            </div>
          </div>

          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/APARAT_HASH/vt/frame"
                title="آموزش کار با فایل‌ها در پایتون - آپارات"
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

            <section>
              <h2>فایل چیست و چرا به آن نیاز داریم؟</h2>
              <p>
                متغیرهای پایتون داخل حافظه موقت یا RAM نگهداری می‌شن. یعنی وقتی
                برنامه بسته بشه، مقدار متغیرها هم از بین می‌ره. اما خیلی وقت‌ها
                لازم داریم اطلاعات بعد از پایان برنامه باقی بمونن؛ مثلاً نام
                کاربران، گزارش‌ها، تنظیمات برنامه، نمرات دانش‌آموزان یا خروجی یک
                پردازش.
              </p>
              <p>
                فایل دقیقاً برای همین کار استفاده می‌شه. برنامه می‌تونه یک فایل
                را باز کند، محتوای آن را بخواند، داخلش چیزی بنویسد و بعد آن را
                ببندد.
              </p>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  ساده‌ترین چرخه کار با فایل معمولاً اینه:
                  <strong>باز کردن فایل &larr; انجام عملیات &larr; بستن فایل</strong>
                </div>
              </div>
            </section>

            <section>
              <h2>باز کردن فایل با تابع open()</h2>
              <p>
                برای کار با فایل‌ها در پایتون از تابع داخلی <code>open()</code>
                استفاده می‌کنیم. این تابع فایل را باز می‌کند و یک شیء فایل به ما
                برمی‌گرداند تا بتوانیم روی آن عملیات انجام دهیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"data.txt"</span>, <span class="token-string">"r"</span>)</code></pre>
              </div>

              <p>در این مثال دو ورودی مهم به <code>open()</code> داده‌ایم:</p>
              <ul>
                <li><code>"data.txt"</code>: نام یا مسیر فایل</li>
                <li><code>"r"</code>: حالت یا Mode باز کردن فایل</li>
              </ul>

              <p>
                خروجی تابع <code>open()</code> را داخل متغیری مثل
                <code>file</code> ذخیره می‌کنیم. از این متغیر برای خواندن، نوشتن
                و بستن فایل استفاده می‌شود.
              </p>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  اگر فقط نام فایل را بنویسی، پایتون معمولاً دنبال آن فایل در
                  پوشه‌ای می‌گردد که برنامه از آنجا اجرا شده است. برای فایل‌های
                  داخل پوشه‌های دیگر باید مسیر مناسب را وارد کنی.
                </div>
              </div>
            </section>

            <section>
              <h2>Mode یا حالت‌های مختلف باز کردن فایل</h2>
              <p>
                Mode مشخص می‌کند فایل را برای چه کاری باز می‌کنیم. انتخاب Mode
                خیلی مهم است، چون بعضی حالت‌ها فقط اجازه خواندن می‌دهند و بعضی
                حالت‌ها ممکن است محتوای قبلی فایل را پاک کنند.
              </p>

              <div style="overflow-x: auto; margin: 24px 0;">
                <table style="width: 100%; border-collapse: collapse; min-width: 720px;">
                  <thead>
                    <tr>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">Mode</th>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">کاربرد</th>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">اگر فایل وجود نداشته باشد</th>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">وضعیت محتوای قبلی</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>r</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فقط خواندن</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خطا می‌دهد</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حفظ می‌شود</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>w</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فقط نوشتن</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فایل ساخته می‌شود</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><strong>کاملاً پاک می‌شود</strong></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>a</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">اضافه کردن به انتهای فایل</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فایل ساخته می‌شود</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حفظ می‌شود</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>x</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">ساخت یک فایل جدید</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فایل ساخته می‌شود</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">اگر فایل از قبل وجود داشته باشد خطا می‌دهد</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>r+</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خواندن و نوشتن</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خطا می‌دهد</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خودکار پاک نمی‌شود</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>w+</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خواندن و نوشتن</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فایل ساخته می‌شود</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><strong>کاملاً پاک می‌شود</strong></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>a+</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خواندن و اضافه کردن</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">فایل ساخته می‌شود</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حفظ می‌شود</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>b</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حالت باینری؛ مثل <code>rb</code> و <code>wb</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">بسته به Mode اصلی</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">برای فایل‌هایی مثل عکس و PDF استفاده می‌شود</td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>t</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حالت متنی؛ مثل <code>rt</code> و <code>wt</code></td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">بسته به Mode اصلی</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حالت پیش‌فرض فایل‌های متنی</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  مهم‌ترین نکته برای شروع: حالت <code>w</code> محتوای قبلی فایل
                  را پاک می‌کند. اگر می‌خواهی اطلاعات جدید به اطلاعات قبلی اضافه
                  شود، معمولاً باید از <code>a</code> استفاده کنی.
                </div>
              </div>
            </section>

            <section>
              <h2>خواندن فایل با <code>read()</code></h2>
              <p>
                ساده‌ترین روش برای خواندن کل محتوای یک فایل متنی استفاده از
                متد <code>read()</code> است.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-text">content</span> = <span class="token-text">file</span>.<span class="token-function">read</span>()
<span class="token-function">print</span>(<span class="token-text">content</span>)

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                متد <code>read()</code> از محل فعلی نشانگر فایل تا انتهای فایل را
                می‌خواند و نتیجه را به‌صورت یک رشته برمی‌گرداند.
              </p>

              <p>
                حتی می‌توانیم مشخص کنیم چند کاراکتر خوانده شود:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-function">print</span>(<span class="token-text">file</span>.<span class="token-function">read</span>(<span class="token-number">5</span>))

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                در این حالت فقط ۵ کاراکتر اول از موقعیت فعلی فایل خوانده می‌شود.
              </p>
            </section>

            <section>
              <h2>خواندن یک خط با <code>readline()</code></h2>
              <p>
                متد <code>readline()</code> فقط یک خط را می‌خواند. هر بار که آن
                را دوباره صدا بزنیم، خط بعدی خوانده می‌شود.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"names.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-function">print</span>(<span class="token-text">file</span>.<span class="token-function">readline</span>())
<span class="token-function">print</span>(<span class="token-text">file</span>.<span class="token-function">readline</span>())

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                اگر فایل چند خط داشته باشد، فراخوانی اول خط اول و فراخوانی دوم
                خط دوم را می‌خواند.
              </p>
            </section>

            <section>
              <h2>خواندن همه خط‌ها با <code>readlines()</code></h2>
              <p>
                متد <code>readlines()</code> همه خط‌های فایل را می‌خواند و آن‌ها
                را داخل یک لیست قرار می‌دهد.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"names.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-text">lines</span> = <span class="token-text">file</span>.<span class="token-function">readlines</span>()
<span class="token-function">print</span>(<span class="token-text">lines</span>)

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                معمولاً انتهای هر خط شامل <code>\n</code> است. برای حذف فاصله‌ها
                و خط جدید می‌توانیم از <code>strip()</code> استفاده کنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">for</span> <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-text">lines</span>:
    <span class="token-function">print</span>(<span class="token-text">line</span>.<span class="token-function">strip</span>())</code></pre>
              </div>
            </section>

            <section>
              <h2>خواندن فایل با حلقه for</h2>
              <p>
                برای فایل‌های متنی، می‌توانیم مستقیماً روی شیء فایل حلقه بزنیم.
                این روش خوانا و برای فایل‌های بزرگ مناسب‌تر از خواندن همه فایل به
                صورت یک‌جا است.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"names.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-keyword">for</span> <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-text">file</span>:
    <span class="token-function">print</span>(<span class="token-text">line</span>.<span class="token-function">strip</span>())

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>
            </section>

            <section>
              <h2>نوشتن داخل فایل با <code>write()</code></h2>
              <p>
                برای نوشتن متن داخل فایل از متد <code>write()</code> استفاده
                می‌کنیم. فایل باید در حالتی باز شده باشد که اجازه نوشتن بدهد؛
                مثل <code>w</code>، <code>a</code> یا حالت‌های دارای <code>+</code>.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"سلام پایتون"</span>)

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                اگر <code>message.txt</code> وجود نداشته باشد، ساخته می‌شود. اگر
                وجود داشته باشد، چون از Mode برابر <code>w</code> استفاده کرده‌ایم،
                محتوای قبلی آن پاک می‌شود.
              </p>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  متد <code>write()</code> خودش به انتهای متن خط جدید اضافه
                  نمی‌کند. برای رفتن به خط بعد باید خودت <code>\n</code> بنویسی.
                </div>
              </div>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"users.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"Ali\\n"</span>)
<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"Sara\\n"</span>)
<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"Reza\\n"</span>)

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>
            </section>

            <section>
              <h2>اضافه کردن اطلاعات با حالت a</h2>
              <p>
                اگر بخواهیم اطلاعات قبلی باقی بماند و فقط داده جدید به انتهای
                فایل اضافه شود، از Mode برابر <code>a</code> استفاده می‌کنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"logs.txt"</span>, <span class="token-string">"a"</span>, encoding=<span class="token-string">"utf-8"</span>)

<span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"User logged in\\n"</span>)

<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                هر بار برنامه اجرا شود، متن جدید به انتهای فایل اضافه می‌شود و
                اطلاعات قبلی پاک نمی‌شوند.
              </p>
            </section>

            <section>
              <h2>نوشتن چند خط با <code>writelines()</code></h2>
              <p>
                اگر چند رشته داخل یک لیست داشته باشیم، می‌توانیم با
                <code>writelines()</code> آن‌ها را داخل فایل بنویسیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">names</span> = [<span class="token-string">"Ali\\n"</span>, <span class="token-string">"Sara\\n"</span>, <span class="token-string">"Reza\\n"</span>]

<span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"names.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>)
<span class="token-text">file</span>.<span class="token-function">writelines</span>(<span class="token-text">names</span>)
<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <code>writelines()</code> هم خودش بین آیتم‌ها خط جدید اضافه
                  نمی‌کند. اگر هر آیتم باید در خط جدا باشد، <code>\n</code> را
                  داخل رشته‌ها قرار بده.
                </div>
              </div>
            </section>

            <section>
              <h2>بستن فایل با <code>close()</code></h2>
              <p>
                بعد از تمام شدن کار با فایل، باید آن را ببندیم. این کار با متد
                <code>close()</code> انجام می‌شود.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">file</span> = <span class="token-function">open</span>(<span class="token-string">"data.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>)
<span class="token-text">content</span> = <span class="token-text">file</span>.<span class="token-function">read</span>()
<span class="token-text">file</span>.<span class="token-function">close</span>()</code></pre>
              </div>

              <p>
                بستن فایل باعث آزاد شدن منابع سیستم می‌شود و مخصوصاً هنگام نوشتن
                کمک می‌کند مطمئن شویم اطلاعات به‌درستی در فایل ثبت شده‌اند.
              </p>
            </section>

            <section>
              <h2>روش بهتر: استفاده از with</h2>
              <p>
                در پایتون روش پیشنهادی برای کار با فایل‌ها استفاده از
                <code>with</code> است. مزیت اصلی این روش این است که فایل بعد از
                پایان بلوک به‌صورت خودکار بسته می‌شود و لازم نیست دستی
                <code>close()</code> را صدا بزنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"message.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-text">content</span> = <span class="token-text">file</span>.<span class="token-function">read</span>()
    <span class="token-function">print</span>(<span class="token-text">content</span>)

<span class="token-comment"># اینجا فایل به‌صورت خودکار بسته شده</span></code></pre>
              </div>

              <p>
                تقریباً در پروژه‌های واقعی بهتر است تا جای ممکن از همین روش
                استفاده کنیم.
              </p>
            </section>

            <section>
              <h2>استفاده از encoding برای متن فارسی</h2>
              <p>
                هنگام کار با متن فارسی بهتر است Encoding را مشخص کنیم. رایج‌ترین
                انتخاب <code>utf-8</code> است.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"persian.txt"</span>, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">"سلام، این یک متن فارسی است."</span>)</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  برای جلوگیری از مشکل نمایش حروف فارسی، عادت کن هنگام کار با
                  فایل‌های متنی بنویسی: <code>encoding="utf-8"</code>
                </div>
              </div>
            </section>

            <section>
              <h2>مثال کامل: ذخیره و خواندن یادداشت</h2>
              <p>
                در این مثال از کاربر یک یادداشت می‌گیریم، آن را داخل فایل ذخیره
                می‌کنیم و بعد کل فایل را می‌خوانیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">note</span> = <span class="token-function">input</span>(<span class="token-string">"یادداشت خودت را بنویس: "</span>)

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"notes.txt"</span>, <span class="token-string">"a"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-text">note</span> + <span class="token-string">"\\n"</span>)

<span class="token-keyword">with</span> <span class="token-function">open</span>(<span class="token-string">"notes.txt"</span>, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
    <span class="token-function">print</span>(<span class="token-string">"\\nهمه یادداشت‌ها:"</span>)
    <span class="token-function">print</span>(<span class="token-text">file</span>.<span class="token-function">read</span>())</code></pre>
              </div>
            </section>

            <section>
              <h2>اشتباهات رایج هنگام کار با فایل‌ها</h2>
              <ul>
                <li>باز کردن فایل با <code>r</code> در حالی که فایل هنوز وجود ندارد.</li>
                <li>استفاده اشتباهی از <code>w</code> و پاک شدن محتوای قبلی.</li>
                <li>فراموش کردن <code>close()</code> وقتی از <code>with</code> استفاده نشده.</li>
                <li>فراموش کردن <code>\n</code> هنگام نوشتن چند خط.</li>
                <li>استفاده نکردن از <code>encoding="utf-8"</code> برای متن فارسی.</li>
                <li>نوشتن روی فایلی که فقط با حالت <code>r</code> باز شده.</li>
              </ul>
            </section>

            <section>
              <h2>جمع‌بندی سریع</h2>
              <ul>
                <li><code>open()</code> برای باز کردن فایل استفاده می‌شود.</li>
                <li><code>r</code> برای خواندن است.</li>
                <li><code>w</code> برای نوشتن و پاک کردن محتوای قبلی است.</li>
                <li><code>a</code> برای اضافه کردن به انتهای فایل است.</li>
                <li><code>read()</code> کل محتوا را می‌خواند.</li>
                <li><code>readline()</code> یک خط را می‌خواند.</li>
                <li><code>readlines()</code> خط‌ها را به‌صورت لیست برمی‌گرداند.</li>
                <li><code>write()</code> برای نوشتن متن استفاده می‌شود.</li>
                <li><code>close()</code> فایل را می‌بندد.</li>
                <li>استفاده از <code>with open(...)</code> روش بهتر و امن‌تر است.</li>
              </ul>
            </section>

          </div>
        </section>

        <!-- ─── QUIZ ─── -->
        <?php require_once $root . 'includes/quiz.php'; ?>

        <!-- ─── EXERCISES ─── -->
        <?php require_once $root . 'includes/exercises.php'; ?>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <!-- ─── NAVIGATION ─── -->
        <div class="lesson-nav-btns">
          <a href="19.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">توابع در پایتون</div>
            </div>
          </a>
          <a href="21.php" class="lesson-nav-btn lesson-nav-next">
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
