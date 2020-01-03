<!-- Ap Regdate Field -->
<div class="form-group">
    {!! Form::label('ap_regDate', 'Appointment Date:') !!}
    {{ $appointment->ap_regDate }}
</div>

<!-- Ap Pxname Field -->
<div class="form-group">
    {!! Form::label('ap_pxName', 'Patient Name:') !!}
    <p>{{ $appointment->ap_pxName }}</p>
</div>

<!-- Ap Contact Field -->
<div class="form-group">
    {!! Form::label('ap_contact', 'Contact Number:') !!}
    <p>{{ $appointment->ap_contact }}</p>
</div>

<!-- Ap Doctor Field -->
<div class="form-group">
    {!! Form::label('ap_doctor', 'Preferred Doctor:') !!}
    <p>{{ $appointment->ap_doctor }}</p>
</div>

<!-- Ap Specialist Field -->
<div class="form-group">
    {!! Form::label('ap_specialist', 'Preferred Specialization:') !!}
    <p>{{ $appointment->ap_specialist }}</p>
</div>

<!-- Ap Reason Field -->
<div class="form-group">
    {!! Form::label('ap_reason', 'Reason to Visit:') !!}
    <p>{{ $appointment->ap_reason }}</p>
</div>

<!-- Ap Status Field -->
<div class="form-group">
    {!! Form::label('ap_status', 'Status:') !!}
    <p>{{ $appointment->ap_status }}</p>
</div>
