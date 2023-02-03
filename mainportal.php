<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The NIFTY 10</title>
    <link rel="stylesheet" href="stylesmportal.css">
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="top">
      <a class="link" href="holdings.php"><h4>My Holdings</h4></a>
      <a class="link" href="logout.php"><h4>Log out</h4></a>
      Hello, <?php echo $user_data['fname']; ?>.
      <h1>Welcome To</h1>
      <h1>The NIFTY 10</h1>
      <h2>A Platform were u can invest in Top 10 stocks of INDIA.</h2>
    </div>

    <div class="middle">
      <h2 style="margin-top: 0px; margin-bottom: 0px; text-align: left;">TOP 10 Stocks :</h2>
      <br>
      <a class="btn" style="margin-top: 5px;margin-left: 120px;" href="https://www.tickertape.in/stocks/reliance-industries-RELI?ref=screener-table_int-asset-widget">Reliance Industries Ltd</a>
      <a class="btn" style="margin-left: 60px;"href="https://www.tickertape.in/stocks/tata-consultancy-services-TCS?ref=screener-table_int-asset-widget">Tata Consultancy Services Ltd</a>
      <a class="btn" style="margin-left: 70px;" href="https://www.tickertape.in/stocks/hdfc-bank-HDBK?ref=screener-table_int-asset-widget">HDFC Bank Ltd</a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a class="btn" style="margin-top: 30px; margin-left: 370px;" href="https://www.tickertape.in/stocks/infosys-INFY?ref=screener-table_int-asset-widget">Infosys Ltd</a>
      <a class="btn" style="margin-left: 230px;" href="https://www.tickertape.in/stocks/icici-bank-ICBK?ref=screener-table_int-asset-widget">ICICI Bank Ltd</a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a class="btn" style="margin-left: 120px;" href="https://www.tickertape.in/stocks/hindustan-unilever-HLL?ref=screener-table_int-asset-widget">Hindustan Unilever Ltd</a>
      <a class="btn" style="margin-left: 40px;" href="https://www.tickertape.in/stocks/state-bank-of-india-SBI?ref=screener-table_int-asset-widget">State Bank of India</a>
      <a class="btn" style="margin-left: 30px;" href="https://www.tickertape.in/stocks/housing-development-finance-corporation-HDFC?ref=screener-table_int-asset-widget">Housing Development Finance Corp Ltd</a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a class="btn" style="margin-left: 370px;" href="https://www.tickertape.in/stocks/bharti-airtel-BRTI?ref=screener-table_int-asset-widget">Bharti Airtel Ltd</a>
      <a class="btn" style="margin-left: 170px;" href="https://www.tickertape.in/stocks/adani-enterprises-ADEL?ref=screener-table_int-asset-widget">Adani Enterprises Ltd</a>
      <br>
      <br>
      <br>
      <br>
    </div>

    <div class="lowerpart">
      <h3 style="margin-top: 0px; margin-bottom: 0px; text-align: left; background-color: #FAEAB1;">To Invest in the stocks Contact the Stock Broker :<a class="bts" href="tel:+91 9916801323" >Call ME</a></h3>
      <h3 style="margin-top: 0px; margin-bottom: 0px; background-color: #FAEAB1;">After speaking with the Broker plz update ur profile:<a class="bts" href="profile.html">Update</a></h3>
    </div>

    <div class="bottom">
      <a class="footer-link" href="https://www.tickertape.in/">TickerTape</a>
      <a class="footer-link" href="https://zerodha.com/?c=GHQ604&s=CONSOLE">Zerodha</a>
      <a class="footer-link" href="https://www.screener.in/">Screener</a>
      <p class="copyrite">©2022 Dev H Gowda/Divya S.</p>
    </div>
  </body>
</html>
