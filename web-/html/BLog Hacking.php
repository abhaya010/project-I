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
                            <h1>Hacking</h1>
                            <h5>May 2, 2019</h5>
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
<script>
        const scrollToTopButton = document.getElementById('scrollToTop');
        const scrollToBottomButton = document.getElementById('scrollToBottom');
    
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    
        scrollToBottomButton.addEventListener('click', () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        });


        function validationform() {
     var name = document.forms["messageform"]["name"].value;
     var comment = document.forms["messageform"]["comment"].value;

     if (name == "" || comment == "") {
         alert("Empty Fields founds.Please fill all the information of the form.");
     } else {
         alert("Got it.We'll contact you soon.");
     }
 }
 
    </script>
</html>