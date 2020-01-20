<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Name Field -->
           <div class="form-group">
             {{ $user->name }}
           </div>
       </h2>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">User Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Role Field -->
          <div class="form-group">
              {!! Form::label('role_id', 'Role:') !!}
              {{ $user->role_id}} 
          </div>

          <!-- Email Field -->
          <div class="form-group">
              {!! Form::label('email', 'Email:') !!}
              {{ $user->email }}  
          </div>

          <!-- Email Verified At Field
          <div class="form-group">
              {!! Form::label('email_verified_at', 'Email Verified At:') !!}
              <p>{{ $user->email_verified_at }}</p>
          </div> -->

          <!-- Password Field
          <div class="form-group">
              {!! Form::label('password', 'Password:') !!}
              <p>{{ $user->password }}</p>
          </div>-->

          <!-- Remember Token Field
          <div class="form-group">
              {!! Form::label('remember_token', 'Remember Token:') !!}
              <p>{{ $user->remember_token }}</p>
          </div>-->
        </div>
    </div>
  </div>
</div>
