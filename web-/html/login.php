<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<title>Login</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: linear-gradient(to top right, #b0c9d3, #6b7a8e, #5b2c8c, #cc7294);
  }
  .login-container {
    background-color: #f0f0f0;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    padding: 40px;
    text-align: center;
    width: 450px;
    height: 600px;
    border: 2px solid #333;
    
 
  }

  .login-container h2 {
    margin-bottom: 20px;
    font-weight: bold;
    color: #000;
  }

  .login-input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding-left: 40px;
    background-image: url('email-icon.png');
    background-repeat: no-repeat;
    background-position: 10px center;
    background-size: 20px; 
    margin-bottom: 20px;
  }



  .login-button {
    margin-top: 30px;
    background-color:green;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 90%;
    margin-bottom: 50px;
    transition:0.2s ease-in-out;
  }

  .login-button:hover{
    background-color: #4caf50;
  }

  .sign-up {
    margin-top: 20px;
    font-size: 14px;
  }
  .social-icons{
  /* border: 2px solid red; */
  display: flex;
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
}

.social-icons span{
    margin:20px 5px;
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

.social-icons span:hover {
  border: 1px solid #28e98c;
  background-color: black;
  color: #28e98c;
  transform: scale(1.1);
}

.input-label {
  display: block;
  margin-bottom: 5px; 
  margin-left:-250px;
}


</style>
</head>
<body>
<div class="login-container">
  <h2>LOGIN</h2>
  <form id="login-form" method="POST" action="login.php">
    <label for="name" class="input-label">Username</label>
  <input type="text" class="login-input" placeholder="Username" id="username" required name="username" value="<?php echo $_COOKIE['user']; ?>" required autocomplete="on">
  <label for="password" class="input-label">Password</label>
    <input type="password" class="login-input password" name="password" placeholder="Password" id="password" required>
    <button type="submit" class="login-button" name="submit">Login</button>
    <p class="sign-up">Don't have an account? <a href="signup.php">Sign up</a></p>
  </form>




      <div class="social-icons">
    <span class="social-icon"><a href="https://instagram.com/abhaya__b" target="_blank"><i class="fa fa-instagram"
                style="font-size:25px; color:#AA336A "></i></a></span>
    <span class="social-icon"><a href="https://github.com/abhaya010" target="_blank"><i class="fa fa-github"
                style="font-size:25px"></i></a></span>
    <span class="social-icon"><a href="https://www.linkedin.com/in/abhaya-bhatta-b7343a253/" target="_blank"><i class="fa fa-linkedin"
                style="font-size:25px ;color:blue;"></i></a></span>
  </div>


</body>
</html>


<?php 
include("connect.php");
$savedUsername = ''; 
if(isset($_COOKIE['user'])){
  $savedUsername = $_COOKIE['user'];
} else {
  $savedUsername = '';
}

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `signupdetails` WHERE user_name='$username'";
  $result = mysqli_query($conn, $sql);

  if($result) {
    $num = mysqli_num_rows($result);
    if(!$num > 0){
      echo("This user doesn't exist.");
    } else {
      $pwcheck = mysqli_fetch_assoc($result);
      if ($password === $pwcheck['cpassword']) {

        $login_sql = "INSERT INTO logindetails (username, login_password) VALUES ('$username', '$password')";

        $login_result=mysqli_query($conn,$login_sql);
        session_start();
        $_SESSION['username'] = $username;
        echo "Logged IN!";
        header("Location:http://localhost/wt%20project/web--master/");
      } else {
        echo "Incorrect password.";
      }
    }
  }
}
?>

