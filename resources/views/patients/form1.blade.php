<!-- Px Regnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('px_regNumber', 'Patient Number:') !!}
    {!! Form::text('px_regNumber', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Px Regdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('px_regDate', 'Registered Date:') !!}
    {!! Form::date('px_regDate', null, ['class' => 'form-control','id'=>'px_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#px_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: 0
        })
    </script>
@endsection

<!-- Px Image Field
<div class="form-group col-sm-4">
    {!! Form::label('px_image', 'Upload Image:') !!}
    {!! Form::file('px_image', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Px Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_name', 'Patient Name:') !!}
    {!! Form::text('px_name', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Px Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_address', 'Address:') !!}
    {!! Form::textarea('px_address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'maxlength'=> '100', 'required']) !!}
</div>

<!-- Px Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_dob', 'Date of Birth:') !!}
    {!! Form::date('px_dob', null, ['class' => 'form-control','id'=>'px_dob', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#px_dob').datetimepicker({
          minDate: 0
        });
    </script>
@endsection

<!-- Px Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_gender', 'Sex:') !!}
    {!! Form::select('px_gender', ['Male' => 'Male', 'Female' => 'Female'], ['class' => 'form-control', 'required'], ['placeholder' => 'Select Sex']) !!}
</div>

<!-- Px Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('px_contact', 'Contact Number:') !!}
    {!! Form::text('px_contact', null, ['class' => 'form-control', 'pattern'=> '[0-9]{6,13}', 'required', 'autofocus required title'=>'Please enter numbers between 7 to 13 digits', 'pattern'=> '[0-9]{6,13}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Px Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('px_email', 'Email:') !!}
    {!! Form::email('px_email', null, ['class' => 'form-control', 'required', 'maxlength'=> '50']) !!}
</div>

<!-- Px Doctor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_doctor', 'Doctor-in-Charge:') !!}
      <select name="px_doctor" id="px_doctor" class="form-control selectpicker"  data-live-search="true" title="Select Doctor" required>
        @foreach($doctors as $doctor)
            <option value="{{$doctor->dr_name}}"> {{$doctor->dr_name}}</option>
        @endforeach
      </select>
</div>

<!-- Px Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('px_status', 'Status:') !!}
    <select class="form-control" name="px_status" id="px_status" required>
      <option value="">Select Status</option>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
</div>
