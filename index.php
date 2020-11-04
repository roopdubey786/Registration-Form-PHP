<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP FORM</title>
  <?php include 'links.php' ?>
  <?php include 'connection.php' ?>
  <?php include 'style.css' ?>
</head>

<body>

		<div class="container register">
			<div class="row">
				<div class="col-md-3 register-left">
					<img src="server.svg" alt=""/>
					<h3>Welcome</h3>
					<p>Please fill all the details Carefully</p>
					<a href="home.php">Check Form</a><br>
				</div>
				<div class="col-md-9 register-right">
		
					<div class="tab-content" id="myTabContent">
						<div class="tab-pan fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<h3 class="register-heading">Apply For Web Developer</h3>
						<form action="" method="POST">
							<div class="row register-form">

								<div class="col-md-6">

									<div class="form-group">
										<input type="text" name="user" class="form-control" placeholder="Enter Your Name" value="" required/>
									</div>

									<div class="form-group">
										<input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" value="" required/>
									</div>

									<div class="form-group">
										<input type="text" name="refer" class="form-control" placeholder="Reference" value="" required/>
									</div>
								</div>
								<div class="col-md-6">

									<div class="form-group">
										<input type="tel" name="degree" class="form-control" placeholder="Enter Your Qualification" value="" required/>
									</div>

									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email-id" value="" required/>
									</div>

									<div class="form-group">
										<input type="text" name="jobprofile" class="form-control" placeholder="WEB DEVELOPER" value="WEB DEVELOPER" required/>
									</div>

									<input type="submit" name="submit" class="btnRegister" value="Register"/>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
</body>
</html> 

<?php

	if (isset($_POST['submit'])) {
		$name = $_POST['user'];
		$degree = $_POST['degree'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$refer = $_POST['refer'];
		$jobprofile = $_POST['jobprofile'];

		$insertquery = " insert into job(name,degree,mobile,email,refer,jobpost) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobprofile') ";
		$res = mysqli_query($con,$insertquery);

		if ($res) {
			?>
			<script>
				alert('Form Submitted Succesfully');
			</script>
			<?php
			}else{
				?>
			<script>
				alert('Form Not - Submitted');
			</script>
			<?php
			
		}
	}

?>
