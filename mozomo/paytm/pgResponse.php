<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {

	if ($_POST["STATUS"] == "TXN_SUCCESS") {

		$conn = mysqli_connect("localhost","root","","mozomo") or die("connection failed");

			$status = " successful";



			$sql = "UPDATE pay SET bank ='{$_POST['BANKNAME']}', date = '{$_POST['TXNDATE']}', status = '$status' WHERE o_id = '{$_POST['ORDERID']}'";

			if(mysqli_query($conn,$sql) == true){
				echo "<h1>Plese wait....</h1>";

				echo "<script> setTimeout(() => {
						window.location.href ='invoice.php'
					},1300);    </script>";

			}else{
				echo "<script>alert('not done')</script>";
			}
				}
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{

		}



else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
