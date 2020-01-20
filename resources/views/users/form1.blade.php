<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength'=> '50', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-12">
  <label for="role_id">Employee role: </label>
  <select name="role_id" id="role_id" class="selectpicker" data-live-search="true" title="Select Role" required>
    @foreach($roles as $role)
      <option value="{{$role->id}}"> {{$role->role_name}}</option>
    @endforeach
  </select>
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength'=> '50']) !!}
</div>

<!-- Email Verified At Field
<div class="form-group col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::date('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection -->

<!-- Password Field -->
<div class="form-group col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
</div>

<!-- Remember Token Field
<div class="form-group col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>
-->
