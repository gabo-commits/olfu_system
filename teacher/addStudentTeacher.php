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

    $host="localhost";
    $user="root";
    $password="";
    $db="school_managment_db";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['addStudent']))
    {
        $username=$_POST['name'];
        $user_email=$_POST['email'];
        $user_phone=$_POST['phone'];
        $user_password=$_POST['password'];
        $usertype="student";

        $check="SELECT * FROM users WHERE username='$username' ";

        $check_users=mysqli_query($data,$check);

        $row_count=mysqli_num_rows($check_users);

        if($row_count==1)
        {
            echo "<script type='text/javascript'>
                
                alert('username already exist. Try another One');

                </script>";
            
        }

        else
        {

            $sql="INSERT INTO users (username,email,phone,usertype,password) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')";

            $result=mysqli_query($data,$sql);
            
            if($result)
            {
                echo "<script type='text/javascript'>
                
                alert('Upload Successfully');

                </script>";
            }

            else
            {
                echo "Upload unsuccessful";
            }
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teacherhome.css">
    <title>admin dashboard</title>
    <style type="text/css">
        label
            {
                display: inline-block;
                text-align: right;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
    </style>
    
</head>

<body>
    <?php
    include 'teacherHeader.php'
    ?>

    <main class="main">
        <h1>ADD STUDENT</h1>

        <div>
            <form action="#" method="POST">
                <div>
                    <label for="">USERNAME</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="text" name="phone">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    
                    <input type="submit" name="addStudent" value="ADD STUDENT">
                </div>
            </form>
        </div>

    </main>
    
    <?php
    include 'asideTeacher.php'
    ?>

    
</body>
</html>