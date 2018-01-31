<?php
if(empty($_POST['username']) || empty($_POST['password']))
{
    echo "<script type='text/javascript'>alert('Data masing kosong!!')</script>";
    echo "<script type='text/javascript'>window.location.href='../pages/login.html'</script>";
}
else
{
    include 'koneksi.php';
    $username=$_POST['username'];
    $pass=$_POST['password'];
    echo "<script type='text/javascript'>alert('$username $pass')</script>";
    $sql=mysqli_query($conn,"SELECT * FROM tb_login where NIP='$username' AND password='$pass'");
    $cek = mysqli_num_rows($sql);
    if($cek>0){
        session_start();
        $row = mysqli_fetch_array($sql);
        $_SESSION['username'] = $username;
        $_SESSION['namalogin'] = $row['nama'];
        $_SESSION['statuslogin'] = $row['status'];
        header('Location: ../index.php');
    }else {
        
            echo "<script type='text/javascript'>alert('Username tidak tersedia!')</script>";
            echo "<script type='text/javascript'>window.location.href='../pages/login.html'</script>";
        
    }
}

?>
