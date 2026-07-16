<?php
$root        = './';
$description = 'پروژه مدیریت مخاطبین';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$exercises = [
  [
    'level' => 'hard',
    'desc'  => 'برنامه بالا رو کامل کن. یک قابلیت جدید به اسم <strong>«ویرایش مخاطب»</strong> اضافه کن: کاربر نام مخاطب رو وارد می‌کنه؛ اگه مخاطب پیدا شد، ازش شماره تلفن جدید رو بگیر و شماره قبلی رو با اون جایگزین کن؛ بعد تغییرات رو با <code>save_contacts()</code> ذخیره کن. باید یک تابع جدید بسازی و یک گزینه جدید (مثلاً گزینه ۵) هم به منو اضافه کنی. اگه مخاطبی با اون اسم پیدا نشد، پیام مناسب نشون بده.',
    'hint'  => '<span class="token-keyword">def</span> <span class="token-function">edit_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"نام مخاطبی که می‌خوای ویرایش کنی: "</span>)
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-text">CONTACTS</span>:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            <span class="token-text">new_phone</span> = <span class="token-function">input</span>(<span class="token-string">"شماره تلفن جدید: "</span>)
            <span class="token-text">contact</span>[<span class="token-string">"phone"</span>] = <span class="token-text">new_phone</span>
            <span class="token-function">save_contacts</span>()
            <span class="token-function">print</span>(<span class="token-string">"مخاطب با موفقیت ویرایش شد.\\n"</span>)
            <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"مخاطبی با این نام پیدا نشد.\\n"</span>)


<span class="token-comment"># و داخل show_menu() این خط رو اضافه کن:</span>
<span class="token-function">print</span>(<span class="token-string">"۵. ویرایش مخاطب"</span>)

<span class="token-comment"># و داخل حلقه اصلی main() این شرط جدید رو اضافه کن:</span>
<span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"5"</span>:
    <span class="token-function">edit_contact</span>()',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="21">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">پروژه عملی: مدیریت مخاطبین ترمینالی</h1>
          <p class="lesson-lead">
            وقتشه چیزهایی که تا الان یاد گرفتیم رو کنار هم بذاریم و یک برنامه
            واقعی بسازیم. توی این جلسه، قدم‌به‌قدم یک برنامه مدیریت مخاطبین
            می‌سازیم که کاملاً از داخل ترمینال کار می‌کنه: می‌تونی مخاطب اضافه
            کنی، لیستشون رو ببینی، جستجو کنی، حذف کنی و همه‌چیز روی فایل ذخیره
            بشه تا با بستن برنامه از بین نره. هیچ مفهوم جدیدی لازم نیست — فقط
            متغیر، شرط، حلقه، تابع و فایل، دقیقاً همون چیزهایی که تا الان یاد
            گرفتیم.
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
                title="پروژه مدیریت مخاطبین ترمینالی - جلسه ۲۱"
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
                title="پروژه مدیریت مخاطبین ترمینالی - آپارات"
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
              <h2>چرا ساختن پروژه اینقدر مهمه؟</h2>
              <p>
                تا الان هر جلسه یک مفهوم جدا یاد گرفتیم: متغیر، شرط، حلقه، تابع،
                فایل. اما برنامه‌های واقعی از ترکیب همه این‌ها با هم ساخته
                می‌شن. این جلسه دقیقاً همین کار رو می‌کنه — یک پروژه کوچیک اما
                کامل که همه‌چیز رو کنار هم می‌بینی و یاد می‌گیری چطور فکر کنی و
                یک برنامه رو از صفر طراحی کنی، نه فقط اجرای دستورات تکی.
              </p>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>پیشنهاد:</strong> کدهای این جلسه رو فقط نخون — همراه
                  من داخل VS Code تایپشون کن و اجراشون کن. یادگیری واقعی همینجا
                  اتفاق می‌افته.
                </div>
              </div>
            </section>

            <!-- ── STEP 1 ── -->
            <section>
              <h2>قدم اول: طراحی ساختار داده</h2>
              <p>
                قبل از نوشتن حتی یک خط کد، باید تصمیم بگیریم هر مخاطب چطور
                ذخیره بشه. هر مخاطب دو ویژگی داره: اسم و شماره تلفن. بهترین
                گزینه برای همچین چیزی، یک <strong>دیکشنری</strong> است. و چون
                قراره چند مخاطب داشته باشیم، همه این دیکشنری‌ها رو داخل یک
                <strong>لیست</strong> نگه می‌داریم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># هر مخاطب یک دیکشنریه: {"name": ..., "phone": ...}</span>
<span class="token-comment"># همه مخاطبین داخل این لیست نگه‌داری می‌شن</span>
<span class="token-text">CONTACTS</span> = []

<span class="token-comment"># اسم فایلی که مخاطبین توش ذخیره می‌شن</span>
<span class="token-text">FILENAME</span> = <span class="token-string">"contacts.txt"</span></code></pre>
              </div>

              <p>
                <code>CONTACTS</code> فعلاً یه لیست خالیه. هر وقت مخاطب جدیدی
                اضافه بشه، یه دیکشنری جدید بهش اضافه می‌شه. مثلاً بعد از اضافه
                کردن دو مخاطب، این لیست همچین شکلی داره:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code>[
    {<span class="token-string">"name"</span>: <span class="token-string">"علی"</span>, <span class="token-string">"phone"</span>: <span class="token-string">"09120000000"</span>},
    {<span class="token-string">"name"</span>: <span class="token-string">"سارا"</span>, <span class="token-string">"phone"</span>: <span class="token-string">"09350000000"</span>},
]</code></pre>
              </div>
            </section>

            <!-- ── STEP 2 ── -->
            <section>
              <h2>قدم دوم: ذخیره و بازیابی از فایل</h2>
              <p>
                اگه مخاطبین فقط داخل <code>CONTACTS</code> بمونن، با بستن
                برنامه همه‌چیز پاک می‌شه. برای همین از دانشی که جلسه قبل
                یاد گرفتیم استفاده می‌کنیم: هر مخاطب رو در یک خط از فایل، به
                شکل <code>اسم,شماره</code> ذخیره می‌کنیم.
              </p>

              <p>اول تابعی می‌نویسیم که مخاطبین رو موقع شروع برنامه از فایل بخونه:</p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">load_contacts</span>():
    <span class="token-comment"># با حالت "a" فایل رو باز و بلافاصله می‌بندیم</span>
    <span class="token-comment"># این کار تضمین می‌کنه فایل وجود داشته باشه</span>
    <span class="token-function">open</span>(FILENAME, <span class="token-string">"a"</span>, encoding=<span class="token-string">"utf-8"</span>).<span class="token-function">close</span>()

    <span class="token-keyword">with</span> <span class="token-function">open</span>(FILENAME, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
        <span class="token-keyword">for</span> <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-text">file</span>:
            <span class="token-text">line</span> = <span class="token-text">line</span>.<span class="token-function">strip</span>()
            <span class="token-keyword">if</span> <span class="token-text">line</span>:
                <span class="token-text">name</span>, <span class="token-text">phone</span> = <span class="token-text">line</span>.<span class="token-function">split</span>(<span class="token-string">","</span>)
                CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})</code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  ترفند <code>open(FILENAME, "a").close()</code> رو یادته؟ چون
                  حالت <code>a</code> اگه فایل نباشه، خودش می‌سازتش. اینجوری
                  مطمئنیم دفعه اول که برنامه اجرا می‌شه، خطایی از نبود فایل
                  نمی‌گیریم.
                </div>
              </div>

              <p>حالا تابعی که برعکس این کار رو می‌کنه — همه مخاطبین رو داخل فایل می‌نویسه:</p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">save_contacts</span>():
    <span class="token-keyword">with</span> <span class="token-function">open</span>(FILENAME, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
        <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
            <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">f"{contact['name']},{contact['phone']}\n"</span>)</code></pre>
              </div>

              <p>
                هر بار که چیزی تغییر می‌کنه (اضافه، حذف یا ویرایش)،
                <code>save_contacts()</code> رو صدا می‌زنیم تا فایل با آخرین
                وضعیت لیست هماهنگ بمونه. از حالت <code>w</code> استفاده کردیم
                چون هر بار می‌خوایم کل فایل رو با نسخه به‌روز جایگزین کنیم.
              </p>
            </section>

            <!-- ── STEP 3 ── -->
            <section>
              <h2>قدم سوم: توابع اصلی برنامه</h2>
              <p>
                حالا وقتشه کارهایی که کاربر قراره انجام بده رو به شکل تابع
                بنویسیم. هر تابع دقیقاً یک مسئولیت داره — همین باعث می‌شه کد
                خونا و قابل نگهداری بمونه.
              </p>

              <p><strong>اضافه کردن مخاطب:</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"نام مخاطب: "</span>)
    <span class="token-text">phone</span> = <span class="token-function">input</span>(<span class="token-string">"شماره تلفن: "</span>)
    CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})
    <span class="token-function">save_contacts</span>()
    <span class="token-function">print</span>(<span class="token-string">"مخاطب با موفقیت اضافه شد.\n"</span>)</code></pre>
              </div>

              <p><strong>نمایش همه مخاطبین:</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">show_contacts</span>():
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> CONTACTS:
        <span class="token-function">print</span>(<span class="token-string">"هنوز هیچ مخاطبی ثبت نشده.\n"</span>)
        <span class="token-keyword">return</span>

    <span class="token-function">print</span>(<span class="token-string">"\nلیست مخاطبین:"</span>)
    <span class="token-keyword">for</span> <span class="token-text">index</span>, <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(CONTACTS, start=<span class="token-number">1</span>):
        <span class="token-function">print</span>(<span class="token-string">f"{index}. {contact['name']} - {contact['phone']}"</span>)
    <span class="token-function">print</span>()</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <code>if not CONTACTS:</code> یعنی «اگه لیست خالی بود».
                  یادته؟ پایتون لیست خالی رو به‌طور خودکار به‌عنوان
                  <code>False</code> در نظر می‌گیره.
                </div>
              </div>

              <p><strong>جستجوی مخاطب بر اساس اسم:</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">search_contact</span>():
    <span class="token-text">keyword</span> = <span class="token-function">input</span>(<span class="token-string">"نام مورد نظر برای جستجو: "</span>)
    <span class="token-text">found</span> = <span class="token-keyword">False</span>

    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">keyword</span> <span class="token-keyword">in</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>]:
            <span class="token-function">print</span>(<span class="token-string">f"{contact['name']} - {contact['phone']}"</span>)
            <span class="token-text">found</span> = <span class="token-keyword">True</span>

    <span class="token-keyword">if</span> <span class="token-keyword">not</span> <span class="token-text">found</span>:
        <span class="token-function">print</span>(<span class="token-string">"مخاطبی با این نام پیدا نشد."</span>)
    <span class="token-function">print</span>()</code></pre>
              </div>

              <p>
                از <code>in</code> استفاده کردیم نه <code>==</code>؛ یعنی حتی
                اگه فقط بخشی از اسم رو تایپ کنی، مخاطب پیدا می‌شه.
              </p>

              <p><strong>حذف مخاطب:</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"نام مخاطبی که می‌خوای حذف کنی: "</span>)

    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            CONTACTS.<span class="token-function">remove</span>(<span class="token-text">contact</span>)
            <span class="token-function">save_contacts</span>()
            <span class="token-function">print</span>(<span class="token-string">"مخاطب حذف شد.\n"</span>)
            <span class="token-keyword">return</span>

    <span class="token-function">print</span>(<span class="token-string">"مخاطبی با این نام پیدا نشد.\n"</span>)</code></pre>
              </div>
            </section>

            <!-- ── STEP 4 ── -->
            <section>
              <h2>قدم چهارم: منوی اصلی و اجرای برنامه</h2>
              <p>
                همه توابع آماده‌ن. حالا فقط یه منو لازم داریم که با یک
                <code>while True</code> همیشه باز بمونه، از کاربر یک عدد
                بگیره، و بر اساس اون تابع درست رو صدا بزنه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">show_menu</span>():
    <span class="token-function">print</span>(<span class="token-string">"۱. نمایش مخاطبین"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۲. افزودن مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۳. جستجوی مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۴. حذف مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۰. خروج"</span>)


<span class="token-keyword">def</span> <span class="token-function">main</span>():
    <span class="token-function">load_contacts</span>()

    <span class="token-keyword">while</span> <span class="token-keyword">True</span>:
        <span class="token-function">show_menu</span>()
        <span class="token-text">choice</span> = <span class="token-function">input</span>(<span class="token-string">"یک گزینه انتخاب کن: "</span>)

        <span class="token-keyword">if</span> <span class="token-text">choice</span> == <span class="token-string">"1"</span>:
            <span class="token-function">show_contacts</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"2"</span>:
            <span class="token-function">add_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"3"</span>:
            <span class="token-function">search_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"4"</span>:
            <span class="token-function">delete_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"0"</span>:
            <span class="token-function">print</span>(<span class="token-string">"خدانگهدار!"</span>)
            <span class="token-keyword">break</span>
        <span class="token-keyword">else</span>:
            <span class="token-function">print</span>(<span class="token-string">"گزینه نامعتبره، دوباره امتحان کن.\n"</span>)


<span class="token-function">main</span>()</code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <code>main()</code> در آخرین خط فایل صدا زده می‌شه. تا قبل
                  از اون، همه چیزهایی که بالاتر نوشتیم فقط <em>تعریف</em>
                  شدن، نه اجرا. الگویی که توی جلسه توابع هم دیدیمش.
                </div>
              </div>
            </section>

            <!-- ── FULL CODE ── -->
            <section>
              <h2>کد کامل برنامه</h2>
              <p>
                این همه چیزی که تا الان نوشتیم، کنار هم و آماده اجرا. قبل از
                رفتن سراغ تمرین، این کد رو داخل یک فایل به اسم
                <code>contacts_app.py</code> بریز و اجراش کن — چند مخاطب اضافه
                کن، برنامه رو ببند و دوباره بازش کن تا ببینی مخاطبینت هنوز
                هستن.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">contacts_app.py</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># مدیریت مخاطبین ترمینالی</span>
<span class="token-text">CONTACTS</span> = []
<span class="token-text">FILENAME</span> = <span class="token-string">"contacts.txt"</span>


<span class="token-keyword">def</span> <span class="token-function">load_contacts</span>():
    <span class="token-function">open</span>(FILENAME, <span class="token-string">"a"</span>, encoding=<span class="token-string">"utf-8"</span>).<span class="token-function">close</span>()
    <span class="token-keyword">with</span> <span class="token-function">open</span>(FILENAME, <span class="token-string">"r"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
        <span class="token-keyword">for</span> <span class="token-text">line</span> <span class="token-keyword">in</span> <span class="token-text">file</span>:
            <span class="token-text">line</span> = <span class="token-text">line</span>.<span class="token-function">strip</span>()
            <span class="token-keyword">if</span> <span class="token-text">line</span>:
                <span class="token-text">name</span>, <span class="token-text">phone</span> = <span class="token-text">line</span>.<span class="token-function">split</span>(<span class="token-string">","</span>)
                CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})


