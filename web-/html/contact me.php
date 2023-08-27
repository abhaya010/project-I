<!-- <!DOCTYPE html>
<html>

<head>
    <title>ContactMe </title>
    <meta charset="utf-8"/>
    <meta name="author" content="Author name" /> 
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../J script/func.js"></script>
</head>

<body>
    <nav>
        <ul>
            <li><a href="../Index.php">Home</a></li>
            <li><a href="Blog.php">Blogs</a></li>
            <li><a href="Research.php">More</a></li>
            <li><a href="contact me.php">Contacts</a></li>
            <li style="float:Right"><a href="About.php">About </a></li>
    </nav>
    <style>
        input[type=text]{
				border-bottom: 1px Solid grey;
			}

            .navbar{
                position:fixed;
                bottom:0px;
            }

       
             
		</style>
    <div class="content">
        <form name="messageform" class="img" onsubmit="validationform()">
            <p style="font:bold;color:bisque;font-size:30px"><span style="color:red">SUBSCRIBE</span> TO OUR BLOGSPOT</p><br>
            <p>Contact Us on </p>
            <p>Email:<br><br>bhatta.abhaya14@gmail.com  bistasubika@gmail.com</p>
            <p>Phone:+9779860909077</p>
            <br>
            <p>OR,just fill the form</p>
            First Name:<input type="text" name="firstname"><br><br>
            Last Name:<input type="text" name="lastname"><br><br>
            E-mail:<input  type="text" name="email"><br><br>
            Gender:<input type="radio" name="gender" value="Male" checked>Male <input type="radio" name="gender" value="Female ">Female<br><br>
            Message:<br><textarea name="message" rows="10" cols="30" placeholder="Any Suggestation"></textarea>
            <br>
            <input type="Submit" name="Submit" value="Submit" class="button">
        </form>
    </div>
    <footer class="footer">
        <div class="bottomnav">
            <p>Hand Crafted with ☕  by <span> TEAM OF TWO</span></p>
            <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>  -->

<!DOCTYPE html>
<html>

<head>
    <title>ContactMe</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Author name" /> 
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../J script/func.js"></script>
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
    background-color: #555;
}

input[type=text]{
				border-bottom: 1px Solid grey;
			}

            .navbar{
                position:fixed;
                bottom:0px;
            }


    </style>
    
    <div class="content">
        <form name="messageform" class="img" onsubmit="return validationform();">
            <p class="subscribe-title"><span class="subscribe-highlight">SUBSCRIBE</span> TO OUR BLOGSPOT</p>
            <p>Contact Us:</p>
            <p>Email:<br><br>bhatta.abhaya14@gmail.com  bistasubika@gmail.com</p>
            <p>Phone:+9779860909077</p>
            <br>
            <p>OR, just fill the form</p>
            <div class="input-container">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="text" name="lastname" placeholder="Last Name">
            </div>
            <input type="text" name="email" placeholder="E-mail">
            <div class="gender-container">
                <label>Gender:</label>
                <input type="radio" name="gender" value="Male" checked>Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            <label>Message:</label>
            <textarea name="message" rows="10" cols="30" placeholder="Any Suggestion"></textarea>
            <input type="submit" name="Submit" value="Submit" class="button">
        </form>
    </div>
    
    <footer class="footer">
        <div class="bottomnav">
            <p>Hand Crafted with ☕ by <span> TEAM OF TWO</span></p>
            <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>


