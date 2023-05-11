<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Lady Of Fatima University Quezon City</title>
    <link rel="stylesheet" href="css/design portal.css">
    <link rel="shortcut icon" href="img/universitylogo.png" type="image/x-icon">
    
</head>
<body>
    <header>
        <!-- 1st navbar -->
        <main class="main">
            <nav class="f-nav">
                
                <div class="olfu-logo">
                    <div class="sub-logo">
                        <a href="./homepage/index.php"><img src="img/logo.png" class="olfu-logo-image"  alt=""></a>
                    </div>
                    <div class="sub-logo">
                        <p class="p-qc">ACADEMIC INFORMATION MANAGMENT SYSTEM |<img src="img/lock.svg" class="nav-lock"  alt="">
                        </p>
                    </div>
                    
                </div>
            </nav>
            <section class="section">
                <div class="container">
                    <div class="sub-container">
                        <img src="img/olfulogo3.png" alt="">
                    </div>
                    <div class="sub-container">
                        <h2>OLFU PORTAL</h2>
                        <h4>
                            <?php

                                 error_reporting(0);

                                session_start();

                                session_destroy();

                                echo $_SESSION['loginMessage'];
                            ?>
                        </h4>
                        <form action="login_check.php" method="POST">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                <input type="text" name="username" required>
                                <label for="">USERNAME</label>
                                
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" name="password" required>
                                <label for="">PASSWORD</label> 
                            </div>
                            <div class="remember-forgot">
                                <label for="#">
                                    <input type="checkbox">Remember me
                                </label>
                                <a href="#">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-center">LOGIN</button>
                        </form>
                        
                    </div>
                </div>
            </section>

        </main>
            

    </header>

    
    

    <script>
        
        
    
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>