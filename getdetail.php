<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
    <title>viewUser</title>
    <link rel="stylesheet" href="button2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="home.css"> 
<link href="https://fonts.googleapis.com/css2?family=Lusitana&display=swap" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<style>
	.btn{
			cursor:pointer;
		}
		body{
			text-align:center;
			background: #DBBF9A;


		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		table{
			font-family: 'Lusitana', serif;
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:3px solid black;
			border-collapse:collapse;
			/*background: green;*/
		}
		th{
			color: pink;
			font-size:22px;
			padding:12px;
		}
		
		td{
			text-align:center;
			font-size:18px;
			color: black;
			padding: 0px 40px 0px 40px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			/* text-shadow: 1px 1px black; */
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
	
		.button1 {
			color: #fff !important;
			text-transform: uppercase;
			text-decoration: none;
			background: #67a7c2;
			padding: 8px 12px 8px 12px;
			border-radius: 40px;
			display: inline-block;
			border: none;
			transition: all 0.4s ease 0s;
		}

		.button1:hover {
			text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
			-webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
			-moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
			transition: all 0.4s ease 0s;
		}

		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("images/agrement.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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
	<h1 style="color:white;text-shadow: 1px 1px black;font-size: 38px; font-family: 'Lusitana', serif;">User Information</h1>
    <table class="flat-table-1">
		<thead>
			<th>Sl. No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Amount</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Monika">View Details</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Priya">View Details</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Mahi">View Details</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Shipra">View Details</button>
				</form>
			</td>
    

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Diksha">View Details</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Piya">View Details</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
    
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Manish">View Details</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Arjun">View Details</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Arnav">View Details</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Vishal">View Details</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table>
</div>
</body>
</html>
