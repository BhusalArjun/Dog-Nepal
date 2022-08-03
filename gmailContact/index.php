<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			margin: 0;
			
		}
	</style>
</head>
<body>
<nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Dogs Nepal</label>
			<ul>
                <li><a href="../admin/adminDash.php">Home</a></li>
                <li><a href="../admin/donorDash.php">Donate </a></li>
                <li><a href="../admin/adoptDash.php">Adopt </a></li>
                <li><a class="active" href="../gmailContact/index.php">Gmail Conatct</a></li>
                <li><a href="../admin/uploadlostdogDash.php">Lost Dog</a></li>
                <li><a href="../admin/findlostdogdash.php">Dog Finder</a></li>
                <li><a href="../adminentry/login.php">Sign out</a></li>
            </ul>
    </nav>
	<div class="container py-3">
		<div class="row">
			<div class="col-md-12"> 
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="card card-outline-secondary">
							<div class="card-header">
								<h3 class="mb-0">Gmail Contact</h3>
							</div>
							<div class="card-body">
								<form class=""  method="post" action="send.php">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Email</label>
										<div class="col-lg-9">
											<input class="form-control" type="email" value=""  placeholder="Enter Email" name="email" required>
										</div>
									</div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Subject</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="" placeholder="Enter Subject" name="Subject" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Message</label>
										<div class="col-lg-9">
											<textarea class="form-control"  placeholder="Write your message" name="message" required></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="sendbutton col-lg-9">
											<input class="btn " type="submit" name="send" value="Send">
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require '../footer/footer.php';?>
</body>
</html>


