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

<hr>
<h3 class="col-sm-12">Consultation Details</h3>
      <div class="row" style="padding-left: 20px; padding-right: 20px;">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Consults
              </a></li>
              <li><a href="#tab_2" data-toggle="tab">Prescription</a></li>
              <li><a href="#tab_3" data-toggle="tab">Laboratory</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                Consults
                <div class="col-md-12">
                  <a data-toggle="modal" data-target="#add-new-consult" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> Add Consult</a>

                {!! Form::open(['route' => 'consults.store', $patient->id]) !!}

                {!! Form::close() !!}
                @include('consults.table')
              </div>
            </div>




              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                Prescription
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Laboratory
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
