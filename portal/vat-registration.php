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
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Copy of Trade License<br><small> (must not be expired)</small style='color:#7F0253;'></label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="trade_license[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Passport copy of the owner/partners who own the license <br><small style='color:#7F0253;'>(must not be expired).</small></label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="passport_details[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Copy of Emirates ID of the owner/partners who owns the license <br><small style='color:#7F0253;'>(must not be expired).</small></label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="emirates_id[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Memorandum of Association (MOA) <br><small style='color:#7F0253;'> (not required for sole establishments).</small></label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="moa[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Contact details of the company <br><small style='color:#7F0253;'>(complete address and P.O Box).</small></label>
										<div class="col-sm-8">
											<div class="input-box">
                                                <textarea cols='70' rows='7' name='contact_details' class='form-control'></textarea>
											</div>
										</div>
									</div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <hr><h6>Contact Information</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Mobile Number </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                            <input type="text" name="vat_mobile" class='form-control' placeholder='Enter valid mobile number'>
											</div>
										</div>
                                        <label class="col-sm-2 col-form-label" style='color:#3B3B3B;font-weight:bold;'> Email </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                            <input type="text" name="vat_email" placeholder='Enter valid email' class='form-control'>
											</div>
										</div>
									</div>


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <hr><h6>Bank Details</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Account Number </label>
										<div class="col-sm-3">
											<div class="input-box" > 
												<input type="text" name="bank_ac_no" placeholder='' class='form-control'>
											</div>
										</div>
                                        <label class="col-sm-2 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Account Name </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                                <input type="text" name="bank_ac_name" placeholder='' class='form-control'>
											</div>
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Bank Name </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                                <input type="text" name="bank_name" placeholder='' class='form-control'>
											</div>
										</div>
                                        <label class="col-sm-2 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Branch Name </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                                <input type="text" name="branch_name" placeholder='' class='form-control'>
											</div>
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label" style='color:#3B3B3B;font-weight:bold;'>IBAN </label>
										<div class="col-sm-3">
											<div class="input-box" > 
                                            <input type="text" name="iban" placeholder='' class='form-control'>
											</div>
										</div>

									</div>
                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <hr><h6></h6>
                                        </div>
                                    </div>

                                    <div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Turnover Declaration for the last 12 months <br><small style='color:#7F0253;'>(must be signed, stamped and printed on company letterhead).</small></label>
										<div class="col-sm-8">
											<div class="input-box" > 
                                                <input type="file" name="turnover[]" multiple class='form-control'>
											</div>
										</div>
									</div>

                                   
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Business is doing export and import Option</label>
										<div class="col-sm-8">
											<input type='radio' name='imp_exp' value = 'yes' required> YES
											<input type='radio' name='imp_exp' value = 'no' required> NO 
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Business is dealing with any custom department? <br><small style='color:#7F0253;'>If yes, then attach the VAT Registration Letter.</small> </label>
										<div class="col-sm-8">
											<div class="input-box" > 
                                                <input type="file" name="vat_letter[]" multiple class='form-control'>
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