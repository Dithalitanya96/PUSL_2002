
<div class="modal modal-danger fade" id="accidentDeleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="acceptConfirmationModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4><i class="icon fa fa-ban"></i>   Accident  Delete  Alert!</h4>
            </div>
            <div class="modal-body">
                <p style="font-size: 20px">Are you sure you want to <strong> D E L E T E </strong> this accident from the system ?</p>
            </div>
            <div class="modal-footer">
                <form action="{{action('AccidentController@destroy', 'test')}}" method="post">
                    {{method_field('delete')}}
                    {{csrf_field()}}

                    <input name="acc_id" id="acc_id" type="hidden" value="">

                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No, Go back</button>
                    <button class="btn btn-outline" id="submitbtn">Yes, I'm Sure</button>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>