<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST['subject']));
    $message = strip_tags(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            // التحقق من وجود جدول الرسائل أولاً أو محاولة إنشائه صمتاً (أو الاعتماد على وجوده)
            // لضمان عمل الكود بشكل احترافي سنحاول إدخال البيانات مباشرة
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $subject, $message]);
            $success = "شكراً لتواصلك معنا! تم استلام رسالتك بنجاح وسنقوم بالرد عليك قريباً.";
        } catch (PDOException $e) {
            // إذا لم يكن الجدول موجوداً، سنعرض رسالة خطأ تقنية للمدير
            $error = "عذراً، حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة لاحقاً.";
        }
    } else {
        $error = "يرجى ملء جميع الخانات المطلوبة.";
    }
}

$page_title = "اتصل بنا | Frilz";
include 'includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-dark border-secondary p-4 p-md-5 rounded-4 shadow-lg text-white">
                <h1 class="fw-bold mb-4 text-danger border-bottom pb-3">اتصل بنا</h1>
                <p class="text-secondary mb-4">هل لديك اقتراح، شكوى، أو استفسار؟ نحن هنا للاستماع إليك. يرجى ملء النموذج أدناه.</p>

                <?php if ($success): ?>
                    <div class="alert alert-success border-0 rounded-3 animate__animated animate__fadeIn">
                        <i class="fas fa-check-circle me-2"></i> <?php echo $success; ?>
                    </div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div class="alert alert-danger border-0 rounded-3 animate__animated animate__shakeX">
                        <i class="fas fa-exclamation-circle me-2"></i> <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="contact.php" class="row g-4 mt-2">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-secondary">الاسم الكامل *</label>
                        <input type="text" name="name" class="form-control bg-dark text-white border-secondary rounded-3 p-3" placeholder="أدخل اسمك" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-secondary">البريد الإلكتروني *</label>
                        <input type="email" name="email" class="form-control bg-dark text-white border-secondary rounded-3 p-3" placeholder="email@example.com" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-bold text-secondary">الموضوع</label>
                        <input type="text" name="subject" class="form-control bg-dark text-white border-secondary rounded-3 p-3" placeholder="ما هو عنوان رسالتك؟">
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-bold text-secondary">الرسالة *</label>
                        <textarea name="message" class="form-control bg-dark text-white border-secondary rounded-3 p-3" rows="5" placeholder="اكتب رسالتك هنا بالتفصيل..." required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-lg w-100 rounded-pill py-3 fw-bold mt-2 shadow-lg">
                            إرسال الرسالة الآن <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </div>
                </form>

                <div class="mt-5 pt-4 border-top border-secondary text-center">
                    <h5 class="h6 fw-bold mb-3">أو تواصل معنا مباشرة عبر:</h5>
                    <div class="d-flex justify-content-center gap-4 fs-4">
                        <a href="#" class="text-white hover-danger"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="text-white hover-danger"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white hover-danger"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:support@frilz.com" class="text-white hover-danger"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus { background-color: #1a1a1a !important; color: #fff; border-color: #e50914; box-shadow: none; }
    .hover-danger:hover { color: #e50914 !important; }
</style>

<?php include 'includes/footer.php'; ?>
