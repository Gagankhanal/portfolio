<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=mysqli_connect($servername,$username ,$password ,$dbname);
if(!$conn){
    die("connection failed");
}
?>
<!-- <?php
// $servername="sql310.epizy.com";
// $username="	epiz_30899229";
// $password="mrnm517iltw5TP";
// $dbname="epiz_30899229_portfolio";
// $conn=mysqli_connect($servername,$username ,$password ,$dbname);
// if(!$conn){
//     die("connection failed");
// }
?> -->