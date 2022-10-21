<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Departmentos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Departmentos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Departmentos</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" data-target="#modal-form-dep" data-toggle="modal"><i class="fas fa-plus"></i> Nuevo deparmentos</button>
                    </div>
                </div>
                
                <div class="row mt-2">
<!--                     <div class="col-xl-2 col-md-4 col-sm-6 bg-danger">
                        hola
                    </div> -->
                    <div class="col-12">
                        <table class="table table-bordered table-hover" id="table_departments">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Responsable</th>
                                    <th>#Ext</th>
                                    <th>Estatus</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($departments_list as $d) { ?>
                                    <tr>
                                        <td><?= $d->name_department; ?></td>
                                        <td><?= $d->responsable_department; ?></td>
                                        <td><?= $d->ext_department; ?></td>
                                        <td><?= $d->status_department; ?></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->


    </section>
    <!-- /.content -->

    <?php $this->load->view('departmentos/modal'); ?>

</div>