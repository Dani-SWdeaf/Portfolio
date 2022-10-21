<div class="modal fade" id="modal-form-dep">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Formulario - Departmentos </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open('departmentos/guardarDepartment'); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name_department">Nombre: </label>
                            <input type="text" class="form-control" name="name_department" id="name_department">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label for="responsable_department">Responsable: </label>
                            <input type="text" class="form-control" name="responsable_department" id="responsable_department">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="ext_department">No. Ext: </label>
                            <input type="text" class="form-control" name="ext_department" id="ext_department">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>