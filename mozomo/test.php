<?php



	$conn = mysqli_connect("localhost","root","","mozomo") or die("connection failed");




	if(isset($_POST['submit3'])){

		 echo $id3 = $_POST['proid3'];
		 echo $name3 = $_POST['name3'];


		$sql3 = "SELECT * FROM pro WHERE pid = {$id3}";


		$res3 = mysqli_query($conn,$sql3) or die("Query failed");

			if(mysqli_num_rows($res3) == true){

				while($row3 = mysqli_fetch_assoc($res3)){


					echo "<img src='../images/{$row3['img']}' height='150px' width='100px' class='images'>";
						$process = "processing...";

						 $sql33 = "INSERT INTO pay(o_id,pid,pname,amt,status) VALUES ('{$_SESSION['ord']}','{$id3}','{$name3}','{$_POST['mr3']}','{$process}')";

						  $res33 = mysqli_query($conn,$sql33) or die("3Query failed");

						}
					}else{
						echo "not";
					}
				}else if(isset($_POST['submit2'])){

					 $id2 = $_POST['proid2'];
					  $name2 = $_POST['name2'];


					$sql2 = "SELECT * FROM pro WHERE pid = {$id2}";

					$res2 = mysqli_query($conn,$sql2) or die("Query failed");

						if(mysqli_num_rows($res2) == true){

							while($row2 = mysqli_fetch_assoc($res2)){


								$process = "processing...";

								echo "<img src='../images/{$row2['img']}' height='150px' width='100px' class='images'>";
								$sql22 = "INSERT INTO pay(o_id,pid,pname,amt,status) VALUES ('{$_SESSION['ord']}','{$id2}','{$name2}','{$_POST['mr2']}','{$process}')";

							  $res22 = mysqli_query($conn,$sql22) or die("3Query failed");



								}
						}else{
							echo "not";
						}
				}else if(isset($_POST['submit1'])){

					echo  $id1 = $_POST['proid1'];
					 echo $name1 = $_POST['name1'];

					$sql1 = "SELECT * FROM pro WHERE pid = {$id1}";

					$res1 = mysqli_query($conn,$sql1) or die("Query failed");

						if(mysqli_num_rows($res1) == true){

							while($row1 = mysqli_fetch_assoc($res1)){


								$process = "processing...";

							echo "<img src='../images/{$row1['img']}' height='150px' width='100px' class='images'>";

								$sql1 = "INSERT INTO pay(o_id,pid,pname,amt,status) VALUES ('{$_SESSION['ord']}','{$id1}','{$name1}','{$_POST['mr1']}','{$process}')";

							  $res10 = mysqli_query($conn,$sql1) or die("3Query failed");

							  }
						}else{
							echo "not";
						}
					}





		?>
