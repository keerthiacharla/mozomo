<?php
session_start();

$_SESSION['pro1'] = "6754332";
$_SESSION['pro2'] = "5682314";
$_SESSION['pro3'] = "5698745";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>MOZOMO SHOPPING</title>

		<link rel="stylesheet" href="bootstrap4.css">
	<link rel="stylesheet" href="css/style1.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<style>

</style>

</head>
<body>
	<!-- menu bar  -->
	<div class="container_fluid">
		<div class="row">
			<div class="col">
				<div class="navbar navbar-expand-lg navbar-dark" id="nav-bar">
					<a href="" class="navbar-brand h1">MOZOMO SHOPPING</a>

					<button class="navbar-toggler" data-toggle="collapse" data-target="#menu-toggle">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="menu-toggle">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a href="" class="nav-link">Home</a></li>
						<li class="nav-item dropdown">
						<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
						<div class="dropdown-menu ">
							<a href="" class="dropdown-item">item 1</a>
							<a href="" class="dropdown-item">item 2</a>
							<a href="" class="dropdown-item">item 3</a>
						</div>
					</li>
						<li class="nav-item"><a href="" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>


					</ul>
					<form action=""class="form-inline ">

						<button class="btn btn-success">LOG IN </button>
					</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- carosal -->
		<div class="container_fluid" id="slider">
		<div class="row justify-content-center">
			<div class="col">
				<div class="carousel slide carousel-fade " id="mycarousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
						<li data-target="#mycarousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner ">
						<div class="carousel-item active" data-interval="1000">
							<img src="images/img1.jpg" class="img d-block w-100" alt="">

							<div class="carousel-caption d-none d-md-block">
								<h5>slide 1</h5>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							</div>
						</div>
							<div class="carousel-item" data-interval="1000">
								<img src="images/img2.jpg" class="img d-block w-100" alt="">

								<div class="carousel-caption d-none d-md-block">
								<h5>slide 2</h5>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							</div>
							</div>
							<div class="carousel-item" data-interval="1000">
								<img src="images/img3.jpg" class=" img d-block w-100 h-100" alt="">

								<div class="carousel-caption d-none d-md-block">
								<h5>slide 3</h5>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							</div>
							</div>
							<div class="carousel-item" data-interval="1000">
								<img src="images/img4.jpg" class="img d-block w-100" alt="">
								<div class="carousel-caption d-none d-md-block">
								<h5>slide 4</h5>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
							</div>
							</div>
						</div>

						<!-- arrows -->
						<a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a href="#mycarousel" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>

				</div>

			</div>

		</div>
	</div>
	<!-- items  -->
	<div class="container">
		<div class="row jutify-content-center">
			<!-- 1 st item -->
			<div class="col-md-4">
				<form action="paytm/TxnTest.php" method="POST">
					<label for="pro1"></label>
					<input type="text" value="Sumsung GT-654" name="name1" hidden>

								<h3>Sumsung GT-654</h3>
					<div class="img">
						<img src="images/m1.jpg" alt="">
						<input type="text"name="img1" value="images/m1.jpg" hidden>
						<input type="text" name="proid1"value="<?php echo $_SESSION['pro1']?>" hidden>

					</div>
					<div class="mrpd">
						<input type="text"name="mr1" value="10000"hidden><h3>RS 10,000</h3>
					</div>
					<div class="mdes">
						<p>Lorem ipsum dolor</p>
					</div>
					<input type="submit"name="submit1"id="submit1"value="BUY" class="btn btn-primary">

				</form>
			</div>
			<!-- 2nd item  -->
			<div class="col-md-4">
				<form action="paytm\TxnTest.php" method="POST">
					<label for="pro1"></label>
					<input type="text" value="NOKIA 6600" name="name2" hidden>
									<h3>NOKIA 6600</h3>

					<div class="img">
						<img src="images/m2.jpg" alt="">
						<input type="text"name="img2" value="images/m2.jpg" hidden>
						<input type="text" name="proid2"value="<?php echo $_SESSION['pro2']?>" hidden>

					</div>
					<div class="mrpd">
						<input type="text"name="mr2" value="5000"hidden><h3>RS 5,000</h3>
					</div>
					<div class="mdes">
						<p>Lorem ipsum dolor</p>
					</div>
					<input type="submit"name="submit2"id="submit"value="BUY" class="btn btn-primary">

				</form>
			</div>
			<!-- 3rd item -->
			<div class="col-md-4">
				<form action="paytm/TxnTest.php" method="POST">
					<label for="pro1"></label>
					<input type="text" value="REDMI V6" name="name3" hidden>
									<h3>REDMI V6</h3>
					<div class="img">
						<img src="images/m3.jpg" alt="">

						<input type="text" name="img3" value="images/m3.jpg" hidden>
						<input type="text" name="proid3"value="<?php echo $_SESSION['pro3']?>" hidden>

					</div>
					<div class="mrpd">
						<input type="text"name="mr3" value="20000" hidden><h3>RS 20,000</h3>
					</div>
					<div class="mdes">
						<p>Lorem ipsum dolor</p>
					</div>

					<input type="submit"name="submit3"id="submit3"value="BUY" class="btn btn-primary">

				</form>
			</div>
		</div>
	</div>

</body>
</html>
