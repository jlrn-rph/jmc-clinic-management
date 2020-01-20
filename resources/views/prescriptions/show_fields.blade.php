<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Rx Name Field -->
           <div class="form-group">
               {{ $prescription->px_name }}
           </div>
       </h2>

      <h3><small class="display-block col-sm-12">
        <div class="form-group">
            {!! Form::label('px_name', 'Doctor-in-charge:') !!}
            {{ $prescription->doctor_name }}
        </div>
      </small></h3>
	</div>
<hr>
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Prescription Details</div>
      <div class="panel-body">
        <!-- Rx Generic Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('rx_generic', 'Generic Name:') !!}
            {{ $prescription->rx_generic }}
        </div>

        <!-- Rx Brand Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('rx_brand', 'Brand Name:') !!}
            {{ $prescription->rx_brand }}
        </div>

        <!-- Rx Freq Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('rx_freq', 'Frequency:') !!}
            {{ $prescription->rx_freq }}
        </div>

        <!-- Rx Days Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('rx_days', 'Days to Take:') !!}
            {{ $prescription->rx_days }}
        </div>

        <!-- Rx Instruct Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('rx_instruct', 'Signa:') !!}
            <p>{{ $prescription->rx_instruct }}</p>
        </div>
    </div>
  </div>
</div>
