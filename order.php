<style>
.cart-table-box .cart-table tbody tr td {
    min-width: 160px;
    padding: 5px 5px;
    border-right: 1px solid #dae5ec;
}
span.contact-lable {
    background: #0067aa;
    color: white;
    padding: 2px 10px;
    border-radius: 11px;
}
.cart-table-box .cart-table tbody tr {
    border-bottom: 1px solid #dae5ec;
    text-align: center;
}
span.btn-success, span.btn-danger, span.btn-warning, span.btn-primary {
    padding: 5px 10px;
    border-radius: 5px;
}
.cart-table-box .cart-table tbody tr td .remove .danger-set::after {
    background: #dc3545;
}
</style>
<section class="cart-area">
    <div class="container">
       
        <div class="row text-right-rtl">
		
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="sec-title text-center">
            <h2>My Order Listing</h2>
            <div class="decor">
                <img src="assets/images/shape/decor.png" alt="">
            </div>
        </div>
                <div class="cart-table-box">
                    
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header clearfix">
                                <tr>
                                    <th class="prod-column">Company Details</th>
                                    <th>Area</th>
                                    <th class="price">Address</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Order date</th>
                                    <th>Remove</th>
                                </tr>    
                            </thead>
                            <tbody>
                                
								<?php
				
								$UID = $_SESSION['uid'];
							
								$sel = "SELECT * FROM order_tb o, company_tb c, area_tb a WHERE o.comp_id = c.comp_id AND o.ar_id = a.ar_id AND o.u_id = '$UID' AND o.o_status != 'Cart'";
								$StatusLable = "";
								$selr = $con->query($sel);
								if(mysqli_num_rows($selr) > 0){
								foreach($selr as $selv){
									
									if($selv['o_status'] == 'Pending'){
										$StatusLable = "warning";
									}else if($selv['o_status'] == 'Confirm'){
										$StatusLable = "primary";
									}else if($selv['o_status'] == 'Complete'){
										$StatusLable = "success";
									}else{
										$StatusLable = "danger";
									}
								
								
								?>
								<tr>
                                    <td>
										<span><?php echo $selv['comp_name']; ?></span><br/>
										<span class="contact-lable"><?php echo $selv['comp_contact']; ?></span>
                                    </td>
                                    <td>
                                        <?php echo $selv['ar_name'].", ".$selv['ar_pincode']; ?> 
                                    </td>
                                    <td><?php echo $selv['o_shippingadd']; ?></td>
                                    <td style="font-weight: bold;">₹ <?php echo $selv['o_totalprice']; ?></td>
									<td><span class="btn-<?php echo $StatusLable; ?>"><?php echo $selv['o_status']; ?></span></td>
									<td><?php echo $selv['o_udate']; ?></td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        
										<div class="remove">
                                            <a href="index.php?file=order_details&oid=<?php echo $selv['o_id']; ?>">
											<span class="icon-shopping-bag"></span>
											</a>
                                        </div>
										<?php if($selv['o_status'] == 'Pending'){ ?>
										<div class="remove">
                                            <a href="index.php?file=order&deleteorder=<?php echo $selv['o_id']; ?>" onclick="return confirm('Are you sure want to delete this Order?');">
											<span class="icon-close danger-set"></span>
											</a>
                                        </div>
										<?php } ?>
                                    </td>
                                </tr>
								
                                <?php } } else { ?>
								<tr>
									<td style="font-weight:bold; color:red; text-align: center;" colspan="6">No any Order!!</td>
								</tr>
								<?php } ?>
								
                                
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>     
        </div>
        
        
    </div>
</section>  


<?php

	if(isset($_REQUEST['deleteorder'])){
		
		$OrderID = $_REQUEST['deleteorder'];
		
		$deletedata = "UPDATE `order_tb` SET o_status = 'Cancel' WHERE o_id = '$OrderID'";
		if($con->query($deletedata) == TRUE){
			header("location:index.php?file=order");
		}
	}

 ?>       
