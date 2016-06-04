<?php
session_start();
require("connection.php");

$_SESSION['errors']=array();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(strlen($_POST['name'])<1){
        $_SESSION['errors'][]="Please insert your name properly.";
        header('Location:http://localhost:8888/Yara-website/index.php');
        }
    if(strlen($_POST['description'])<1){
        $_SESSION['errors'][]="Please insert your description properly.";
        header('Location:http://localhost:8888/Yara-website/index.php');
        }
    if(isset($_POST["submit"]) && ($_POST["submit"]== "selfie_submit")) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $_SESSION['errors'][] = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            header('Location:http://localhost:8888/Yara-website/index.php');
        } else {
            $_SESSION['errors'][] = "File is not an image.";
            $uploadOk = 0;
            header('Location:http://localhost:8888/Yara-website/index.php');
        }
    }
    if(!isset($_FILES['filetoUpload']))
      {
        $_SESSION['errors'][]="Please select a file";
        header('Location:http://localhost:8888/Yara-website/index.php');
      }
    // Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['errors'][] = "Sorry, file already exists.";
        $uploadOk = 0;
        header('Location:http://localhost:8888/Yara-website/index.php');
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        $_SESSION['errors'][] = "Sorry, your file is too large.";
        $uploadOk = 0;
        header('Location:http://localhost:8888/Yara-website/index.php');
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $_SESSION['errors'][] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        header('Location:http://localhost:8888/Yara-website/index.php');
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['errors'][] = "Sorry, your file was not uploaded.";
        header('Location:http://localhost:8888/Yara-website/index.php');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //Insert name, description and file into database
            $imgData =addslashes (file_get_contents($_FILES['fileToUpload']));

            $query="INSERT INTO Selfies (name, description, selfie, created_at)
		          VALUES ('{$_POST['name']}','{$_POST['description']}', '{$imgData}', NOW())";
		        run_mysql_query($query);

            $_SESSION['errors'][] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            header('Location:http://localhost:8888/Yara-website/index.php');
        } else {
            $_SESSION['errors'][] = "Sorry, there was an error uploading your file.";
            header('Location:http://localhost:8888/Yara-website/index.php');
        }
    }
?>
