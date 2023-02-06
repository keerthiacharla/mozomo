<?php
session_start();

	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	$_SESSION['ord'] = "ORDS" . rand(10000,99999999);

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
	<link rel="stylesheet" href="../bootstrap4.css">
	<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
	<div class="container-fiuld" id="main_container">
			<div class="col-md-12 ">
		<div class="row justify-content-center " >
			
			<div class="row justify-content-center" id="pay_container">
				<div class="col-md-12 ">
					<form method="post" class="d-block m-auto" action="pgRedirect.php">
						<table border="2" class="table-lg  ">
							<thead class="bg-primary ">
								<h3 class="text-center">
									<?php 

												if(isset($_POST['submit3'])){
												
													echo $_POST['name3'];

												}else if(isset($_POST['submit2'])){

													echo $_POST['name2'];

												}else if(isset($_POST['submit1'])){

													echo $_POST['name1'];
												}
											

										?>
								</h3>
				
								<tr colspan="3"	class="text-center"id="image_div">
									<?php include "../test.php"	?>
								</tr>
								<tr class="text-white">
									
									<th>Label</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>
							
								<tr>
									
									<td><label>ORDER_ID::*</label></td>
									<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
										name="ORDER_ID" autocomplete="off"
										value="<?php echo $_SESSION['ord'] ?>"readonly>
									</td>
								</tr>
								<tr>
									
									
									<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden></td>
									</tr>
								<tr>
									
									<td><label>INDUSTRY_TYPE_ID ::*</label></td>
									<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"readonly></td>
								</tr>
								<tr>
									
									<td><label>Channel ::*</label></td>
									<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
										size="12" name="CHANNEL_ID" autocomplete="off" value="WEB"readonly>
									</td>
								</tr>
								<tr>
									
									<td><label>txnAmount*</label></td>
									<td><input title="TXN_AMOUNT" tabindex="10"
										type="text" name="TXN_AMOUNT"
										value="<?php 

												if(isset($_POST['submit3'])){
												
													echo $_POST['mr3'];

												}else if(isset($_POST['submit2'])){

													echo $_POST['mr2'];

												}else if(isset($_POST['submit1'])){

													echo $_POST['mr1'];
												}
											

										?>" readonly>
									</td>
								</tr>
								<tr>
									
									<td colspan="3" class="text-right"><input value="NEXT" type="submit"	onclick=""></td>
								</tr>
								
							</tbody>
						</table>
					* - Mandatory Fields
					</form>
				</div>
				
			</div>
		</div>
	</div>	
	</div>	
</body>
</html>
