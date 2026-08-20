<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
$page_title = "سياسة الخصوصية - Frilz";
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
        h2 { font-size: 18px; color: #e50914; margin-top: 30px; }
        p { line-height: 1.8; color: #bbb; font-size: 15px; }

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
            <h1>سياسة خصوصية فريلز</h1>

            <h2>من نحن</h2>
            <p>
            باستخدام هذا الموقع، فإنك تعبر عن قبولك لسياستنا وشروطنا. تنطبق سياسة الخصوصية هذه على موقع <strong>Frilz</strong> فقط.
            نحن منصة ترفيهية مكرسة لتوفير وصول الناس إلى المحتوى المرئي المجاني. يتم دعم نفقاتنا الفنية من خلال إيرادات الإعلانات. يرجى ملاحظة أنه ليس لدينا أي تطبيق رسمي في المتاجر حالياً.
            </p>

            <h2>حقوق النشر والشروط</h2>
            <p>
            نحن نقدر ونحترم بشدة حقوق الطبع والنشر وحقوق الملكية الفكرية الخاصة بك.
            قد تشمل المقالات في هذا الموقع محتوى مضمناً (مثل مقاطع الفيديو، الصور، إلخ). المحتوى المضمن من مواقع أخرى يتصرف تماماً كما لو كان الزائر قد زار الموقع الآخر.
            إذا كان يعتقد شخص ما أن هناك انتهاكاً لحقوقه على موقعنا، فيمكنه إخبارنا لحذف الانتهاك.
            </p>
            <p><a href="contact.php" style="color: #e50914; font-weight: bold;">اتصل بنا من هنا</a></p>

            <h2>استخدام ملفات تعريف الارتباط (Cookies)</h2>
            <p>
            يتم استخدام ملفات تعريف الارتباط بواسطة إعلانات Google و Google Analytics. نظراً لأننا نستخدم منتجات Google، فسيتم وضع هذه الملفات في نظامك لتحسين تجربة التصفح. موقعنا يستخدم ملفات تعريف الارتباط فقط لقائمة المفضلات المحلية للزائر، ولا نجمع أي معلومات أخرى من نظامك بطرق أخرى.
            </p>

            <h2>حذف ملفات تعريف الارتباط</h2>
            <p>
            يرجى الحذر من أنك إذا قمت بمسح ملفات تعريف الارتباط، فستفقد بيانات المواقع مثل كلمات المرور المحفوظة في ذلك المتصفح. ولكن من الجيد أحياناً تنظيف مساحة القرص عن طريق مسح ذاكرة التخزين المؤقت والتاريخ.
            </p>
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
