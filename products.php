<?php
// تحديد معلومات الاتصال بقاعدة البيانات
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'shoaib';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
// استخراج البيانات المدخلة من الفورم
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$payment = $_POST['payment'];

// إدخال البيانات في جدول الشراء
$sql = "INSERT INTO purchasess (name, address, phone, product_id, quantity, payment)
        VALUES ('$name', '$address', '$phone', '$product_id', $quantity, '$payment')";

if ($conn->query($sql) === TRUE) {
  echo header("Location: vaw.php");
} else {
  echo "حدث خطأ أثناء إدخال الشراء: " . $conn->error;
}




// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);

?>