

<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "shoaib"; 

// إنشاء الاتصال بقاعدة البيانات
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
    <style>
  form {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
}

label {
  display: inline-block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
    </style>
</head>
<body>
<form action="update_product.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
  <label for="name">اسم المنتج:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
  <label for="price">سعر المنتج:</label><br>
  <input type="number" id="price" name="price" value="<?php echo $price; ?>"><br>
  <label for="quantity">كمية المنتج:</label><br>
  <input type="number" id="quantity" name="quantity" value="<?php echo $quantity; ?>"><br>
  <label for="image">صورة المنتج:</label><br>
  <input type="file" id="image" name="image"><br><br>
  <input type="submit" value="تحديث">
</form>
</form>
</body>
</html>
<?php
// تأكد من وجود اتصال بقاعدة البيانات هنا

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product_id = $_POST["product_id"];
  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
  $available_quantity = $_POST["available_quantity"];
  
  // تحديث المعلومات في قاعدة البيانات هنا

  // تحميل الصورة إذا تم تحديثها
  if (!empty($_FILES["image"]["product_name"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["product_name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $allowedTypes)) {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // تحديث مسار الصورة في قاعدة البيانات هنا
      } else {
        echo "حدث خطأ أثناء تحميل الصورة.";
      }
    } else {
      echo "نوع الملف غير مدعوم.";
    }
  }

  // إعادة التوجيه إلى صفحة القائمة
  header("Location: products.php");
  exit;
}

// استعادة المعلومات الحالية للمنتج
$product_id = $_GET["product_id"];
$query = "SELECT * FROM products WHERE product_id = $product_id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$product_name = $row["product_name"];
$product_price = $row["product_price"];
$available_quantity = $row["available_quantity"];
?>



