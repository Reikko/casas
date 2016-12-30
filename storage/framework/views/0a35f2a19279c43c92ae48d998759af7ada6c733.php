<!-- Modal -->
<div class="container">
    <div class="modal fade" id="modCalle" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Agregando Ciudad</h4>
                </div>
                <div class="modal-body">
                    <?php echo $__env->make('clle.forms.formCalle', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>