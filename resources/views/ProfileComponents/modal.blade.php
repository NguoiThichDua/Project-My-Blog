 <!-- modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                You want to delete this account "{{$user->name}}"
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::open(['action' => ['ProfileController@destroy', $user->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>      <!-- end modal -->