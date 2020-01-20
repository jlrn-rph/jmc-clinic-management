<!-- Ap Pxname Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_pxName', 'Patient Name:') !!}
    {!! Form::text('ap_pxName', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Ap Regdate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_regDate', 'Appointment Date:') !!}
    {!! Form::date('ap_regDate', $appointment->ap_regDate, ['class' => 'form-control','id'=>'ap_regDate', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#ap_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Ap Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_contact', 'Contact Number:') !!}
    {!! Form::text('ap_contact', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 7 to 13 digits', 'pattern'=> '[0-9]{6,13}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Ap Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_doctor', 'Preferred Doctor:') !!}
    {!! Form::text('ap_doctor', null, ['class' => 'form-control','maxlength'=> '50', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Ap Specialist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_specialist', 'Preferred Specialization:') !!}
    {!! Form::text('ap_specialist', null, ['class' => 'form-control', 'maxlength'=> '50', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Ap Reason Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_reason', 'Reason to Visit:') !!}
    {!! Form::textarea('ap_reason', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2, 'required']) !!}
</div>

<!-- Ap Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ap_status', 'Status:') !!}
    <select class="form-control" name="ap_status" id="ap_status" required>
      <option value="">Select Status</option>
      <option value="Pending"{{ 'Pending'== $appointment->ap_status ? 'selected' : ''}}>Pending</option>
      <option value="On-going"{{ 'On-going'== $appointment->ap_status ? 'selected' : ''}}>On-going</option>
      <option value="Done"{{ 'Done'== $appointment->ap_status ? 'selected' : ''}}>Done</option>
    </select>
</div>
