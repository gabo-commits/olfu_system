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

    $host="localhost";
    $user="root";
    $password="";
    $db="school_managment_db";

    $data=mysqli_connect($host,$user,$password,$db);


        // $name=$_POST['name'];
        // $email=$_POST['email'];
        // $phone=$_POST['phone'];
        // $password=$_POST['password'];


        // $query="UPDATE users SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";

        $name=$_SESSION['username'];

        $sql="SELECT * FROM users WHERE username='$name' ";

        $result=mysqli_query($data,$sql);

        $info=mysqli_fetch_assoc($result);

        if(isset($_POST['updateProfile']))
        {
            $s_email=$_POST['email'];
            $s_phone=$_POST['phone'];
            $s_password=$_POST['password'];

            $sql="UPDATE users SET email='$s_email',phone='$s_phone',password='$s_password' WHERE username='$name' ";

            $result2=mysqli_query($data, $sql);

            if($result2)
            {
                header('location:studentProfile.php');
            }
        }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/studenthome.css">
    <title>student dashboard</title>
</head>
<body>
<?php
    include 'headerStudent.php'
?>
<main class="main">
    <h1>My Profile</h1>

    <div>
            <form action="#" method="POST">
                <!-- <div>
                    <label for="">USERNAME</label>
                    <input type="text" name="name" value="<?php  echo "{$info['username']}"?> ">
                </div> -->
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php  echo "{$info['email']}"?> ">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="<?php  echo "{$info['phone']}"?> ">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password" value="<?php  echo "{$info['password']}"?> ">
                </div>
                <div>
                    
                    <input type="submit" name="updateProfile" value="UPDATE">
                </div>
            </form>
        </div>

</main>
<?php
    include 'asideStudent.php'
?>
    
</body>
</html>