<?php

$koneksi = mysqli_connect("localhost","root","","melaundry");
$name = "select firstname from data_user where email ='hasanrama120@gmail.com' ";
$hasilname = mysqli_query($koneksi,$name);


session_start();
while ($row = $hasilname->fetch_assoc()){
  echo ($_SESSION["hasil"]);
}
 
 ?>

              
