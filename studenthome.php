<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='admin')
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='teacher')
    {
        header("location:portal.php");
    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studenthome.css">
    <title>student dashboard</title>
</head>
<body>
<?php
    include 'headerStudent.php'
?>
<main class="main">
    <h1>Student Dashboard</h1>

</main>
<?php
    include 'asideStudent.php'
?>
    
</body>
</html>