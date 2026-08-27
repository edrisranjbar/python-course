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
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Name of the contact to edit: "</span>)
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-text">CONTACTS</span>:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            <span class="token-text">new_phone</span> = <span class="token-function">input</span>(<span class="token-string">"New phone number: "</span>)
            <span class="token-text">contact</span>[<span class="token-string">"phone"</span>] = <span class="token-text">new_phone</span>
            <span class="token-function">save_contacts</span>()
            <span class="token-function">print</span>(<span class="token-string">"Contact updated successfully.\\n"</span>)
            <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"No contact found with that name.\\n"</span>)


<span class="token-comment"># And add this line inside show_menu():</span>
<span class="token-function">print</span>(<span class="token-string">"5. Edit contact"</span>)

<span class="token-comment"># And add this new condition inside the main() loop:</span>
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
          <h1 class="lesson-title">پروژه عملی: Terminal Contact Manager</h1>
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
                title="پروژه Terminal Contact Manager - جلسه ۲۱"
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
                title="پروژه Terminal Contact Manager - آپارات"
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
                کامل که همه‌چیز رو کنار هم می‌بینی.
              </p>
              <p>
                یه نکته مهم درباره روشی که قراره پیش بریم: به‌جای اینکه اول
                همه توابع رو کامل بنویسیم و آخر سر منو رو بهشون وصل کنیم،
                برعکس عمل می‌کنیم. اول <strong>اسکلت کامل برنامه</strong> رو
                می‌سازیم — یه منو که کار می‌کنه، فقط هنوز کارهای واقعی رو انجام
                نمی‌ده. بعد قدم‌به‌قدم هر بخش رو کامل می‌کنیم. این روش
                <strong>Top-Down Design</strong> نام داره و یکی از رایج‌ترین
                روش‌های طراحی برنامه در دنیای واقعیه؛ چون از همون اول یک
                تصویر کلی و قابل‌اجرا داری و می‌تونی قدم‌به‌قدم پیشرفتت رو
                ببینی.
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

            <!-- ── STEP 1: DATA ── -->
            <section>
              <h2>قدم اول: طراحی ساختار داده</h2>
              <p>
                قبل از هر چیز، باید تصمیم بگیریم هر مخاطب چطور ذخیره بشه. هر
                مخاطب دو ویژگی داره: اسم و شماره تلفن. بهترین گزینه برای
                همچین چیزی، یک <strong>دیکشنری</strong> است. و چون قراره چند
                مخاطب داشته باشیم، همه این دیکشنری‌ها رو داخل یک
                <strong>لیست</strong> نگه می‌داریم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># Each contact is a dictionary: {"name": ..., "phone": ...}</span>
