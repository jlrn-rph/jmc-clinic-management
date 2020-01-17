<!-- Stf Regnum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_regNum', 'Stf Regnum:') !!}
    {!! Form::text('stf_regNum', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Regdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_regDate', 'Stf Regdate:') !!}
    {!! Form::date('stf_regDate', null, ['class' => 'form-control','id'=>'stf_regDate']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#stf_regDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Stf Emtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_emType', 'Stf Emtype:') !!}
    {!! Form::text('stf_emType', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_department', 'Stf Department:') !!}
    {!! Form::text('stf_department', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_image', 'Stf Image:') !!}
    {!! Form::text('stf_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_name', 'Stf Name:') !!}
    {!! Form::text('stf_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_gender', 'Stf Gender:') !!}
    {!! Form::text('stf_gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_dob', 'Stf Dob:') !!}
    {!! Form::text('stf_dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_Address', 'Stf Address:') !!}
    {!! Form::text('stf_Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_contact', 'Stf Contact:') !!}
    {!! Form::text('stf_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_email', 'Stf Email:') !!}
    {!! Form::text('stf_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Stf Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stf_status', 'Stf Status:') !!}
    {!! Form::text('stf_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('staff.index') }}" class="btn btn-default">Cancel</a>
</div>
