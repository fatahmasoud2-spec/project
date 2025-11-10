<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>سایت خبری بازی‌ها</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
  <header>
    <h1>آخرین اخبار بازی‌ها</h1>
    <button class="login-btn" onclick="openLogin()">ورود</button>
    <nav>
      <a href="index.php">خانه</a>
      <a href="#">به‌روزرسانی‌ها</a>
      <a href="about.php">درباره ما</a>
      <a href="#">تماس با ما</a>
    </nav>
  </header>

  <script>
    function openLogin() {
      document.getElementById("loginPopup").style.display = "flex";
    }
    function closeLogin() {
      document.getElementById("loginPopup").style.display = "none";
    }
  </script>