<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
		<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css"> 
				<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<style>
		
		body{
			
			background-repeat: no-repeat;
			background-size:cover;
			background: #DBBF9A;
			
		}
		table{
			font-family: "Lusitana", serif;
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:2px solid black;
			border-collapse:collapse;
			}
		th{
			color:purple;
			font-size:22px;
			padding:12px;
		}
		
		td{
			font-size:18px;
			color: black;
			padding: 10px 30px 10px 32px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			/* padding:12px; */
			font-size:40px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
	</style>
	</head>
	<body>
		<div class="nav">
    <ul>
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbspHome</a></li>
        <li><a href="transaction.php"><span class="glyphicon glyphicon-edit"></span>&nbspTransaction-History</a></li>
        <li><a href="transfer_to.php"><span class="glyphicon glyphicon-user"></span>&nbspMake-Payment</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspAboutus</a></li>
       </ul>
        </div>
	
		<h2><?php echo "All Transactions"?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		</form>
		<br>
		
	</body>
</html>