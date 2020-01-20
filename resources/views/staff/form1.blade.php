<!-- Stf Regnum Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_regNum', 'Registration Number:') !!}
    {!! Form::text('stf_regNum', null, ['class' => 'form-control', 'maxlength'=>'10', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Stf Regdate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_regDate', 'Registration Date:') !!}
    {!! Form::date('stf_regDate', null, ['class' => 'form-control','id'=>'stf_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#stf_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Stf Image Field
<div class="form-group col-sm-4">
    {!! Form::label('stf_image', 'Stf Image:') !!}
    {!! Form::text('stf_image', null, ['class' => 'form-control']) !!}
</div>-->

<!-- Stf Emtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_emType', 'Employee Type:') !!}
    <select class="form-control" name="stf_emType" id="stf_emType" required>
      <option value="">Select Type</option>
      <option value="Full-Time">Full-Time</option>
      <option value="Part-Time">Part-Time</option>
    </select>
</div>

<!-- Stf Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_department', 'Department:') !!}
    <select class="form-control" name="stf_department" id="stf_department" required>
      <option value="">Select Department</option>
      <option value="Medical">Medical</option>
      <option value="Admin">Admin</option>
    </select>
</div>

<!-- Stf Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_name', 'Name:') !!}
    {!! Form::text('stf_name', null, ['class' => 'form-control', 'required', 'maxlength'=> '50', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Stf Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_gender', 'Sex:') !!}
    <select class="form-control" name="stf_gender" id="stf_gender" required>
      <option value="">Select Sex</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
</div>

<!-- Stf Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_dob', 'Date of Birth:') !!}
    {!! Form::date('stf_dob', null, ['class' => 'form-control', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#stf_dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Stf Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_Address', 'Address:') !!}
    {!! Form::textarea('stf_Address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'required', 'maxlength'=> '100']) !!}
</div>

<!-- Stf Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_contact', 'Contact:') !!}
    {!! Form::text('stf_contact', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 7 to 13 digits', 'pattern'=> '[0-9]{6,13}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Stf Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_email', 'Email:') !!}
    {!! Form::text('stf_email', null, ['class' => 'form-control', 'required', 'maxlength'=> '50']) !!}
</div>

<!-- Stf Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_status', 'Status:') !!}
    <select class="form-control" name="stf_status" id="stf_status" required>
      <option value="">Select Status</option>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
</div>
