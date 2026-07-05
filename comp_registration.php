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
                <h5>Join With Us</h5>
            </div>
            <h2>We’re love to assist with<br> your enquiry!</h2>
            <div class="decor">
                <img src="assets/images/shape/decor.png" alt="">
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6">
                <div class="our-service-box">
                    <div class="row"> 
                                    <img src="upload/aqua/com.jpg" alt="" height="2000px" width="1500px">
							
                        </div>

                        <!--<div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-service">
                                <div class="img-holder">
                                    <img src="upload/aqua/comp.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <div class="title">
                                        <h3>For Office</h3>
                                        <div class="decor">
                                            <img src="assets/images/shape/decor.png" alt="">
                                        </div>
                                    </div>
                                    <p>The sources and quality of water available in your area.</p>
                                    
                                </div>
                            </div>
                        </div>-->

                    
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-style1_form"> 
                    <div class="contact-form">
                        <form class="default-form2" enctype="multipart/form-data" method="post">
                            <div class="row">
							
                                <div class="col-xl-12">
								    <label><b>Company Name</b></label>
                                    <div class="input-box"> 
                                        <input type="text" name="form_name" value="" placeholder="Company Name" pattern="[A-Za-z\s]+" title="Please Enter Valid Name."  required>
                                        <div class="icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
								
								<div class="col-xl-12">
								<label><b>Company Address</b></label>
                                    <div class="input-box two">
                                        <textarea name="form_message" placeholder="Enter your Address..." required></textarea>
                                        <div class="icon">
                                            <i class="fa fa-text-width" aria-hidden="true"></i>
                                        </div>
                                    </div>
									</div>
								
								<div class="col-xl-12">
								<label><b>Company Contact</b></label>
                                    <div class="input-box">
                                        <input type="text" name="form_phone" value="" placeholder="Contact" maxlength="10" pattern="[0-9]{10}" title="Ex.9876543210"  required >
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>   
                                </div>
								
								<div class="col-xl-12">
								<label><b>Owner Name</b></label>
                                    <div class="input-box"> 
                                        <input type="text" name="form_ownername" value="" placeholder="Ownwer Name" pattern="[A-Za-z\s]+" title="Please Enter Valid Name."  required>
                                        <div class="icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
								
								<div class="col-xl-12">
								<label><b>Product Image</b></label>
								<div class="input-box"> 
                                        <input type="file" name="comp_image" value="" required style="padding-top: 12px;">
                                        <div class="icon">
                                            <i class="fa fa-image" aria-hidden="true"></i>
                                        </div>
                                    </div>
								<!--
								 <div class="input-box"> 
								 <i class="fa fa-image" aria-hidden="true"></i>
								<input type="file" name="comp_image" value="" >
										<label >Choose file </label>
                                        <div class="icon">
                                            										
                                        </div>
                                    </div>-->
                                </div>
								
								<div class="col-xl-12">
								<label><b>Company Certificate</b></label>
								<div class="input-box"> 
                                        <input type="file" name="comp_certificate" value="" required style="padding-top: 12px;">
                                        <div class="icon">
                                            <i class="fa fa-image" aria-hidden="true"></i>
                                        </div>
                                    </div>
									<!--
								 <div class="input-box"> 
								 <i class="fa fa-image" aria-hidden="true"></i>
								<input type="file" id="exampleInputFile" name="comp_certificate">										
										<label for="exampleInputFile">Choose file </label>
                                        <div class="icon">
                                            
										
                                        </div>
                                    </div>-->
                                </div>
                                
								
									
									<div class="col-xl-12">
									<label><b>Password</b></label>
                                    <div class="input-box"> 
                                        <input type="password" name="form_password" value="" placeholder="Password" required id="myInput">
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
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="round"></span>
                                            <span class="txt">Company Registration</span>
                                        </button> 
                                    </div>  
									
                                </div>
                            </div>
                            
                            <div class="row">
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Main Contact Form Area-->

<?php  
			if(isset($_REQUEST['form_botcheck'])){
					
					// VARIABLE DECLARATION
					$name = $_REQUEST['form_name'];
					$message = $_REQUEST['form_message'];
					$phone = $_REQUEST['form_phone'];
					$ownwername = $_REQUEST['form_ownername'];
					$password = $_REQUEST['form_password'];
					$status = "Active";
					
					move_uploaded_file($_FILES['comp_image']['tmp_name'],"upload/company/".$_FILES['comp_image']['name']);
					
					$image = $_FILES['comp_image']['name'];
					
	                move_uploaded_file($_FILES['comp_certificate']['tmp_name'],"upload/company/".$_FILES['comp_certificate']['name']);
					
					$certificate = $_FILES['comp_certificate']['name'];
					
					//DATE-TIME FUNCTION
					date_default_timezone_set("Asia/Kolkata");
					$c_date = date('Y-m-d H:i:s');
					$u_date = date('Y-m-d H:i:s');
					
					//INSERT QUERY
					 $ins = "insert into company_tb(comp_name,comp_address,comp_contact,comp_ownername,comp_image,comp_certificate,comp_password,comp_status,comp_cdate,comp_udate) values ('$name','$message','$phone','$ownwername','$image','$certificate','$password','$status','$c_date','$u_date')";
					
					// CHECK QUERY IN CONNECTION
					if($con->query($ins) == TRUE){
						header("location:index.php?file=comp_registration");
					}
						
					
				}
			?>