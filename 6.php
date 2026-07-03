<?php
$root        = './';
$description = 'متغیرها و انواع داده';
$extraCss    = 'assets/css/lesson.css';
$extraJs     = 'assets/js/lesson.js';

$references = [
  [
    'url'   => 'https://www.w3schools.com/python/python_variables.asp',
    'title' => 'W3Schools — Python Variables',
    'desc'  => 'تمرین تعاملی نام‌گذاری، ساخت و مدیریت متغیرها در پایتون',
  ],
  [
    'url'   => 'https://www.w3schools.com/python/python_datatypes.asp',
    'title' => 'W3Schools — Python Data Types',
    'desc'  => 'بررسی تمام انواع داده‌ها در پایتون به همراه مثال‌های آنلاین',
  ],
];

require $root . 'includes/head.php';
require $root . 'includes/nav.php';
?>
    <div class="lesson-layout" style="position: relative; z-index: 1">
      <main class="lesson-main" data-lesson="6">

        <!-- BREADCRUMB -->
        <?php require_once($root . 'includes/breadcrumb.php'); ?>

        <div class="lesson-header">
          <h1 class="lesson-title">
            قسمت ۶: <?php echo $description; ?>
          </h1>
          <p class="lesson-lead">
            به یکی از مهم‌ترین و پایه‌ای‌ترین جلسات برنامه‌نویسی خوش آمدید. در
            این جلسه یاد می‌گیریم که متغیرها چه هستند، چگونه اطلاعات را در آن‌ها
            ذخیره کنیم و با انواع مختلف داده‌ها در زبان پایتون آشنا خواهیم شد.
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
                src="https://www.youtube.com/embed/E5nl0Qq8vik"
                title="آموزش پایتون ۲۰۲۶ - قسمت ۶: متغیرها و انواع داده"
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
                href="https://youtube.com/watch?v=E5nl0Qq8vik"
                target="_blank"
                rel="noopener"
                >باز کردن در یوتیوب ↗</a
              >
            </div>
          </div>

          <div class="video-player-wrap" id="aparat-player">
            <div class="video-embed">
              <iframe
                src="https://www.aparat.com/video/video/embed/videohash/amwog01/vt/frame"
                title="آموزش پایتون - قسمت ۶: متغیرها و انواع داده"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <div class="video-caption">
              🎥 برای تماشا در آپارات:
              <a
                href="https://aparat.com/v/amwog01"
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
              <h2>متغیر (Variable) چیست؟</h2>
              <p>
                در دنیای برنامه‌نویسی، متغیر را دقیقاً شبیه به یک
                <strong>ظرف</strong> تصور کنید. همان‌طور که ما در ظرف‌های مختلف
                غذا می‌ریزیم، در متغیرها نیز «داده» یا «اطلاعات» (Data) را ذخیره
                می‌کنیم. هر متغیر دو بخش اصلی دارد: یک
                <strong>اسم</strong> (برای صدا زدن آن ظرف) و یک
                <strong>مقدار</strong> (محتوای درون ظرف).
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code><span class="token-comment"># در اینجا x اسم متغیر و "Rice" مقدار آن است</span>
x = <span class="token-string">"Rice"</span>

