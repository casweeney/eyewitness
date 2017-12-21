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
		
		<section id='white_bg'>
			<br />
			<br />
			<div class='container'>
				<div class='row'>
					<div class='col-md-2'>
					
					</div>
					<div class='col-md-4 col-sm-6 col-xs-12'>
						<img class='img-responsive' src='img/phones.png' />
					</div>
					<div class='col-md-1'>
					
					</div>
					<div class='col-md-4 col-sm-6 col-xs-12'>
						<br />
						<h2 class='tag'>Simple. Secure. <br />Reliable messaging. <br />Quick response.</h2>
						<p class='text-justify about'>With Eyewitness, you can report incidents that was witnessed by you to the appropraite agency for quick intervention by the agency to provide a solution to the witnessed and reported problem. </p>
						<p class='text-justify about'>You are expected to have a copy of this application installed on your gadgets which are carried along with you everywhere you go ...  </p>
						<p><input type='submit' id='' value='DOWNLOAD NOW' class='btn btn-block btn-lg btn-danger' /></p>
						<div class='row'>
							<div class='col-md-6 col-sm-6'>
								<a href='#'><img class='img-responsive' src='img/appstore.png' /></a>
								<h5><b>Requirements:</b></h5>
								<p>Requires iPhone OS 2.2 or later. WiFi, Edge, or 3G network connection sometimes required.</p>
							</div>
							
							<div class='col-md-6 col-sm-6'>
								<a href='#'><img class='img-responsive' src='img/playstore.png' /></a>
								<h5><b>Requirements:</b></h5>
								<p>Requires Android 4.0 and higher. WiFi, Edge, or 3G network connection sometimes required.</p>
							</div>
						</div>
					</div>
					
					<div class='col-md-2'>
					
					</div>
				</div>
			</div>
		</section>
		<br />
		<br />
		
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-6 col-xs-12'>
					<div class='panel panel-danger'>
						<div class='panel-body'>
							<h3>How To Use Eyewitness</h3>
							<p><b>STEP 1:</b> Visit <a href='#'>www.eyewitness.ng</a> to download a copy of the application for your device and Install.</p>
							<p><b>STEP 2:</b> Install the downloaded eyewitness application on your mobile device.</p>
							<p><b>STEP 3:</b> Run the installed eyewitness application.</p>
							<p><b>STEP 4:</b> Click on the camera icon and take pictures of incidents.</p>
							<p><b>STEP 5:</b> Click on the camera icon and take pictures of incidents.</p>
							<p><b>STEP 6:</b> Fill in the required form and report incident.</p>
						</div>
					</div>
				</div>
				
				<div class='col-md-6 col-xs-12'>
					<div class='panel panel-danger'>
						<div class='panel-heading'>
							<h3>Subscribe For Newsletters</h3>
						</div>
						<div class='panel-body'>
							<form>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Name</span>
									<input type='text' name='subscribe_name_txt' placeholder='Type Your Name ...' class='form-control' />
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Email</span>
									<input type='text' name='subscribe_name_txt' placeholder='Type Your Email ...' class='form-control' />
								</div>
								<br />
								<input type='submit' value='Subscribe' class='btn btn-danger' />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id='newsletter' class='container-fluid'>
			<br />
			<div class='well'>
				<h4><marquee>... INCIDENTS REPORTED VIA EYEWITNESS ...</marquee></h4>
			</div>
			<div class='row'>
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c1.jpg' alt='DBSS Students'>
				  <div class='caption'>
					<h3>Riots</h3>
					<p>
						The youth today run the risk of being use as tools for 
						perpetrating evils. Moral sense of
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c2.jpg' alt='About DBSS'>
				  <div class='caption'>
					<h3>Theft</h3>
					<p>
						The Rector is the Superior of the local Salesian Community. He 
						animates and
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c3.jpg' alt='map'>
				  <div class='caption'>
					<h3>Family Violence</h3>
					<p>
						You are very much welcome to Don Bosco Secondary School, 
						Ibolo-Obosi.
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c4.jpg' alt='map'>
				  <div class='caption'>
					<h3>Robbery</h3>
					<p>
						You are very much welcome to Don Bosco Secondary School, 
						Ibolo-Obosi.
					</p>
				  </div>
				</div>
			  </div>
			</div>
			
			
			<div class='row'>
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c5.png' alt='DBSS Students'>
				  <div class='caption'>
					<h3>Fighting</h3>
					<p>
						The youth today run the risk of being use as tools for 
						perpetrating evils. Moral sense of
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c6.jpg' alt='About DBSS'>
				  <div class='caption'>
					<h3>Road Accidents</h3>
					<p>
						The Rector is the Superior of the local Salesian Community. He 
						animates and directs the whole community towards
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c8.jpg' alt='map'>
				  <div class='caption'>
					<h3>Fire Outbreak</h3>
					<p>
						You are very much welcome to Don Bosco Secondary School, 
						Ibolo-Obosi.
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='thumbnail'>
				  <img src='img/c9.jpg' alt='map'>
				  <div class='caption'>
					<h3>Flood</h3>
					<p>
						You are very much welcome to Don Bosco Secondary School, 
						Ibolo-Obosi.
					</p>
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
		
		<footer>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-xs-12 col-md-3 col-sm-3'>
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
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>COMPANY</h5>
							<li><a href=''>About</a></li>
							<li><a href=''>Careers</a></li>
							<li><a href=''>Brand Center</a></li>
							<li><a href=''>Get in Touch</a></li>
							<li><a href=''>Blog</a></li>
						</ul>
					</div>
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>DOWNLOAD</h5>
							<li><a href=''>iPhone</a></li>
							<li><a href=''>Android</a></li>
							<li><a href=''>Windows Phone</a></li>
							<li><a href=''>BlackBerry</a></li>
							<li><a href=''>Nokia</a></li>
						</ul>
					</div>
					<div class='col-xs-12 col-md-3 col-sm-3'>
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
		</div>
	</body>
</html>