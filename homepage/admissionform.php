<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    
    alert('$message');

    </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Lady Of Fatima University Quezon City</title>
    <link rel="stylesheet" href="../css/admissionform.css">
    <link rel="shortcut icon" href="../img/universitylogo.png" type="image/x-icon">
</head>
<body>
    <?php
    include 'indexHeader.php'
    ?>
        
        <section class="section">
            <div class="sub-section">
                <div>
                    <h1>Admission Form</h1>
                </div>
                <form action="data_check.php" method="POST">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input type="text" name="phone">
                    </div>
                    <div>
                        <label for="">Message</label>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        
                        <input id="submit" type="submit" value="apply" name="apply">
                    </div>

                </form>
                
            </div>
        </section>
        </main>
    
    
    
        <?php
        include 'indexFooter.php'
        ?>
    
    
    
    

    <script>
        // js for sticky navbar
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
        // end of js sticky navbar

        // search bar
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.search');
        icon.onclick = function()
        {
            search.classList.toggle('active')
        }
        
    
    </script>
</body>
</html>