<?php
	$select = "--Select--";
	$date = date('Y');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Eye Witness</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="keywords" content="Eyewitness"/>
		<meta name="description" content="Eyewitness Application">
		<meta name="author" content="Toxaswift">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type='text/css' rel='stylesheet' href='css/bootstrap.css' />
		<link type='text/css' rel='stylesheet' href='css/defined.css' />
		<link type='text/css' rel='stylesheet' href='css/blink.css' />
		<script type='text/javascript' src='js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.js'></script>
		<script type='text/javascript' src='js/toxaswift.js'></script>
		<script type='text/javascript' src='js/blink.js'></script>
	</head>
	<body>
		<div class='top-header'>
			<div class='container'>
				<div class='row'>
				
					<div class='col-md-4 col-sm-4 col-xs-5 small-off'>
						<div class='pic-images'>
							<ul class='list-inline'>
								<li class='facebook'><a href=''><i class='fa fa-facebook'></i></a></li>
								<li class='twitter'><a href=''><i class='fa fa-twitter'></i></a></li>
								<li class='facebook'><a href=''><i class='fa fa-google-plus'></i></a></li>
								<li class='twitter'><a href=''><i class='fa fa-linkedin'></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class='col-md-6 col-sm-4'>
					
					</div>
					
					<div class='col-md-2 col-sm-4 col-xs-12'>
						<button type='button' class='btn btn-success' data-toggle='modal' data-target='#popUpWindow'>Login</button>
						<button type='button' class='btn btn-success' data-toggle='modal' data-target='#popUpWindow1'>Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		<nav class='navbar navbar-default'>
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='index.php'><img class='img-responsive logo' src='img/eye_logo.png' /></a>
				</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='index.php'>Home</a></li>
						<li><a href='#'>About Us</a></li>
						<li><a href='contact.php'>Contact Us</a></li>
						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<section id='contact_bg'>
		<br />
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-md-6 col-sm-6 col-xs-12'>
						<h1 class='text-danger'>GET IN TOUCH WITH US NOW!</h1>
						<form>
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>Name:</span>
								<input type='text' name='contact_name_txt' placeholder='Fullname' class='form-control' />
							</div>
							<br />
							
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>Email:</span>
								<input type='email' name='contact_name_txt' placeholder='E-mail' class='form-control' />
							</div>
							<br />
							
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>Phone:</span>
								<input type='text' name='contact_name_txt' placeholder='Phone Number' class='form-control' />
							</div>
							<br />
							
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>Message:</span>
								<textarea name='message_txt' class='form-control' placeholder='Service Details'>
								
								</textarea>
							</div>
							<br />
							
							<div>
								<input type='submit' name='contact_btn' value='Submit' class='btn btn-danger btn-block' />
							</div>
						</form>
					</div>
					
					<div class='col-md-6 col-sm-6 col-xs-12'>
						<h1 class='text-danger'>CONTACT DETAILS</h1>
						<p>EyeWitness Inc. Block D3 Aso Rock Villa, Chubu-aro Estate, Awka.</p>
						<p><b>Mobile:</b> +2347036798652</p>
						<p><b>Email:</b> info@eyewitness.com</p>
						<p><b>Website:</b><a> www.eyewitness.ng</a></p>
					</div>
				</div>
			</div>
			<br />
			<br />
			<br />
		</section>
		
		<footer>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-md-3 col-sm-3'>
						<div class='container-fluid'>
							<ul class='footer_nav'>
								<h5 class='links'>EYEWITNESS</h5>
								<li><a href=''>Features</a></li>
								<li><a href=''>Security</a></li>
								<li><a href=''>Download</a></li>
								<li><a href=''>Eyewitness Web</a></li>
							</ul>
						</div>
					</div>
					<div class='col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>COMPANY</h5>
							<li><a href=''>About</a></li>
							<li><a href=''>Careers</a></li>
							<li><a href=''>Brand Center</a></li>
							<li><a href=''>Get in Touch</a></li>
							<li><a href=''>Blog</a></li>
						</ul>
					</div>
					<div class='col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>DOWNLOAD</h5>
							<li><a href=''>iPhone</a></li>
							<li><a href=''>Android</a></li>
							<li><a href=''>Windows Phone</a></li>
							<li><a href=''>BlackBerry</a></li>
							<li><a href=''>Nokia</a></li>
						</ul>
					</div>
					<div class='col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>HELP</h5>
							<li><a href=''>FAQ</a></li>
							<li><a href=''>Twitter</a></li>
							<li><a href=''>Facebook</a></li>
							<li><a href=''>Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<footer id='footer2'>
			<div class='container-fluid'>
				<div class='row'>
					<div class='container-fluid'>
						<div class='col-md-3 col-sm-3'>
							<p class='terms'><?php echo $date ?> &#169 EyeWitness Inc.</p>
						</div>
						<div class='col-md-3 col-sm-3'>
							<p class='terms'><a href='#'>Privacy & Terms</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- LOGIN MODAL BEGINS HERE -->
		<div class='modal fade' id='popUpWindow'>
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class='modal-dialog'>
				<div class='modal-content'>
				
					<!-- header -->
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
						<h3 class='modal-title'>Log In</h3>
					</div>
					
					<!-- body (form) -->
					<div class='modal-body'>
						<form role='form'>
							<div class='form-group'>
								<input type='email' name='login_email_txt' class='form-control' placeholder='Email'>
							</div>
							<div class='form-group'>
								<input type='password' name='login_password_txt' class='form-control' placeholder='Password'>
							</div>
							<br />
							<input type='submit' name='login_btn' value='Log In' class='btn btn-success btn-block' />
						</form>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- SIGN-UP MODAL BEGINS HERE -->
		<div class='modal fade' id='popUpWindow1'>
			<br />
			<div class='modal-dialog'>
				<div class='modal-content'>
				
					<!-- header -->
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
						<h3 class='modal-title'>Sign Up</h3>
					</div>
					
					<!-- body (form) -->
					<div class='modal-body'>
						<form method='POST' action='index.php' role='form'>
							<div class='form-group'>
								<input type='text' name='signup_name_txt' class='form-control' placeholder='Fullname'>
							</div>
							<div class='form-group'>
								<input type='email' name='signup_email_txt' class='form-control' placeholder='Email'>
							</div>
							<div class='form-group'>
								<input type='password' name='signup_password_txt1' class='form-control' placeholder='Password'>
							</div>
							<div class='form-group'>
								<input type='password' name='signup_password_txt2' class='form-control' placeholder='Confirm Password'>
							</div>
							<div class='form-group'>
								<input type='phone' name='signup_phone_txt' class='form-control' placeholder='Phone Number'>
							</div>
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>State:</span>
								<select name='signup_state' class='form-control'>
									<option><?php echo $select; ?></option>
									<?php
										$state_array = array("Abia", "Adamawa", "Akwa ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara", "FCT Abuja");
											
										foreach($state_array as $state){
											echo "<option>{$state}</option><br>";
										}
									?>
								</select>
							</div>
							<br />
							<div class='form-group'>
								<input type='text' name='city_txt' class='form-control' placeholder='City'>
							</div>
							<div class='form-group'>
								<input type='text' name='address_txt' class='form-control' placeholder='Address'>
							</div>
							<div class='input-group'>
								<span class='input-group-addon' id='basic-addon2'>Upload Image:</span>
								<input type='file' name='dp_img' class='form-control' required placeholder='Upload Image'>
							</div>
							<br />
							<input type='submit' name='signup_btn' value='Sign Up' class='btn btn-success btn-block' />
						</form>
					</div>
					
				</div>
			</div>
	</body>
</html>