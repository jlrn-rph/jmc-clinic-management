<!-- Dr Regnum Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dr_regNum', 'Doctor Number:') !!}
    {!! Form::text('dr_regNum', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Regdate Field -->
<div class="form-group col-sm-4">
    {!! Form::label('dr_regDate', 'Date of Registration:') !!}
    {!! Form::date('dr_regDate', null, ['class' => 'form-control','id'=>'dr_regDate']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dr_regDate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
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
    {!! Form::text('dr_specialist', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_license', 'License Number:') !!}
    {!! Form::text('dr_license', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_name', 'Name:') !!}
    {!! Form::text('dr_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_gender', 'Gender:') !!}
    {!! Form::text('dr_gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_dob', 'Date of Birth:') !!}
    {!! Form::date('dr_dob', null, ['class' => 'form-control','id'=>'dr_dob']) !!}
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
    {!! Form::textarea('dr_address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2]) !!}
</div>

<!-- Dr Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_contact', 'Contact Number:') !!}
    {!! Form::text('dr_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_email', 'Email:') !!}
    {!! Form::text('dr_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Fee Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_fee', 'Professional Fee:') !!}
    {!! Form::text('dr_fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Timein Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_timeIn', 'Time In:') !!}
    {!! Form::text('dr_timeIn', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Timeout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dr_timeOut', 'Time Out:') !!}
    {!! Form::text('dr_timeOut', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Daysavail Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_daysAvail', 'Available Days:') !!}
    {!! Form::text('dr_daysAvail', null, ['class' => 'form-control']) !!}
</div>

<!-- Dr Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dr_status', 'Status:') !!}
    {!! Form::number('dr_status', null, ['class' => 'form-control']) !!}
</div>
