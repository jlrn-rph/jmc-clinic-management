<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Lab Name Field -->
           <div class="form-group">
             {{ $laboratory->lab_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Lab Regnumber Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('lab_regNumber', 'Registration Number:') !!}
            {{ $laboratory->lab_regNumber }}
        </div>

        <!-- Lab Regdate Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('lab_regDate', 'Registration Date:') !!}
            {{ $laboratory->lab_regDate }}
        </div>

        <!-- Lab Doctor Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('lab_doctor', 'Doctor-in-Charge:') !!}
            {{ $laboratory->lab_doctor }}
        </div>
      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Lab Address Field -->
          <div class="form-group">
              {!! Form::label('lab_address', 'Address:') !!}
              {{ $laboratory->lab_address }}
          </div>

          <!-- Lab Dob Field -->
          <div class="form-group">
              {!! Form::label('lab_dob', 'Date of Birth:') !!}
              {{ $laboratory->lab_dob }}
          </div>

          <!-- Lab Gender Field -->
          <div class="form-group">
              {!! Form::label('lab_gender', 'Gender:') !!}
              {{ $laboratory->lab_gender }}
          </div>

          <!-- Lab Contact Field -->
          <div class="form-group">
              {!! Form::label('lab_contact', 'Contact:') !!}
              {{ $laboratory->lab_contact }}
          </div>

          <!-- Lab Email Field -->
          <div class="form-group">
              {!! Form::label('lab_email', 'Email:') !!}
              {{ $laboratory->lab_email }}
          </div>
        </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Laboratory Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Lab Test Field -->
          <div class="form-group">
              {!! Form::label('lab_test', 'Test Ordered:') !!}
              {{ $laboratory->lab_test }}
          </div>

          <!-- Lab Status Field -->
          <div class="form-group">
              {!! Form::label('lab_status', 'Status:') !!}
              {{ $laboratory->lab_status }}
          </div>
        </div>
    </div>
  </div>
</div>
