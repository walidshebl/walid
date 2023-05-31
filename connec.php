<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
    <style>

        body{

          background-image: url(22.png);
	       background-size: cover;
	       background-position:  center;
	      background-repeat: no-repeat;

        }
        h1{
            text-align: center;
        }
form {
    
  background-color: #f5f5dd;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0 0 10px #ccc;
  max-width: 500px;
  margin: 12px auto;
}

label {
  display: block;
  margin-bottom: 1px;
  font-weight: bold;
}
input[type="text"],
input[type="number"] {
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #E8E8E8;
  margin-bottom: 20px;
  width: 95%;
}

input[type="submit"],
input[type="reset"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #3e8e41;
}
.container {
				
        display: flex;
        justify-content: center;
  
}        
      img{

         width: 50px;
 padding: 2px;

}
    </style>
</head>
<body>
    
	
	<form action="ind.php" method="post"><h1>Add Product</h1>
  <div class="container">
	<img src="cloud-computing.png" alt="">
</div>
		<label for="product_name">Name:</label>
		<input type="text" name="product_name" id="product_name"><br><br>
		<label for="product_price">Price:</label>
		<input type="number" name="product_price" id="product_price"><br><br>
		<label for="available_quantity">Quantity:</label>
		<input type="number" name="available_quantity" id="available_quantity"><br><br>
		<label for="image">image:</label>
		<input type="file" id="image" name="image"><br><br>
        <label for="username">Username:</label>
		<input type="text" name="username" id="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password"><br><br>
		<input type="submit" value="Add Product">
		<input type="reset" value="Reset">
        <?php if(isset($error)) { echo $error; } ?>

	</form>
</body>
</html>