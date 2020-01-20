<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Sup Name Field -->
           <div class="form-group">
             {{ $supplier->sup_name }}
           </div>
       </h2>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Supplier Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Sup Address Field -->
          <div class="form-group">
              {!! Form::label('sup_address', 'Address:') !!}
              {{ $supplier->sup_address }}  
          </div>

          <!-- Sup Contact Field -->
          <div class="form-group">
              {!! Form::label('sup_contact', 'Contact:') !!}
              {{ $supplier->sup_contact }}  
          </div>

          <!-- Sup Email Field -->
          <div class="form-group">
              {!! Form::label('sup_email', 'Email:') !!}
              {{ $supplier->sup_email }}  
          </div>
        </div>
    </div>
  </div>
</div>
