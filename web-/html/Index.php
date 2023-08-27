
<!DOCTYPE html>
<html>

<head>
    <title>Portfolio</title>
    <meta charset="utf-8"/> <!--Character Encoding -->
    <meta name="author" content="Author name" /> <!--copyright content-->
	<meta name="copyright" content="Copyright owner" />
	<meta name="Internet" content="follow"/><!--websearch instruction-->
    <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>

<body style="font-family: Arial; background: #f1f1f1;">
    <div class="menu">
        <ul>
            <li><a href="../web--master/Index.php">Home</a></li>
            <li><a href="html/Blog.php">Blogs</a></li>
            <li><a href="html/Research.php">More</a></li>
            <li><a href="html/contact me.php">Contacts</a></li>
            <li><a href="html/About.php">About</a></li>
            <li style="float:right"><a href="html/login.php">Login</a></li>
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
        clear: both; /*Do not allow floating elements on the left or the right side*/
        display: table;
    }

    .container {
        position: relative; /*Relative positioning moves an element relative to its original position.*/
        width: 100%;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;    }

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
    </style>
    <div style="display: flex;">
        <div style="flex:75%;">
            <div style=" background-color: white;padding: 20px;margin-top: 20px;">
                <h2><a href="html/Blog.html" style="text-decoration: none;">
                        <font color="black">Blogs</font>
                    </a></h2>
                <div class="row">
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog Phone.html"><img src="Images/phones.jpg " alt="Phone" width="80%" height="60%"></a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog phone.html" style="text-decoration: none">
                                        <font color="white">Phone</font>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <a href="html/BLog.html"><img src="Images/Network.jpg" alt="Internet" width="80%" height="60%"></a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog.html" style="text-decoration: none;">
                                        <font color="white">Internet</font>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="container">
                            <a href="html/Blog Hacking.html"><img src="Images/Hacking.jpg" alt="Hacking" width="80%" height="60%"></a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog Hacking.html" style="text-decoration: none;">
                                        <font color="white">Hacking</font>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <a href="html/Blog Robot.html"><img src="Images/Robot.jpg" alt="Robot" width="80%" height="20%"></a>
                            <div class="middle">
                                <div class="text">
                                    <a href="html/Blog Robot.html" style="text-decoration: none;">
                                        <font color="white">A.I</font>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="flex: 25%;padding-left: 20px;">
            <div style="background-color: white;padding: 20px;margin-top: 20px;text-align: center;">
                <h2> <a href="html/About.html" style="text-decoration: none;">
                        <font color="#ff7422"> About Us</font>
                    </a>
                </h2>
                <center>
                    <a href="html/About.html" >
                    	<img style="border-radius: 10%" src="Images/nlp.jpeg" width="70%" height="200px">
                    </a>
                    <br>
                    <h3 style="color:#ff7422">Hey There </h3>
                </center>
                <p style="color:rgb(113, 109, 109) ;font-size:15px; color:black">We are team of two designing a basic blogspot for our college project</p>
                <div class="teammebers">
                    <p style="text-align: left;font-size:15px;">Team member</p>
                    <p style="text-align: left;font-size:13px;color:rgb(98, 94, 94)">Subica Bista</p>
                    <p style="text-align: left;font-size:13px;color:rgb(98, 94, 94)">Abhaya Bhatta</p>
                </div>

              
            </div>

            <div class="social-icons">
                <span class="social-icon"><a href="https://instagram.com/abhaya__b" target="_blank"><i class="fa fa-instagram"
                            style="font-size:25px; color:#AA336A "></i></a></span>
                <span class="social-icon"><a href="https://github.com/abhaya010" target="_blank"><i class="fa fa-github"
                            style="font-size:25px"></i></a></span>
                <span class="social-icon"><a href="https://www.linkedin.com/in/abhaya-bhatta-b7343a253/" target="_blank"><i class="fa fa-linkedin"
                            style="font-size:25px ;color:blue;"></i></a></span>
              </div>
        </div>
    </div>
    <footer>
        <div class="bottomnav">
           <p>Hand Crafted with ☕ by <span> TEAM OF TWO</span></p>
           <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
 
        </div>
    </footer>
</body>
</html>