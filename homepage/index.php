<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Lady Of Fatima University Quezon City</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/universitylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header-main">
        <?php
        include 'indexHeader.php'
        ?>
        <section class="section">
            <div class="sub-section">
                <div class="logo-center">
                    <img src="../img/university-seal2.png" class="image_logo10" alt="">
                </div>
                <div class="olfu-name">
                    <h2>OUR LADY OF FATIMA <span>UNIVERSITY</span></h2>
                </div>
                <div class="button-apply">
                    <button class="btn btn-center"><a href="admissionform.php">APPLY NOW</a></button>
                </div>
                
            </div>
        </section>
        <!-- <section class="section-2">
            <div class="t-nav-link">
                <ul class="t-nav-ul">
                    <li><a href="portal.php">OLFU PORTAL</a></li>
                    <li><a href="admission form.html">APPLY ONLINE</a></li>
                    <li><a href="#">ENROLL ONLINE</a></li>
                    <li><a href="#">CANVAS</a></li>
                </ul>
            </div>
            
        </section> -->
    </div>
    
    <!-- <section class="section-3">

        <h1 class="campus-heading"><span>Our Lady of Fatima University </span>Virtual Campus Tour</h1>
        <div class="row">
            <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XaEpiNfPyds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>
            <div class="vid-content">
            <p>A campus tour at Our Lady of Fatima University is a great opportunity to explore the academic and social environment of one of the top private universities in the Philippines. You will get to see the facilities, meet the faculty and students, and learn about the programs and services offered by the university. A campus tour usually lasts for an hour and covers the main buildings and landmarks of the campus. You can book a campus tour online or by phone, and choose a date and time that suits your schedule. A campus tour is free of charge and open to anyone who is interested in studying at Our Lady of Fatima University.</p>
            <br>
            <a href="#" class="btn btn-center">Learn more</a>
            </div>
        </div>
        <div class="sub-section-3">
            <iframe width="560" height="315" class="olfu-vid" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="sub-section-3">
            <h1></h1>
            <br>
            

        </div>
    </section> -->
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

        //mobile nav 
        const primaryNav = document.querySelector('.primary-navigation');
        const navToggle = document.querySelector('.mobile-nav-toggle');

        navToggle.addEventListener('click', () => {

            const visibility = nav.getAttribute('data-visible');

            if (visibility === "false") {
                primaryNav.setAttribute("data-visible", true);
                navToggle.setAttribute('aria-expanded', true);
            }
            else if (visibility === "true"){
                primaryNav.setAttribute("data-visible", false);
                navToggle.setAttribute('aria-expanded', false);
            }
            

        })
        
    
    </script>
</body>
</html>