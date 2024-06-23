<?php

session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : 'Guest';
?>




<!DOCTYPE html>
<html>

<head>
    <title>Blogspot</title>
  
    <meta charset="utf-8" /> <!--Character Encoding -->
    <meta name="author" content="Author name" /> <!--copyright content-->
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow" /><!--websearch instruction-->
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="icon" href="./Css/Images/icons8-wolf-64.png" image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body style="font-family: Arial; background: #f1f1f1;">
    <div class="menu">
        <ul>
            <li><a href="../web--master/Index.php">Home</a></li>
            <li><a href="html/Blog.php">Blogs</a></li>
            <li><a href="html/Research.php">More</a></li>
            <li><a href="html/contact me.php">Contacts</a></li>
    
        <?php if ($isLoggedIn) { ?>
            <li style="float:right"><a href="html/logout.php">Logout</a></li>
            <li style="float:right"><a href="#"><?php echo $username; ?></a></li>
            <?php } else { ?>
                <li style="float:right"><a href="html/login.php">Login</a></li>
                <li style="float:right"><a href="html/signup.php">Sign Up</a></li>
                <li style="float:right"><a href="html/About.php">About</a></li>
            <?php } ?>

            </ul>
    </div>
    <div>
        <style type="text/css">
            .images {
                width: 100%;
                height: 600px;
                object-fit: cover;
            }
        </style>
    </div>
    </center>
    <div>
        <img src="html/Images/vs code.jpg" class="images">
        <img src="html/Images/Laptop.jpg" class="images">
        <img src="html/Images/man smiling.jpg" class="images">
    </div>
    <div class="carosalbutton">
        <center>
            <button style="border-radius: 20%" onclick="change(-1)">&lt;</button>
            <button style="border-radius: 20%" onclick="change(1)">&gt;</button>
        </center>
    </div>
    <script type="text/javascript">
        index = 0;
        show(index);

        function show(n) {
            var imgs = document.getElementsByClassName('images');

            if (n > imgs.length - 1) {
                index = 0;
            }
            if (n < 0) {
                index = imgs.length - 1;
            }
            for (var i = 0; i <= imgs.length - 1; i++) {
                imgs[i].style.display = "none";
            }
            imgs[index].style.display = "block";
        }

        function automatic() {
            index++;
            show(index);
            setTimeout(automatic, 4000);
        }

        automatic();

        function change(n) {
            index += n;
            show(index);
        }
    </script>
    <style>
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row:after {
            content: "";
            clear: both;
            /*Do not allow floating elements on the left or the right side*/
            display: table;
        }

        .container {
            position: relative;
            /*Relative positioning moves an element relative to its original position.*/
            width: 100%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
        }

        .middle {
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .container:hover .image {
            opacity: 0.3;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {
            color: white;
            font-size: 16px;
            padding: 10px 32px;
        }

        .social-icons {

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons span {
            margin: 20px 5px;
            transition: background-color 0.3s ease, opacity 0.3s ease, border 0.3s ease;
            text-align: center;


            padding: 10px;
            border-radius: 50%;
            text-decoration: none;
            list-style: none;
            transition: 0.3s;
            height: 50px;
            width: 50px;
            display: block;
            padding: auto;
        }

        .social-icons span:hover {
            border: 1px solid #28e98c;
            background-color: black;
            color: #28e98c;
            transform: scale(1.1);
        }


        .about-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }


        .section-title {
            color: #ff7422;
            margin-bottom: 10px;
        }

        .title-highlight {
            font-weight: bold;
        }


        .section-subtitle {
            color: #ff7422;
            margin-top: 0;
        }


        .about-description {
            color: #71716d;
            font-size: 16px;
            line-height: 1.6;
        }


        .team-title {
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }


        .team-member-description {
            text-align: left;
            font-size: 14px;
            color: #62625e;
        }

        .member-name {
            font-weight: bold;
        }


        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }


        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .social-icon {
            margin: 0 10px;
            transition: transform 0.3s, color 0.3s;
        }

        .social-icon a {
            text-decoration: none;
            color: #333;
        }

        .social-icon i {
            font-size: 25px;
        }

        .social-icon:hover {
            transform: scale(1.1);
            color: #ff7422;
        }

        .container {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
            overflow: hidden;
        }

        .container img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .middle {
            transition: transform 0.3s;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .container:hover .middle {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 1;
        }

        .text {
            color: white;
            font-size: 16px;
            padding: 8px 16px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .column {
            flex-basis: calc(33.33% - 10px);
        }

        .column:last-child {
            margin-right: 0;
        }

        h2 a {
            text-decoration: none;
            font-weight: bold;
            color: black;
        }

        h2 a:hover {
            color: #555;
        }

        .social-icons {
            /* border: 2px solid red; */
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
        }

        .social-icons a {
            margin: 20px 5px;
            transition: background-color 0.3s ease, opacity 0.3s ease, border 0.3s ease;
            text-align: center;
            /* border: 2px solid #565656; */

            padding: 10px;
            border-radius: 50%;
            text-decoration: none;
            list-style: none;
            transition: 0.3s;
            height: 50px;
            width: 50px;
            display: block;
            padding: auto;
        }

        .social-icons a:hover {
            border: 1px solid #28e98c;
            background-color: black;
            color: #28e98c;
            transform: scale(1.1);
        }

        .profile-image {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            transition: transform 0.3s, cursor 0.3s;
        }

    
        .about-description {
            font-size: 16px;
            line-height: 1.6;
            color: black; /* Start color */
            transition: color 0.3s ease; /* Transition effect for color change */
        }

        .about-description:hover {
            color: #F47E26; /* End color */
            cursor: pointer;
        }


    </style>


    <div style="display: flex;">
        <div style="flex:75%;">
            <div style="background-color: white; padding: 20px; margin-top: 20px;">
                <h2><a href="html/Blog.html">Blogs</a></h2>
                <div class="row">
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog Phone.php">
                                <img src="Images/phones.jpg" alt="Phone">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog Phone.php">Phone</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog Robot.php">
                                <img src="Images/vrguy.jpg" alt="Another">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog Robot.php">TechFrek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="container">
                            <a href="html/login.php">
                                <img src="Images/tech.jpg" alt="Topic">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/login.php">Digital Logic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog.html">
                                <img src="Images/Network.jpg" alt="Internet">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog.php">Internet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog_Hacking.html">
                                <img src="Images/Hacking.jpg" alt="Hacking">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog_Hacking.php">Hacking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog_Robot.html">
                                <img src="Images/Robot.jpg" alt="Robot">
                            </a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog_Robot.php">A.I</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div style="flex: 25%; padding-left: 20px;">
        <div class="about-section" style="padding: 20px; border-radius: 10px">
            <h2 class="section-title" style="text-align: center;">
                <a href="html/About.php" style="text-decoration: none;">
                    <span class="title-highlight" style="color:#F47E26;">About Us</span>
                </a>
            </h2>
            <center>
                <h3 class="section-subtitle" style="color: #555;font-weight:bold">Discover Our Story</h3>
            </center>
            <p class="about-description" style="font-size: 16px; line-height: 1.6;color:#71716d;font-style:normal;color:black" id="about-para" onmouseenter="changeColor()" onmouseleave="resetColor()">
                Welcome to our creative corner! We are a team of passionate individuals exploring the world of technology and creativity. Our focus is on creating insightful content and designing captivating websites that leave a lasting impact. This Portfolio / Blogspot is designed so as to entertain people with the idea of the works we do and the services we provide.Souly focused on web developemnt,this website is a result of college project for Second semester !!!
            </p>

            <div class="team-members" style="text-align: center; margin-top: 20px;">
                <p class="team-title" style="font-size: 18px; font-weight: bold;text-align:center;font-size:30px;"> Our Team</p>
                <div class="row" style="display: flex; justify-content: center; margin-left: -10px; margin-right: -10px;">
                    <div class="column" style="display:flex;flex-direction:column;text-align: center; margin: 0 10px;align-items:center">
                        <img src="......jpg" alt="..."  id="girl-avatar" onmouseenter="enlarge()" onmouseleave="descale()" class="profile-image" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                        <p class="team-member-description" style="margin-top: 10px; font-size: 16px;">
                            <span class="member-name" style="font-weight: bold;align-items:center">...</span><br>

                        </p>
                        <div class="social-icons" style="text-align: center; margin-top: 20px;">
                            <a href="........." target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-instagram" style="font-size: 30px "></i>
                            </a>
                            <a href="......." target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-github" style="font-size: 30px;"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/subeecaa-bista-874359259/" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-linkedin" style="font-size: 30px; "></i>
                            </a>
                        </div>
                    </div>
                    <div class="column" style="display:flex;flex-direction:column;text-align: center; margin: 0 10px;align-items:center">
                        <img src="Images/boy.png" alt="Abhaya Bhatta" id="boy-avatar" onmouseenter="enlarge()" onmouseleave="descale()" class="profile-image" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                        <p class="team-member-description" style="margin-top: 10px; font-size: 16px;">
                            <span class="member-name" style="font-weight: bold;">Abhaya Bhatta</span><br>

                        </p>
                        <div class="social-icons" style="text-align: center; margin-top: 20px;">
                            <a href="https://instagram.com/abhaya__b" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-instagram" style="font-size: 30px "></i>
                            </a>
                            <a href="https://github.com/abhaya010" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-github" style="font-size: 30px;"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/abhaya-bhatta-b7343a253/" target="_blank" style="text-decoration: none; margin: 0 10px;">
                                <i class="fa fa-linkedin" style="font-size: 30px; "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
    <footer>
        <div class="bottomnav">
            <p>Hand Crafted with ☕ by <span> TEAM OF TWO</span></p>
            <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>

        </div>
    </footer>


    <script>

document.addEventListener("DOMContentLoaded", function () {
    var index = 0;
    var imgs = document.getElementsByClassName('images');

    function show(n) {
        if (n > imgs.length - 1) {
            index = 0;
        } else if (n < 0) {
            index = imgs.length - 1;
        }
        for (var i = 0; i < imgs.length; i++) {
            imgs[i].style.display = "none";
        }
        imgs[index].style.display = "block";
    }

    function automatic() {
        index++;
        show(index);
        setTimeout(automatic, 4000);
    }

    automatic();

    function change(n) {
        index += n;
        show(index);
    }

    function changeColor() {
        var aboutPara = document.getElementById('about-para');
        aboutPara.style.color = '#F47E26';
        aboutPara.style.cursor = 'pointer';
    }

    function resetColor() {
        var aboutPara = document.getElementById('about-para');
        aboutPara.style.color = 'black';
    }

    function enlarge(event) {
        event.target.style.transform = 'scale(1.5)';
        event.target.style.cursor = 'pointer';
    }

    function descale(event) {
        event.target.style.transform = 'scale(1.0)';
        event.target.style.cursor = 'initial';
    }

    var aboutPara = document.getElementById('about-para');
    aboutPara.addEventListener("mouseenter", changeColor);
    aboutPara.addEventListener("mouseleave", resetColor);

    var profileImages = document.getElementsByClassName('profile-image');
    for (var i = 0; i < profileImages.length; i++) {
        profileImages[i].addEventListener("mouseenter", enlarge);
        profileImages[i].addEventListener("mouseleave", descale);
    }

    var prevButton = document.querySelector('.carosalbutton button:nth-child(1)');
    var nextButton = document.querySelector('.carosalbutton button:nth-child(2)');
    prevButton.addEventListener("click", function () {
        change(-1);
    });
    nextButton.addEventListener("click", function () {
        change(1);
    });
});
   
    </script>
</body>

</html>
