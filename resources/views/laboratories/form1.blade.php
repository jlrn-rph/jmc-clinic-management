<!-- Lab Regnumber Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_regNumber', 'Registration Number:') !!}
    {!! Form::text('lab_regNumber', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Lab Regdate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_regDate', 'Registration Date:') !!}
    {!! Form::date('lab_regDate', null, ['class' => 'form-control','id'=>'lab_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#lab_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Lab Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_name', 'Patient Name:') !!}
      <select name="lab_name" id="lab_name" class="form-control selectpicker"  data-live-search="true" title="Select Patient">
    @foreach($patients as $patient)
      <option value="{{$patient->px_name}}"> {{$patient->px_name}}</option>
    @endforeach
  </select>
</div>

<!-- Lab Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lab_address', 'Address:') !!}
    {!! Form::textarea('lab_address', null, ['class' => 'form-control','cols'=>40, 'rows'=>2, 'required', 'maxlength'=>'100']) !!}
</div>

<!-- Lab Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_dob', 'Date of Birth:') !!}
    {!! Form::date('lab_dob', null, ['class' => 'form-control','id'=>'lab_dob', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#lab_dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Lab Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_gender', 'Gender:') !!}
    {!! Form::select('lab_gender', ['Male' => 'Male', 'Female' => 'Female'], ['class' => 'form-control', 'required'], ['placeholder' => 'Select Sex']) !!}
</div>

<!-- Lab Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_contact', 'Contact:') !!}
    {!! Form::text('lab_contact', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 7 to 13 digits', 'pattern'=> '[0-9]{6,13}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Lab Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_email', 'Email:') !!}
    {!! Form::text('lab_email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Lab Doctor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_doctor', 'Requesting Physician:') !!}
    <select name="lab_doctor" id="lab_doctor" class="form-control selectpicker"  data-live-search="true" title="Select Doctor">
      @foreach($doctors as $doctor)
          <option value="{{$doctor->dr_name}}"> {{$doctor->dr_name}}</option>
      @endforeach
    </select>
</div>

<!-- Lab Test Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_test', 'Test Ordered:') !!}
    <select name="lab_test" id="lab_test" class="form-control selectpicker" data-live-search="true" title="Test Type">
    @foreach($labtests as $labtest)
      <option value="{{$labtest->lt_name}}"}}> {{$labtest->lt_name}}</option>
    @endforeach
  </select>
</div>

<!-- Lab Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_status', 'Status:') !!}
    <select class="form-control" name="lab_status" id="lab_status">
      <option value="">Select Status</option>
      <option value="Pending">Pending</option>
      <option value="On-process">On-going</option>
      <option value="Done">Done</option>
    </select>
</div>
