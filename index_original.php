
<?php

require_once("../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
	//echo "<script>location.href = 'viewbooking.php'</script>";
  }

//$username=$_SESSION['username'];
// $query="SELECT * from customer where username='$username'";
// $result=mysqli_query($conn,$query);
// $row=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment  Details</h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit/Debit Card</span></li>
										  
                                        <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											
											<h3 class="pay-title">Credit Card Info</h3>
											 <a href = "https://ravesandbox.flutterwave.com/pay/justgotechtrial">PROCEED </a>

																
												<!-- <h5>NAME ON CARD</h5>
														<input type="text" value=""  name = "cardname" id = "cardname" >
												   
												
												 <h5>CARD NUMBER</h5>													
													<input class="pay-logo" type="text" name = "cardnum" id = "cardnum" value="0000-000-000-000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '000-000-000-000';}" required="">
												 
												<h5>Email</h5>													
													<input type="email" value=""  name = "email" id = "email" required = "">

												<h5>Amount</h5>													
													<input type="text" placeholder="200"  name = "amount" id = "amount" required = "">
													
												</div>	

												 <div class="transaction">
													<div class="tab-form-left user-form">
    													<h5>EXPIRATION</h5>
												      	<input type="text" name = "expdate" id = "exdate" type="text" value="MM-YY" required />	
														
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" name="cvv" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													 -->

													<!-- <button onclick="myFunction()">PROCEED</button>

														<script>
														function myFunction() {
														location.href = "https://ravesandbox.flutterwave.com/pay/justgotechtrial";
														}
														</script> -->
													</form>
											
											<!-- <div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>-->
										</div> 
									</div>
									<!--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Momo</h3>
											<div class="radio-btns">
												<div class="swit">	
                                                     Banking API 
                                                <div class="tab-for">				
													<h5>MOMO NAME</h5>
														<input type="text" value="" required>
													<h5>MOMO NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '000-000-00000';}" required="">
                                                    <h5>NETWORK</h5>													
                                                        <select name = 'network'>
                                                            <option> MTN </option>
                                                            <option> AIRTEL </option>
                                                            <option> VODAPHONE </option>
                                                         </select>
                                                </div>
											</div>

											
											<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?  <span>If No, <a href = "https://www.paypal.com/ca/for-you/account/create-account">Register</a></span></h4>   
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>  Paypal account 
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">   paypal login submit button
																</div>
																<div class="clear"></div>
															</div>

													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Stripe Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>

												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value ='';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">   Stripe submit button
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											    </div>
										    </div>	
									</div> -->
								</div>	
							</div>
						</div>	
        		</div>
	</div>
</body>
</html>