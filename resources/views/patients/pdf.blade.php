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
             {{ $patients->px_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Px Regnumber Field -->
        <div class="form-group">
            {!! Form::label('px_regNumber', 'Patient Number:') !!}
            {{ $patients->px_regNumber }}
        </div>

        <!-- Px Regdate Field -->
        <div class="form-group">
            {!! Form::label('px_regDate', 'Registration Date:') !!}
            {{ $patients->px_regDate }}
        </div>

      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <!-- Px Address Field -->
        <div class="form-group">
          {!! Form::label('px_address', 'Address:') !!} {{ $patients->px_address }}
        </div>

        <!-- Px Dob Field -->
        <div class="form-group">
          {!! Form::label('px_dob', 'Date of Birth:') !!} {{ $patients->px_dob }}
        </div>

        <!-- Px Gender Field -->
        <div class="form-group">
          {!! Form::label('px_gender', 'Sex:') !!} {{ $patients->px_gender }}
        </div>

        <!-- Px Contact Field -->
        <div class="form-group">
          {!! Form::label('px_contact', 'Contact:') !!} {{ $patients->px_contact }}
        </div>

        <!-- Px Email Field -->
        <div class="form-group">
          {!! Form::label('px_email', 'Email:') !!} {{ $patients->px_email }}
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
            {!! Form::label('px_doctor', 'Doctor-in-Charge:') !!} {{ $patients->px_doctor }}
        </div>

        <!-- Px Status Field -->
        <div class="form-group">
            {!! Form::label('px_status', 'Status:') !!} {{ $patients->px_status }}
        </div>
    </div>
  </div>
</div>
