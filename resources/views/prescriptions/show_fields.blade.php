<!-- Rx Generic Field -->
<div class="form-group">
    {!! Form::label('px_name', 'Patient Name:') !!}
    <p>{{ $prescription->px_name }}</p>
</div>

<!-- Rx Generic Field -->
<div class="form-group">
    {!! Form::label('rx_generic', 'Generic Name:') !!}
    <p>{{ $prescription->rx_generic }}</p>
</div>

<!-- Rx Brand Field -->
<div class="form-group">
    {!! Form::label('rx_brand', 'Brand Name:') !!}
    <p>{{ $prescription->rx_brand }}</p>
</div>

<!-- Rx Freq Field -->
<div class="form-group">
    {!! Form::label('rx_freq', 'Frequency:') !!}
    <p>{{ $prescription->rx_freq }}</p>
</div>

<!-- Rx Days Field -->
<div class="form-group">
    {!! Form::label('rx_days', 'Days to Take:') !!}
    <p>{{ $prescription->rx_days }}</p>
</div>

<!-- Rx Instruct Field -->
<div class="form-group">
    {!! Form::label('rx_instruct', 'Signa:') !!}
    <p>{{ $prescription->rx_instruct }}</p>
</div>
