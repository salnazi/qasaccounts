<!DOCTYPE html>
<html>

<?php 
	include("head.php");
?>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
                    <img src="vendors/images/qas_logo.gif" alt="" style='width:60px;'>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
                

				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" class="tab-wizard2 wizard-circle wizard">
								<h5>Login Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email</label>
											<div class="col-sm-8">
												<input type="email" class="form-control">
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>

									</div>
								</section>
								<!-- Step 2 -->
								<h5>Company Information</h5>
								<section>
                                    <div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Company Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Address</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Landline No.</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Mobile No.</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Contact Person Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5>License & VAT Information</h5>
								<section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Trade License Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">VAT Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
								</section>
                                <!-- Step 4 -->
                                <h5>Overview Information</h5>
                                <section>
                                    <?php
                                        print_r ($_POST);
                                    ?>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <ul class="register-info">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Email Address</div>
                                                    <div class="col-sm-8">example@abc.com</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Username</div>
                                                    <div class="col-sm-8">Example</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Password</div>
                                                    <div class="col-sm-8">.....000</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Full Name</div>
                                                    <div class="col-sm-8">john smith</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Location</div>
                                                    <div class="col-sm-8">123 Example</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="custom-control custom-checkbox mt-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and privacy policy</label>
                                        </div>
                                    </div>
                                </section>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.php" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>