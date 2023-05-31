<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
<style>

body{
    background-image: url(22.png);
	       background-size: cover;
	       background-position:  center;
	      background-repeat: no-repeat;
		}
h1 {
	text-align: center;
}
form {
	display: flex;
	flex-direction: column;
	background-color: #fff;
	padding: 20px;
	margin: 200px auto;
	max-width: 500px;
	border-radius: 4px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
label, input {
	margin: 10px 0;
}

label {
	font-weight: bold;
}

input[type="text"] {
	padding: 10px;
	border-radius: 4px;
	border: 1px solid #ccc;
}
input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
input[type="submit"]:hover {
	background-color: #3e8e41;
}
</style>
</head>
<body>
	<h1>Delete Product</h1>
	<form action="delat.php" method="post">
		<label for="product_id">Product ID:</label>
		<input type="text" id="product_id" name="product_id">
		<input type="submit" value="Delete">
	</form>
    <?php
// تعريف متغيرات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoaib";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من وجود الاتصال بقاعدة البيانات
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من وجود مفتاح "product_id" في مصفوف على $_POST قبل استخدامه
if(isset($_POST["product_id"])) {
    // استلام معرف المنتج من النموذج
    $product_id = $_POST["product_id"];

    // حذف سجل المنتج من قاعدة البيانات
    $sql = "DELETE FROM products WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        // التحقق من نجاح عملية الحذف
        if ($conn->affected_rows > 0) {
            echo "Product deleted successfully";
        } else {
            echo "Product not found";
        }
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "Product ID is not set";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
</body>
</html>