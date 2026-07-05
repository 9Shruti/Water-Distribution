    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Details</h3>  
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow:auto">
                <table id="example1" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Company</th>
					  <th>Category</th>
					  <th>Type</th>
					  <th>Product</th>
					  <th>Image</th>
					  <th>Price</th>
					  <th>Details</th>
					  <th>Disclaimer</th>
					  <th>Status</th>
                      <th>Created Date</th>
                      <th>Updated Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				$j = 1;
					$sel = "select * from product_tb,category_tb,company_tb,type_tb where product_tb.cat_id=category_tb.cat_id and product_tb.comp_id=company_tb.comp_id and product_tb.type_id=type_tb.type_id order by product_tb.p_id DESC";
					$selr = $con->query($sel);
					foreach($selr as $selv){
				?>
                  <tr>
                    <td><?php echo $j++; ?></td>
                    
                    <td><?php echo $selv['comp_name']; ?><br/>
					<span class="badge bg-info"><?php echo $selv['comp_contact']; ?></span></br>
					<span class="badge bg-success"><?php echo $selv['comp_ownername']; ?></span>
					</span></td>
                    <td><?php echo $selv['cat_name']; ?></td>
                    <td><span class="badge bg-info"><?php echo $selv['type_name']; ?></span></td>
					<td><?php echo $selv['p_name']; ?></td>
					<td><img src="../upload/product/<?php echo $selv['p_image'];?>" height="50px" width="50px"/></td>
					<td>₹ <?php echo $selv['p_price']?></td> 
					<td><?php echo $selv['p_details']?></td>					
					<td><?php echo $selv['p_disclaimer']?></td>					
					
					
                    <td>
					
					<?php if($selv['p_status'] == 'Active'){ ?>
					<a href="index.php?file=product&pid=<?php echo $selv['p_id']; ?>&pstatus=<?php echo $selv['p_status']; ?>" ><span class="badge bg-success"><?php echo $selv['p_status']; ?></span></a>
				<?php } else { ?>
				<a href="index.php?file=product&pid=<?php echo $selv['p_id']; ?>&pstatus=<?php echo $selv['p_status']; ?>"><span class="badge bg-danger"><?php echo $selv['p_status']; ?></span></a>
				<?php } ?></td>
                    <td><?php echo $selv['p_cdate']; ?></td>
                    <td><?php echo $selv['p_udate']; ?></td>
					<td>
                    <a href="index.php?file=product&delid=<?php echo $selv['p_id']; ?>" onclick="return confirm('Are you sure want to delete.?')" > 
				<button type="button" class="btn btn-danger">Delete</button>
				</a></td>
				</tr>
					<?php } ?>
					
                    
                  </tbody>
                </table>
              </div>
			  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
          </div>
          <!-- /.col -->
      
      <!-- /.container-fluid -->
    </section>
	<?php
		
		if(isset($_REQUEST['pstatus'])){
			
			$PIDs = $_REQUEST['pid'];
			$PStatus = $_REQUEST['pstatus'];
			
			if($PStatus == 'Active'){
				$NewStatus = "Deactive";
			}else{
				$NewStatus = "Active";
			}
			//DATE-TIME FUNCTION
			date_default_timezone_set("Asia/Kolkata");
			$u_date = date('Y-m-d H:i:s');
			
			// delete QUERY
			$upd = "update product_tb set p_status = '$NewStatus', p_udate = '$u_date' where p_id = '$PIDs'";
			if($con->query($upd) == TRUE){
				header("location:index.php?file=product");
			}
			
		}
	?>
	
	<?php
		
		if(isset($_REQUEST['delid'])){
			
			$proId = $_REQUEST['delid'];
			
			// delete QUERY
			$Del = "delete from product_tb where p_id = '$proId'";
			if($con->query($Del) == TRUE){
				header("location:index.php?file=product");
			}
			
		}
	
	?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
	