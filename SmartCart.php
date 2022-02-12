<?php

$cart = $_POST["post"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Market";

$con = mysqli_connect($servername,$username,$password, $dbname) or die("Cannot connect to database");
$query = "SELECT * FROM items"; 
$sql = mysqli_query($con, $query);
$result =$con -> query($query);


print("<br>");
print("<center> <table border='1' style='color:#2A6881 width: 100%;
    color: #2A6881;
    font-family: monospace;
    font-size:16px;
    text-align:center;'> <thead> <tr>"); 
print("<th> TagID </th><th> ProductID </th><th> Name </th> <th> Price </th><th> Discount </th>"); 
print("<th> Loaction </th> <th> Type </th> <th> Category </th> </tr> </thead>");
print("<tbody>");

if($sql)
{
if($cart)
{
if($result -> num_rows > 0)
   
{  while($row1 =$result -> fetch_assoc())

 { 
       echo"<tr><td>".$row1["TagID"]."</td> <td>".$row1["ProductID"]."</td> <td>".$row1["Name"] ."</td>"; 
       echo"<td>".$row1["Price"]."</td><td>".$row1["Discount"]."</td><td>".$row1["Location"]."</td><td>".$row1["Type"]."</td><td>".$row1["Category"]. "</td></tr>";


 }
    print("</tbody> </table> </center>");
} 


 } } 
else 
    echo "zero result";

mysqli_close($con);


?>