<span class="token-comment"># All contacts are kept in this list</span>
<span class="token-text">CONTACTS</span> = []</code></pre>
              </div>

              <p>
                همین یک خط، پایه کل برنامه‌ست. تا آخر این جلسه، هر قابلیتی که
                اضافه کنیم — اضافه کردن، حذف، جستجو — یعنی یه جوری داره
                <code>CONTACTS</code> رو می‌خونه یا تغییرش می‌ده. مثلاً بعد از
                اضافه کردن دو مخاطب، این لیست همچین شکلی پیدا می‌کنه:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code>[
    {<span class="token-string">"name"</span>: <span class="token-string">"Ali"</span>, <span class="token-string">"phone"</span>: <span class="token-string">"09120000000"</span>},
    {<span class="token-string">"name"</span>: <span class="token-string">"Sara"</span>, <span class="token-string">"phone"</span>: <span class="token-string">"09350000000"</span>},
]</code></pre>
              </div>

              <p>
                این تصویر رو توی ذهنت نگه دار؛ هر تابعی که از این به بعد
                می‌نویسیم، در واقع فقط یه راه برای خوندن یا تغییر همین ساختاره.
              </p>
            </section>

            <!-- ── STEP 2: ROADMAP TABLE ── -->
            <section>
              <h2>قدم دوم: قبل از کدنویسی، نقشه راه بکش</h2>
              <p>
                یکی از مهم‌ترین عادت‌های برنامه‌نویسی حرفه‌ای اینه که قبل از
                نوشتن کد، مشخص کنی برنامه دقیقاً از چه بخش‌هایی تشکیل می‌شه.
                برای برنامه ما، منو دقیقاً همینه:
              </p>

              <div style="overflow-x: auto; margin: 24px 0;">
                <table style="width: 100%; border-collapse: collapse; min-width: 520px;">
                  <thead>
                    <tr>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">گزینه منو</th>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">عملیات</th>
                      <th style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">تابع مسئول</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">۱</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">نمایش لیست مخاطبین</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>show_contacts()</code></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">۲</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">افزودن مخاطب جدید</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>add_contact()</code></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">۳</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">جستجوی مخاطب</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>search_contact()</code></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">۴</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">حذف مخاطب</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);"><code>delete_contact()</code></td>
                    </tr>
                    <tr>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">۰</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">خروج از برنامه</td>
                      <td style="padding: 12px; border: 1px solid rgba(255,255,255,.12);">—</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p>
                این جدول رو که داشته باشیم، دیگه گم نمی‌شیم. هر تابعی که از این
                به بعد می‌نویسیم، دقیقاً جواب یکی از همین ردیف‌هاست. حالا وقتشه
                این نقشه رو به یک برنامه واقعی و قابل‌اجرا تبدیل کنیم.
              </p>
            </section>

            <!-- ── STEP 3: SKELETON ── -->
            <section>
              <h2>قدم سوم: ساخت اسکلت برنامه (فقط منو، بدون منطق واقعی)</h2>
              <p>
                اینجا نکته اصلی این روش طراحیه: هنوز نمی‌دونیم
                <code>add_contact()</code> دقیقاً چطور باید کار کنه؟ مشکلی
                نیست. یه نسخه خیلی ساده و موقت ازش می‌سازیم که فقط یه پیام
                چاپ می‌کنه. بهش می‌گیم <strong>Stub</strong> یا نسخه موقت.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># Temporary stubs — for now they just print a message</span>
<span class="token-comment"># We'll complete them step by step later</span>

<span class="token-keyword">def</span> <span class="token-function">show_contacts</span>():
    <span class="token-function">print</span>(<span class="token-string">"🔧 Not implemented yet"</span>)


<span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-function">print</span>(<span class="token-string">"🔧 Not implemented yet"</span>)


<span class="token-keyword">def</span> <span class="token-function">search_contact</span>():
    <span class="token-function">print</span>(<span class="token-string">"🔧 Not implemented yet"</span>)


