<?php

error_reporting(0);
session_start();


    if(!isset($_SESSION['username']))
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='student')
    {
        header("location:portal.php");
    }
    elseif($_SESSION['usertype']=='teacher')
    {
        header("location:portal.php");
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="school_managment_db";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM users WHERE usertype='student' ";

    $result=mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/adminhome.css">
    <title>admin dashboard</title>
</head>
<body>
    <div class="container">
    <?php
    include 'headeradmin.php'
    ?>

    <?php
    include 'asideAdmin.php'
    ?>

<main class="main">
        <h1>STUDENT DATA</h1>
        <?php

            if($_SESSION['message']);
            {
                echo $_SESSION['message'];
            }

            unset($_SESSION['message']);

        ?>



        <table border="1px">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            {

            ?>
            <tr>
                <td>
                    <?php echo "{$info['username']}"; ?>
                </td>
                <td>
                <?php echo "{$info['email']}"; ?>
                </td>
                <td>
                <?php echo "{$info['phone']}"; ?>
                </td>
                <td>
                <?php echo "{$info['password']}"; ?>
                </td>
                <td>
                <?php 
                
                echo "<a onClick=\" javascript:return confirm('Are you sure you want to delete this'); \" href='delete.php?student_id={$info['id']}'> Delete </a>"; 
                
                ?>
                </td>
                <td>
                <?php 
                
                echo "<a href='updateStudent.php?student_id={$info['id']}'> Update </a>"; 
                
                ?>
                </td>
                
            </tr>

            <?php
            }
            ?>

        </table>

    </main>

    </div>
    
    
    
    

    
</body>
</html>
