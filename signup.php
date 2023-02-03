<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];

		$uname = $_POST['uname'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		if(!empty($uname) && !empty($pass1) && !is_numeric($uname))
		{

			//save to database
			$userid = random_num(20);
			$query = "  INSERT INTO `user` (`userid`, `fname`, `lname`, `email`, `uname`, `pass1`, `pass2`) VALUES ('$userid', '$fname', '$lname', '$email', '$uname', '$pass1', '$pass2')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>






<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>The NIFTY 10</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="stylessignup.css">
</head>

<body>
  <div class="top">
    <form method="post" style="border:1px solid #ccc">
      <div class="container">
        <h1>The NIFTY 10</h1>
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

				<label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="pass1"><b>Create Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass1" required>

        <label for="pass2"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="pass2" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
          <button type="button" class="cancelbtn"><a class="abc" href="login.php">Cancel</a></button>
          <button type="submit" class="signupbtn" >Sign Up</button>
        </div>
      </div>
    </form>
  </div>

  <div class="bottom">
    <a class="footer-link" href="https://www.tickertape.in/">TickerTape</a>
    <a class="footer-link" href="https://zerodha.com/?c=GHQ604&s=CONSOLE">Zerodha</a>
    <a class="footer-link" href="https://www.screener.in/">Screener</a>
    <p class="copyrite">©2022 Dev H Gowda/Divya S.</p>
  </div>

</body>

</html>
