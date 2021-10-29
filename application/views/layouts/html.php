<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
<?php if($this->session->flashdata('info')): ?>        
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('danger')): ?>  
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> opps!</h4>
        <?php echo $this->session->flashdata('danger'); ?>
        </div>
    <?php endif; ?>
    <?php include 'head.php'?>
    <?php include 'header.php'?>


<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#205B6F;">
    <!-- Brand Logo -->
        <?php include 'sidebar.php'?>
   </aside>
   

   <?=$content?>

  <?php include 'footer.php'?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->
  <?php include 'javascript.php' ?>
    </body>
</html>