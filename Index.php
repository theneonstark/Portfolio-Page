<?php
    session_start();
    $connet = mysqli_connect("localhost","root","","portfolio_data");
        if($connet==false){
            die("Couldn't connect".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <i class='bx bx-menu' id="menu-icon"></i>
        <a href="" class="logo">StarK</a>
        <i class='bx bx-toggle-left' id="night"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#service">Service</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <i class='bx bx-toggle-left' id="lg-night"></i>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-content" data-aos="fade-down">
            <h3>Hello, I'm</h3>
            <h1>Mohd Shahid</h1>
            <h3>and I'm a <span id="changeText">Teacher</span></h3>
            <p> Web Developer where profound knowledge of HTML/HTML5, PHP, CSS/CSS3, Bootstrap, TALWIND CSS, JavaScript/jQuery, AngularJS, AJAX, jQuery, MySQL, Apache,  and other similar systems, and ability to effectively design, maintain, and manage enterprise level CMS solutions will be applied.</p>
            <div class="icons">
                <a href="https://www.facebook.com/theneonstarkgaming"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.linkedin.com/in/mohdshahidk?original_referer="><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/igneonstark/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://twitter.com/neonstarkYT"><i class='bx bxl-twitter'></i></a>
            </div>
            <a href="images/Mohd_Shahid_CV.pdf" download="MohdShahid'sCV" class="btn">Download Cv</a>
        </div>
        <div class="img" data-aos="fade-up">
              <img src="images/Main.png" alt="">
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-images" data-aos="fade-right">
              <img src="images/Main.png" alt="">
        </div>
        <div class="aboutcontent">
            <h2 class="heading" data-aos="fade-down">About <span>Me</span></h2>
            <h3 data-aos="fade-down">Web Developer</h3>
            <i class="fa-regular fa-book"></i>
            <p data-aos="fade-up">A self-motivated IT professional with huge knowledge and proficiency in JavaScript, HTML , CSS, and mobile responsive web development, as well as strong skills and ability in writing clean and efficient code, seeks the position of Front-End.Web Developer where profound knowledge of HTML/HTML5, PHP, CSS/CSS3, Bootstrap, TALWIND CSS, JavaScript/jQuery, AngularJS, AJAX, jQuery, MySQL, Apache,  and other similar systems, and ability to effectively design, maintain, and manage enterprise level CMS solutions will be applied.</p>
            <a href="" class="btn" data-aos="fade-up">Read More</a>
        </div>
    </section>
    <section class="service" id="service">
        <h2 class="heading" data-aos="zoom-in-up">Our <span>Service</span></h2>
        <div class="service-contain">
            <div class="service-box" data-aos="zoom-in-right">
                <i class='bx bx-code-alt'></i>
                <h3>Full Stack Developer</h3>
                <p>We are proficient in working with various programming languages, frameworks, and technologies to build and maintain web applications.... 
                    <!-- Also we are capable of handling database management, server-side programming, client-side scripting, and user interface design. -->
                </p>
                <a href="" class="btn">Read More</a>
            </div>
            <div class="service-box" data-aos="zoom-in-down">
            <i class='bx bx-book'></i>
                <h3>SME-Mathematics</h3>
                <p>SMEs in Mathematics typically have a deep understanding of mathematical principles, theories, and applications across various branches, such as algebra,...
                    <!-- calculus, geometry, statistics, and more. -->
                </p>
                <a href="" class="btn">Read More</a>
            </div>
            <div class="service-box" data-aos="zoom-in-left">
            <i class='bx bx-pen'></i>
                <h3>Graphic Designer</h3>
                <p>They use design principles, color theory, typography, and imagery to create visually appealing and effective designs for a wide...
                     <!-- range of projects, including print materials, digital graphics, branding, advertising, websites, and more. -->
                    </p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
        <div class="service-contain" data-aos="zoom-in-right">
            <div class="service-box">
            <i class='bx bxl-php'></i>
                <h3>PHP Developer</h3>
                <p>PHP syntax, functions, and frameworks such as Laravel, Symfony, or CodeIgniter. We are skilled in writing efficient and secure PHP code that interacts with...
                    <!-- databases, handles form submissions, and implements business logic. -->
                </p>
                <a href="" class="btn">Read More</a>
            </div>
            <div class="service-box" data-aos="zoom-in-up">
            <i class='bx bx-edit-alt'></i>
                <h3>Article Writer</h3>
                <p>The primary role of an article writer is to produce well-written, well-researched, and original articles that cater to the target audience and meet the requirements ...
                     <!-- of the publication or client. -->
                    </p>
                <a href="" class="btn">Read More</a>
            </div>
            <!-- <div class="service-box" data-aos="zoom-in-left">
                <i class='bx bx-code-alt'></i>
                <h3>Web Developer</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, aliquam odit. Quo, tempora illo nihil ea quasi iste suscipit eum qui, aut iusto fugiat incidunt amet. Error, nesciunt provident! Enim!</p>
                <a href="" class="btn">Read More</a>
            </div> -->
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <h2 class="heading" data-aos="zoom-in-up">Latest <span>Project</span></h2>
        <div class="portfolio-part">
            <div class="portfolio-box">
                <img src="images/article.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>Article Writer</h4>
                    <p>The primary role of an article writer is to produce well-written, well-researched, and original articles...</p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/maths.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>SME-Mathematics</h4>
                    <p>SMEs in Mathematics typically have a deep understanding of mathematical principles, theories, ...</p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/Graphic.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>Graphic Design</h4>
                    <p>They use design principles, color theory, typography, and imagery to create visually appealing and effective designs</p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/Logo.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>Logo Design</h4>
                    <p>We work closely with clients to understand their brand values, target audience, and overall design preferences. </p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/php.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>Full Stack Developer</h4>
                    <p>We are proficient in working with various programming languages, frameworks, and technologies </p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/web.jpg" alt="">
                <div class="portfolio-layout">
                    <h4>PHP Developer</h4>
                    <p>PHP syntax, functions, and frameworks such as Laravel, Symfony, or CodeIgniter. We are skilled in writing efficient and secure PHP code</p>
                    <a href="#"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
  
        <h2 class="heading" data-aos="">Contact <span>Me!!</span></h2>
        <form action="#" method="POST">
            <div class="input-boxes">
                <input type="text" name="fname" id="fname" placeholder="Full Name" required>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
            </div>
            <div class="input-boxes">
                <input type="tel" name="num" id="tel" placeholder="Mobile Number" required onkeypress="return onlyNumber(event)">
                <input type="text" name="sub" id="Sub" placeholder="Subject" required>
            </div>
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Meassage" class="btn" name="submit" id="submit">
        </form>
        <div class="feedback">
        <?php
                        $feed_head = mysqli_query($connet, "SELECT * FROM contacts");
                        while($r = mysqli_fetch_array($feed_head)){

        ?>
            <div class="feed">
                <h4>
                    <?php echo $r['Name'] ?>
                </h4>
                <p> <?php echo $r['Message'] ?></p>
            </div>
        <?php
            }
        ?>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-style">
            <p>Copyright &copy; 2023 by Shahid Khan | All Rights Reserved</p>
        </div>
        <div class="footer-icon">
            <a href="#home" id="home"><i class='bx bx-chevrons-up' ></i></a>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
      <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="js/app.js"></script>

</body>

</html>