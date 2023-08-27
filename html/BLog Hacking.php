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

.comment-box input:invalid:focus,
.comment-box textarea:invalid:focus {
  border-color: #dc3545;
  box-shadow: none;
}
    </style>
    <div style="display: flex;">
        <div style="flex:75%;">
            <div style="background-color: white;padding: 20px;margin-top: 20px;">
                <div class="row">
                    <div class="column">
                        <div class="art">
                            <h1>Hacking</h1>
                            <h5>July 11 ,2023</h5>

                            <img src="../css/Images/Hacking.jpg" style="height: 50%; width: 40%">
                            <div class="txt">
                                <section>
                                    In today’s world of technology mobile phones, computers have become a mandatory for every individual. People have been crazy about the technologies and adopted technologies for every other thing. Computers are must for a company to run successfully. These computers are interconnected to different network through internet. This has exposed the information to the internet. So, this is where hackers are found. Hacking can be said as identifying flaws in the computer system or network to gain access to the network. Different attacks are done the system in order to gain access in the system.
                                    <section>
                                        Hackers are highly skilled computer programmers with the knowledge of computer security, networks. Gaining access in others computer with or without letting others know is called hacking. This kind of data theft is a major cybercrime. Hackers are mainly categorized into three kinds. The White hat (Ethical hacker), Black hat (Cracker)and the Grey hat. There are other kind of hackers like the script kinddlies, hacktivist and other.
                                    </section>
                                    <br>•The White Hat <br>
                                    The white hat are the good guys of hacking. The Ethical or white hat are those who gain access to the system or the network to find the weaknesses and perform different penetration testing and vulnerability assessments. These hackers are mostly certified to pursue a career in hacking.<br>
                                    <br> • The Black Hat<br>
                                    The black hat also known as the crackers are the bad goys of hacking community. These people are found doing hacking and stealing information and selling it.<br>
                                    <br> • The Grey Hat <br>
                                    The grey hat is found in middle of white and the black. These guys can be found in the middle of hacking community. They can sometime use for good cause and sometimes for bad.<br>
                                    <br> • Script Kiddie learning<br>
                                    They are not exactly the hacker rather they copy the code and use it of making viruses, SQL injection and other. They just use online codes and downloaded software’s & tools and watch YouTube videos on using it.
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
                        <a href="BLog Hacking.php"><img src="../css/Images/Hacking.jpg" alt="Snow" width="60%" height="60%"></a>
                        <div class="middle">
                            <div class="text">
                                <a href="Blog hacking.php" style="text-decoration: none;">
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