<section class="breadcrumb-area breadcrumb-area--style2">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-2.jpg);"></div>
    <div class="man-outer wow slideInRight" data-wow-duration="2000ms">
        <img src="assets/images/breadcrumb/breadcrumb-man.png" alt="">
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center">
                    <div class="title">
                       <h2>Get in Touch</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Start Single Contact Info Box-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <span class="icon-placeholder"></span>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Sector 7, Gandhinagar,<br> Gujarat 382007</p>
                    </div>
                </div>
            </div>
            <!--End Single Contact Info Box-->
            <!--Start Single Contact Info Box-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <span class="icon-calling"></span>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p><a href="tel:079 2324 1533"><br/>079-2324-1533</a>
                    </div>
                </div>
            </div>
            <!--End Single Contact Info Box-->
            <!--Start Single Contact Info Box-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <span class="icon-email"></span>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p><br/><a href="ccca_bca@yahoo.com">ccca_bca@yahoo.com</a></p>
                    </div>
                </div>
            </div>
            <!--End Single Contact Info Box-->
            <!--Start Single Contact Info Box-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <span class="icon-clock"></span>
                    </div>
                    <div class="text">
                        <h3>Hours</h3>
                        <p>Mon - Sat<br> 9:00 AM  to  2:00 PM </p>
                    </div>
                </div>
            </div>
            <!--End Single Contact Info Box-->

        </div>
    </div>
</section>
<!--End breadcrumb area-->



<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h5>Enquire With Us</h5>
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

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-service">
                                <div class="img-holder">
                                    <img src="upload/aqua/boy2.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <div class="title">
                                        <h3>For Family</h3>
                                        <div class="decor">
                                            <img src="assets/images/shape/decor.png" alt="">
                                        </div>
                                    </div>
                                    <p>The benefits of drinking water for health and wellness.</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
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
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-style1_form">
                    <div class="top-title">
                        <h3>Send Your Message</h3>
                    </div>
                    <div class="contact-form">
                        <form name="contact_form" class="default-form2" method="post">
						
						   
						    <?php
						    if(!isset($_SESSION['uid']))
						    {
						     ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box"> 
                                        <input type="text" name="form_name" value="" placeholder="Name :" pattern="[A-Za-z\s]+" title="Please Enter Valid Name."  required>
                                        <div class="icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" value="" placeholder="Phone :" pattern="[0-9]{10}" title="Ex.9876543210"  required>
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>   
                                </div>  
                            </div>
							<?php } ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box two">
                                        <textarea name="form_message" placeholder="Enter your message..." required></textarea>
                                        <div class="icon">
                                            <i class="fa fa-text-width" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="round"></span>
                                            <span class="txt">Send Message</span>
                                        </button> 
                                    </div>     
                                </div>
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
					
					if(!isset($_SESSION['uid']))
				    {
					// VARIABLE DECLARATION
					$name = $_REQUEST['form_name'];
					$phone = $_REQUEST['form_phone'];
					$userid = 0;
					}
					else
					{
						$userid = $_SESSION['uid'];
						$name = "";
						$phone = "";
						
						
					}
					$message = $_REQUEST['form_message'];
					$status = "Hide";
					
					
					//DATE-TIME FUNCTION
					date_default_timezone_set("Asia/Kolkata");
					$c_date = date('Y-m-d H:i:s');
					$u_date = date('Y-m-d H:i:s');
					
					//INSERT QUERY
					 $ins = "insert into feedback_tb(u_id,f_name,f_contact,f_message,f_status,f_cdate,f_udate) values ('$userid','$name','$phone','$message','$status','$c_date','$u_date')";
					
					
					// CHECK QUERY IN CONNECTION
					if($con->query($ins) == TRUE){
						header("location:index.php?file=contact");
					}
				}
			?>

<!--Start Google map area-->
<section class="google-map-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <div data-content="Sector-7 , Gandhinagar">
                    </div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.859710996262!2d72.64417960000002!3d23.2117827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2bb47d07dc7f%3A0x99ec41d2f527b7c6!2sChaudhari%20College%20Of%20Education!5e0!3m2!1sen!2sin!4v1706611953624!5m2!1sen!2sin" width="1170" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Google map area-->
