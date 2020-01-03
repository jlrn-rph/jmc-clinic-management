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

<!-- Px Image Field -->
<div class="form-group">
    {!! Form::label('px_image', 'Patient Image:') !!}
    {{ $patient->px_image }}
</div>

<!-- Px Name Field -->
<div class="form-group">
    {!! Form::label('px_name', 'Patient Name:') !!}
    <p>{{ $patient->px_name }}</p>
</div>

<!-- Px Address Field -->
<div class="form-group">
    {!! Form::label('px_address', 'Address:') !!}
    <p>{{ $patient->px_address }}</p>
</div>

<!-- Px Dob Field -->
<div class="form-group">
    {!! Form::label('px_dob', 'Date of Birth:') !!}
    <p>{{ $patient->px_dob }}</p>
</div>

<!-- Px Gender Field -->
<div class="form-group">
    {!! Form::label('px_gender', 'Sex:') !!}
    <p>{{ $patient->px_gender }}</p>
</div>

<!-- Px Contact Field -->
<div class="form-group">
    {!! Form::label('px_contact', 'Contact:') !!}
    <p>{{ $patient->px_contact }}</p>
</div>

<!-- Px Email Field -->
<div class="form-group">
    {!! Form::label('px_email', 'Email:') !!}
    <p>{{ $patient->px_email }}</p>
</div>

<!-- Px Doctor Field -->
<div class="form-group">
    {!! Form::label('px_doctor', 'Doctor-in-Charge:') !!}
    <p>{{ $patient->px_doctor }}</p>
</div>

<!-- Px Status Field -->
<div class="form-group">
    {!! Form::label('px_status', 'Status:') !!}
    <p>{{ $patient->px_status }}</p>
</div>
