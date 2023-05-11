<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Lady Of Fatima University Quezon City</title>
    <link rel="stylesheet" href="css/history.css">
    <link rel="shortcut icon" href="img/universitylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
                        <h1>HISTORY</h1>
                        <br>
                    </div>
                    <div>
                        <br>
                        <img src="img/history.jpg" alt="Fatima Hospital">
                        <br>
                        
                    </div>
                    <div class="history-text">
                        <br>
                        <h2>Our Lady of Fatima University (OLFU)</h2>
                        <br>
                        <p>
                        In 1967, Jose C. Olivares and his son-in-law Dr. Vicente M. Santos founded Our Lady of Fatima Hospital in Valenzuela. Mr. Olivares had a vision to transform the hospital into a medical complex that would serve as a training ground for healthcare providers. In 1973, the Our Lady of Fatima College of Nursing was established and in 1976, its first batch of Nursing graduates achieved a 100% passing average in the Nursing Board examinations. <br><br>

The College expanded its facilities and programs in the mid-70s and in 1979, Dr. Vicente M. Santos and his wife Mrs. Juliet Olivares Santos established the Fatima Medical Science Foundation, Inc. – Fatima College of Medicine. The College continued to grow and offer new academic programs in technology, maritime education, and business.<br><br>

Our Lady of Fatima College received official recognition by achieving accredited status for its Nursing and Physical Therapy programs by the Philippine Association of Colleges and Universities Commission on Accreditation (PACUCOA). The Association of Christian Schools, Colleges and Universities (ACSCU) also gave its mark of excellence to our Graduate School programs.<br><br>

In the 1990s, OLFU expanded its infrastructure and established a new campus in Fairview, Quezon City. The institution continued to offer more programs and constructed new buildings to accommodate its growing population.<br><br>

In December 2002, the college was converted to a university and Dr. Vicente M. Santos was installed as its First University President. After his death in 2003, Dr. Juliet O. Santos became the second President of the University.<br><br>

Less than a year after becoming a University, CHED granted DEREGULATED STATUS to Our Lady of Fatima University through CHED Resolution No. 393-2003 dated October 27, 2003.<br><br>

In 2008, Dr. Caroline Marian Santos Enriquez became the Third University President after the death of Dr. Juliet Santos.<br><br>

OLFU’s expansion continued with another campus established in 2008 in Antipolo. The strong demand for nurses abroad required strengthening the nursing curriculum by infusing it with state-of-the-art nursing virtual laboratories and simulators.<br><br>

In late 2008, OLFU’s College of Nursing was designated by CHED as a CENTER OF DEVELOPMENT. In early 2009, OLFU was placed in CATEGORY A (t) as a mature teaching university by CHED’s Institutional Quality Assurance Through Monitoring and Evaluation (IQuAME).<br><br>

In recognition of OLFU’s accomplishments and adherence to quality assurance as a higher education provider, CHED granted AUTONOMOUS STATUS to Our Lady of Fatima University through CEB Resolution No. 076-2009 for a period of 5 years from March 11, 2009 to March 30, 2014.<br><br>

In June 2012, university-wide ISO implementation was put into place to increase customer satisfaction, improve product quality, and achieve international quality recognition.<br><br>

OLFU continued to expand with new campuses established in Pampanga in June 2013 and Nueva Ecija in December 2015.<br><br>

In June 2019, OLFU opened another campus in Santa Rosa, Laguna.<br><br>

In 2020, OLFU (Valenzuela, Quezon City, and Antipolo Campuses) was conferred the Philippine Quality Award (PQA) Recognition for Proficiency in Quality Management by the Department of Trade and Industry (DTI).<br><br>
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