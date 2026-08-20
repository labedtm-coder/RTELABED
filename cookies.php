<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
$page_title = "سياسة ملفات تعريف الارتباط | Frilz";
include 'includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card bg-dark border-secondary p-4 p-md-5 rounded-4 shadow-lg text-white">
                <h1 class="fw-bold mb-4 text-danger border-bottom pb-3">سياسة ملفات تعريف الارتباط (Cookies)</h1>

                <div class="mb-5">
                    <h3 class="h5 fw-bold text-white mb-3">ما هي ملفات تعريف الارتباط؟</h3>
                    <p class="text-secondary">ملفات تعريف الارتباط هي ملفات نصية صغيرة يتم تخزينها على جهاز الكمبيوتر أو الهاتف المحمول الخاص بك عند زيارة مواقع الويب. تساعد هذه الملفات المواقع على تذكر إعداداتك وتفضيلاتك.</p>
                </div>

                <div class="mb-5">
                    <h3 class="h5 fw-bold text-white mb-3">كيف نستخدمها في Frilz؟</h3>
                    <ul class="text-secondary">
                        <li class="mb-2"><strong>ملفات الضرورة:</strong> تضمن عمل الموقع بشكل صحيح وأمان.</li>
                        <li class="mb-2"><strong>ملفات التحليل:</strong> تساعدنا على فهم كيفية استخدام الزوار للموقع لنقوم بتحسينه.</li>
                        <li class="mb-2"><strong>ملفات التفضيلات:</strong> تذكر خياراتك مثل اللغة أو جودة الفيديو المفضلة.</li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h3 class="h5 fw-bold text-white mb-3">التحكم في ملفات تعريف الارتباط</h3>
                    <p class="text-secondary">يمكنك التحكم في ملفات تعريف الارتباط أو حذفها كما تطلب. يمكنك مسح جميع ملفات تعريف الارتباط الموجودة بالفعل على جهازك ويمكنك ضبط معظم المتصفحات لمنع وضعها.</p>
                </div>

                <div class="mb-5">
                    <h3 class="h5 fw-bold text-white mb-3">تحديثات هذه السياسة</h3>
                    <p class="text-secondary">قد نقوم بتحديث سياسة ملفات تعريف الارتباط الخاصة بنا من وقت لآخر لتعكس التغييرات في الممارسات التقنية أو القانونية.</p>
                </div>

                <div class="text-muted small mt-4 pt-3 border-top border-secondary text-center">
                    تم التحديث في: <?php echo date('Y-m-d'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
