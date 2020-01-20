<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- It Name Field -->
           <div class="form-group">
             {{ $item->it_name }}
           </div>
       </h2>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Item Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- It Incount Field -->
          <div class="form-group">
              {!! Form::label('it_inCount', 'Initial Count:') !!}
              {{ $item->it_inCount }}
          </div>

          <!-- It Curcount Field -->
          <div class="form-group">
              {!! Form::label('it_curCount', 'Current Count:') !!}
              {{ $item->it_curCount }}
          </div>
        </div>
    </div>
  </div>
</div>
