<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Ret Name Field -->
           <div class="form-group">
             {{ $returnPurchase->ret_item }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Ret Date Field -->
        <div class="form-group">
            {!! Form::label('ret_date', 'Return Date:') !!}
            {{ $returnPurchase->ret_date }} 
        </div>

        <!-- Ret Billnum Field -->
        <div class="form-group">
            {!! Form::label('ret_billNum', 'Bill Number:') !!}
            {{ $returnPurchase->ret_billNum }}  
        </div>
      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Return Purchase Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Ret Quantity Field -->
          <div class="form-group">
              {!! Form::label('ret_quantity', 'Quantity:') !!}
              {{ $returnPurchase->ret_quantity }} 
          </div>

          <!-- Ret Supplier Field -->
          <div class="form-group">
              {!! Form::label('ret_supplier', 'Supplier:') !!}
              {{ $returnPurchase->ret_supplier }} 
          </div>

          <!-- Ret Price Field -->
          <div class="form-group">
              {!! Form::label('ret_price', 'Price:') !!}
              {{ $returnPurchase->ret_price }}  
          </div>
        </div>
    </div>
  </div>
</div>
