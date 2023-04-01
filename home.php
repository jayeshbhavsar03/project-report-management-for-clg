<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Experiential Learning & Information System</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>access the all project done by your friends.</h3>
      <p>access in a one second.</p>
      <a href="about.php" class="white-btn">About Us</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Faculty</h1>

   <div class="content">
      <p class="para">All project of 2nd year students.</p>
      <a href="second_year.php" class="white-btn" style="margin: 0rem 0rem 2rem 0rem;">Second Year</a>
   </div>

   <div class="content">
      <p class="para">All project of 3rd year students.</p>
      <a href="third_year.php" class="white-btn" style="margin: 0rem 0rem 2rem 0rem;">Third Year</a>
   </div>

</section>


<section class="home-contact">

   <div class="content">
      <h3>give some feedback</h3>
      <p>What your experience give some feedback.</p>
      <a href="feedback.php" class="white-btn home-btn">Feedback</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>