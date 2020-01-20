<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Ap Pxname Field -->
           <div class="form-group">
             {{ $appointment->ap_pxName }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Ap Regdate Field -->
        <div class="form-group">
            {!! Form::label('ap_regDate', 'Appointment Date:') !!}
            {{ $appointment->ap_regDate }}
        </div>
      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Appointment Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Ap Contact Field -->
          <div class="form-group">
              {!! Form::label('ap_contact', 'Contact Number:') !!}
              {{ $appointment->ap_contact }}
          </div>

          <!-- Ap Doctor Field -->
          <div class="form-group">
              {!! Form::label('ap_doctor', 'Preferred Doctor:') !!}
              {{ $appointment->ap_doctor }}
          </div>

          <!-- Ap Specialist Field -->
          <div class="form-group">
              {!! Form::label('ap_specialist', 'Preferred Specialization:') !!}
              {{ $appointment->ap_specialist }}
          </div>

          <!-- Ap Reason Field -->
          <div class="form-group">
              {!! Form::label('ap_reason', 'Reason to Visit:') !!}
              {{ $appointment->ap_reason }}
          </div>

          <!-- Ap Status Field -->
          <div class="form-group">
              {!! Form::label('ap_status', 'Status:') !!}
              {{ $appointment->ap_status }}
          </div>
        </div>
    </div>
  </div>
</div>
