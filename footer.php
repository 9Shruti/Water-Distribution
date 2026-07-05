<!--Start Partner Area-->
<style>
.imgeffect{
    color: white;
    background-color: white;
    border-radius: 20px;
    height: 180px;
    margin-top: 36px;
}

</style>
<section class="partner-area">
    <div class="partner-bg" style="background-image: url(assets/images/parallax-background/partner-bg.jpg);"></div>
    <div class="container">
        <ul class="partner-box">
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img src="../w-distribution/upload/logo/bi.png" class="imgeffect" alt="Awesome Image" width="250px" height="50px"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img src="../w-distribution/upload/logo/ki.png" class="imgeffect" alt="Awesome Image" width="250px" height="50px"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img src="../w-distribution/upload/logo/k.png" class="imgeffect" alt="Awesome Image" width="250px" height="50px"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img src="../w-distribution/upload/logo/h.png" class="imgeffect" alt="Awesome Image" width="250px" height=""></a>
            </li>
            <!--End Single Partner Logo Box-->
        </ul>
    </div>
</section> 
<!--End Partner Area--> 
 
 <!--Start Footer-->
    <div class="footer-style2">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row text-right-rtl">
                    <!--Start single footer widget-->
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="single-footer-widget single-footer-widget-style2 marginbtm50">
                            <div class="our-company-info">
                                <div class="footer-logo">
                                    <a href="index.php?file=home"><img src="upload/other/icon.png" alt="" height="90px" width="90px"/></a>
                                </div>
                                <div class="text-box">
                                    <p>Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by desire all cannot trouble that are bound to ensue.</p>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="single-footer-widget single-footer-widget-style2 martop">
                            <div class="border-left"></div>
                            <div class="title">
                                <h3>Account</h3>
                                <div class="decor">
                                    <img src="assets/images/shape/decor.png" alt="">
                                </div>
                            </div>
                            <div class="footer-widget-links" style="display: flex; justify-content: space-between;">
                                <?php 
								if(!isset($_SESSION['uid']))
								{
								?>
								<ul class="pull-left">
                                    <li><a href="index.php?file=login">User Sign In</a></li>    
                                    <li><a href="index.php?file=registration">User Sign Up</a></li>             
                                    <li><a href="company/index.php?file=login" target="_blank">Company Sign In</a></li>                                    
                                </ul>
                                <ul class="pull-left marleft-80" style="padding-right: 50px;">
                                    <li><a href="index.php?file=comp_registration">Company Sign Up</a></li>    
                                    <li><a href="index.php?file=login">My Cart</a></li>  
                                    <li><a href="index.php?file=login">My Order</a></li>      
                                </ul>
                                <?php 
								}
                                else
								{
                                ?>
								<ul class="pull-left">
                                    <li><a href="index.php?file=profile">Profile</a></li>    
                                     <li><a href="index.php?file=cart">My Cart</a></li>  
                                                                              
                                </ul>
                                <ul class="pull-left marleft-80" style="padding-right: 50px;">
								    <li><a href="index.php?file=order">My Order</a></li>
                                    <li><a href="index.php?file=logout">Logout</a></li>    
                                       
                                </ul>
                                <?php } ?>     
							   
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="single-footer-widget single-footer-widget-style2 martop">
                            <div class="border-left"></div>
                            <div class="title">
                                <h3>Information</h3>
                                <div class="decor">
                                    <img src="assets/images/shape/decor.png" alt="">
                                </div>
                            </div>
                            <div class="footer-widget-links">
                                <ul class="pull-left">
                                    <li><a href="index.php?file=home">Home</a></li>    
                                    <li><a href="index.php?file=product">Products</a></li>             
                                                                        
                                </ul>
                                <ul class="pull-left marleft-60">
                                    <li><a href="index.php?file=about">About Us</a></li>    
                                    <li><a href="index.php?file=contact">Contact Us</a></li>    
                                     
                                </ul>                     
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="order-box">
                            <div class="title-holder">
                                <div class="icon">
                                    <div class="icon-bg" style="background-image: url(assets/images/shape/order-icon-bg.png);"></div>
                                    <span class="icon-water-1"></span>
                                </div>
                                <div class="text">
                                    <h2>Fresh supply of water</h2>
                                    <p>We're committed to making great water affordable for every homeowner.</p>
                                </div>
                            </div>
                            <div class="btns-box">
							    <?php 
								if(!isset($_SESSION['uid']))
								{
								?>
                                <a class="btn-one" href="index.php?file=login">
                                    <div class="round"></div>
                                    <span class="txt">Place Order</span>
                                </a>
								<?php 
								}
								else
								{
								?>
								<a class="btn-one" href="index.php?file=product">
                                    <div class="round"></div>
                                    <span class="txt">Place Order</span>
                                </a>
								<?php } ?>
								
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Footer-->

    <div class="footer-bottom footer-bottom--style2">
        <div class="container">
            <div class="bottom-inner clearfix">
                <div class="copyright pull-left">
                    <p>Copyright &copy; 2024  E-Commerce With Water Distribution. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