<span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-function">print</span>(<span class="token-string">"🔧 Not implemented yet"</span>)</code></pre>
              </div>

              <p>
                هر چهار تابع رو نوشتیم، اما هنوز هیچ‌کدوم کار واقعی انجام
                نمی‌دن — فقط قول می‌دن که «به‌زودی» کار می‌کنن. این دقیقاً
                همون چیزیه که می‌خوایم: یه اسکلت که بشه بهش وصل شد.
              </p>

              <p>
                حالا که هر چهار تابع (حتی به شکل موقت) وجود دارن، می‌تونیم
                منو و حلقه اصلی برنامه رو بنویسیم و به این توابع وصلشون کنیم:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">show_menu</span>():
    <span class="token-function">print</span>(<span class="token-string">"1. Show contacts"</span>)
    <span class="token-function">print</span>(<span class="token-string">"2. Add contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"3. Search contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"4. Delete contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"0. Exit"</span>)


<span class="token-keyword">def</span> <span class="token-function">main</span>():
    <span class="token-keyword">while</span> <span class="token-keyword">True</span>:
        <span class="token-function">show_menu</span>()
        <span class="token-text">choice</span> = <span class="token-function">input</span>(<span class="token-string">"Choose an option: "</span>)

        <span class="token-keyword">if</span> <span class="token-text">choice</span> == <span class="token-string">"1"</span>:
            <span class="token-function">show_contacts</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"2"</span>:
            <span class="token-function">add_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"3"</span>:
            <span class="token-function">search_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"4"</span>:
            <span class="token-function">delete_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"0"</span>:
            <span class="token-function">print</span>(<span class="token-string">"Goodbye!"</span>)
            <span class="token-keyword">break</span>
        <span class="token-keyword">else</span>:
            <span class="token-function">print</span>(<span class="token-string">"Invalid option, try again.\n"</span>)


<span class="token-function">main</span>()</code></pre>
              </div>

              <p>
                این <code>while True</code> قلب برنامه‌ست: تا کاربر خودش با
                گزینه ۰ درخواست خروج نده، منو دوباره و دوباره نمایش داده
                می‌شه. هر <code>elif</code> هم دقیقاً همون کاری رو می‌کنه که
                توی جدول قدم قبل نوشتیم — انتخاب کاربر رو به تابع درست وصل
                می‌کنه.
              </p>

              <div class="info-box info-box-green">
                <span class="info-box-icon">✅</span>
                <div>
                  <strong>همین الان اجراش کن!</strong> با اینکه هیچ‌کدوم از
                  توابع کار واقعی انجام نمی‌دن، کل منو کار می‌کنه — می‌تونی
                  بین گزینه‌ها حرکت کنی، ورودی نامعتبر رو تست کنی و با گزینه
                  ۰ خارج بشی. این یعنی از همین لحظه یه برنامه «قابل‌اجرا»
                  داری، فقط قراره قدم‌به‌قدم قوی‌ترش کنیم.
                </div>
              </div>
            </section>

            <!-- ── STEP 4: FILL show_contacts ── -->
            <section>
              <h2>قدم چهارم: تکمیل نمایش مخاطبین</h2>
              <p>
                اولین تابعی که کاملش می‌کنیم <code>show_contacts()</code>
                است. منطقش ساده‌ست: اگه لیست خالی بود یه پیام مناسب بده، وگرنه
                همه مخاطبین رو با شماره ردیف چاپ کن.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">show_contacts</span>():
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> CONTACTS:
        <span class="token-function">print</span>(<span class="token-string">"No contacts yet.\n"</span>)
        <span class="token-keyword">return</span>

    <span class="token-function">print</span>(<span class="token-string">"\nContact list:"</span>)
    <span class="token-keyword">for</span> <span class="token-text">index</span>, <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(CONTACTS, start=<span class="token-number">1</span>):
        <span class="token-function">print</span>(<span class="token-string">f"{index}. {contact['name']} - {contact['phone']}"</span>)
    <span class="token-function">print</span>()</code></pre>
              </div>

              <p>
                این نسخه رو جایگزین نسخه موقت قبلی کن (همون تابعی که فقط
                🔧 چاپ می‌کرد). بقیه برنامه — منو، حلقه اصلی — دست نمی‌خوره،
                چون فقط داریم <em>داخل</em> تابع رو عوض می‌کنیم، نه نحوه صدا
                زدنش رو. این دقیقاً فایده اسکلت‌سازی از اول بود: هر تابع رو
                جدا و بدون نگرانی از بقیه برنامه کامل می‌کنیم.
              </p>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <code>if not CONTACTS:</code> یعنی «اگه لیست خالی بود».
                  پایتون لیست خالی رو به‌طور خودکار به‌عنوان
                  <code>False</code> در نظر می‌گیره، پس نیازی نیست بنویسی
                  <code>len(CONTACTS) == 0</code>.
                </div>
              </div>
            </section>

            <!-- ── STEP 5: FILL add_contact ── -->
            <section>
              <h2>قدم پنجم: تکمیل افزودن مخاطب</h2>
              <p>
                حالا نوبت <code>add_contact()</code> است. باید از کاربر اسم و
                شماره بگیریم و یک دیکشنری جدید به <code>CONTACTS</code>
                اضافه کنیم.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Contact name: "</span>)
    <span class="token-text">phone</span> = <span class="token-function">input</span>(<span class="token-string">"Phone number: "</span>)
    CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})
    <span class="token-function">print</span>(<span class="token-string">"Contact added successfully.\n"</span>)</code></pre>
              </div>

              <p>
                این نسخه رو هم جایگزین نسخه موقتش کن. اگه الان برنامه رو اجرا
                کنی و گزینه ۲ و بعدش گزینه ۱ رو بزنی، باید مخاطبی که اضافه
                کردی رو داخل لیست ببینی — یه نشونه خوب که تابع‌ها درست دارن
                باهم کار می‌کنن.
              </p>
            </section>

            <!-- ── STEP 6: FILL search_contact ── -->
            <section>
              <h2>قدم ششم: تکمیل جستجوی مخاطب</h2>
              <p>
                برای جستجو، روی همه مخاطبین حلقه می‌زنیم و چک می‌کنیم اسم
                هرکدوم شامل عبارتی که کاربر وارد کرده هست یا نه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">search_contact</span>():
    <span class="token-text">keyword</span> = <span class="token-function">input</span>(<span class="token-string">"Name to search for: "</span>)
    <span class="token-text">found</span> = <span class="token-keyword">False</span>

    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">keyword</span> <span class="token-keyword">in</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>]:
            <span class="token-function">print</span>(<span class="token-string">f"{contact['name']} - {contact['phone']}"</span>)
            <span class="token-text">found</span> = <span class="token-keyword">True</span>

    <span class="token-keyword">if</span> <span class="token-keyword">not</span> <span class="token-text">found</span>:
        <span class="token-function">print</span>(<span class="token-string">"No contact found with that name."</span>)
    <span class="token-function">print</span>()</code></pre>
              </div>

              <p>
                چرا از <code>in</code> استفاده کردیم نه <code>==</code>؟ چون
                این‌طوری حتی اگه فقط بخشی از اسم رو تایپ کنی (مثلاً «عل» به‌جای
                «علی»)، بازم مخاطب پیدا می‌شه — دقیقاً همون رفتاری که از یه
                جستجوی خوب انتظار داریم.
              </p>
            </section>

            <!-- ── STEP 7: FILL delete_contact ── -->
            <section>
              <h2>قدم هفتم: تکمیل حذف مخاطب</h2>
              <p>
                برای حذف، باید مخاطب موردنظر رو پیدا کنیم و با متد
                <code>remove()</code> از لیست برداریمش.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Name of the contact to delete: "</span>)

    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            CONTACTS.<span class="token-function">remove</span>(<span class="token-text">contact</span>)
            <span class="token-function">print</span>(<span class="token-string">"Contact deleted.\n"</span>)
            <span class="token-keyword">return</span>

    <span class="token-function">print</span>(<span class="token-string">"No contact found with that name.\n"</span>)</code></pre>
              </div>

              <p>
                نکته کوچیک ولی مهم: <code>return</code> داخل حلقه باعث می‌شه
                به محض حذف کردن مخاطب، تابع فوراً تموم بشه. اگه این
                <code>return</code> نبود، پیام «مخاطبی پیدا نشد» بعد از حذف
                موفق هم چاپ می‌شد، چون حلقه ادامه پیدا می‌کرد.
              </p>

              <div class="info-box info-box-green">
                <span class="info-box-icon">✅</span>
                <div>
                  <strong>یه توقف کوچیک:</strong> الان برنامه رو اجرا کن و هر
                  چهار قابلیت رو تست کن. باید بتونی مخاطب اضافه کنی، ببینیشون،
                  جستجو کنی و حذفشون کنی — دقیقاً مثل یک برنامه واقعی. تنها
                  مشکل اینه که با بستن برنامه، همه‌چیز از بین می‌ره. همین
                  الان می‌ریم سراغ حلش.
                </div>
              </div>
            </section>

            <!-- ── STEP 8: PERSISTENCE ── -->
            <section>
              <h2>قدم هشتم: ذخیره دائمی روی فایل</h2>
              <p>
                همه‌چیز داخل <code>CONTACTS</code> فقط توی حافظه موقت (RAM)
                زندگی می‌کنه. برای اینکه مخاطبین بعد از بستن برنامه هم بمونن،
                از دانشی که جلسه قبل یاد گرفتیم استفاده می‌کنیم: هر مخاطب رو
                در یک خط از فایل، به شکل <code>name,phone</code> ذخیره می‌کنیم.
              </p>

              <p>اول یه متغیر برای اسم فایل تعریف می‌کنیم، کنار همون <code>CONTACTS</code> که قبلاً ساختیم:</p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">CONTACTS</span> = []