<span class="token-keyword">def</span> <span class="token-function">save_contacts</span>():
    <span class="token-keyword">with</span> <span class="token-function">open</span>(FILENAME, <span class="token-string">"w"</span>, encoding=<span class="token-string">"utf-8"</span>) <span class="token-keyword">as</span> <span class="token-text">file</span>:
        <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
            <span class="token-text">file</span>.<span class="token-function">write</span>(<span class="token-string">f"{contact['name']},{contact['phone']}\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"نام مخاطب: "</span>)
    <span class="token-text">phone</span> = <span class="token-function">input</span>(<span class="token-string">"شماره تلفن: "</span>)
    CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})
    <span class="token-function">save_contacts</span>()
    <span class="token-function">print</span>(<span class="token-string">"مخاطب با موفقیت اضافه شد.\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">show_contacts</span>():
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> CONTACTS:
        <span class="token-function">print</span>(<span class="token-string">"هنوز هیچ مخاطبی ثبت نشده.\n"</span>)
        <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"\nلیست مخاطبین:"</span>)
    <span class="token-keyword">for</span> <span class="token-text">index</span>, <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(CONTACTS, start=<span class="token-number">1</span>):
        <span class="token-function">print</span>(<span class="token-string">f"{index}. {contact['name']} - {contact['phone']}"</span>)
    <span class="token-function">print</span>()


