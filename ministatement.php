<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
		<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css"> <style>
	html,body
	{
		hight:100%;
	}
		.buttons{
			text-align:center;

		}
		body{
			
			background-repeat: no-repeat;
			background-size:cover;
			hight:100%;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:2px solid gray;
			border-collapse:collapse;
			font-family: "Lusitana", serif;
			}
		th{
			color:purple;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: black;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			font-family: "Lusitana", serif;
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		
		.btn{
			cursor:pointer;
			border-radius: 24px;
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
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
		</form>
		
	</body>
</html>