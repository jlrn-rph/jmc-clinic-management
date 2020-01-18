<!-- Stf Regnum Field -->
<div class="form-group col-sm-4">
    {!! Form::label('stf_regNum', 'Registration Number:') !!}
    {!! Form::text('stf_regNum', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Regdate Field -->
<div class="form-group col-sm-4">
    {!! Form::label('stf_regDate', 'Registration Date:') !!}
    {!! Form::date('stf_regDate', null, ['class' => 'form-control','id'=>'stf_regDate']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#stf_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Stf Image Field -->
<div class="form-group col-sm-4">
    {!! Form::label('stf_image', 'Stf Image:') !!}
    {!! Form::text('stf_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Emtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_emType', 'Employee Type:') !!}
    {!! Form::text('stf_emType', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_department', 'Department:') !!}
    {!! Form::text('stf_department', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_name', 'Name:') !!}
    {!! Form::text('stf_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_gender', 'Sex:') !!}
    {!! Form::text('stf_gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_dob', 'Date of Birth:') !!}
    {!! Form::date('stf_dob', null, ['class' => 'form-control']) !!}
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
    {!! Form::textarea('stf_Address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'required']) !!}
</div>

<!-- Stf Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_contact', 'Contact:') !!}
    {!! Form::text('stf_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_email', 'Email:') !!}
    {!! Form::text('stf_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stf_status', 'Status:') !!}
    {!! Form::text('stf_status', null, ['class' => 'form-control']) !!}
</div>
