<!-- Rx Generic Field -->
<div class="form-group">
    {!! Form::label('px_name', 'Patient Name:') !!}
    <p>{{ $prescriptions->px_name }}</p>
</div>

<div class="form-group">
    {!! Form::label('px_name', 'Doctor Name:') !!}
    <p>{{ $prescriptions->doctor_name }}</p>
</div>
<!-- Rx Generic Field -->
<div class="form-group">
    {!! Form::label('rx_generic', 'Generic Name:') !!}
    <p>{{ $prescriptions->rx_generic }}</p>
</div>

<!-- Rx Brand Field -->
<div class="form-group">
    {!! Form::label('rx_brand', 'Brand Name:') !!}
    <p>{{ $prescriptions->rx_brand }}</p>
</div>

<!-- Rx Freq Field -->
<div class="form-group">
    {!! Form::label('rx_freq', 'Frequency:') !!}
    <p>{{ $prescriptions->rx_freq }}</p>
</div>

<!-- Rx Days Field -->
<div class="form-group">
    {!! Form::label('rx_days', 'Days to Take:') !!}
    <p>{{ $prescriptions->rx_days }}</p>
</div>

<!-- Rx Instruct Field -->
<div class="form-group">
    {!! Form::label('rx_instruct', 'Signa:') !!}
    <p>{{ $prescriptions->rx_instruct }}</p>
</div>
