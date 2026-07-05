<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("include/head.php");?>
<?php include_once("include/config.php"); ?>
</head>

  <?php 
  
        if(isset($_REQUEST['file']))
		{
		   $filename = $_REQUEST['file'];
		}
		else if($_SERVER['QUERY_STRING']=="")
		{
		  header("location:index.php?file=login");
		  exit();
		}
		else
		{
		   header("location:index.php?file=login");
		   exit();
		}
			
		if(!file_exists(getcwd()."/middle/".$_REQUEST['file'].".php"))
		{
			header("location:index.php?file=404");
			exit();
		}
		
		
		
  
  ?>
<?php if($filename != 'login'){
		include_once("include/header.php");
		} ?>
<body class=" <?php if($filename != 'login'){ ?>hold-transition sidebar-mini layout-fixed <?php } else{ ?> hold-transition login-page <?php } ?>">
<?php if($filename != 'login'){ ?>
<div class="wrapper">
<?php } else{ ?>
<div>
<?php } ?>

<?php if($filename != 'login'){ ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include_once("include/leftbar.php");?>
  </aside>
<?php } ?>
<?php if($filename != 'login'){ ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="text-transform: capitalize;"><?php echo $filename ; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?file=home">Home</a></li>
              <li class="breadcrumb-item active" style="text-transform: capitalize;"><?php echo $filename ; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
	<?php } ?>
	<?php include_once("middle/".$filename.".php");?>
	<?php if($filename != 'login'){ ?>
    </section>
    <!-- /.content -->
  </div>
  <?php } ?>
  <!-- /.content-wrapper -->
  <?php if($filename != 'login'){ ?>
  <footer class="main-footer">
    <?php include_once("include/footer.php"); ?>
  </footer>
<?php } ?>
  <!-- Control Sidebar -->
 <?php include_once("include/script.php"); ?>
</body>
</html>
<?php ob_flush(); ?>
