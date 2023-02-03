<?php
session_start();

	include("connection.php");
	include("functions.php");

	$con = mysqli_connect('localhost','root','','thenifty10.');

	$user_data = check_login($con);
	$userid=$_SESSION['userid'];
	$sql = "select * from `stocks` where `userid` = '$userid' " ;
	$sqll = mysqli_query($con,$sql);

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>The NIFTY 10</title>
  <link rel="stylesheet" href="stylesholdings.css">
  <link rel="icon" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>
 <div class="top">
    <h1>The NIFTY 10</h1>
    <img class="moneygrowth" src="moneygrowth.png" alt="moneygrowth-pic">
  </div>

<div class='middle'>
	<?php while($rowss = mysqli_fetch_assoc($sqll))  { ?>
		<h2 style="text-align: left">My Stock Holdings</h2>
	<h3 style="color:#C58940">Reliance_Industries: <?php echo $rowss['Reliance_Industries'] ?> </h3>
	<h3 style="color:#C58940">Tata_Consultancy_Services: <?php echo $rowss['Tata_Consultancy_Services'] ?> </h3>
	<h3 style="color:#C58940">HDFC_Bank: <?php echo $rowss['HDFC_Bank']  ?>  </h3>
	<h3 style="color:#C58940">Infosys: <?php echo $rowss['Infosys'] ?> </h3>
	<h3 style="color:#C58940">Hindustan_Unilever: <?php echo $rowss['Hindustan_Unilever'] ?>  </h3>
	<h3 style="color:#C58940">State_Bank_of_India: <?php echo $rowss['State_Bank_of_India'] ?> </h3>
	<h3 style="color:#C58940">Bharti_Airtel: <?php echo $rowss['Bharti_Airtel'] ?> </h3>
	<h3 style="color:#C58940">Adani_Enterprises: <?php echo $rowss['Adani_Enterprises'] ?> </h3>
<?php } ?>

</div>



  <div class="bottom">
    <a class="footer-link" href="https://www.tickertape.in/">TickerTape</a>
    <a class="footer-link" href="https://zerodha.com/?c=GHQ604&s=CONSOLE">Zerodha</a>
    <a class="footer-link" href="https://www.screener.in/">Screener</a>
    <p class="copyrite">©2022 Dev H Gowda/Divya S.</p>
  </div>
</body>

</html>
