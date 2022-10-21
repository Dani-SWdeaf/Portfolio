<!DOCTYPE html>
<html>

<head>
    <title>AdminLTE 3 | Blank Page</title>
    <?php $this->load->view("includes/head"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <?php $this->load->view("includes/inicio_wrapper"); ?>

    <!-- Navbar -->
    <?php $this->load->view("includes/nav"); ?>

    <!-- Main Sidebar Container -->
    <?php $this->load->view("includes/menu"); ?>

    <!-- Content Wrapper. Contains page content -->
    <?php $this->load->view("departmentos/contento"); ?>
    
    
    <!-- /.content-wrapper -->
    <?php $this->load->view("includes/footer"); ?>
    
    <!-- Control Sidebar -->
    <?php $this->load->view("includes/aside_sidebar"); ?>
    
    <?php $this->load->view("includes/fin_wrapper"); ?>
    <!-- /.control-sidebar -->
    
    <!-- jQuery -->
    <!-- Bootstrap 4 -->
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <?php $this->load->view("js/javascript"); ?>
</body>

</html>