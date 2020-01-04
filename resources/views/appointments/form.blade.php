<!-- Ap Pxname Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_pxName', 'Patient Name:') !!}
    {!! Form::text('ap_pxName', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Ap Regdate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_regDate', 'Appointment Date:') !!}
    {!! Form::date('ap_regDate', null, ['class' => 'form-control','id'=>'ap_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#ap_regDate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Ap Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_contact', 'Contact Number:') !!}
    {!! Form::text('ap_contact', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Ap Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_doctor', 'Preferred Doctor:') !!}
    {!! Form::text('ap_doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Specialist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_specialist', 'Preferred Specialization:') !!}
    {!! Form::text('ap_specialist', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Reason Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_reason', 'Reason to Visit:') !!}
    {!! Form::textarea('ap_reason', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'required']) !!}
</div>

<!-- Ap Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_status', 'Status:') !!}
    {!! Form::text('ap_status', null, ['class' => 'form-control', 'required']) !!}
</div>
