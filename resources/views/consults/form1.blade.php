<div class="form-group col-sm-12">
  <label for="patients_name">Patient Name: </label>
  <select name="patients_name" id="patients_name" class="form-control selectpicker"  data-live-search="true"  title="Select Patient" required>
    @foreach($patient as $patient)
      <option value="{{$patient->px_name}}"> {{$patient->px_name}}</option>
    @endforeach
  </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('doctor_name', 'Doctor-in-Charge:') !!}
      <select name="doctor_name" id="doctor_name" class="form-control selectpicker"  title="Select Doctor" required>
        @foreach($doctors as $doctor)
            <option value="{{$doctor->dr_name}}"> {{$doctor->dr_name}}</option>
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
    {!! Form::text('con_height', null, ['class' => 'form-control', 'maxlength'=>'5', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Con Weight Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_weight', 'Weight:') !!}
    {!! Form::text('con_weight', null, ['class' => 'form-control', 'maxlength'=>'5', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Con Bp Field -->
<div class="form-group col-sm-12">
    {!! Form::label('con_bp', 'Blood Pressure:') !!}
    {!! Form::text('con_bp', null, ['class' => 'form-control', 'maxlength'=>'10']) !!}
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
