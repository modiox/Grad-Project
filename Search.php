<?php

$search = $_POST["myInput"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Market";

$con = mysqli_connect($servername,$username,$password, $dbname) or die("Cannot connect to database");
$query = "SELECT Location FROM items WHERE Name='$search'";
$sql = mysqli_query($con, $query);
$result = $con -> query($query);
print("<br>");
print("<center> <table border='1' style='color:#2A6881 width: 100%;
    color: #2A6881;
    font-family: monospace;
    font-size:16px;
    text-align:center;'> <thead> <tr>"); 
print("<th> Loaction </th></tr> </thead>");
print("<tbody>");



if($sql)
{
if($search)
{
if($result -> num_rows > 0)
   
{  while($row1 =$result -> fetch_assoc())

 { 
       echo"<tr><td>".$row1["Location"]."</td></tr>";


 }
    print("</tbody> </table> </center>");
}

else 
    echo "No match found..";

} } 

else 
    echo "zero result";

mysqli_close($con);


?>

