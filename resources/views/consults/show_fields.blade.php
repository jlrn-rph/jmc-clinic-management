<div class="form-group">
    {!! Form::label('patients_id', 'Patient Name') !!}
    <p>{{ $consult->patients->px_name }}</p>
</div>

<!-- Con Datesxstart Field -->
<div class="form-group">
    {!! Form::label('con_dateSxStart', 'Date') !!}
    <p>{{ $consult->con_dateSxStart }}</p>
</div>

<!-- Con Height Field -->
<div class="form-group">
    {!! Form::label('con_height', 'Height:') !!}
    <p>{{ $consult->con_height }}</p>
</div>

<!-- Con Weight Field -->
<div class="form-group">
    {!! Form::label('con_weight', 'Weight:') !!}
    <p>{{ $consult->con_weight }}</p>
</div>

<!-- Con Bp Field -->
<div class="form-group">
    {!! Form::label('con_bp', 'Blood Pressure:') !!}
    <p>{{ $consult->con_bp }}</p>
</div>

<!-- Con Symptom Field -->
<div class="form-group">
    {!! Form::label('con_symptom', 'Symptoms:') !!}
    <p>{{ $consult->con_symptom }}</p>
</div>

<!-- Con Diagnosis Field -->
<div class="form-group">
    {!! Form::label('con_diagnosis', 'Diagnosis:') !!}
    <p>{{ $consult->con_diagnosis }}</p>
</div>
