<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Rx Name Field -->
           <div class="form-group">
               {{ $labTest->lt_name }}
           </div>
       </h2>
	</div>
<hr>
<div class="col-sm-12">
  <div class="panel panel-default">
      <div class="panel-body">
        <!-- Lt Cost Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('lt_cost', 'Cost:') !!}
            {{ $labTest->lt_cost }}
        </div>
    </div>
  </div>
</div>
