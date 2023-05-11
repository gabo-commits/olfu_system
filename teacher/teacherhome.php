<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='student')
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='admin')
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
    <link rel="stylesheet" href="../css/teacherhome.css">
    <title>Teacher dashboard</title>
</head>
<body>

<?php
    include 'teacherHeader.php'
?>

<main class="main">
    <h1>Teacher Dashboard</h1>

</main>

<?php
    include 'asideTeacher.php'
?>
    
</body>
</html>