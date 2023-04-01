<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>



<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Graduation Upload</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

    </head>

    <body>

        <?php include 'admin_header.php'; ?>

        <!-- Member Form  -->
        <div class="row">
            <h1 class="title" style="margin-top: 3rem;">Upload Post Graduation Project</h1>

            <form action="pg_uploaded.php" class="up_form" method="post" enctype="multipart/form-data">
                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Project Name</legend>
                <input type="text" required class="form-control" placeholder="Enter Project name"
                    name="project_name"><br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Students Name</legend>
                <input type="text" required class="form-control" placeholder="Enter Students name"
                    name="student_name"><br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Students Class</legend>
                <select name="student_class" placeholder="Enter Manager name" class="form-control">
                    <option value="M.Sc. I.T.">M.Sc. I.T.</option>
                    <option value="M.Sc. C.S.">M.Sc. C.S.</option>
                    <option value="M.C.A.">M.C.A.</option>
                    <option value="xyz">xyz</option>
                    <option value="xyz1">xyz1</option>
                    <option value="xyz2">xyz2</option>
                </select>
                <br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Description</legend>

                <input type="textarea" required class="form-control" placeholder="Enter Someting About Project"
                    name="description">
                <br>


                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Report</legend>

                <input required type="file" class="form-control" style="background-color:#fff; color:#757575;"
                    name="file1" /><br>

                <div class="btn2">
                    <input type="submit" name="submit" value="Upload" class="btn" />
                </div>

            </form>

            <div class="row2">

                <div class="row22">
                    <h1 class="title" style="margin-top: 3rem;">Uploaded Project</h1>
                    <?php
				if(isset($msg3)){
					echo $msg3;
				}
			?>
                    <table class="table" style="margin: 4rem;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Project Name</th>
                                <th>student Name</th>
                                <th>Student Class</th>
                                <th>Description</th>
                                <th>View Report</th>
                                <th>Download Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
					$i = 1;
					$query="select * from pg order by id DESC";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['project_name']; ?></td>
                                <td><?php echo $row['student_name']; ?></td>
                                <td><?php echo $row['student_class']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><a class="btn1" href="pg/<?php echo $row['filename']; ?>"
                                        target="_blank">View</a></td>
                                <td><a class="btn1" href="pg/<?php echo $row['filename']; ?>" download>Download </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>

        <!-- custom admin js file link  -->
        <script src="js/admin_script.js"></script>

    </body>

    </html>