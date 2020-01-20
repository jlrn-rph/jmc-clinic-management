<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Pur Name Field -->
           <div class="form-group">
             {{ $purchase->pur_item }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Pur Date Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('pur_date', 'Purchase Date:') !!}
            {{ $purchase->pur_date }}
        </div>

        <!-- Pur Billnum Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('pur_billNum', 'Bill Number:') !!}
            {{ $purchase->pur_billNum }}
        </div>
      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Purchase Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Pur Quantity Field -->
          <div class="form-group">
              {!! Form::label('pur_quantity', 'Quantity:') !!}
              {{ $purchase->pur_quantity }}
          </div>

          <!-- Pur Supplier Field -->
          <div class="form-group">
              {!! Form::label('pur_supplier', 'Supplier:') !!}
              {{ $purchase->pur_supplier }}
          </div>
        </div>
    </div>
  </div>
</div>
