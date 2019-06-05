<html>
<head>
	<title>currentcy converter</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<form align="center" action="currencyconvertor.php" method="post">

<div id="box">
	<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
		<option value="AUD">Austrian Dollar(AUD)</option>
		<option value="USD" selected>US Dollar(AUD)</option>
		</select>
</td>
</tr>
<tr>
	<td>
		<br><center>TO:<select name='cur2'>
		<option value="INR" selected>India Rupee(INR)</option>
		<option value="JPY">Japanese Yen(JPY)</option>
		<option value="PHP">Philippine Peso(PHP)</option>
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type="submit" name='submit' value="convertNow"></center>
</td>
</tr>
</table>
</form>



</body>
</html>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];
 
if($cur1=="AUD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*82.463 . "</center>";
}
 
if($cur1=="AUD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 51.09 . "</center>";
}
 
if($cur1=="AUD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 37.15 . "</center>";
}
 
if($cur1=="USD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 109.49 . "</center>";
}
 
if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 67.83 . "</center>";
}
 
if($cur1=="USD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*49.32  . "</center>";
}
}
?>