<div class="media col-sm-12">
    <div class="media-left">
         <a href="#" class="profile-thumb">
            <img src="https://via.placeholder.com/150" class="img-circle" alt="">
        </a>
    </div>

     <div class="media-body">
		     <h2>
           <!-- Px Name Field -->
           <div class="form-group">
             {{ $doctor->dr_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Dr Regnum Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('dr_regNum', 'Doctor Number:') !!}
            {{ $doctor->dr_regNum }}
        </div>

        <!-- Dr Regdate Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('dr_regDate', 'Registration Date:') !!}
            {{ $doctor->dr_regDate }}
        </div>

      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <div class="form-group">
          <!-- Dr Specialist Field -->
            {!! Form::label('dr_specialist', 'Specialization:') !!}
            {{ $doctor->dr_specialist }}
        </div>

        <!-- Dr License Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_license', 'License Number:') !!}
            {{ $doctor->dr_license }}
        </div>

        <!-- Dr Gender Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_gender', 'Gender:') !!}
            {{ $doctor->dr_gender }}
        </div>

        <!-- Dr Dob Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_dob', 'Date of Birth:') !!}
            {{ $doctor->dr_dob }}
        </div>

        <!-- Dr Address Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_address', 'Address:') !!}
            {{ $doctor->dr_address }}
        </div>

        <!-- Dr Contact Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_contact', 'Contact:') !!}
            {{ $doctor->dr_contact }}
        </div>

        <!-- Dr Email Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_email', 'Email:') !!}
            {{ $doctor->dr_email }}
        </div>
    </div>
  </div>
</div>

<!-- Dr Image Field
<div class="form-group col-sm-4">
    {!! Form::label('dr_image', 'Image:') !!}
    <p>{{ $doctor->dr_image }}</p>
</div> -->

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Consultation Details</div>
      <div class="panel-body">
        <div class="form-group">
          <!-- Dr Fee Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_fee', 'Professional Fee:') !!}
              {{ $doctor->dr_fee }}
          </div>

          <!-- Dr Timein Field -->
          <div class="form-group col-sm-6">
              {!! Form::label('dr_timeIn', 'Time In:') !!}
              {{ $doctor->dr_timeIn }}
          </div>

          <!-- Dr Timeout Field -->
          <div class="form-group col-sm-6">
              {!! Form::label('dr_timeOut', 'Time Out:') !!}
              {{ $doctor->dr_timeOut }}
          </div>

          <!-- Dr Daysavail Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_daysAvail', 'Available Days:') !!}
              {{ $doctor->dr_daysAvail }}
          </div>

          <!-- Dr Status Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_status', 'Status:') !!}
              {{ $doctor->dr_status }}
          </div>
    </div>
  </div>
</div>
