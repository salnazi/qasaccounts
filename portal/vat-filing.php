<div class="mobile-menu-overlay"></div>

	<div class="main-container">
        
		<div class="pd-ltr-10">

                <div class="card-box pd-10 height-100-p mb-30">
                    <div class="row align-items-center">
                        
                        <div class="col-md-12">
						<div class="alert alert-info alert-dismissible fade show">
							<h5 style='color:#7F0253;'><?php echo strtoupper(str_replace(array("-", "and"), array(" ","&"), $_GET['id'])); ?><br></h5> <i>Support multiple file upload</i>
						</div>
							<section style='padding:10px;'>
									
								<form action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>" method = "POST" class="tab-wizard2 wizard-circle wizard" enctype="multipart/form-data">

									

									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Tax & Non Sales invoices.</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="trade_license[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Tax Purchase Invoices</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="passport_details[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Import/commercial invoices</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="emirates_id[]" multiple class='form-control'>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Pay via</label>
										<div class="col-sm-8">
											<input type='radio' name='payment' value = 'payment' checked><img src='vendors/images/stripe.png' style='width:180px;'> <br/>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'></label>
										<div class="col-sm-8">
											<input type='checkbox' name = 'agree' value='agree' required> I have read and agreee to qasaccounts.com's Terms of Service and Privacy Policy <br/>
										</div>
									</div>
									<div class="form-group row">  
										<label class="col-sm-4 col-form-label"></label>
										<div class="col-sm-8">
											<input type="submit" class="btn btn-success">
										</div>
									</div>
                                
                            	</form>
							</section>

                        </div>
                    </div>
                </div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				<?php include("footer.php"); ?>
			</div>

		</div>

	</div>

<?php
print_r ($_POST);
print_r ($_FILES);
?>