<div class="media col-sm-12">
    <div class="media-left">
         <!-- <a href="#" class="profile-thumb">
            <img src="https://via.placeholder.com/150" class="img-circle" alt="">
        </a> -->
    </div>

     <div class="media-body">
		     <h2>
           <!-- Px Name Field -->
           <div class="form-group">
             {{ $patient->px_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Px Regnumber Field -->
        <div class="form-group">
            {!! Form::label('px_regNumber', 'Patient Number:') !!}
            {{ $patient->px_regNumber }}
        </div>

        <!-- Px Regdate Field -->
        <div class="form-group">
            {!! Form::label('px_regDate', 'Registration Date:') !!}
            {{ $patient->px_regDate }}
        </div>

      </small></h3>
	</div>

<hr>

<!-- Px Image Field
<div class="form-group">
    {!! Form::label('px_image', 'Patient Image:') !!}
    {{ $patient->px_image }}
</div> -->

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <!-- Px Address Field -->
        <div class="form-group">
          {!! Form::label('px_address', 'Address:') !!} {{ $patient->px_address }}
        </div>

        <!-- Px Dob Field -->
        <div class="form-group">
          {!! Form::label('px_dob', 'Date of Birth:') !!} {{ $patient->px_dob }}
        </div>

        <!-- Px Gender Field -->
        <div class="form-group">
          {!! Form::label('px_gender', 'Sex:') !!} {{ $patient->px_gender }}
        </div>

        <!-- Px Contact Field -->
        <div class="form-group">
          {!! Form::label('px_contact', 'Contact:') !!} {{ $patient->px_contact }}
        </div>

        <!-- Px Email Field -->
        <div class="form-group">
          {!! Form::label('px_email', 'Email:') !!} {{ $patient->px_email }}
        </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Medical Details</div>
      <div class="panel-body">
        <!-- Px Doctor Field -->
        <div class="form-group">
            {!! Form::label('px_doctor', 'Doctor-in-Charge:') !!} {{ $patient->px_doctor }}
        </div>

        <!-- Px Status Field -->
        <div class="form-group">
            {!! Form::label('px_status', 'Status:') !!} {{ $patient->px_status }}
        </div>
    </div>
  </div>
</div>
