<?php

$search = $_POST["myInput"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Market";

echo '<head>';
echo '<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Smart Mart</title>';

  echo '<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>';

echo '<body>';

echo '<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>Smart mart</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            </div> '; 
 echo '</header>';           
$con = mysqli_connect($servername,$username,$password, $dbname) or die("Cannot connect to database");
$query = "SELECT Location FROM items WHERE Name='$search'";
$sql = mysqli_query($con, $query);
$result = $con -> query($query);
print("<br>");


 $img = "campus1.png";

if($sql)
{
if($search)
{
if($result -> num_rows > 0)
   
{  while($row1 =$result -> fetch_assoc())

 { 
      echo "<center> <h2> Loaction: ".$row1["Location"]."</h2> </center>";
      echo '<center><img src="'. $img. '"></center>';

 }
     
}

else 
    echo "No match found..";
     echo'<br>';
    echo '<img src="'. $img. '">';

} } 

else 
    echo "Zero result";

mysqli_close($con);


?>



