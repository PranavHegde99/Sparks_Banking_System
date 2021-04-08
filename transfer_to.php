<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
	<title>Transfer</title>
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
	
	body{
		/*background-color: rgb(47,137,158);*/
		/*background-image:url("images/2.jpg");*/
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background: #DBBF9A;
	}
	.form{
		text-align:center;
		
	}
	.button{
		text-align:center;
		/*height: 12px;*/
		/*width: 24px;*/
		
	}

	.c {
color: #494949 !important;
text-transform: uppercase;
/* text-decoration: none; */
/*background: #ffffff;*/
padding: 10px 16px 10px 16px;
border: 4px solid #494949 !important;
display: inline-block;
transition: all 0.4s ease 0s;
border-radius: 24px;
}
.c:hover {
color: #ffffff !important;
background: blue;

cursor:pointer;
border-color: #E0115F !important;
transition: all 0.4s ease 0s;
}
	table{
		background-color:lightblue;
		padding:90px;
		height: 250px;
		width: 600px;
		border:2px ridge black;
		font-family: "Lusitana", serif;
		/*border-radius: 24px;*/
	}
	
	.view h2{
		font-size:40px;
		color:#f29100;
		text-shadow: 2px 2px black;
		font-family: "Lusitana", serif;"
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
        <li><a href="getdetail.php"><span class="glyphicon glyphicon-edit"></span>&nbspTransaction-History</a></li>
        <li><a href="transfer_to.php"><span class="glyphicon glyphicon-user"></span>&nbspMake-Payment</a></li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbspAboutus</a></li>
       </ul>
        </div>
	<center>
		<div class="view">
			<h2>Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" align="center">Receiver Name:  </label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;outline: none;border-radius: 20px;">

           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label> 
			&emsp;&emsp; <input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;border-radius: 20px;" min="0" required></td>
		</tr>
        <tr>
			<td>
				<div class="button">
				<br>&emsp;  <button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit"  >Transfer</button>
				</div>
			</td>
        </tr>
    </table>
	</div>
    </form>
    </div>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>"><font color="black">BACK</font> </button>
			</div>
	</form>
</center>
</body>
</html>