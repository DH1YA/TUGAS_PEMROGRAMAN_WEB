<?php 
 
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
   <title>my orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p><a href="home.html">home </a> <span> / orders</span></p>
</div>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <div class="box">
         <p> tanggal : <span>5-29-2022</span> </p>
         <p> nama : <span>Ahmad Dhiya</span> </p>
         <p> nomor : <span>1234567899</span> </p>
         <p> email : <span>dhiya334@gmail.com</span> </p>
         <p> alamat : <span>samarinda, JL.Jakarta</span> </p>
         <p> pesanan anda : <span>rendang -</span> </p>
         <p> harga : <span>Rp 100.000/-</span> </p>
      </div>

      <div class="box">
         <p> tanggal : <span>5-29-2022</span> </p>
         <p> nama : <span>Ahmad Dhiya</span> </p>
         <p> nomor : <span>1234567899</span> </p>
         <p> email : <span>dhiya334@gmail.com</span> </p>
         <p> alamat : <span>samarinda, JL.Jakarta</span> </p>
         <p> pesanan anda : <span>rendang -</span> </p>
         <p> harga : <span>Rp 100.000/-</span> </p>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>