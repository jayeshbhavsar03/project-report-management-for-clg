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
    <title>Post Graduation</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Post Graduation Facultys</h3>
    </div>

    <section class="products">

        <div class="box-container" style="max-width: 1200px;">
            <h1 style="font-size: 5rem;text-transform: capitalize;text-align: center;">facultywise Project View</h1>
            <div style="display: flex;justify-content: center;">
                <a class="btn btn-pro" href="pg1.php">M.Sc. I.T.</a>
                <a class="btn btn-pro" href="pg2.php">M.Sc. C.S.</a>
                <a class="btn btn-pro" href="pg3.php">M.C.A.</a>
            </div>
        </div>

    </section>








    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>