<?php
$server="sql307.epizy.com";
$username="	epiz_32117450";
$password="	epiz_32117450";
$dbname="epiz_32117450_foodoholics";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
?>