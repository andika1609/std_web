<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anggota</title>
</head>
<body>
    <?php 
    session_start();
    
    // cek apakah yang mengakses sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>

    <h1>Halaman Anggota</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></p>
    <a href="logout.php">LOGOUT</a>

</body>
</html>