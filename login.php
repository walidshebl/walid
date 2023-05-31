<?php
// تحديد معلومات قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoaib";
// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>دخول مستخدم</title>
    <style>
	body{
    background-image: url(22.png);
	       background-size: cover;
	       background-position:  center;
	      background-repeat: no-repeat;
		}
form {
    
    background-color: #F8F8F8;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px #ccc;
    max-width: 400px;
    margin: 100px auto;
    border: 1px solid #ccc;
			border-radius: 20px;
   
    
  }
label {
  display: inline-block;
  margin-bottom: 5px;
}
input[type="text"],
input[type="password"] {
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
  display: inline-block;
}
.container {
				
        display: flex;
        justify-content: center;
  
}        
      img{

         width: 100px;
 padding: 2px;

}
</style>
</head>
<body>
      <form action="login.php" method="post">
      <div class="container">
	<img src="folder.png" alt="">
</div>
            <label for="username">اسم المستخدم:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">كلمة المرور:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="تسجيل الدخول">

          </form>
<?php
session_start();

// تأكد من وجود اتصال بقاعدة البيانات هنا

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // التحقق من صحة معلومات تسجيل الدخول وتعيين متغيرات الجلسة
  $query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    header("Location: user.php");
    exit;
  } else {
    echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
  }
}
?>
	</form>
</html>
