<!-- jQuery -->
<script src="<?= base_url("resources/plugins/jquery/jquery.min.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("resources/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("resources/dist/js/adminlte.min.js"); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("resources/dist/js/demo.js"); ?>"></script>
<!-- DataTables -->
<script src="<?= base_url("resources/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
<script src="<?= base_url("resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("resources/plugins/datatables-responsive/js/dataTables.responsive.min.js"); ?>"></script>
<script src="<?= base_url("resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"); ?>"></script>

<!-- View / includes / contento -->
<script type="text/javascript">

    $(function()
    {
        $('#table_departments').DataTable();

        <?php if ($this->session->flashdata('error_form')) { ?>
            $('#modal-form-dep').modal('show');
        <?php } ?>

        <?php if(@$show_modal) { ?>
            $('#modal-form-dep').modal('show');
        <?php } ?>
    });


</script>