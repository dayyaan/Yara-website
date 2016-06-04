<?php
// 1) Start Session and Require Connection
session_start();
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yara Said | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    #image_row{
      max-height: 40%;
      max-width: 40%;
    }
</style>
</head>
  <body>
<div class="container">
    <?php
    $query="SELECT name, description, selfie, created_at FROM Selfies ORDER BY created_at DESC";
        $results=fetch($query);
        foreach($results as $row)
        { ?>
          <div id="message">
            <p class="permanent"></p>
              <h2 class="message"> <?php echo $row['name'] ?> </h2>
              <h2 class="message"> <?php echo $row['description'] ?> </h2>
              <h2 class="message"> <?php echo $row['created_at'] ?> </h2>
              <img src="img/teodor.jpg" id="image_row">
            <p class="permanent"></p>
          </div>

        <?php
      }
      ?>
    </div>
  </body>
</html>
