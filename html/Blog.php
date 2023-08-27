<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <meta charset="utf-8"/> <!--Character Encoding -->
    <meta name="author" content="Author name" /> <!--copyright content-->
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow"/><!--websearch instruction-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/Blog.css">
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
        transition: .5s ease;
        backface-visibility: hidden;
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
                            <h1>Technology and its changes</h1>
                            <h5>July 11,2023</h5>
                            <img src="../css/images/vrguy.jpg" style="height: 50%; width: 40%">
                            <div class="txt">
                                <section>
                                    Throughout these years, technology has been the crucial part of life. We live in the ere of technology and innovation where technology is evolving at a faster rate and it’s imperative to catch up with technology. As the moment we wink there is another technological improvement. We, as humans have invented and developed technologies to make our life easily.
                                    <section> Technology has simplified our lives in several ways including providing easy access to information’s, making internet available for the world, entertainment services, communication tools and has always encouraged creativity, talent and innovations enhancing productivity and efficiency. Technology has both positive as well as the negative side on our life.</section>
                                    <section>
                                        For me one of the greatest technological innovation has been the internet. Technology has made internet good lightning fast. It has been our day to day tech that almost every person uses. For the positive part of the technology we can gain a lot of knowledge and information through the internet as well as the modern communication devices. The smartphone, smartwatches and the computer has been the daily drivers of one’s life. These innovations have help uplift the creativity and thinking power.
                                        Everything has its positive as well the negative side. According to studies, the average person picks up the smartphone 150 times a day. This over-dependence on tech is one of the major problems. This kind of technology addiction can be the major problem as it destroys the mentally, physically an socially.
                                    </section>
                                    <section>
                                        Today Social media is generally utilized. Many clients login to online networking destinations like Twitter to disperse breaking news and impart their insights and considerations. For organizations, LinkedIn is possibly valuable for observing people in general discernment and the social notoriety of organizations and items. In spite of incredible potential, how terrible news around an organization impacts general society slants in online networking has not been concentrated on inside and out. The motivation behind this contextual investigation is to survey individuals ' estimations in Twitter upon the spread of two sorts of data: corporate awful news and a CEO 's statement of regret. We endeavored to see how estimations on corporate terrible news show in Twitter and whether any interpersonal organization highlight encourages its spread. We explored the Domino 's Pizza emergency in 2009, where terrible news spread like flame in online networking took after by an official expression of remorse from the organization. There is the nitty gritty data of different responses of clients towards the awful news in online networking, for example, negative buy plan. Likewise regularly utilized as a part of corporate organizations, the "scattering of awful news" frequently implies an emergency, having a negative effect on brand notoriety, mouth notices, and even deals.
                                    </section>
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
                            <a href="Blog Phone.php" style="text-decoration: none">
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
                        <a href="Blog Hacking.php"><img src="../css/Images/Hacking.jpg" alt="Snow" width="60%" height="60%"></a>
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