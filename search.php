<?php 
require "koneksi.php";
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>

    .tabel-produk {
      margin:90px auto;
      height:40rem;
    }

    table {
      font-size:20px;
      border-collapse: collapse;
      width: 100%;
      border:2px solid;
    }
    
    th {
    background-color: #04AA6D;
    color: white;
    height:70px;
     }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    tr:hover {background-color: coral;}
</style>
</head>
<body>
   
<?php include 'header.php'; ?>

<section class="search-form">
   <form action="" method="get">
      <input type="text" class="box" name="keyword" placeholder="search here..." maxlength="100">
      <button type="submit" class="fas fa-search" name="search"></button>
   </form>
</section>

<!-- show products   -->
<?php
   $result = mysqli_query($conn, "SELECT * FROM produk");
   if (isset($_GET['search'])) {
    $keyword=$_GET['keyword'];
    $result = mysqli_query($conn, "SELECT * FROM produk where 
    nama_produk LIKE '%$keyword%' OR waktu LIKE '%$keyword%' OR foto LIKE '%$keyword%'");
    } 
   $produk = [];

   while ($row = mysqli_fetch_assoc($result)) {
      $produk[] = $row;
   }
?>
<section class="show-products" style="padding-top: 0;">

<div class="tabel-produk">
  <table border=1px>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>MODIFIED</th>
            <th>FOTO</th>
    
        </tr>
        <?php $i = 1; foreach ($produk as $menu):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $menu["nama_produk"]; ?></td>
            <td><?php echo $menu["waktu"] ;?></td>
            <td><img src="crud/upload_img/<?= $menu['foto'] ?>" width="50px" height="50px"></td>
            <td></td>
        </tr>
        <?php $i++; endforeach;?>
    </table>
  </div>

</section>

<!-- show products  -->



<?php include 'footer.php'; ?>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>