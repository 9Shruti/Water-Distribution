
 
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
					  <th>Contact</th>
					  <th>Image</th>
					  <th>Address</th>
					  <th>Password</th>
					  <th>Status</th>
                      <th>Created Date</th>
                      <th>Updated Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				$j = 1;
					$sel = "select * from user_tb order by user_tb.u_id DESC";
					$selr = $con->query($sel);
					foreach($selr as $selv){
				?>
                  <tr>
                    <td><?php echo $j++; ?></td>
                    <td><?php echo $selv['u_name']; ?></td>
					<td><?php echo $selv['u_contact'] ?> </td>
					<td><img src="../upload/user/<?php echo $selv['u_image'];?>" height="50px" width="50px"/></td>
                    
                    <td><?php echo $selv['u_address']; ?></td>
					<td><?php echo $selv['u_password']?></td> 
                    <td>
					
					<?php if($selv['u_status'] == 'Active'){ ?>
					<a href="index.php?file=user&uid=<?php echo $selv['u_id']; ?>&ustatus=<?php echo $selv['u_status']; ?>" >
				<span class="badge bg-success"><?php echo $selv['u_status']; ?></span>
				<?php } else { ?>
				<a href="index.php?file=user&uid=<?php echo $selv['u_id']; ?>&ustatus=<?php echo $selv['u_status']; ?>" >	
				<span class="badge bg-danger"><?php echo $selv['u_status']; ?></span>
				<?php } ?></td>
                    <td><?php echo $selv['u_cdate']; ?></td>
                    <td><?php echo $selv['u_udate']; ?></td>
					<td>
                    <a href="index.php?file=user&delid=<?php echo $selv['u_id']; ?>" onclick="return confirm('Are you sure want to delete.?')" > 
				<button type="button" class="btn btn-danger">Delete</button>
				</a></td>
					<?php } ?>
					
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
	
	<?php
		
		if(isset($_REQUEST['ustatus'])){
			
			$UIDs = $_REQUEST['uid'];
			$UStatus = $_REQUEST['ustatus'];
			
			if($UStatus == 'Active'){
				$NewStatus = "Deactive";
			}else{
				$NewStatus = "Active";
			}
			//DATE-TIME FUNCTION
			date_default_timezone_set("Asia/Kolkata");
			$u_date = date('Y-m-d H:i:s');
			
			// delete QUERY
			$upd = "update user_tb set u_status = '$NewStatus', u_udate = '$u_date' where u_id = '$UIDs'order by user_tb.u_id DESC";
			if($con->query($upd) == TRUE){
				header("location:index.php?file=user");
			}
			
		}
	?>
	
	<?php
		
		if(isset($_REQUEST['delid'])){
			
			$userId = $_REQUEST['delid'];
			
			// delete QUERY
			$Del = "delete from user_tb where u_id = '$userId'";
			if($con->query($Del) == TRUE){
				header("location:index.php?file=user");
			}
			
		}
	
	?>
    <!-- /.content -->
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