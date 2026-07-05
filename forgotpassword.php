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
            
            <h2>Forgot Password</h2>
            <div class="decor">
                <img src="assets/images/shape/decor.png" alt="">
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6">
				<img src="upload/aqua/forgot.png" height="300px" width="450px" alt="">
            </div>
			
            <div class="col-xl-6">
                <div class="contact-style1_form">
                    <div class="contact-form">
                       <form class="default-form2" enctype="multipart/form-data" method="post">
                            <div class="row">
                                
								
								
								<div class="col-xl-12">
								<label><b>Enter Your Contact</b></label>
                                    <div class="input-box">
                                        <input type="text" name="f_phone" <?php if(isset($_REQUEST['form_botcheck']))
				   {?>value="<?php echo $_REQUEST['f_phone']; ?>" <?php } ?> maxlength="10" placeholder="Contact :" pattern="[0-9]{10}" title="Ex.9876543210"  required>
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>   
                                </div>
								
								<div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-one" type="submit">
                                            <span class="round"></span>
                                            <span class="txt">Submit</span>
                                        </button> <br/>	
                                    </div> 
									
									<?php 
				   if(isset($_REQUEST['form_botcheck']))
				   {
					   
					   $contact = $_REQUEST['f_phone'];
					  
					   
					   $sel = "select * from user_tb where u_contact = '$contact' and  u_status = 'Active'";
					   $r = $con->query($sel);
					   
					   if(mysqli_num_rows($r) > 0)
					   {
                           foreach($r as $v);

                         
                           $contact = $v['u_contact'];
						   $password = $v['u_password'];
						   
                          ?><div class="col-xl-12">
									<label><b>Your Current Password</b></label>
                                    <div class="input-box"> 
                                        <input type="text" value="<?php echo $password; ?>" name="f_psw" placeholder="Password" >
                                        <div class="icon">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>							   
								</div>
<?php								
					   }
					   else
					   {
						?>
					
      <p class="btn btn-block btn-danger">
        Please Enter Valid Contact Number.!
      </p>
	  <?php } } ?>
                                
									

									 									
                                </div>
                            </div>
                            
                            <div class="row">
                                
                            </div>

                        </form>
						<br/>
						<div class="">You Have Already Account ?<a href="index.php?file=login">Sign In</a>
						</div>
						
						
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Main Contact Form Area-->