<span class="token-comment"># متغیر نام با مقدار ادریس</span>
name = <span class="token-string">"ادریس"</span></code></pre>
              </div>
            </section>

            <section>
              <h2>انواع داده (Data Types) در پایتون</h2>
              <p>
                بسته به اینکه درون ظرف (متغیر) خود چه چیزی می‌ریزیم، نوع آن داده
                مشخص می‌شود. مهم‌ترین انواع داده در پایتون عبارتند از:
              </p>
              <ul>
                <li>
                  <strong>رشته یا String (مخفف str):</strong> برای ذخیره متن‌ها
                  استفاده می‌شود. متن‌ها حتماً باید داخل دابل‌کوتیشن
                  (<code>""</code>) یا سینگل‌کوتیشن (<code>''</code>) قرار
                  بگیرند. (مثال: <code>"ادریس"</code>)
                </li>
                <li>
                  <strong>عدد صحیح یا Integer (مخفف int):</strong> برای ذخیره
                  اعداد بدون اعشار. (مثال: <code>26</code> یا <code>100</code>)
                </li>
                <li>
                  <strong>عدد اعشاری یا Float:</strong> برای ذخیره اعدادی که
                  دارای ممیز (اعشار) هستند. (مثال: <code>1.5</code> یا
                  <code>85.5</code>)
                </li>
                <li>
                  <strong>بولی یا Boolean (مخفف bool):</strong> داده‌های منطقی و
                  صفر و یکی که فقط دو حالت دارند: یا درست (<code>True</code>)
                  هستند یا غلط (<code>False</code>). حتماً حرف اولشان باید بزرگ
                  نوشته شود.
                </li>
                <li>
                  <strong>هیچ یا NoneType:</strong> برای زمانی که می‌خواهیم
                  متغیری بسازیم اما فعلاً هیچ مقداری (نه حتی صفر یا جای خالی) به
                  آن ندهیم، از مقدار <code>None</code> استفاده می‌کنیم.
                </li>
              </ul>
            </section>

            <section>
              <h2>قوانین نام‌گذاری متغیرها در پایتون</h2>
              <p>
                برای اینکه کدهای شما بدون خطا اجرا شوند، باید در انتخاب اسم
                متغیرها قوانین زیر را رعایت کنید:
              </p>
              <ul>
                <li>
                  اسم متغیر <strong>باید</strong> با یک حرف الفبا (a-z) یا علامت
                  آندرلاین (<code>_</code>) شروع شود.
                </li>
                <li>
                  اسم متغیر <strong>نمی‌تواند</strong> با عدد شروع شود. (مثل
                  <code>2name</code> غلط است).
                </li>
                <li>
                  استفاده از فاصله (Space) یا خط تیره (<code>-</code>) در اسم
                  متغیر <strong>ممنوع</strong> است.
                </li>
                <li>
                  پایتون به حروف بزرگ و کوچک <strong>حساس</strong> است
                  (Case-Sensitive). یعنی متغیر <code>age</code> با متغیر
                  <code>Age</code> یا <code>AGE</code> کاملاً متفاوت هستند.
                </li>
              </ul>

              <div class="info-box info-box-blue">
                <span class="info-box-icon">💡</span>
                <div>
                  <strong>استاندارد نام‌گذاری (Naming Convention):</strong> اگر
                  اسم متغیر شما از دو یا چند کلمه تشکیل شده است، بهترین روش در
                  پایتون این است که کلمات را با علامت آندرلاین از هم جدا کنید
                  (مثلاً <code>my_favorite_food</code>). به این استاندارد Snake
                  Case می‌گویند.
                </div>
              </div>
            </section>

            <section>
              <h2>پیدا کردن نوع داده با تابع type() و تبدیل آن‌ها</h2>
              <p>
                اگر زمانی ندانستید متغیری که دارید از چه نوعی است، پایتون تابع
                بسیار کاربردی <code>type()</code> را در اختیار شما قرار داده
                است:
              </p>

              <div class="code-block">
                <div class="code-block-header">
                  <span class="code-lang">Python</span>
                  <button class="copy-btn" onclick="copyCode(this)">کپی</button>
                </div>
                <pre><code>age = 26
<span class="token-function">print</span>(<span class="token-function">type</span>(age)) <span class="token-comment"># خروجی: &lt;class 'int'&gt;</span></code></pre>
              </div>

              <h3>تبدیل نوع داده‌ها (Type Casting)</h3>
              <p>
                گاهی نیاز داریم نوع یک داده را تغییر دهیم. مثلاً یک متن را به
                عدد، یا یک عدد را به اعشار تبدیل کنیم:
              </p>
              <ul>
                <li>
                  <code>str(10)</code>: عدد ۱۰ را تبدیل به متن
                  <code>"10"</code> می‌کند.
                </li>
                <li>
                  <code>int("25")</code>: متن "۲۵" را به عدد صحیح
                  <code>25</code> تبدیل می‌کند.
                </li>
                <li>
                  <code>float(15)</code>: عدد صحیح ۱۵ را به اعشار
                  <code>15.0</code> تبدیل می‌کند.
                </li>
              </ul>
            </section>

            <section>
              <h2>نتیجه‌گیری</h2>
              <p>
                ممکن است در ابتدای مسیر این مفاهیم کمی تئوری و خسته‌کننده به نظر
                برسند و بپرسید «خب که چی؟». اما این موارد، پایه و اساس ساخت
                برنامه‌های بزرگ هستند. با یادگیری این مفاهیم اولیه، به‌زودی وارد
                مباحث جذاب‌تری مثل حلقه‌ها و کتابخانه‌های هوش مصنوعی (مثل تشخیص
                چهره) خواهیم شد.
              </p>
            </section>
          </div>
        </section>

        <!-- ─── REFERENCES ─── -->
        <?php require_once $root . 'includes/references.php'; ?>

        <div class="lesson-nav-btns">
          <a href="5.php" class="lesson-nav-btn lesson-nav-prev">
            <span>‹</span>
            <div>
              <div class="nav-btn-label">جلسه قبل</div>
              <div class="nav-btn-title">تابع پرینت</div>
            </div>
          </a>
          <a href="7.php" class="lesson-nav-btn lesson-nav-next">
            <div style="text-align: right">
              <div class="nav-btn-label">جلسه بعد</div>
              <div class="nav-btn-title">عملگرها در پایتون</div>
            </div>
            <span>›</span>
          </a>
        </div>
      </main>
    </div>
<?php require $root . 'includes/footer.php'; ?>
