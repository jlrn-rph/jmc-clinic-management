<div class="form-group">
    {!! Form::label('patients_id', 'Patient Name') !!}
    <p>{{ $consults->patients_name }}</p>
</div>
<div class="form-group">
    {!! Form::label('patients_id', 'Doctor Name') !!}
    <p>{{ $consults->doctor_name }}</p>
</div>

<!-- Con Datesxstart Field -->
<div class="form-group">
    {!! Form::label('con_dateSxStart', 'Date') !!}
    <p>{{ $consults->con_dateSxStart }}</p>
</div>

<!-- Con Height Field -->
<div class="form-group">
    {!! Form::label('con_height', 'Height:') !!}
    <p>{{ $consults->con_height }}</p>
</div>

<!-- Con Weight Field -->
<div class="form-group">
    {!! Form::label('con_weight', 'Weight:') !!}
    <p>{{ $consults->con_weight }}</p>
</div>

<!-- Con Bp Field -->
<div class="form-group">
    {!! Form::label('con_bp', 'Blood Pressure:') !!}
    <p>{{ $consults->con_bp }}</p>
</div>

<!-- Con Symptom Field -->
<div class="form-group">
    {!! Form::label('con_symptom', 'Symptoms:') !!}
    <p>{{ $consults->con_symptom }}</p>
</div>

<!-- Con Diagnosis Field -->
<div class="form-group">
    {!! Form::label('con_diagnosis', 'Diagnosis:') !!}
    <p>{{ $consults->con_diagnosis }}</p>
</div>
