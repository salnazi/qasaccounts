<div class="mobile-menu-overlay"></div>

	<div class="main-container">
        
		<div class="pd-ltr-10">

                <div class="card-box pd-10 height-100-p mb-30">
                    <div class="row align-items-center">
                        
                        <div class="col-md-12">
						<div class="alert alert-info alert-dismissible fade show">
							<h5 style='color:#7F0253;'><?php echo strtoupper(str_replace(array("-", "and"), array(" ","&"), $_GET['id'])); ?> <br></h5> <i>Support multiple file upload</i>
						</div>
							<section style='padding:10px;'>
									
								<form action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>" method = "POST" class="tab-wizard2 wizard-circle wizard" enctype="multipart/form-data">

									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Choose Service Date </label>
										<div class="col-sm-8">
											<div class="input-box">
												<span style='font-weight:bold'>&nbsp;&nbsp;From :</span> <input type="date" name="s_from" style='border:none;'>
												<span style='font-weight:bold'>To :</span> <input type="date" name="s_to" style='border:none;'>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Bank Statements</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="bank_statement[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Invoice Receipts</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="inv_rept[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Expense Receipts</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="exp_rept[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Pay-roll Details</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="payroll_detail[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Investment Details</label>
										<div class="col-sm-8">
											<div class="input-box">
												<input type="file" name="invest_detail[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Loans Details</label>
										<div class="col-sm-8">
											<div class="input-box" > 
												<input type="file" name="loan_detail[]" multiple class='form-control'>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>No. of Invoices</label>
										<div class="col-sm-8">
											<input type='radio' name='inv' value = '0-1' required> 0 - 1 invoices &nbsp;&nbsp;&nbsp;<span style='color:#7F0253;font-weight:bold;padding:2px;width:100px;'>750 &nbsp;&nbsp;AED</span> <br/>
											<input type='radio' name='inv' value = '2-50' required>  2 - 50 invoices <span style='color:#7F0253;font-weight:bold;padding:2px;width:100px;'>1000 AED</span> <br/>
											<input type='radio' name='inv' value = '50plus' required>  51 + invoices &nbsp;&nbsp;&nbsp;<span style='color:#7F0253;font-weight:bold;padding:2px;width:100px;'>2500 AED</span> 
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>I would like get</label>
										<div class="col-sm-8">
											<input type='checkbox' name='statementReq' value = 'profit-and-loss-statement'> Profit & Loss Statement <br/>
											<input type='checkbox' name='statementReq' value = 'balance-sheet'> Balance Sheet <br/>
											<input type='checkbox' name='statementReq' value = 'cash-flow'> Cash Flow 
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Comment</label>
										<div class="col-sm-8">
											<textarea cols='70' rows='7' name='comment' class='form-control'></textarea>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" style='color:#3B3B3B;font-weight:bold;'>Subscription</label>
										<div class="col-sm-8">
											<input type='radio' name='sub' value='OneTime' required > One Time 
											<input type='radio' name='sub' value='Monthly' required> Monthly <br/>
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