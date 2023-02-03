<?php
session_start();

	include("connection.php");
	include("functions.php");

	$con = mysqli_connect('localhost','root','','thenifty10.');

	$user_data = check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

  	$userid = $_SESSION['userid'];

		$Reliance_Industries = $_POST['Reliance_Industries'];
		$Tata_Consultancy_Services = $_POST['Tata_Consultancy_Services'];
		$HDFC_Bank = $_POST['HDFC_Bank'];
    $Infosys = $_POST['Infosys'];
		$ICICI_Bank = $_POST['ICICI_Bank'];
		$Hindustan_Unilever = $_POST['Hindustan_Unilever'];
		$State_Bank_of_India = $_POST['State_Bank_of_India'];
    $Housing_Dev_Finance_Corp = $_POST['Housing_Dev_Finance_Corp'];
    $Bharti_Airtel = $_POST['Bharti_Airtel'];
    $Adani_Enterprises = $_POST['Adani_Enterprises'];

		$check =" 	select * from `stocks` where `userid` = '$userid'" ;
		$checkk = mysqli_query($con,$check);
		if(mysqli_num_rows($checkk) != 0)
		{
			$Update = " UPDATE  `stocks`
			 SET `Reliance_Industries` = `Reliance_Industries`+'$Reliance_Industries'
			  WHERE `userid`= '$userid' " ;

 		mysqli_query($con , $Update);

		$Update1 = " UPDATE  `stocks`
		 SET `Tata_Consultancy_Services` = `Tata_Consultancy_Services`+'$Tata_Consultancy_Services'
			WHERE `userid`= '$userid' " ;

			mysqli_query($con , $Update1);

			$Update2 = " UPDATE  `stocks`
			 SET `HDFC_Bank` = `HDFC_Bank`+'$HDFC_Bank'
				WHERE `userid`= '$userid' " ;

				mysqli_query($con , $Update2);

				$Update3 = " UPDATE  `stocks`
				 SET `Infosys` = `Infosys`+'$Infosys'
					WHERE `userid`= '$userid' " ;

			mysqli_query($con , $Update3);

			$Update4 = " UPDATE  `stocks`
			 SET `ICICI_Bank` = `ICICI_Bank`+'$ICICI_Bank'
				WHERE `userid`= '$userid' " ;

					mysqli_query($con , $Update4);

				$Update5 = " UPDATE  `stocks`
					 SET `Hindustan_Unilever` = `Hindustan_Unilever`+'$Hindustan_Unilever'
						WHERE `userid`= '$userid' " ;

						mysqli_query($con , $Update5);


						$Update6 = " UPDATE  `stocks`
						 SET `State_Bank_of_India` = `State_Bank_of_India`+'$State_Bank_of_India'
							WHERE `userid`= '$userid' " ;

						mysqli_query($con , $Update6);

						$Update7 = " UPDATE  `stocks`
						 SET `Housing_Dev_Finance_Corp` = `Housing_Dev_Finance_Corp`+'$Housing_Dev_Finance_Corp'
							WHERE `userid`= '$userid' " ;

							mysqli_query($con , $Update7);

							$Update8 = " UPDATE  `stocks`
							 SET `Bharti_Airtel` = `Bharti_Airtel`+'$Bharti_Airtel'
								WHERE `userid`= '$userid' " ;

								mysqli_query($con , $Update8);

								$Update9 = " UPDATE  `stocks`
								 SET `Adani_Enterprises` = `Adani_Enterprises`+'$Adani_Enterprises'
									WHERE `userid`= '$userid' " ;

								mysqli_query($con , $Update9);

		header("Location: mainportal.php");
		die;
		}

else{

			$query = " INSERT INTO `stocks` ( `userid`, `Reliance_Industries`, `Tata_Consultancy_Services`, `HDFC_Bank`, `Infosys`, `ICICI_Bank`, `Hindustan_Unilever`, `State_Bank_of_India`, `Housing_Dev_Finance Corp`, `Bharti_Airtel`, `Adani_Enterprises`)
			 VALUES ( '$userid', '$Reliance_Industries', '$Tata_Consultancy_Services', '$HDFC_Bank', '$Infosys', '$ICICI_Bank' , '$Hindustan_Unilever', '$State_Bank_of_India', '$Housing_Dev_Finance Corp', '$Bharti_Airtel', '$Adani_Enterprises')";

		mysqli_query($con, $query);
			header("Location: mainportal.php");
			die;

}
}?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The NIFTY 10</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="stylesbuying.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="top">



      <h2>How many are you buying: </h2>



			<form action="Buying.php" method="post">

				<ul>

      <li>
        <input type="number" placeholder="No of Stocks bought" name="Reliance_Industries">
        <h4>Reliance Industries:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Tata_Consultancy_Services">
        <h4>Tata Consultancy Services:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="HDFC_Bank">
        <h4>HDFC Bank:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Infosys">
        <h4>Infosys:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="ICICI_Bank">
        <h4>ICICI Bank:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Hindustan_Unilever">
        <h4>Hindustan Unilever:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="State_Bank_of_India">
        <h4>State Bank of India:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Housing_Dev_Finance_Corp">
        <h4>Housing Dev Finance Corp:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Bharti_Airtel">
        <h4>Bharti Airtel:</h4>
      </li>
      <li>
        <input type="number" placeholder="No of Stocks bought" name="Adani_Enterprises">
        <h4>Adani Enterprises:</h4>
      </li>
      </ul>
			<button type="button" name="button" class="btns"><a class="btns" href="profile.html">Cancel</a></button>
			<button type="submit" name="button" class="btn">Submit</button>
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
