</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BANKING SYSTEM</title>
<link rel="stylesheet" href="style_transactions.css">
  </head>

  <body>
<div class="navbar">
<center>
  <hr color="grey" width=70% size=1>
  <h1> BASIC BANKING SYSTEM </h1>
  <a  href="index.php">Home</a>
  <a href="sendmoney.php">Send Money</a>
  <a href="customers.php">View All Customers</a>
  <a class="active"  href="transactions.php">Transactions</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">About Us</a>

      <hr color="grey" width=70% size=1>
      </center>
</div>

<div class="container">
<div class="header"> Welcome to Sparks Bank! </div>
<img src="bank.png" height=65% width=30% alt="Welcome to the sparks bank!" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
</div>

<!--  container closed -->
<br>
<div class="contentbox">
  <center>
<h1> TRANSACTION HISTORY </h1>
  <center>
<table class="customers">
<th> ID </th>
<th> SENDER'S ACCOUNT NO. </th>
<th> SENDER'S NAME </th>
<th> RECEIVER'S ACCOUNT NO. </th>
<th> RECEIVER'S NAME </th>
<th> AMOUNT TRANSFERRED </th>
<th> SENDER'S BALANCE </th>
<th> RECEIVER'S BALANCE </th>
<th> TRANSACTION STATUS </th>
<th> TIME </th>
</tr>

<?php

use LDAP\Result;

$server="localhost";
$username="root";
$password="";
$dbname="banking system";

//create connections
$con=mysqli_connect( $server, $username, $password, $dbname,"3307");
//check for connection success
if (!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
}
$sql="Select * from transactions";
$result= $con-> query($sql);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>".$row["ID"]."</td><td>".$row["Sender_accountNo"]."</td><td>".$row["Sender_name"]."</td><td>".$row["Receiver_accountNo"]."</td><td>".$row["Receiver_name"]."</td><td>".$row["Amount_transferred"]."</td><td>".$row["Sender_balance"]."</td><td>".$row["Receiver_balance"]."</td><td>".$row["Status"]."</td><td>".$row["Transaction_date"]."</td></tr>";
  } 
  echo "</table>";

}
else{
  echo "</table> <br>";
  echo "0 Result Found!";
}
$con->close();
?>

</div>
<br> <br>
<br> <br>   
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br>
<br> <br>
<br> <br>


<center>
<div class="pagebreak">
</div>
<div style="width: 80%; color: white; padding:  20px">
<h5>When a customer deposits money into the bank, this money is on loan to the bank and the bank's most important obligation is to follow the customer's instructions in relation to this money. The customer can withdraw money from the account at any point, and they can also stop payment of a cheque by informing the bank. If an overdraft agreement is in place, the bank must also give reasonable written notice of any decision to reduce overdraft credit.
</h5>
</div>
</center>


<div class="pagebreak">
</div>
<div class="footer"> <center>
  Made by keyush !
</center>
</div>
</center>
  </body>
</html>