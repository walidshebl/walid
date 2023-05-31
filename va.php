<!DOCTYPE html>
<html>
    <style> body{
       background-image: url(22.png);
	       background-size: cover;
	       background-position:  center;
	      background-repeat: no-repeat;


position: relative;
}
form {
  background-color: #abe9f0;
      border-radius: 20px;
      padding: 30px;
      width: 50%;
      margin: auto;
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #333;
      margin-top: 150px;
}
label {
  margin-bottom: 10px;
}
input[type="text"],
input[type="email"],
textarea {
  padding: 10px;
  border: 1px solid #ccc;
  width: 100%;
  margin-bottom: 10px;
}
button[type="submit"] {
  padding: 10px 320px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;

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
<head>
  <title>شكوى جديدة</title>
  <meta charset="UTF-8">
</head>
<body>
  <form method="post" action="shak.php">
  <div class="container">
	<img src="computer.png" alt="">
</div>
    <label for="name">الاسم:</label>
    <input type="text" id="name" name="name">
    <label for="email">البريد الإلكتروني:</label>
    <input type="email" id="email" name="email">
    <label for="complaint">الشكوى:</label>
    <textarea id="complaint" name="complaint"></textarea>
    <button type="submit" name="submit">إرسال الشكوى</button>
  </form>
</body>
</html>