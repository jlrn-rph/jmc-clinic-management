<div class="media col-sm-12">
    <div class="media-left">
         <!-- <a href="#" class="profile-thumb">
            <img src="{{ $doctors->dr_image }}" class="img-circle" alt="">
        </a> -->
    </div>

     <div class="media-body">
		     <h2>
           <!-- Px Name Field -->
           <div class="form-group">
             {{ $doctors->dr_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Dr Regnum Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('dr_regNum', 'Doctor Number:') !!}
            {{ $doctors->dr_regNum }}
        </div>

        <!-- Dr Regdate Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('dr_regDate', 'Registration Date:') !!}
            {{ $doctors->dr_regDate }}
        </div>

      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Dr Specialist Field -->
            {!! Form::label('dr_specialist', 'Specialization:') !!}
            {{ $doctors->dr_specialist }}
        </div>

        <!-- Dr License Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_license', 'License Number:') !!}
            {{ $doctors->dr_license }}
        </div>

        <!-- Dr Gender Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_gender', 'Gender:') !!}
            {{ $doctors->dr_gender }}
        </div>

        <!-- Dr Dob Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_dob', 'Date of Birth:') !!}
            {{ $doctors->dr_dob }}
        </div>

        <!-- Dr Address Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('dr_address', 'Address:') !!}
            {{ $doctors->dr_address }}
        </div>

        <!-- Dr Contact Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_contact', 'Contact:') !!}
            {{ $doctors->dr_contact }}
        </div>

        <!-- Dr Email Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('dr_email', 'Email:') !!}
            {{ $doctors->dr_email }}
        </div>
    </div>
  </div>
</div>

<!-- Dr Image Field
<div class="form-group col-sm-4">
    {!! Form::label('dr_image', 'Image:') !!}
    <p>{{ $doctors->dr_image }}</p>
</div> -->

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Consultation Details</div>
      <div class="panel-body">
        <div class="form-group">
          <!-- Dr Fee Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_fee', 'Professional Fee:') !!}
              {{ $doctors->dr_fee }}
          </div>

          <!-- Dr Timein Field -->
          <div class="form-group col-sm-6">
              {!! Form::label('dr_timeIn', 'Time In:') !!}
              {{ $doctors->dr_timeIn }}
          </div>

          <!-- Dr Timeout Field -->
          <div class="form-group col-sm-6">
              {!! Form::label('dr_timeOut', 'Time Out:') !!}
              {{ $doctors->dr_timeOut }}
          </div>

          <!-- Dr Daysavail Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_daysAvail', 'Available Days:') !!}
              {{ $doctors->dr_daysAvail }}
          </div>

          <!-- Dr Status Field -->
          <div class="form-group col-sm-12">
              {!! Form::label('dr_status', 'Status:') !!}
              {{ $doctors->dr_status }}
          </div>
    </div>
  </div>
</div>
