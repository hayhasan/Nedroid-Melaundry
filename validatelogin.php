
<?php

$loginemail = $_POST['loginemail'];
$loginpassword = $_POST['loginpassword'];


$koneksi = mysqli_connect("localhost","root","","nedroid");

$strSql = "select * from dataUser where email = '$loginemail' and password = '$loginpassword'  ";
$hasil = mysqli_query($koneksi,$strSql);
$name = "select firstname from dataUser where email ='$loginemail' ";
$hasilname = mysqli_query($koneksi,$name);

$cek = mysqli_num_rows($hasil);

if($cek>0){
    while($rowData = $hasilname->fetch_array()){
    session_start();
    $_SESSION['hasil'] = $hasilname;
    echo "<script type='text/javascript'>alert('Login Berhasil');</script>";
    header("Location:account.php");
    }
    
} else {
    echo "<script>alert('Password atau email salah');</script>";
    header("Location:index.php");
}

?>