<?php
 session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MOZOMO Invoice <?php echo $_SESSION['ord'];?></title>
	<link rel="stylesheet" href="../bootstrap4.css">
	<link rel="stylesheet" href="invoice.css">

</head>
<body>
		<?php


	$conn = mysqli_connect("localhost","root","","mozomo") or die("connection failed");
	$ord = $_SESSION['ord'];

	$sql = "SELECT * FROM pay LEFT JOIN pro ON pay.pid = pro.pid WHERE pay.o_id = '{$ord}'";

	$res = mysqli_query($conn,$sql) or die("Query Failed");

	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){


			?>
	<div class="container" id="in_maincont">
		<div class="row">
			<div class="col-12">
				<h1>MOZOMOS </h1>
				<h3>Payment Invoice </h3>
			</div>

			<div class="hline"></div>

			<div class="col-3" id="in-add">
				<h4 class="" >Shiped From : </h4><br>
				<p class="leed" >My Company <br>
				   10/45/20-1, New Town, <br>
				   Phase -1, Yalahanka, <br>
				   Banglore - 2300654
				   </p>

			</div>
			<div class="col-3"id="in-add">
				<h4>Shiping To : </h4><br>
				<p class="leed">A Srinivas <br>
				   10 - 40, marlu, <br>
				   Street No 1, <br>
				   Mahabubnager -509001
				   </p>

			</div>
			<div class="col-4"id="in-add">
				<h4>Invoice Details : </h4><br>
				<p class="leed"><b>Product Name :</b> <?php echo $row['pid']?>  <br>
				   <b>Trasaction Id :</b> <?php echo $row['o_id']?><br>
				   <b>Billing Date :</b> <?php echo $row['date']?> <br>
				  <b>Payment Thru :</b> PAYTM-<?php echo $row['bank']?> <br>
				   </p>

			</div>
			<div class="col-2"id="in-add">


				   <img src="../images/<?php echo $row['img']?>" alt="">

			</div>

		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<table class="table table-lg" >
					<thead class="bg-primary text-white">

						<th>Product Name</th>
						<th>Quantity</th>
						<th>Amount</th>
					</thead>
					<tbody>
						<tr>

							<td><?php echo $row['pname']?></td>
							<td>1</td>
							<td class="text-right"><?php echo "RS-: " .$row['amt']?></td>
						</tr>
						<tr>

							<td><?php echo "GST TAX" ?></td>

							<td colspan="4" class="text-right"><?php echo "RS 500"?></td>
						</tr>
						<tr>

							<td><?php echo "Delivary Charges" ?></td>

							<td colspan="4" class="text-right"><?php echo " RS:- 50"?></td>
						</tr>

						<tr id="in-tot">
							<hr><hr>
							<td><h5><b>TOTAL :</b></h5></td>

							<td colspan="3"><h5 class="text-right"><b><?php echo "RS-: ".number_format($row['amt'] + 500+ 50)?>/- </b></h5></td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
		<hr>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<table class="table">
					<tbody>

					</tbody>
				</table>
			</div>
		</div>

		<div class="hline"></div>
		<div class="row">
		<div class="col-md-12" id="list">
			<ul>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Morbi vitae libero nec mauris laoreet dapibus a varius purus.
			Nunc dignissim lorem a sapien tempor, ut sollicitudin nunc interdum.
			Pellentesque condimentum turpis id lacinia ornare.
			Nullam facilisis ipsum eu ornare rutrum.
			Phasellus eu sapien rutrum, tincidunt magna fringilla, dignissim lorem
			</ul>
		</div>
	</div>
	<button class="btn btn-primary m-auto" id="pri_btn" onclick="myfun()">Print</button>
	<button class="btn btn-primary"><a href="http://localhost/mozomo" class="text-reset">Back To Home</a></button>
	</div>
		<?php
				}
	}else{
		echo "not ";
	}


?>
</body>

</html>
<script type="">
	function myfun(){
		window.print();
	}
</script>
