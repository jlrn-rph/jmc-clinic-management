<div class="modal fade" id="role-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Role Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('role_name', 'Role Name:') !!}
                {!! Form::text('role_name', null, ['class' => 'form-control', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)",  'maxlength'=> '20']) !!}
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>
