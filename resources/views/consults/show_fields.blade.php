<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Rx Name Field -->
           <div class="form-group">
               {{ $consult->patients_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <div class="form-group col-sm-12">
            {!! Form::label('patients_id', 'Doctor-in-Charge:') !!}
            {{ $consult->doctor_name }}
        </div>
      </small></h3>
	</div>
<hr>
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Consultation Details</div>
      <div class="panel-body">
        <!-- Con Datesxstart Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_dateSxStart', 'Date:') !!}
            {{ $consult->con_dateSxStart }}
        </div>

        <!-- Con Height Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_height', 'Height:') !!}
            {{ $consult->con_height }}
        </div>

        <!-- Con Weight Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_weight', 'Weight:') !!}
            {{ $consult->con_weight }}
        </div>

        <!-- Con Bp Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_bp', 'Blood Pressure:') !!}
            {{ $consult->con_bp }}
        </div>

        <!-- Con Symptom Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_symptom', 'Symptoms:') !!}
            <p>{{ $consult->con_symptom }}</p>
        </div>

        <!-- Con Diagnosis Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('con_diagnosis', 'Diagnosis:') !!}
            <p>{{ $consult->con_diagnosis }}</p>
        </div>
    </div>
  </div>
</div>
