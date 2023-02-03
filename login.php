<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$uname = $_POST['uname'];
		$pass1 = $_POST['pass1'];

		if(!empty($uname) && !empty($pass1) && !is_numeric($uname))
		{

			//read from database
			$query = "select * from `user` where `uname` = '$uname' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['pass1'] == $pass1)
					{

						$_SESSION['userid'] = $user_data['userid'];
						$_SESSION['fname'] = $user_data['fname'];
						header("Location: mainportal.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>







<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>The NIFTY 10</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="styleslogin.css">
</head>

<body>
  <div class="top">
    <form  method="post">
      <div class="headingcontainer">

        <h1>The NIFTY 10.</h1>
        <h1>Login Page</h1>
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="pass1"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass1" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

      </div>

      <div class="container" style="background-color:#FAEAB1">
        <button type="button" class="cancelbtn"><a class="cancelbtn" href="index.php">Cancel</a></button>
        <span class="psw"><a href="signup.php">Forgot Password?</a></span>
        <span class="psw"><a href="signup.php">Create a new account?</a></span>

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
