<?php
include("connect.php");


$sql1=" CREATE TABLE IF NOT EXISTS contactDetails(
  id int PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  email varchar(255) NOT NULL UNIQUE,
  message varchar(255) NOT NULL
  )";

$result1=mysqli_query($conn,$sql1);



$sql2=" CREATE TABLE IF NOT EXISTS loginDetails(
  id int PRIMARY KEY AUTO_INCREMENT,
  login_email varchar(255) NOT NULL UNIQUE,
  login_password varchar(255) NOT NULL
  )";

$result2=mysqli_query($conn,$sql2);




$sql3=" CREATE TABLE IF NOT EXISTS signupDetails(
  id int PRIMARY KEY AUTO_INCREMENT,
  user_name varchar(255) NOT NULL,
  user_email varchar(255) NOT NULL UNIQUE,
  new_password varchar(255) NOT NULL,
  cpassword varchar(255) NOT NULL
  )";

$result3=mysqli_query($conn,$sql3);


$sql4=" CREATE TABLE IF NOT EXISTS commentDetails(

  username varchar(255) NOT NULL,
  usercomment varchar(255) NOT NULL
  )";

$result4=mysqli_query($conn,$sql4);

$comment_id_increment="ALTER TABLE commentdetails
ADD id int PRIMARY KEY AUTO_INCREMENT;";

$result_id_add=mysqli_query($conn,$comment_id_increment);


?>