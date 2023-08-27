<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <meta charset="utf-8"/> <!--Character Encoding -->
    <meta name="author" content="Author name" /> <!--copyright content-->
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow"/><!--websearch instruction-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="../Index.php">Home</a></li>
            <li><a href="Blog.php">Blogs</a></li>
            <li><a href="Research.php">Resarch</a></li>
            <li><a href="contact me.php">Contacts</a></li>
            <li style="float:Right"><a href="Aboutme.php">About me</a></li>
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
    </style>
    <div style="display: flex;">
        <div style="flex:75%;">
            <div style="background-color: white;padding: 20px;margin-top: 20px;">
                <div class="row">
                    <div class="column">
                        <div class="art">
                            <h1>Artifical Intelligence</h1>
                            <h5>May 2, 2019</h5>
                            <img src="../css/Images/Robot.jpg" style="height: 50%; width: 40%">
                            <div class="txt">
                                <section>
                                    Artificial intelligence also sometimes said as machine intelligence is the capacity of a machine to self-learning, self-correct using different form of algorithms and self-defines protocols. AI can also include speech recognition, identifying patters in the data more efficiently than humans. The term artificial intelligence was coined by John McCarthy, an American computer Scientist in 1956.
                                    <section>
                                        In Today’s world Artificial intelligence can be found being used in robotic process automation to the actual robot itself. With the help of AI massive amount of information and data can be analyzed in agricultural sector ,business world and other. The grown of AI is rapid and has developed variety of tools and technology. Some of them are:
                                    </section>
                                    <br>• Speech Recognition<br>
                                    This is the most used form of AI. It automatically translates human speech format into format specified for machine. It is presently being used as interactive voice response systems in the mobile phone and different other devices.<br>
                                    <br> • Virtual Assistant<br>
                                    This is also the another most used Technology. This technology creates a computer-generated character with artificial intelligence installed in it. It acts as an assistant that gives advices, responds to their question and perform required activity.<br>
                                    <br> • Biometrics <br>
                                    Biometrics is based on recognizing of human based upon the physical or behavioral intrinsic. It is used as access management and in security field for recognition.<br>
                                    <br> • Machine learning<br> Machine learning is used to provide application program interface, algorithms and training tool kits, deploy models into applications and other machines. It is mostly used in wide range of enterprise applications and prediction.
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
                    <a href="Blog Phone.html"><img src="../css/Images/phones.jpg " alt="Snow" width="60%" height="60%"></a>
                    <div class="middle">
                        <div class="text">
                            <a href="Blog phone.html" style="text-decoration: none">
                                <font color="white">Phone</font>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a href="BLog.html"><img src="../css/Images/Network.jpg" alt="Snow" width="60%" height="60%"></a>
                    <div class="middle">
                        <div class="text">
                            <a href="Blog.html" style="text-decoration: none;">
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
                        <a href="Blog Robot.html"><img src="../css/Images/Robot.jpg" alt="Snow" width="60%" height="59%"></a>
                        <div class="middle">
                            <div class="text">
                                <a href="Blog Robot.html" style="text-decoration: none;">
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
                <a style="float:left;background-color:silver;">&copy;2019 Abhishek Bhatta</a>
                <a href="https://www.instagram.com/jery_here/">Instagram</a>
                <a href="https://www.facebook.com/Mr.JerryIsHere">Facebook</a>
            </div>
        </footer>
    </div>
</body>

</html>