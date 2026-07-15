<?php
$root        = './';
$description = 'دستورات شرطی';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$exercises = [
  [
    'level' => null,
    'desc'  => 'یک عدد از کاربر بگیر و مشخص کن مثبت است، منفی است یا صفر. از <code>if</code>، <code>elif</code> و <code>else</code> استفاده کن.',
    'hint'  => '<span class="token-text">num</span> = <span class="token-function">float</span>(<span class="token-function">input</span>(<span class="token-string">"یک عدد وارد کن: "</span>))

<span class="token-keyword">if</span> num > <span class="token-number">0</span>:
    <span class="token-function">print</span>(<span class="token-string">"عدد مثبت است"</span>)
<span class="token-keyword">elif</span> num < <span class="token-number">0</span>:
    <span class="token-function">print</span>(<span class="token-string">"عدد منفی است"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"عدد صفر است"</span>)',
  ],
  [
    'level' => null,
    'desc'  => 'نمره یک دانش‌آموز را بگیر و معدل حرفی بده: نمره ۱۸ به بالا: A، بین ۱۴ تا ۱۸: B، بین ۱۰ تا ۱۴: C، کمتر از ۱۰: F.',
    'hint'  => '<span class="token-text">score</span> = <span class="token-function">float</span>(<span class="token-function">input</span>(<span class="token-string">"نمره را وارد کن: "</span>))

<span class="token-keyword">if</span> score >= <span class="token-number">18</span>:
    <span class="token-function">print</span>(<span class="token-string">"A"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">14</span>:
    <span class="token-function">print</span>(<span class="token-string">"B"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">10</span>:
    <span class="token-function">print</span>(<span class="token-string">"C"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"F"</span>)',
  ],
  [
    'level' => 'hard',
    'desc'  => 'یک برنامه چک ورود بساز: نام کاربری و رمز عبور از کاربر بگیر. اگر هر دو درست بودند «ورود موفق»، اگر فقط نام کاربری درست بود «رمز اشتباه است»، اگر فقط رمز درست بود «نام کاربری اشتباه است»، وگرنه «نام کاربری و رمز اشتباه است» چاپ کن. (نام کاربری درست: <code>"admin"</code>، رمز درست: <code>"1234"</code>)',
    'hint'  => '<span class="token-text">correct_user</span> = <span class="token-string">"admin"</span>
<span class="token-text">correct_pass</span> = <span class="token-string">"1234"</span>

<span class="token-text">username</span> = <span class="token-function">input</span>(<span class="token-string">"نام کاربری: "</span>)
<span class="token-text">password</span> = <span class="token-function">input</span>(<span class="token-string">"رمز عبور: "</span>)

<span class="token-keyword">if</span> username == correct_user <span class="token-keyword">and</span> password == correct_pass:
    <span class="token-function">print</span>(<span class="token-string">"ورود موفق"</span>)
<span class="token-keyword">elif</span> username == correct_user:
    <span class="token-function">print</span>(<span class="token-string">"رمز اشتباه است"</span>)
<span class="token-keyword">elif</span> password == correct_pass:
    <span class="token-function">print</span>(<span class="token-string">"نام کاربری اشتباه است"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"نام کاربری و رمز اشتباه است"</span>)',
  ],
];

$references = [
  [
    'url'   => 'https://docs.python.org/3/tutorial/controlflow.html#if-statements',
    'title' => 'مستندات رسمی پایتون — دستور if',
    'desc'  => 'توضیح رسمی ساختار if، elif و else در Python.org',
  ],
  [
    'url'   => 'https://realpython.com/python-conditional-statements/',
    'title' => 'Real Python — Conditional Statements',
    'desc'  => 'مقاله جامع درباره دستورات شرطی با مثال‌های متنوع و نکات رایج اشتباهات',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/python_conditions.asp',
    'title' => 'W3Schools — Python Conditions',
    'desc'  => 'آموزش تعاملی if، elif، else با امکان اجرای کد در مرورگر',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <!-- ─── LESSON LAYOUT ─── -->
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <!-- ─── MAIN CONTENT ─── -->
      <main class="lesson-main" data-lesson="18">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <!-- LESSON HEADER -->
        <div class="lesson-header">
          <h1 class="lesson-title">قسمت 18: <?php echo $description; ?></h1>
          <p class="lesson-lead">
            هر برنامه‌ای که واقعاً کاربردی باشد، جایی نیاز داره تصمیم بگیره.
            «اگه سن بالای ۱۸ بود، اجازه ورود بده» یا «اگه رمز درست بود، وارد شو».
            این تصمیم‌گیری‌ها با دستورات شرطی انجام می‌شن. در این جلسه با
            <code>if</code>، <code>elif</code> و <code>else</code> آشنا می‌شیم
            و مهم‌تر از همه، دقیقاً می‌فهمیم چرا و کِی به <code>elif</code>
            نیاز داریم.
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
                title="آموزش دستورات شرطی در پایتون - جلسه ۱۸"
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
                title="آموزش دستورات شرطی در پایتون - آپارات"
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
              <h2>دستور شرطی چیست؟</h2>
              <p>
                زندگی روزمره پر از تصمیم‌گیریه: «اگه بارون بیاد، چتر برمی‌دارم».
                برنامه‌ها هم دقیقاً همین کار رو می‌کنن. دستور <code>if</code>
                یه شرط رو چک می‌کنه؛ اگه درست (True) بود، یه بلوک کد اجرا
                می‌شه، وگرنه رد می‌شه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-number">20</span>

<span class="token-keyword">if</span> age >= <span class="token-number">18</span>:
    <span class="token-function">print</span>(<span class="token-string">"مجاز به ورود هستی"</span>)</code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  <strong>Indentation یادت نره:</strong> کدهای زیر <code>if</code>
                  باید چهار فاصله (یا یک Tab) جلوتر باشن. پایتون به‌جای
                  آکولاد از فاصله برای مشخص کردن بلوک کد استفاده می‌کنه.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 1: if / else ── -->
            <section>
              <h2>مثال اول: if و else — دو حالت ساده</h2>
              <p>
                وقتی فقط دو حالت داری («یا این یا اون»)، از <code>if</code> و
                <code>else</code> استفاده می‌کنی. <code>else</code> یعنی
                «در غیر این صورت» — اگه شرط بالا درست نبود، این بخش اجرا می‌شه.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-function">int</span>(<span class="token-function">input</span>(<span class="token-string">"سن خود را وارد کنید: "</span>))

<span class="token-keyword">if</span> age >= <span class="token-number">18</span>:
    <span class="token-function">print</span>(<span class="token-string">"شما مجاز به ورود هستید"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"دسترسی شما محدود است"</span>)</code></pre>
              </div>

              <p>
                اینجا دقیقاً یکی از این دو خط چاپ می‌شه، نه بیشتر. یا سن بالای
                ۱۸ هست یا نیست — راه سومی وجود نداره.
              </p>
            </section>

            <!-- ── EXAMPLE 2: elif ── -->
            <section>
              <h2>مثال دوم: elif — وقتی بیشتر از دو حالت داری</h2>
              <p>
                حالا فرض کن سه یا چهار حالت داری، نه دو تا. اینجاست که
                <code>elif</code> (مخفف "else if") به کمکت میاد. با
                <code>elif</code> می‌تونی چند شرط رو پشت سر هم چک کنی.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">score</span> = <span class="token-number">75</span>

<span class="token-keyword">if</span> score >= <span class="token-number">90</span>:
    <span class="token-function">print</span>(<span class="token-string">"عالی"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">70</span>:
    <span class="token-function">print</span>(<span class="token-string">"خوب"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">50</span>:
    <span class="token-function">print</span>(<span class="token-string">"متوسط"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"ضعیف"</span>)

<span class="token-comment"># خروجی: خوب</span></code></pre>
              </div>

              <p>
                نکته مهم: پایتون از بالا به پایین شرط‌ها رو چک می‌کنه و
                <strong>به محض اینکه یکی True بشه، بقیه رو کلاً نادیده
                می‌گیره</strong> و از بلوک شرطی خارج می‌شه. برای همین با
                اینکه <code>score >= 50</code> هم درسته، هیچ‌وقت چک نمی‌شه
                چون <code>score >= 70</code> زودتر True شده.
              </p>
            </section>

            <!-- ── WHY ELIF: the confusing part ── -->
            <section>
              <h2>چرا اکثر دانش‌آموزها elif رو قاطی می‌کنن؟</h2>
              <p>
                این بخش رو با دقت بخون چون مهم‌ترین نکته این جلسه‌ست. خیلی‌ها
                فکر می‌کنن نوشتن چند <code>if</code> پشت سر هم دقیقاً همون
                کاری رو می‌کنه که <code>elif</code> می‌کنه. اما این اشتباهه و
                می‌تونه باگ‌های عجیب توی برنامه‌ت ایجاد کنه. بیا با یه مثال
                فرق رو ببینیم.
              </p>

              <p><strong>حالت اول — استفاده از چند if جدا (اشتباه رایج):</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">score</span> = <span class="token-number">95</span>

<span class="token-keyword">if</span> score >= <span class="token-number">90</span>:
    <span class="token-function">print</span>(<span class="token-string">"عالی"</span>)
<span class="token-keyword">if</span> score >= <span class="token-number">70</span>:
    <span class="token-function">print</span>(<span class="token-string">"خوب"</span>)
<span class="token-keyword">if</span> score >= <span class="token-number">50</span>:
    <span class="token-function">print</span>(<span class="token-string">"متوسط"</span>)

<span class="token-comment"># خروجی:</span>
<span class="token-comment"># عالی</span>
<span class="token-comment"># خوب</span>
<span class="token-comment"># متوسط</span></code></pre>
              </div>

              <p>
                هر سه شرط جداگانه چک می‌شن و چون نمره ۹۵ هر سه شرط رو برآورده
                می‌کنه، هر سه پیام چاپ می‌شن! این اصلاً چیزی نیست که ما
                می‌خواستیم — ما فقط یه پیام واحد برای نمره ۹۵ می‌خواستیم.
              </p>

              <p><strong>حالت دوم — استفاده از elif (درست):</strong></p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">score</span> = <span class="token-number">95</span>

<span class="token-keyword">if</span> score >= <span class="token-number">90</span>:
    <span class="token-function">print</span>(<span class="token-string">"عالی"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">70</span>:
    <span class="token-function">print</span>(<span class="token-string">"خوب"</span>)
<span class="token-keyword">elif</span> score >= <span class="token-number">50</span>:
    <span class="token-function">print</span>(<span class="token-string">"متوسط"</span>)

<span class="token-comment"># خروجی: عالی</span></code></pre>
              </div>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>قانون طلایی:</strong> اگه شرط‌هات به هم مرتبطن و
                  فقط می‌خوای <u>یکی</u> از چند حالت اجرا بشه، از
                  <code>elif</code> استفاده کن. اگه شرط‌هات کاملاً مستقل و
                  بی‌ربط به هم هستن (مثلاً یکی درباره سنه، یکی درباره وضعیت
                  آب‌وهوا)، از چند <code>if</code> جدا استفاده کن — چون
                  می‌خوای هر دو به‌طور مستقل چک بشن.
                </div>
              </div>
            </section>

            <!-- ── EXAMPLE 3: nested and combined ── -->
            <section>
              <h2>مثال سوم: ترکیب شرط‌ها با and و or</h2>
              <p>
                می‌تونی چند شرط رو با <code>and</code> (هر دو باید درست باشن)
                یا <code>or</code> (کافیه یکی درست باشه) با هم ترکیب کنی.
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-number">25</span>
<span class="token-text">has_ticket</span> = <span class="token-keyword">True</span>

<span class="token-comment"># هر دو شرط باید درست باشن</span>
<span class="token-keyword">if</span> age >= <span class="token-number">18</span> <span class="token-keyword">and</span> has_ticket:
    <span class="token-function">print</span>(<span class="token-string">"اجازه ورود داری"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"اجازه ورود نداری"</span>)

<span class="token-comment"># کافیه یکی از شرط‌ها درست باشه</span>
<span class="token-text">is_weekend</span> = <span class="token-keyword">False</span>
<span class="token-text">is_holiday</span> = <span class="token-keyword">True</span>

<span class="token-keyword">if</span> is_weekend <span class="token-keyword">or</span> is_holiday:
    <span class="token-function">print</span>(<span class="token-string">"امروز تعطیلی"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"امروز روز کاریه"</span>)</code></pre>
              </div>

              <p>
                می‌تونی شرط‌های تودرتو (nested) هم داشته باشی — یعنی یه
                <code>if</code> داخل یه <code>if</code> دیگه:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-text">age</span> = <span class="token-number">20</span>
<span class="token-text">has_id</span> = <span class="token-keyword">True</span>

<span class="token-keyword">if</span> age >= <span class="token-number">18</span>:
    <span class="token-keyword">if</span> has_id:
        <span class="token-function">print</span>(<span class="token-string">"ورود آزاد است"</span>)
    <span class="token-keyword">else</span>:
        <span class="token-function">print</span>(<span class="token-string">"کارت شناسایی لازم است"</span>)
<span class="token-keyword">else</span>:
    <span class="token-function">print</span>(<span class="token-string">"سن کافی نیست"</span>)</code></pre>
              </div>

              <div class="info-box info-box-yellow">
                <span class="info-box-icon">⚠️</span>
                <div>
                  شرط‌های تودرتوی زیاد کد رو سخت‌خوان می‌کنه. اگه بیشتر از دو
                  سطح تودرتو شدی، معمولاً می‌شه با <code>and</code> ساده‌ترش
                  کرد — مثل مثال بالاتر که با یه خط <code>and</code> نوشتیم.
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
          <a href="17.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">حلقه‌ها</div>
            </div>
          </a>
          <a href="19.php" class="lesson-nav-btn lesson-nav-next">
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
