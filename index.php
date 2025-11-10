<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>سایت خبری بازی‌ها | CS2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>آخرین اخبار بازی‌ها</h1>
    <button class="login-btn" onclick="openLogin()">ورود</button>
    <nav>
      <a href="index.html">خانه</a>
      <a href="#">به‌روزرسانی‌ها</a>
      <a href="about.php">درباره ما</a>
      <a href="#">تماس با ما</a>
    </nav>
  </header>

  <main>
    <!-- خبر ۱ -->
    <div class="news">
      <img src="Cs2_dust2.webp" alt="CS2 Dust2 Update">
      <h2>آپدیت جدید برای نقشه Dust2 در CS2</h2>
      <p>
        ولو در آپدیت جدید Counter-Strike 2 تغییراتی در نقشه Dust2 اعمال کرده است.  
        نورپردازی طبیعی‌تر شده، عملکرد smokeها بهبود یافته و برخی از نقاط پنهان نقشه برای جلوگیری از سوءاستفاده بازیکنان حذف شده‌اند.
      </p>
      <a href="#" class="btn">ادامه مطلب</a>
    </div>

    <!-- خبر ۲ -->
    <div class="news">
      <img src="Cs2_New map2" alt="CS2 Factory Map">
      <h2>نقشه جدید Factory معرفی شد</h2>
      <p>
        نقشه Factory با فضای صنعتی تاریک و گذرگاه‌های تودرتو، یکی از جدیدترین نقشه‌های رسمی CS2 است.  
        این نقشه برای مسابقات ۵ در برابر ۵ طراحی شده و تمرکز ویژه‌ای بر نبردهای نزدیک دارد.
      </p>
      <a href="#" class="btn">ادامه مطلب</a>
    </div>

    <!-- خبر ۳ -->
    <div class="news">
      <img src="Cs2_major.webp" alt="CS2 Major Tournament">
      <h2>تورنمنت بزرگ CS2 Major آغاز شد</h2>
      <p>
        تورنمنت Major Copenhagen با حضور ۲۴ تیم برتر جهان آغاز شد.  
        این نخستین Major رسمی CS2 است و تیم‌هایی مانند NAVI، FaZe و Vitality برای قهرمانی رقابت می‌کنند.
      </p>
      <a href="#" class="btn">ادامه مطلب</a>
    </div>

    <!-- خبر ۴ جدید -->
    <div class="news">
      <img src="Cs2_Workshop.webp" alt="CS2 Workshop Update">
      <h2>اضافه شدن ابزارهای جدید برای نقشه‌سازان در CS2 Workshop</h2>
      <p>
        ولو به‌تازگی مجموعه‌ای از ابزارهای توسعه برای جامعه‌ی نقشه‌سازان منتشر کرده است.  
        این ابزارها به کاربراناجازه می‌دهند تا افکت‌های نورپردازی، انعکاس و ذرات را با دقت بسیار بیشتری کنترل کنند.
    </p>
    <a href="#" class="btn">ادامه مطلب</a>
  </div>

  <!-- خبر ۵ جدید -->
  <div class="news">
    <img src="Cs2_M4a4" alt="CS2 Weapon Update">
    <h2>تغییرات در تعادل سلاح‌ها در آخرین آپدیت</h2>
    <p>
      در جدیدترین پچ CS2، قدرت شات‌گان‌ها و SMGها تنظیم شده و اسلحه‌ی M4A4 دوباره محبوب شده است.  
      بازیکنان حرفه‌ای از تغییرات راضی‌اند و این آپدیت موجب تنوع بیشتر در استراتژی‌ها شده است.
    </p>
    <a href="#" class="btn">ادامه مطلب</a>
  </div>
</main>

<footer>
  <p>سایت خبری من</p>
</footer>

<div class="login-popup" id="loginPopup">
  <div class="login-box">
    <h3>ورود به سایت</h3>
    <input type="text" placeholder="نام کاربری"><br>
    <input type="password" placeholder="رمز عبور"><br>
    <button onclick="closeLogin()">ورود</button><br>
    <button onclick="closeLogin()">بستن</button>
  </div>
</div>

<script>
  function openLogin() {
    document.getElementById("loginPopup").style.display = "flex";
  }
  function closeLogin() {
    document.getElementById("loginPopup").style.display = "none";
  }
</script>

</body>
</html>
