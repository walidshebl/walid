<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'shoaib';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>عرض المشتريات</title>
	<style>
		 html{
       background-image: url(22.png);
	       background-size: cover;
	       background-position:throw  center;
	      background-repeat: no-repeat;


}
         h1{
            text-align: center;
        }
		table {
			width: 100%;
			border-collapse: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}

		table th, table td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: center;
		}
		table th {
			background-color: #f2f2f2;
		}
		table tr:nth-child(even) {
			background-color: #f9f9f9;
		}
	</style>
</head>
<body>
	<h1>عرض المشتريات</h1>
	<table>
		<thead>
			<tr>
				<th>رقم الطلب</th>
				<th>اسم العميل</th>
				<th>العنوان</th>
				<th>رقم الهاتف</th>
				<th>كود المنتج</th>
				<th>الكمية</th>
				<th>طريقة الدفع</th>
				<th>تاريخ الشراء</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// تحميل بيانات المشتريات من جدول purchases
				$sql = "SELECT * FROM purchasess";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// عرض بيانات المشتريات في الجدول
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["id"]. "</td>";
						echo "<td>" . $row["name"]. "</td>";
						echo "<td>" . $row["address"]. "</td>";
						echo "<td>" . $row["phone"]. "</td>";
						echo "<td>" . $row["product_id"]. "</td>";
						echo "<td>" . $row["quantity"]. "</td>";
						echo "<td>" . $row["payment"]. "</td>";
						echo  "<td>" . $row["date"]. "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='7'>لا يوجد بيانات متاحة</td></tr>";
				}

				$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>


