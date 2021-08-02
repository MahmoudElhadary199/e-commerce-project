<?php
$server="localhost";
$dbName="shop";
$dbUser="root";
$dbPassword="";


$connect=mysqli_connect($server,$dbUser,$dbPassword,$dbName);
if($connect){
}
else{
    echo 'no connect';
   // die('ErrorMessage'.mysqli_connect_error());
}

?>