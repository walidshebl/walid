<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <style>
        body{

            background-image: url(userr.png);
            background-size: cover;
	background-position:  center;
    background-repeat: no-repeat;
	background-position: top center;
	position: relative;

        }
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 10vh;
  overflow: hidden;
}
ul {
  position: relative;
display: flex;
}
ul li {
  list-style: none;
  text-align: center;
margin: 30px;
}
ul li a {
  color: #333;
  text-decoration: none;
  font-size: 2.8em;
  padding: 50px 20px;
  display: inline-flex;
  font-weight: 700;
  transition: 0.5s;
 
}
ul:hover li a {
  color: #0002;
}
ul li:hover a {
  color: royalblue;
  background: rgba(255, 255, 255, 1);
}
ul li a:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 4em;
  color: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  z-index: -1;
  opacity: 0;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 500px;
  transition: letter-spacing 0.5s, left 0.5s;
}
ul li a:hover:before {
  content: attr(data-text);
  opacity: 1;
  left: 50%;
  letter-spacing: 10px;
  width: 1800px;
  height: 1800px;
}
ul li:nth-child(6n + 1) a:before {
  background: #81ecec;
}
ul li:nth-child(6n + 2) a:before {
  background: #ff7675;
}
ul li:nth-child(6n + 3) a:before {
  background: #55efc4;
}
ul li:nth-child(6n + 4) a:before {
  background: #a29bfe;
}
ul li:nth-child(6n + 5) a:before {
  background: #fd79a8;
}
ul li:nth-child(6n + 6) a:before {
  background: #ffeaa7;
}
</style>
</head>
<body>
<ul>
    <li><a href="connec.php" data-text="Add purchases  ">اضافة المنتجات </a></li>
    <li><a href="delat.php" data-text="delet purchases  ">حذف المنتجات </a></li>
    <li><a href="connection.php" data-text="View purchases">عرض المشتريات</a></li>
   
    <li><a href="veiw.php" data-text="View complaints">عرض الشكاوي</a></li>
    <li><a href="veiwpro.php" data-text="View products">عرض المنتجات</a></li>
    <li><a href="viewdatacastamer.php" data-text="View Customers data">عرض بيانات العملاء</a></li>
  </ul>

</body>
</html>