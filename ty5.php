<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Year</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>xyz1</h3>
    </div>

    <section class="products">

        <div class="box-container">
        <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `3rd_record` WHERE `student_class`='xyz1' ") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
            <form action="" method="post" class="box">
                <div class="name"><?php echo $fetch_products['project_name']; ?></div>
                <div class="stu-name"><?php echo $fetch_products['student_name']; ?></div>
                <div class="stu-class"><?php echo $fetch_products['student_class']; ?></div>
                <div class="description"><?php echo $fetch_products['description']; ?></div>
                <div>
                    <a class="btn btn-pro" href="3rd_record/<?php echo $fetch_products['filename']; ?>" target="_blank">View Report</a>
                    <a class="btn btn-pro" href="3rd_record/<?php echo $fetch_products['filename']; ?>" download>Download Report</a>
                </div>
            </form>
            <?php
         }
      }else{
         echo '<p class="empty">no projects added yet!</p>';
      }
      ?>
        </div>

    </section>








    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>