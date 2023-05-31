<!DOCTYPE html>
<html>
<head>
	<title> المنتجات المتاحة </title>
	<style>
		body{
			background-image: url(22.png);
	       background-size: cover;
	       background-position:  center;
	       position: relative;
	       z-index: 1; 
		}
		.product-container {
			
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
			
		}
		.product-card {
			width: 200px;
			height: 400px;
			margin-bottom: 50px;
			border: 1px solid #ccc;
			border-radius: 70px;
			padding: 70px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			
		}
		.product-card img {
			max-width: 250px;
			max-height: 250px;
			object-fit: contain;
			margin-bottom: 8px;
		}
		.product-card h4 {
			font-size: 20px;
			margin-bottom: 20px;
		}

		.product-card p {
			font-size: 20px;
			margin-bottom: 10px;

		}
		.cart-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 20px;
		}
		.cart-item {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 300px;
			height: 50px;
			padding: 10px;
			margin-bottom: 10px;
			border: 2px solid #ccc;
			border-radius: 10px;
		}
		.cart-item img {
			max-width: 30px;
			max-height: 30px;
			object-fit: contain;
			margin-right: 10px;
		}
		.cart-item p {
			font-size: 16px;
			margin-right: 10px;
		}
		.total-price {
			font-size: 18px;
			margin-top: 10px;
		}
		.button:hover {
			background-color: #3e8e41;
		}
        .product-card {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    position: relative; 
}
	</style>
</head>
<body>
	<div class="product-container">
    <div class="product-image"></div>

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
			// استعلام SQL لاسترداد بيانات المنتجات
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);
			// عرض بيانات المنتجات
			if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {

			    	echo "<div class='product-card'>";
			    	echo "<img src='" . $row["image"] . "'>";
			        echo "<h4>" . $row["product_name"] . "</h4>";
			        echo "<p>" . $row["product_price"] . " جنيه</p>";
					echo "<p>" . $row["product_id"] . " كود المنتج</p>";
					echo "<p>" . $row["available_quantity"] . ": الكمية بالطن  </p>";
			        echo "<input type='hidden' name='product_id' value='" . $row["product_id"] . "'>";
			        echo "<input type='hidden' name='product_name' value='" . $row["product_name"] . "'>";
			        echo "<input type='hidden' name='product_price' value='" . $row["product_price"] . "'>";
					echo "<input type='hidden' name='available_quantity' value='" . $row["available_quantity"] . "'>";
			        
			        echo "</div>";
			    }
			} else {
			    echo "لم يتم العثور على منتجات";
			}
		?>
	</div>
</body>
</html>