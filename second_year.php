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
    <title>Second Year</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Second year</h3>
    </div>

    <section class="products">

        <div class="box-container" style="max-width: 1200px;">
            <h1 style="font-size: 5rem;text-transform: capitalize;text-align: center;">facultywise Project View</h1>
            <div style="display: flex;justify-content: center;"> <a class="btn btn-pro" href="sy1.php">B.Sc. I.T.</a>
                <a class="btn btn-pro" href="sy2.php">B.C.S.</a>
                <a class="btn btn-pro" href="sy3.php">B.C.A.</a>
                <a class="btn btn-pro" href="sy4.php">xyz.</a>
                <a class="btn btn-pro" href="sy5.php">xyz</a>
                <a class="btn btn-pro" href="sy6.php">xyz</a>
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