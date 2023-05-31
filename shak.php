<?php
// إنشاء اتصال بقاعدة البيانات
$conn = new PDO("mysql:host=localhost;dbname=shoaib", "root", "");

// التحقق من إرسال الفورم
if (isset($_POST['submit'])) {
  // استدعاء المتغيرات المدخلة في الفورم
  $name = $_POST['name'];
  $email = $_POST['email'];
  $complaint = $_POST['complaint'];

  // إنشاء الاستعلام لحفظ الشكوى في قاعدة البيانات
  $stmt = $conn->prepare("INSERT INTO complaints (name, email, complaint)
   VALUES (:name, :email, :complaint)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':complaint', $complaint);
  $stmt->execute();
  
  // إظهار رسالة تأكيد الإرسال
  echo "تم إرسال الشكوى بنجاح.";
}
?>


