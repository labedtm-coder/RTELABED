<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
$page_title = "من نحن - Frilz";
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q4G0KLZ1C5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-Q4G0KLZ1C5');
    </script>
    <link rel="icon" type="image/png" href="https://frilz.free.nf/ad/ass/10.png?v=1.1">
    <style>
        body { background-color: #1a1a1a; color: #fff; font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header { background: #000; padding: 20px; border-bottom: 1px solid #333; text-align: center; }
        header a { color: #e50914; text-decoration: none; font-size: 28px; font-weight: bold; }
        nav { background: #222; padding: 10px 0; border-bottom: 1px solid #333; }
        nav ul { list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 20px; }
        nav ul li a { color: #ccc; text-decoration: none; font-size: 14px; font-weight: bold; }
        nav ul li a:hover { color: #fff; }

        .container { max-width: 1000px; margin: 0 auto; padding: 20px; display: grid; grid-template-columns: 1fr 250px; gap: 30px; }
        main { background: #222; padding: 25px; border-radius: 5px; border: 1px solid #333; }
        aside { background: #222; padding: 20px; border-radius: 5px; border: 1px solid #333; height: fit-content; }

        h1 { font-size: 24px; border-bottom: 1px solid #e50914; padding-bottom: 10px; margin-bottom: 20px; }
        p { line-height: 1.8; color: #bbb; font-size: 16px; }

        .ultext { list-style: none; padding: 0; }
        .ultext li { margin-bottom: 12px; border-bottom: 1px solid #333; padding-bottom: 5px; }
        .ultext li a { color: #ccc; text-decoration: none; font-size: 14px; }
        .ultext li a:hover { color: #e50914; }

        footer { background: #000; padding: 30px; border-top: 1px solid #333; text-align: center; margin-top: 40px; }
        footer p { font-size: 13px; color: #777; max-width: 800px; margin: 0 auto 15px auto; }

        @media (max-width: 800px) {
            .container { grid-template-columns: 1fr; }
            aside { order: 2; }
        }
    </style>
</head>
<body>

<header><a href="index.php">FRILZ</a></header>
<nav>
    <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="about.php">من نحن</a></li>
        <li><a href="privacy.php">سياسة الخصوصية</a></li>
    </ul>
</nav>

<div class="container">
    <main>
        <article>
            <h1>من نحن</h1>
            <div style="text-align: center; border: 1px solid #444; padding: 20px; border-radius: 5px; background: rgba(229, 9, 20, 0.05);">
                <p>
                موقع مهمته توفير مشاهدة الأفلام والمسلسلات المجانية المتاحة للجميع والتي لا يوجد لها حقوق ملكية. هذا يعني أن موقع <strong>فريلز (Frilz)</strong> لا ينتهك حقوق أحد، وإذا وجد أي انتهاك أو حقوق لأي جهة أخرى يرجى مراسلتنا
                <a href="contact.php" style="color: #e50914; font-weight: bold;">من هنا</a>
                وسنقوم بحذفها على الفور في وقت لا يتعدى 24 ساعة.
                <br><br>
                نحن نسعى جاهدين لتحسين تجربة المشاهدة للأفضل لتستمتع بمتابعة أعمالك المفضلة بجودة عالية.
                </p>
            </div>
        </article>
    </main>

    <aside>
        <ul class="ultext">
            <li><a href="index.php">الصفحة الرئيسية</a></li>
            <li><a href="about.php">من نحن</a></li>
            <li><a href="contact.php">اتصل بنا</a></li>
            <li><a href="privacy.php">سياسة الخصوصية</a></li>
            <li><a href="terms.php">حقوق الملكية الفكرية</a></li>
        </ul>
        <div style="text-align: center; margin-top: 20px;">
            <b style="color: #555;">Site Visits</b><br>
            <img src="https://www.easycounter.com/counter.php?mhmd199611" alt="Counter">
        </div>
    </aside>
</div>

<footer>
    <p>
    موقع <b>Frilz</b> يوفر لك مشاهدة أحدث المسلسلات والأفلام العربية والأجنبية مجانًا بدون اشتراك وبدون تقطيع، بجودة عالية ومتوافقة مع جميع الأجهزة.
    تابع الأفلام الحصرية، المسلسلات الرمضانية، والدراما العالمية مباشرة وبجودة فائقة.
    </p>
    <div style="color: #e50914; font-weight: bold;">FRILZ</div>
</footer>

</body>
</html>
