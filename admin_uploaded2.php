<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>

<?php
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
	$project_name = $_POST['project_name'];	
	$student_name = $_POST['student_name'];	
	$student_class = $_POST['student_class'];	
	$description = $_POST['description'];	


    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {


            //set target directory
            $path = '3rd_record/';
                
            $created = @date('Y-m-d');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
           // $sql = "INSERT INTO pdf_data(filename, created_date) VALUES('$filename', '$created')";
            //mysqli_query($con, $sql);
			
					$query="INSERT INTO 3rd_record(project_name,student_name,student_class,description,filename, created_date) VALUES('$project_name','$student_name','$student_class','$description', '$filename', '$created')";
					$result=$conn->query($query);
							
            header("Location: third_year_uplaod.php");
        }
        else
        {
            header("Location: third_year_upload.php?st=error");
        }
    }
    else
        header("Location: third_year_upload.php");
}
?>