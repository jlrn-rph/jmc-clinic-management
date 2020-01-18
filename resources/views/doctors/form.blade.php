<!-- Dr Regnum Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dr_regNum', 'Doctor Number:') !!}
    {!! Form::text('dr_regNum', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Dr Regdate Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dr_regDate', 'Date of Registration:') !!}
    {!! Form::date('dr_regDate', $doctor->dr_regDate, ['class' => 'form-control','id'=>'dr_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dr_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Dr Image Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dr_image', 'Image:') !!}
    {!! Form::file('dr_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Specialist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_specialist', 'Specialization:') !!}
      <select name="dr_specialist" id="dr_specialist" class="form-control selectpicker"  data-live-search="true" data-live-search-placeholder="Select Specialization" title="Select Specialization">
        @foreach($specialization as $specialize)
          <option value="{{$specialize->sp_name}}"{{ $specialize->sp_name == $doctor->dr_specialist ? 'selected' : ''}}> {{$specialize->sp_name}}</option>
        @endforeach
      </select>
</div>

<!-- Dr License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_license', 'License Number:') !!}
    {!! Form::text('dr_license', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_name', 'Name:') !!}
    {!! Form::text('dr_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_gender', 'Gender:') !!}
    {!! Form::text('dr_gender', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_dob', 'Date of Birth:') !!}
    {!! Form::date('dr_dob', $doctor->dr_dob, ['class' => 'form-control','id'=>'dr_dob', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dr_dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Dr Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('dr_address', 'Address:') !!}
    {!! Form::textarea('dr_address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'required']) !!}
</div>

<!-- Dr Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_contact', 'Contact Number:') !!}
    {!! Form::text('dr_contact', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_email', 'Email:') !!}
    {!! Form::text('dr_email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Fee Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_fee', 'Professional Fee:') !!}
    {!! Form::text('dr_fee', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Timein Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_timeIn', 'Time In:') !!}
    {!! Form::time('dr_timeIn', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Timeout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_timeOut', 'Time Out:') !!}
    {!! Form::time('dr_timeOut', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Daysavail Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_daysAvail', 'Available Days:') !!}
    {!! Form::text('dr_daysAvail', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dr Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_status', 'Status:') !!}
    {!! Form::number('dr_status', null, ['class' => 'form-control', 'required']) !!}
</div>
