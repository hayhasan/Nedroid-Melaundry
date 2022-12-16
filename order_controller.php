<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $nota = $_POST['nota'];
    
    $conn = mysqli_connect("localhost","root","","melaundry");


        $query = "INSERT INTO order_user (name,phone,address,price,nota) VALUES ('".$name."', '".$phone."', '".$address."', '".$price."', '".$nota."')";
        if($result = mysqli_query($conn, $query)){
            echo "<script>alert('Berhasil order, menuju map');  window.location = 'map.php'; </script>";
        }else{
            echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>";
        }

?>