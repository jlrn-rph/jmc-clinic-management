<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Px Name Field -->
           <div class="form-group">
             {{ $staff->stf_name }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Stf Regnum Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('stf_regNum', 'Registration Number:') !!}
            {{ $staff->stf_regNum }}
        </div>

        <!-- Stf Regdate Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('stf_regDate', 'Registration Date:') !!}
            {{ $staff->stf_regDate }}
        </div>

        <!-- Stf Emtype Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('stf_emType', 'Employee Type:') !!}
            {{ $staff->stf_emType }}
        </div>

        <!-- Stf Department Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('stf_department', 'Department:') !!}
            {{ $staff->stf_department }}
        </div>

      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <!-- Stf Address Field -->
        <div class="form-group">
            {!! Form::label('stf_Address', 'Address:') !!}
            {{ $staff->stf_Address }}
        </div>

        <!-- Stf Dob Field -->
        <div class="form-group">
            {!! Form::label('stf_dob', 'Date of Birth:') !!}
            {{ $staff->stf_dob }}
        </div>

        <!-- Stf Gender Field -->
        <div class="form-group">
            {!! Form::label('stf_gender', 'Gender:') !!}
            {{ $staff->stf_gender }}
        </div>

        <!-- Stf Contact Field -->
        <div class="form-group">
            {!! Form::label('stf_contact', 'Contact:') !!}
            {{ $staff->stf_contact }}
        </div>

        <!-- Stf Email Field -->
        <div class="form-group">
            {!! Form::label('stf_email', 'Email:') !!}
            {{ $staff->stf_email }}
        </div>

        <!-- Stf Status Field -->
        <div class="form-group">
            {!! Form::label('stf_status', 'Status:') !!}
            {{ $staff->stf_status }}
        </div>

    </div>
  </div>
</div>
