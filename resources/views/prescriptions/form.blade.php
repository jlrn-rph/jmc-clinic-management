<!-- Rx Generic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rx_generic', 'Generic Name:') !!}
    {!! Form::text('rx_generic', null, ['class' => 'form-control']) !!}
</div>

<!-- Rx Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rx_brand', 'Brand Name:') !!}
    {!! Form::text('rx_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Rx Freq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rx_freq', 'Frequency:') !!}
    {!! Form::text('rx_freq', null, ['class' => 'form-control']) !!}
</div>

<!-- Rx Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rx_days', 'Days to Take:') !!}
    {!! Form::text('rx_days', null, ['class' => 'form-control']) !!}
</div>

<!-- Rx Instruct Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('rx_instruct', 'Signa:') !!}
    {!! Form::textarea('rx_instruct', null, ['class' => 'form-control']) !!}
</div>
