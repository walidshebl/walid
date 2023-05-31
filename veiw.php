<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>عرض الشكاوي</title>
  <style>
    table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #4CAF50;
  color: white;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}</style>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>name</th>
      <th>email</th>
      <th>complaint</th>
    </tr>
  </thead>
  <tbody>
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
      // استعراض الشكاوي من قاعدة البيانات هنا
      $query = "SELECT * FROM complaints";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["complaint"] . "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>  
</body>
</html>