<span class="token-text">FILENAME</span> = <span class="token-string">"contacts.txt"</span></code></pre>
              </div>

              <p>حالا تابعی می‌نویسیم که مخاطبین رو موقع شروع برنامه از فایل بخونه:</p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">load_contacts</span>():
    <span class="token-comment"># Open the file in "a" mode and close it right away</span>
    <span class="token-comment"># This guarantees the file exists</span>
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
                  ترفند <code>open(FILENAME, "a").close()</code> رو یادته؟
                  چون حالت <code>a</code> اگه فایل نباشه، خودش می‌سازتش.
                  اینجوری مطمئنیم دفعه اول که برنامه اجرا می‌شه، خطایی از
                  نبود فایل نمی‌گیریم.
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
                این دو تابع به‌تنهایی هیچ‌جا صدا زده نمی‌شن؛ باید بهشون بگیم
                کِی اجرا بشن. دو تا تغییر کوچیک لازم داریم:
              </p>

              <p>
                <strong>۱. صدا زدن <code>load_contacts()</code> در ابتدای برنامه</strong>
                — داخل <code>main()</code>، همون اول:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">main</span>():
    <span class="token-function">load_contacts</span>()  <span class="token-comment"># Just this one line was added</span>
    <span class="token-keyword">while</span> <span class="token-keyword">True</span>:
        <span class="token-function">show_menu</span>()
        <span class="token-comment"># ... rest of the code stays the same</span></code></pre>
              </div>

              <p>
                <strong>۲. صدا زدن <code>save_contacts()</code> بعد از هر تغییری</strong>
                — یعنی داخل <code>add_contact()</code> و
                <code>delete_contact()</code>، درست بعد از اینکه لیست تغییر
                کرد:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Contact name: "</span>)
    <span class="token-text">phone</span> = <span class="token-function">input</span>(<span class="token-string">"Phone number: "</span>)
    CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})
    <span class="token-function">save_contacts</span>()  <span class="token-comment"># Just this one line was added</span>
    <span class="token-function">print</span>(<span class="token-string">"Contact added successfully.\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Name of the contact to delete: "</span>)
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            CONTACTS.<span class="token-function">remove</span>(<span class="token-text">contact</span>)
            <span class="token-function">save_contacts</span>()  <span class="token-comment"># Just this one line was added</span>
            <span class="token-function">print</span>(<span class="token-string">"Contact deleted.\n"</span>)
            <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"No contact found with that name.\n"</span>)</code></pre>
              </div>

              <p>
                همین. <code>show_contacts()</code> و <code>search_contact()</code>
                نیازی به تغییر ندارن، چون هیچ‌کدوم اطلاعات رو تغییر نمی‌دن —
                فقط می‌خونن.
              </p>

              <div class="info-box info-box-green">
                <span class="info-box-icon">✅</span>
                <div>
                  حالا امتحانش کن: چند مخاطب اضافه کن، برنامه رو کامل ببند
                  (خروج با گزینه ۰)، دوباره اجراش کن و گزینه ۱ رو بزن. باید
                  همون مخاطبین قبلی رو ببینی — یعنی موفق شدی یک برنامه با
                  حافظه دائمی بسازی!
                </div>
              </div>
            </section>

            <!-- ── FULL CODE ── -->
            <section>
              <h2>کد کامل برنامه</h2>
              <p>
                این نسخه نهایی و کامل برنامه‌ست، بعد از همه قدم‌هایی که رفتیم.
                این کد رو داخل یک فایل به اسم <code>contacts_app.py</code>
                بریز و اجراش کن.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python — contacts_app.py</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># Terminal Contact Manager</span>
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


