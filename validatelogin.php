
<?php

$loginemail = $_POST['loginemail'];
$loginpassword = $_POST['loginpassword'];


$koneksi = mysqli_connect("localhost","root","","melaundry");

$strSql = "select * from data_user where email = '$loginemail' and password = '$loginpassword'  ";
$hasil = mysqli_query($koneksi,$strSql);

$cek = mysqli_num_rows($hasil);

if($cek>0){
    while($rowData = $hasil->fetch_array()){
    //var_dump($rowData['lastName']);    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user'] = $rowData;
    if($rowData["usertype"]=="admin"){
        echo "<script type='text/javascript'>alert('Login Berhasil');</script>";
        header("Location:adminn/dashboard.php");
    } else{
        echo "<script type='text/javascript'>alert('Login Berhasil');</script>";
        header("Location:account.php");
    }
    
    }
    
} else {
    echo "<script>alert('Password atau email salah');</script>";
    header("Location:index.php");
}

?>