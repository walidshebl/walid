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
	<title>عرض بيانات العملاء</title>
	<style>
         h1{
            text-align: center;
			background-color: aquamarine;
			font-size: 50px;
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
			background-color: rosybrown;
		}

		table tr:nth-child(even) {
			background-color: #f9f9f9;
		}
	</style>
</head>
<body>
	<h1>عرض بيانات العملاء</h1>
	<table>
		<thead>
			<tr>
				<th>كود العميل</th>
				<th>اسم العميل</th>
				<th>العنوان</th>
				<th>رقم الهاتف</th>
				<th>الايميل </th>
                <th>تاريخ الإضافة</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
				// تحميل بيانات العملاء من جدول customer
				$sql = "SELECT * FROM customer";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// عرض بيانات العملاء في الجدول
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["id"]. "</td>";
						echo "<td>" . $row["name"]. "</td>";
						echo "<td>" . $row["address"]. "</td>";
						echo "<td>" . $row["phone"]. "</td>";
						echo "<td>" . $row["email"]. "</td>";
                        echo "<td>" . date('Y-m-d H:i:s', strtotime($row['date_added'])) . "</td>";
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