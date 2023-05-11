<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Lady Of Fatima University Quezon City</title>
    <link rel="stylesheet" href="../css/history.css">
    <link rel="shortcut icon" href="../img/universitylogo.png" type="image/x-icon">
</head>
<body>
    <?php
    include 'indexHeader.php'
    ?>

    <section class="section-4">
            <div class="sub-section-4">
                <div class="side-section">
                    <div class="sub-side">
                        <h1 class="about-olfu">
                            ABOUT OLFU
                        </h1>
                    </div>
                    <ul class="sub-ul-4">
                        <li><a href="history.php">HISTORY</a></li>
                        <li><a href="aboutmvc.php">MISSION, VISION, CORE VALUES</a></li>
                        <li><a href="#">UNIVERSITY SEAL</a></li>
                        <li><a href="#">FACILITIES</a></li>
                    </ul>
                </div>
                        
            </div>
            <div class="sub-section-4">
                <div>
                    <div>
                        <br>
                        <br>
                        <h1>MISSION, VISION, CORE VALUES</h1>
                        <br>
                    </div>
                    <div>
                        <br>
                        <img src="../img/history.jpg" alt="Fatima Hospital">
                        <br>
                        
                    </div>
                    <div class="history-text">
                        <br>
                        <h2>VISION</h2>
                        <br>
                        <p>
                        a premier inclusive university of choice aspiring to improve man as man by developing individuals through a legacy of excellent education and compassionate value formation.
                        </p><br>
                        <h2>MISSION</h2>
                        <br>
                        <p>
                        dedicated to the improvement of man as man through the holistic formation of individuals imbued with knowledge, skills, and virtues.
                        </p><br>
                        <h2>OLFU’s core values and graduate attributes are represented by the acronym ACHIEVER</h2>
                        <br>
                        <p>
                        
                             <span>A</span>  – Aspires to do his Best;<br> <span>C</span> – Credible and Compassionate;<br> <span>H</span> – Hardworking and Honorable;<br> <span>I</span> – Inspiration to Others;<br> <span>E</span> – Efficient, Effective and Ethical;<br> <span>V</span> – Visionary;<br> <span>E</span> – Entrepreneurial, Employable and Excellent Work Habits;<br> <span>R</span> – Responsible.
                        </p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>


    </section>

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