<style>
.contact-form form input[type="text"], .contact-form form input[type="file"], .contact-form form input[type="email"], .contact-form form textarea , .contact-form form input[type="password"] {
    position: relative;
    display: block;
    background: #ecf2f6;
    width: 100%;
    height: 55px;
    border: 1px solid #ecf2f6;
    color: #585858;
    font-size: 16px;
    font-weight: 400;
    font-style: normal;
    padding-left: 65px;
    padding-right: 30px;
    border-radius: 27px;
    transition: all 500ms ease;
    font-family: var(--thm-font);
}

</style>

<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h5>Sign In With Us</h5>
            </div>
            <h2>Sign in to start your session</h2>
            <div class="decor">
                <img src="assets/images/shape/decor.png" alt="">
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6">
				<img src="upload/aqua/reg.jpg" alt="">
            </div>
			
            <div class="col-xl-6">
                <div class="contact-style1_form">
                    <div class="contact-form">
                       <form class="default-form2" enctype="multipart/form-data" method="post">
                            <div class="row">
                                
								
								
								<div class="col-xl-12">
								<label><b>User Contact</b></label>
                                    <div class="input-box">
                                        <input type="text" name="f_phone" maxlength="10" placeholder="Contact :" pattern="[0-9]{10}" title="Ex.9876543210"  required>
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>   
                                </div>
                                
									<div class="col-xl-12">
									<label><b>Password</b></label>
                                    <div class="input-box"> 
                                        <input type="password" name="f_psw" placeholder="Password" required id="myInput">
                                        <div class="icon">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
									
                                
								
								<input type="checkbox" onclick="myFunction()"> Show Password
								<script>
									function myFunction() {
									var x = document.getElementById("myInput");
									if (x.type === "password") {
										x.type = "text";
									} else {
										x.type = "password";
									}
									}
								</script>									   
								</div>

									<div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-one" type="submit">
                                            <span class="round"></span>
                                            <span class="txt">Submit</span>
                                        </button> 
                                    </div>  									
                                </div>
                            </div>
                            
                            <div class="row">
                                
                            </div>

                        </form>
						<br/>
						<div class="">You don't have account ?<a href="index.php?file=registration">Sign Up</a>
						</div>
						<div class="" style="float: right; margin-top: -26px;"><a href="index.php?file=forgotpassword">Forgot Password?</a>
						</div>
						
						<?php 
				   if(isset($_REQUEST['form_botcheck']))
				   {
					   
					   $contact = $_REQUEST['f_phone'];
					   $password = $_REQUEST['f_psw'];
					   
					   $sel = "select * from user_tb where u_contact = '$contact' and u_password = '$password' and u_status = 'Active'";
					   $r = $con->query($sel);
					   
					   if(mysqli_num_rows($r) > 0)
					   {
                           foreach($r as $v);

                           session_start();
                           
                           $_SESSION['ucontact'] = $contact;
						   $_SESSION['uid'] = $v['u_id'];
						   
                           header("location:index.php?file=home");						  
					   }
					   else
					   {
						?>
      <p class="btn btn-block btn-danger">
        Please Enter Valid Contact or Password.!
      </p>
	  <?php } } ?>
						
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Main Contact Form Area-->
