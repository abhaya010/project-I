<!DOCTYPE html>
<html>

<head>
    <title>ContactMe</title>
    <meta charset="utf-8" />
    <meta name="author" content="Author name" />
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../Css/Images/icons8-wolf-64.png" image/x-icon">
   
</head>

<body>
    <nav>
        <ul>
            <li><a href="../Index.php">Home</a></li>
            <li><a href="Blog.php">Blogs</a></li>
            <li><a href="Research.php">More</a></li>
            <li><a href="contact me.php">Contacts</a></li>
            <li style="float: right;"><a href="About.php">About</a></li>
        </ul>
    </nav>

    <style>
        .subscribe-title {
            font-weight: bold;
            color: bisque;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .subscribe-highlight {
            color: red;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .input-container input {
            width: 48%;
        }

        .gender-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .gender-container label {
            margin-right: 10px;
        }

        .button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: green;
        }

        input[type=text] {
            border-bottom: 1px Solid grey;
        }

        .navbar {
            position: fixed;
            bottom: 0px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {

            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        label {
            font-weight: bold;
            color: antiquewhite;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 5px 0 15px;
            transition: border-color 0.3s;
            color: #333;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #555;
        }

        .gender-container {
            display: flex;
            align-items: center;
            margin: 10px 0 20px;
        }

        .gender-container label {
            margin-right: 10px;
            color: antiquewhite;
        }

        .button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: green;
        }

        .error-message {
        color: red;
        font-size: 14px;
        margin-left: -100px;
    }

    /* ::placeholder span{
        color:red;
    } */
    </style>

    <div class="content">
        <form method="POST" action="contact me.php" name="messageform" class="img" onsubmit="return validationform();">
            <p class="subscribe-title" style="margin-left:-100px;color:black;font-weight:bolder">CONTACT US</p>
            <p style="color:black;font-weight:lighter;margin-left:-100px">Email:<br><br>bhatta.abhaya14@gmail.com || bistasubika@gmail.com</p>
            <p style="color:black;font-weight:lighter;margin-left:-100px">Phone:+9779860909077</p>
            <br>
            <p style="color:black;font-weight:bold;margin-left:-100px;font-size:20px ;color:black;">Fill the form</p>
            <label  style="margin-left:-100px";>Name:</label>
            <div class="input-container">
           
                <input type="text" name="firstname" placeholder="First Name *" style="margin-left:-100px;margin-right:10px;">
           
              
                <input type="text" name="lastname" placeholder="Last Name *"  ">
               
             
            </div>
            <label  style="margin-left:-100px";>E-Mail:</label>
            <input type="text" name="email" placeholder="E-mail *"  style="margin-left:-100px;">

          
         
        <label  style="margin-left:-100px";>Message:</label>
        <textarea name="message" rows="10" cols="30" placeholder="Any Suggestion *"  style="margin-left:-100px;"></textarea>

       
            <input type="submit" name="submit" value="Submit" class="button" style="margin-left:-100px;">

        </form>
    </div>

    <footer class="footer">
        <div class="bottomnav">
            <p>Hand Crafted with ☕ by <span> TEAM OF TWO</span></p>
            <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
        </div>
    </footer>


</body>

<script>

function validationform() {
     var fname = document.forms["messageform"]["firstname"].value;
     var lname = document.forms["messageform"]["lastname"].value;
     var email = document.forms["messageform"]["email"].value
     var message = document.forms["messageform"]["message"].value;

     if (fname == "" || lname == "" || email == "" || message == "") {
         alert("Empty Fields founds.Please fill all the information of the form.");
     } else {
         alert("Got it.We'll contact you soon.");
     }
 }
 
</script>

</html>

<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if ($firstname!="" && $lastname!="" &&$email!="" && $message!=""){
        $sql = "INSERT INTO contactDetails(firstname, lastname, email, message) 
            VALUES ('$firstname', '$lastname', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}
?>