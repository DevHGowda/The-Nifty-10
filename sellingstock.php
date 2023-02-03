<?php
session_start();
include("functions.php");

$id= $_SESSION['userid'];
include("connection.php");
$sql="SELECT * FROM stocks WHERE userid='$id'";

$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){

  $Reliance_Industries=$row['Reliance_Industries'];
  $Tata_Consultancy_Services=$row['Tata_Consultancy_Services'];
  $HDFC_Bank=$row['HDFC_Bank'];
  $Infosys = $row['Infosys'];
  $ICICI_Bank = $row['ICICI_Bank'];
  $Hindustan_Unilever = $row['Hindustan_Unilever'];
  $State_Bank_of_India = $row['State_Bank_of_India'];
  $Housing_Dev_Finance_Corp = $row['Housing_Dev_Finance_Corp'];
  $Bharti_Airtel = $row['Bharti_Airtel'];
  $Adani_Enterprises = $row['Adani_Enterprises'];
}
$Reliance = $_POST['Reliance_Industries'];
$Tata = $_POST['Tata_Consultancy_Services'];
$HDFC= $_POST['HDFC_Bank'];
$infosys = $_POST['Infosys'];
$ICICI = $_POST['ICICI_Bank'];
$Hindustan = $_POST['Hindustan_Unilever'];
$State_Bank = $_POST['State_Bank_of_India'];
$Housing_Dev = $_POST['Housing_Dev_Finance_Corp'];
$Airtel = $_POST['Bharti_Airtel'];
$Adani = $_POST['Adani_Enterprises'];


if($Reliance <= $Reliance_Industries && $Tata <= $Tata_Consultancy_Services && $HDFC <= $HDFC_Bank && $infosys <= $Infosys && $ICICI <= $ICICI_Bank
&& $Hindustan <= $Hindustan_Unilever && $State_Bank <= $State_Bank_of_India && $Housing_Dev <= $Housing_Dev_Finance_Corp && $Airtel <= $Bharti_Airtel && $Adani <= $Adani_Enterprises){
  $Update = " UPDATE  `stocks`
  SET `Reliance_Industries` = $Reliance_Industries - $Reliance
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update);


  $Update1 = " UPDATE  `stocks`
  SET `Tata_Consultancy_Services` = $Tata_Consultancy_Services - $Tata
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update1);


  $Update2 = " UPDATE  `stocks`
  SET `HDFC_Bank` = $HDFC_Bank - $HDFC
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update2);

  $Update3 = " UPDATE  `stocks`
  SET `Infosys` = $Infosys - $infosys
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update3);


  $Update4 = " UPDATE  `stocks`
  SET `ICICI_Bank` = $ICICI_Bank-$ICICI
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update4);


  $Update5 = " UPDATE  `stocks`
  SET `Hindustan_Unilever` = $Hindustan_Unilever - $Hindustan
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update5);


  $Update6 = " UPDATE  `stocks`
  SET `State_Bank_of_India` = $State_Bank_of_India - $State_Bank
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update6);


  $Update7 = " UPDATE  `stocks`
  SET `Housing_Dev_Finance_Corp` = $Housing_Dev_Finance_Corp - $Housing_Dev
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update7);


  $Update8 = " UPDATE  `stocks`
  SET `Bharti_Airtel` = $Bharti_Airtel - $Airtel
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update8);


  $Update9 = " UPDATE  `stocks`
  SET `Adani_Enterprises` = $Adani_Enterprises - $Adani
  WHERE `userid`= $id " ;

  mysqli_query($con , $Update9);

  header("Location: holdings.php");
  die;

}

else{
  echo "Enter correct values.";
  header("Location: profile.html");
  die;
}
?>