<span class="token-keyword">def</span> <span class="token-function">search_contact</span>():
    <span class="token-text">keyword</span> = <span class="token-function">input</span>(<span class="token-string">"نام مورد نظر برای جستجو: "</span>)
    <span class="token-text">found</span> = <span class="token-keyword">False</span>
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">keyword</span> <span class="token-keyword">in</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>]:
            <span class="token-function">print</span>(<span class="token-string">f"{contact['name']} - {contact['phone']}"</span>)
            <span class="token-text">found</span> = <span class="token-keyword">True</span>
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> <span class="token-text">found</span>:
        <span class="token-function">print</span>(<span class="token-string">"مخاطبی با این نام پیدا نشد."</span>)
    <span class="token-function">print</span>()


<span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"نام مخاطبی که می‌خوای حذف کنی: "</span>)
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            CONTACTS.<span class="token-function">remove</span>(<span class="token-text">contact</span>)
            <span class="token-function">save_contacts</span>()
            <span class="token-function">print</span>(<span class="token-string">"مخاطب حذف شد.\n"</span>)
            <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"مخاطبی با این نام پیدا نشد.\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">show_menu</span>():
    <span class="token-function">print</span>(<span class="token-string">"۱. نمایش مخاطبین"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۲. افزودن مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۳. جستجوی مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۴. حذف مخاطب"</span>)
    <span class="token-function">print</span>(<span class="token-string">"۰. خروج"</span>)


<span class="token-keyword">def</span> <span class="token-function">main</span>():
    <span class="token-function">load_contacts</span>()
    <span class="token-keyword">while</span> <span class="token-keyword">True</span>:
        <span class="token-function">show_menu</span>()
        <span class="token-text">choice</span> = <span class="token-function">input</span>(<span class="token-string">"یک گزینه انتخاب کن: "</span>)

        <span class="token-keyword">if</span> <span class="token-text">choice</span> == <span class="token-string">"1"</span>:
            <span class="token-function">show_contacts</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"2"</span>:
            <span class="token-function">add_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"3"</span>:
            <span class="token-function">search_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"4"</span>:
            <span class="token-function">delete_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"0"</span>:
            <span class="token-function">print</span>(<span class="token-string">"خدانگهدار!"</span>)
            <span class="token-keyword">break</span>
        <span class="token-keyword">else</span>:
            <span class="token-function">print</span>(<span class="token-string">"گزینه نامعتبره، دوباره امتحان کن.\n"</span>)


<span class="token-function">main</span>()</code></pre>
              </div>

              <div class="info-box info-box-green">
                <span class="info-box-icon">✅</span>
                <div>
                  <strong>حالا خودت امتحانش کن:</strong> چند مخاطب اضافه کن، یکی
                  رو جستجو کن، یکی رو حذف کن. اگه همه‌چیز درست کار کرد، یعنی
                  کاملاً آماده‌ای برای تمرین زیر. جایی که خودت این برنامه رو
                  یک قدم جلوتر می‌بری.
                </div>
              </div>
            </section>

          </div>
        </section>

        <!-- ─── EXERCISES ─── -->
        <?php require_once $root . 'includes/exercises.php'; ?>

        <!-- ─── NAVIGATION ─── -->
        <div class="lesson-nav-btns">
          <a href="20.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">کار با فایل‌ها</div>
            </div>
          </a>
          <a href="22.php" class="lesson-nav-btn lesson-nav-next">
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
