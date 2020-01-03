<!-- Con Datesxstart Field -->
<div class="form-group col-sm-6">
    {!! Form::label('con_dateSxStart', 'Date:') !!}
    {!! Form::date('con_dateSxStart', null, ['class' => 'form-control','id'=>'con_dateSxStart']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#con_dateSxStart').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Con Height Field    -->
<div class="form-group col-sm-6">
    {!! Form::label('patients_id', 'Patient ID:') !!}
    {!! Form::select('patients_id', null, ['class' => 'form-control'], ['placeholder' => 'Select Patient']) !!}
    <!-- <select name="patients_id" id="patients_id" class="form-control">
      @foreach($patients as $patient)
        <option value="{{ $patient->id }}" {{ $consult->id == $consult->patients_id ? 'selected' : '' }}>{{ $patient->name }}</option>
      @endforeach
    </select> -->

</div>

<!-- Con Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('con_height', 'Height:') !!}
    {!! Form::text('con_height', null, ['class' => 'form-control'], old('con_height') ??$consults ?? '') !!}
</div>

<!-- Con Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('con_weight', 'Weight:') !!}
    {!! Form::text('con_weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Bp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('con_bp', 'Blood Pressure:') !!}
    {!! Form::text('con_bp', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Symptom Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('con_symptom', 'Symptoms:') !!}
    {!! Form::textarea('con_symptom', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Diagnosis Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('con_diagnosis', 'Diagnosis:') !!}
    {!! Form::textarea('con_diagnosis', null, ['class' => 'form-control']) !!}
</div>
