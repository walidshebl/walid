<?php
// تحديد معلومات قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoaib";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من اتصال قاعدة البيانات
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows != 1) {
    die("Invalid username or password");
}

// إدخال بيانات المنتج إلى قاعدة البيانات
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$available_quantity	= $_POST['available_quantity'];
$image	= $_POST['image'];
$sql = "INSERT INTO products (product_name, product_price, available_quantity,image)
               VALUES ('$product_name', '$product_price', '$available_quantity', '$image')";
if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error adding product: " . $conn->error;
}

// إغلاق اتصال قاعدة البيانات
mysqli_close($conn);
?>


