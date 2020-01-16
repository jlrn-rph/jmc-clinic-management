<div class="form-group col-sm-12">
  <label for="patients_id">Patient Name: </label>
  <select name="patients_id" id="patients_id" class="form-control selectpicker"  data-live-search="true" data-live-search-placeholder="Select Patient" title="Select Patient">
    @foreach($patients as $patient)
      <option value="{{$patient->id}}"> {{$patient->px_name}}</option>
    @endforeach
  </select>
</div>

<!-- Con Datesxstart Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_dateSxStart', 'Date:') !!}
    {!! Form::date('con_dateSxStart', null, ['class' => 'form-control','id'=>'con_dateSxStart', 'required']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#con_dateSxStart').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Con Height Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_height', 'Height:') !!}
    {!! Form::text('con_height', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Weight Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_weight', 'Weight:') !!}
    {!! Form::text('con_weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Bp Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_bp', 'Blood Pressure:') !!}
    {!! Form::text('con_bp', null, ['class' => 'form-control']) !!}
</div>

<!-- Con Symptom Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('con_symptom', 'Symptoms:') !!}
    {!! Form::textarea('con_symptom', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Con Diagnosis Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('con_diagnosis', 'Diagnosis:') !!}
    {!! Form::textarea('con_diagnosis', null, ['class' => 'form-control', 'required']) !!}
</div>
