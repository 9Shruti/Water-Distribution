<section class="cart-area">
    <div class="container">
       
        <div class="row text-right-rtl">
		
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="sec-title text-center">
            <h2>My Cart Details</h2>
            <div class="decor">
                <img src="assets/images/shape/decor.png" alt="">
            </div>
        </div>
                <div class="cart-table-box">
                    
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header clearfix">
                                <tr>
                                    <th class="prod-column">Your Product</th>
                                    <th class="hide-me"></th>
                                    <th>Type</th>
                                    <th class="price">Price</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>    
                            </thead>
                            <tbody>
                                
								<?php
				
								$UID = $_SESSION['uid'];
							
								$sel = "SELECT p.p_name, p.p_image, c.p_price, c.cart_quantity, c.cart_type, c.cart_totalprice, c.cart_id,p.p_id FROM cart_tb c, order_tb o, product_tb p WHERE c.o_id = o.o_id AND c.p_id = p.p_id AND o.o_status = 'Cart' AND O.u_id = '$UID'";
								
								$selr = $con->query($sel);
								$Total = 0;
								if(mysqli_num_rows($selr) > 0){
								foreach($selr as $selv){
									
									$Total += $selv['cart_totalprice'];
								
								
								?>
								<tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="index.php?file=productdetails&proid=<?php echo $selv['p_id']; ?>"><img src="upload/product/<?php echo $selv['p_image'];?>" alt=""></a>
                                            </div>
                                            <div class="title">
                                                <h3 class="prod-title"><?php echo $selv['p_name']; ?></h3>
                                            </div>    
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <div class="input-box">
                                            <?php echo $selv['cart_type']; ?>
                                        </div>
                                    </td>
                                    <td class="price">₹ <?php echo $selv['p_price']; ?></td>
                                    <td class="sub-total">₹ <?php echo $selv['cart_totalprice']; ?></td>
                                    <td>
                                        <div class="remove">
                                            <a href="index.php?file=cart&deletecart=<?php echo $selv['cart_id']; ?>" onclick="return confirm('Are you sure want to delete this product?');">
											<span class="icon-close"></span>
											</a>
                                        </div>
                                    </td>
                                </tr>
								
                                <?php } ?>
								<tr>
									<td style="font-weight:bold; text-align: right;" colspan="4">Total Amount</td>
									<td style="font-weight:bold;">₹ <?php echo $Total; ?></td>
									<td></td>
								</tr>
								<?php } else { ?>
								<tr>
									<td style="font-weight:bold; color:red; text-align: center;" colspan="6">No any Products in Cart!!</td>
								</tr>
								<?php } ?>
								
                                
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>     
        </div>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="cart-button-box">
                    <div class="apply-coupon">    
						<a href="index.php?file=product" >
						<button class="btn-one" type="button" name="check" style="width: 100%;"><span class="round"></span><span class="txt">Continue Shopping</span></button>
						</a>
                    </div>
                    <div class="update-cart" style="width: 35%;">
					<?php if(mysqli_num_rows($selr) > 0){ ?>
                       <form method="post">
					   
					   <div class="select-box">
                                <select class="wide" name="area" required>
                                <option value="">Area</option>
								<?php 
										$sel = "select * from area_tb where ar_status = 'Active' order by ar_id DESC";
										$selr = $con->query($sel);
										foreach($selr as $selv){
								?>
								<option value="<?php echo $selv['ar_id'].'-'.$selv['ar_pincode'];?>"><?php echo $selv['ar_name'];?> | <?php echo $selv['ar_pincode'];?></option>
										<?php } ?>
                                
								
                                </select>
								<br/>
								<br/>
								
                            </div>
							<br/>
							<div class="input-box">
								<textarea name="address" placeholder="Shipping Address" required style="width: 100%; background: #ecf2f6; padding: 10px; border-radius: 25px; margin-bottom: 15px;"></textarea>
							</div>
					   
                        <button class="btn-one" type="submit" name="checkout" style="width: 100%;"><span class="round"></span><span class="txt">Checkout</span></button>
						
						</form>
					<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>  


<?php 
	
	if(isset($_REQUEST['checkout'])){
		
		$areaarray = explode('-',$_REQUEST['area']);
		$areaid = $areaarray[0];
		$pincode = $areaarray[1];
		$address = $_REQUEST['address'];
		$Groupcode = rand(1111,9999);
		
		//DATE-TIME FUNCTION
		date_default_timezone_set("Asia/Kolkata");
		$c_date = date('Y-m-d H:i:s');
		$u_date = date('Y-m-d H:i:s');
		
		// Get order list
		
		$GetOrder = "SELECT o_id OID, (SELECT SUM(c.cart_totalprice) FROM `cart_tb` c WHERE c.o_id = OID AND c.cart_status ='Active') FinalPrice, (SELECT COUNT(c.cart_id) FROM `cart_tb` c WHERE c.o_id = OID AND c.cart_status ='Active') CartCount  FROM `order_tb` WHERE u_id = '$UID' AND o_status = 'Cart'";
		$GetOrderr = $con->query($GetOrder);
		if(mysqli_num_rows($GetOrderr) > 0){
			foreach($GetOrderr as $GetOrderv){
				
				$OrderID = $GetOrderv['OID'];
				$FinalPrice = $GetOrderv['FinalPrice'];
				$CartCount = $GetOrderv['CartCount'];
				
				if($CartCount > 0){
					
					// update order table
					$OrderUpdate = "UPDATE `order_tb` SET ar_id = '$areaid', ar_pincode = '$pincode', o_totalprice = '$FinalPrice', o_shippingadd = '$address', o_status = 'Pending', o_udate = '$u_date' WHERE o_id = '$OrderID' AND u_id = '$UID'";
					
					if($con->query($OrderUpdate) == TRUE){
						
						// Add Payment Data
						$AddPayment = "INSERT INTO `payment_tb`(`o_id`, `pay_amount`, `pay_status`, `pay_cdate`, `pay_groupcode`) VALUES ('$OrderID','$FinalPrice','Failed','$c_date','$Groupcode')";
						$con->query($AddPayment);
					}
					
				}
			
			}
			
			header("location:index.php?file=payment&paycode=".$Groupcode);
			
		}
		
	}


?>

<?php

	if(isset($_REQUEST['deletecart'])){
		
		$CartID = $_REQUEST['deletecart'];
		
		$deletedata = "DELETE FROM `cart_tb` WHERE cart_id = '$CartID' AND u_id = '$UID'";
		if($con->query($deletedata) == TRUE){
			header("location:index.php?file=cart");
		}
	}

 ?>       
