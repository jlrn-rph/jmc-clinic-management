<!-- Lab Regnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_regNumber', 'Registration Number:') !!}
    {!! Form::text('lab_regNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Regdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_regDate', 'Registration Date:') !!}
    {!! Form::date('lab_regDate', null, ['class' => 'form-control','id'=>'lab_regDate']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#lab_regDate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Lab Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_name', 'Patient Name:') !!}
    {!! Form::text('lab_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lab_address', 'Address:') !!}
    {!! Form::textarea('lab_address', null, ['class' => 'form-control','cols'=>40, 'rows'=>2]) !!}
</div>

<!-- Lab Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_dob', 'Date of Birth:') !!}
    {!! Form::date('lab_dob', null, ['class' => 'form-control','id'=>'lab_dob']) !!}
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
<div class="form-group col-sm-6">
    {!! Form::label('lab_gender', 'Gender:') !!}
    {!! Form::text('lab_gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_contact', 'Contact:') !!}
    {!! Form::text('lab_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_email', 'Lab Email:') !!}
    {!! Form::text('lab_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_doctor', 'Requesting Physician:') !!}
    {!! Form::text('lab_doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Test Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_test', 'Test Ordered:') !!}
    {!! Form::text('lab_test', null, ['class' => 'form-control']) !!}
</div>

<!-- Lab Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_status', 'Status:') !!}
    {!! Form::number('lab_status', null, ['class' => 'form-control']) !!}
</div>
