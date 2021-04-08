<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title>User Name: <?php echo $name?></title>
	<link rel="stylesheet" href="button2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="home.css"> 
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<style>
	.btn{
			cursor:pointer;
			border-radius: 24px;
		}
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			background: #DBBF9A;
			}
		table{
			font-family: 'Lusitana', serif;
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:3px solid #282828;
			border-collapse:collapse;
			}
		th{
			color:purple;
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
	
		.btn1 {
			background-color:RoyalBlue;
			border: none;
			color: white;
			border-radius:23px;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:  DodgerBlue;
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

	<br>
    <div class="view">
    <table class="flat-table-1">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Amount</th>
			
		</tr>
		
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td><?php echo $name?></td>
			<td><?php echo $mail?></td>
			<td><?php echo $amount?></td>
		</tr>

        </table>

        </div>
		<br>
        
    <div class="buttons">
	<a href="transfer_to.php">
		<button class="btn">Transfer To</button>
	</a>
	</div>
	

    <div class="buttons"><br>
		<a href="ministatement.php">
		<button class="btn">Mini Statement</button>
		</a>

	</div>
	<form action="getdetail.php" method="post">
			<div class="buttons">
				<br>
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">Back</button>
			</div>
	</form>


    </body>
</html>