<span class="token-keyword">def</span> <span class="token-function">show_contacts</span>():
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> CONTACTS:
        <span class="token-function">print</span>(<span class="token-string">"No contacts yet.\n"</span>)
        <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"\nContact list:"</span>)
    <span class="token-keyword">for</span> <span class="token-text">index</span>, <span class="token-text">contact</span> <span class="token-keyword">in</span> <span class="token-function">enumerate</span>(CONTACTS, start=<span class="token-number">1</span>):
        <span class="token-function">print</span>(<span class="token-string">f"{index}. {contact['name']} - {contact['phone']}"</span>)
    <span class="token-function">print</span>()


<span class="token-keyword">def</span> <span class="token-function">add_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Contact name: "</span>)
    <span class="token-text">phone</span> = <span class="token-function">input</span>(<span class="token-string">"Phone number: "</span>)
    CONTACTS.<span class="token-function">append</span>({<span class="token-string">"name"</span>: <span class="token-text">name</span>, <span class="token-string">"phone"</span>: <span class="token-text">phone</span>})
    <span class="token-function">save_contacts</span>()
    <span class="token-function">print</span>(<span class="token-string">"Contact added successfully.\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">search_contact</span>():
    <span class="token-text">keyword</span> = <span class="token-function">input</span>(<span class="token-string">"Name to search for: "</span>)
    <span class="token-text">found</span> = <span class="token-keyword">False</span>
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">keyword</span> <span class="token-keyword">in</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>]:
            <span class="token-function">print</span>(<span class="token-string">f"{contact['name']} - {contact['phone']}"</span>)
            <span class="token-text">found</span> = <span class="token-keyword">True</span>
    <span class="token-keyword">if</span> <span class="token-keyword">not</span> <span class="token-text">found</span>:
        <span class="token-function">print</span>(<span class="token-string">"No contact found with that name."</span>)
    <span class="token-function">print</span>()


<span class="token-keyword">def</span> <span class="token-function">delete_contact</span>():
    <span class="token-text">name</span> = <span class="token-function">input</span>(<span class="token-string">"Name of the contact to delete: "</span>)
    <span class="token-keyword">for</span> <span class="token-text">contact</span> <span class="token-keyword">in</span> CONTACTS:
        <span class="token-keyword">if</span> <span class="token-text">contact</span>[<span class="token-string">"name"</span>] == <span class="token-text">name</span>:
            CONTACTS.<span class="token-function">remove</span>(<span class="token-text">contact</span>)
            <span class="token-function">save_contacts</span>()
            <span class="token-function">print</span>(<span class="token-string">"Contact deleted.\n"</span>)
            <span class="token-keyword">return</span>
    <span class="token-function">print</span>(<span class="token-string">"No contact found with that name.\n"</span>)


<span class="token-keyword">def</span> <span class="token-function">show_menu</span>():
    <span class="token-function">print</span>(<span class="token-string">"1. Show contacts"</span>)
    <span class="token-function">print</span>(<span class="token-string">"2. Add contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"3. Search contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"4. Delete contact"</span>)
    <span class="token-function">print</span>(<span class="token-string">"0. Exit"</span>)


<span class="token-keyword">def</span> <span class="token-function">main</span>():
    <span class="token-function">load_contacts</span>()
    <span class="token-keyword">while</span> <span class="token-keyword">True</span>:
        <span class="token-function">show_menu</span>()
        <span class="token-text">choice</span> = <span class="token-function">input</span>(<span class="token-string">"Choose an option: "</span>)

        <span class="token-keyword">if</span> <span class="token-text">choice</span> == <span class="token-string">"1"</span>:
            <span class="token-function">show_contacts</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"2"</span>:
            <span class="token-function">add_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"3"</span>:
            <span class="token-function">search_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"4"</span>:
            <span class="token-function">delete_contact</span>()
        <span class="token-keyword">elif</span> <span class="token-text">choice</span> == <span class="token-string">"0"</span>:
            <span class="token-function">print</span>(<span class="token-string">"Goodbye!"</span>)
            <span class="token-keyword">break</span>
        <span class="token-keyword">else</span>:
            <span class="token-function">print</span>(<span class="token-string">"Invalid option, try again.\n"</span>)


<span class="token-function">main</span>()</code></pre>
              </div>

              <p>
                همون کدیه که تکه‌تکه نوشتیم، فقط این‌بار همه‌چیز کنار هم. اگه
                هر قدم رو خودت دنبال کرده باشی، هیچ سطر از این کد نباید برات
                غریبه باشه.
              </p>

              <div class="info-box info-box-green">
                <span class="info-box-icon">✅</span>
                <div>
                  <strong>حالا خودت امتحانش کن:</strong> چند مخاطب اضافه کن، یکی
                  رو جستجو کن، یکی رو حذف کن، برنامه رو ببند و دوباره باز کن.
                  اگه همه‌چیز درست کار کرد، یعنی کاملاً آماده‌ای برای تمرین
                  زیر — جایی که خودت این برنامه رو یک قدم جلوتر می‌بری.
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
