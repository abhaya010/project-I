<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <meta charset="utf-8"/> <!--Character Encoding -->
    <meta name="author" content="Author name" /> <!--copyright content-->
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow"/><!--websearch instruction-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../Css/Images/icons8-wolf-64.png" image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="../Index.php">Home</a></li>
            <li><a href="Blog.php">Blogs</a></li>
            <li><a href="Research.php">More</a></li>
            <li><a href="contact me.php">Contacts</a></li>
            <li style="float:Right"><a href="About.php">About </a></li>
            
        </ul>
    </div>
    <style>
    .container {
        position: relative;
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
        left: 25%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
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

    .comment-box {
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.comment-box h3 {
  font-size: 18px;
  margin-bottom: 15px;
  color: #333;
}

.comment-box label {
  display: block;
  font-weight: bold;
  margin-top: 10px;
  color: #555;
}

.comment-box input,
.comment-box textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: #555;
}

.comment-box input:focus,
.comment-box textarea:focus {
  border-color: #007bff;
}

.comment-box textarea {
  resize: vertical;
}

.comment-box button {
  background-color: #1c602d;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.comment-box button:hover {
  background-color: #0056b3;
}

/* Style for form validation messages */
.comment-box input:invalid,
.comment-box textarea:invalid {
  border-color: #dc3545;
}
    </style>
    <div style="display: flex;">
        <div style="flex:75%;">
            <div style="background-color: white;padding: 20px;margin-top: 20px;">
                <div class="row">
                    <div class="column">
                        <div class="art">
                            <h1>Phones</h1>
                            <h5>July 11,2023</h5>
                            <img src="../css/images/phones.jpg " style="height: 50%; width: 40%">
                            <div class="txt">
                                <section>
                                    In this growing world of technology mobile phones are the most used innovation among others. Mobile Phones are the wireless handheld devices that allows the users to make & receive calls, text messages and other services. With the increasing number of users phones are also getting smarter day by day. They come with a lot of technologies inside it. Nowadays the smartphones are using operating systems to handle the work e.g. Android, IOS.
                                    <section>
                                        Android is a Linux based operation system designed primarily for smartphone and tablets. Android is owned by Android Inc and now by google. Primarily Android was built for the improvement of digital cameras. But after the decreasing market of cameras at that time Android Inc decided to move towards making OS for phones which now, we use in most of the smartphones. As one of the widely used OS for phones android since then got popularity and now is leading company of the world.
                                    </section>
                                    <section>
                                        The android is a powerful operating system and it supports large number of applications in Smartphones. These applications are advanced and are user friendly. The hardware that supports android software is based on ARM (Advanced RISC Machines) architecture platform. The android is an open source operating system means that it’s free and any one can use it. The Android phones today use three main CPU design.
                                        • ARM
                                        • ARM64
                                        • X86
                                        The ARM is the most common one used in the smartphones. It is used cause it optimize the battery consumption. The ARM64 is the upgrade version of ARM supports 64-bit processing for more powerful computing and has now being used more than the ARM chips whereas the x86 chip is the most powerful chip among two other. The android has got millions of apps available in its store that can help you in every way. The android is used in many mobile phones which makes it cost efficient and it the most popular OS in todays world.
                                    </section>
                                    <div class="comment-box"  >
                <h3 ">Leave a Comment</h3>
                <form action="Research.php" method="POST">
                    <label for="name" ">Name:</label>
                    <input type="text" id="name" name="name" required style="width:90%">
                    
                    <label for="comment" >Comment:</label>
                    <textarea id="comment" name="comment" rows="4" required style="width:90%" ></textarea>
                    
                    <button type="submit" name="submit" style="margin-top:20px;display:block">Submit</button>
                </form>
            </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="flex: 25%;padding-left: 20px;">
            <div style="background-color: white;padding: 20px;margin-top: 20px;">
                <h2>Other Blogs</h2>
                <div class="container">
                    <a href="Blog Phone.php"><img src="../css/Images/phones.jpg " alt="Snow" width="60%" height="60%"></a>
                    <div class="middle">
                        <div class="text">
                            <a href="Blog phone.php" style="text-decoration: none">
                                <font color="white">Phone</font>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a href="BLog.php"><img src="../css/Images/Network.jpg" alt="Snow" width="60%" height="60%"></a>
                    <div class="middle">
                        <div class="text">
                            <a href="Blog.php" style="text-decoration: none;">
                                <font color="white">Internet</font>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="container">
                        <a href="Blog Hacking.html"><img src="../css/Images/Hacking.jpg" alt="Snow" width="60%" height="60%"></a>
                        <div class="middle">
                            <div class="text">
                                <a href="Blog hacking.html" style="text-decoration: none;">
                                    <font color="white">Hacking</font>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <a href="Blog Robot.php"><img src="../css/Images/Robot.jpg" alt="Snow" width="60%" height="59%"></a>
                        <div class="middle">
                            <div class="text">
                                <a href="Blog Robot.php" style="text-decoration: none;">
                                    <font color="white">A.I</font>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=" text-align: center; background: #ddd; margin-top: 20px;">
        <footer>
            <div class="bottomnav">
                <p>Hand Crafted with ☕  by <span> TEAM OF TWO</span></p>
                <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
            </div>
        </footer>
    </div>
</body>

</html>