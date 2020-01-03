<!-- Ret Date Field -->
<div class="form-group">
    {!! Form::label('ret_date', 'Return Date:') !!}
    <p>{{ $returnPurchase->ret_date }}</p>
</div>

<!-- Ret Billnum Field -->
<div class="form-group">
    {!! Form::label('ret_billNum', 'Bill Number:') !!}
    <p>{{ $returnPurchase->ret_billNum }}</p>
</div>

<!-- Ret Item Field -->
<div class="form-group">
    {!! Form::label('ret_item', 'Item:') !!}
    <p>{{ $returnPurchase->ret_item }}</p>
</div>

<!-- Ret Quantity Field -->
<div class="form-group">
    {!! Form::label('ret_quantity', 'Quantity:') !!}
    <p>{{ $returnPurchase->ret_quantity }}</p>
</div>

<!-- Ret Supplier Field -->
<div class="form-group">
    {!! Form::label('ret_supplier', 'Supplier:') !!}
    <p>{{ $returnPurchase->ret_supplier }}</p>
</div>

<!-- Ret Price Field -->
<div class="form-group">
    {!! Form::label('ret_price', 'Price:') !!}
    <p>{{ $returnPurchase->ret_price }}</p>
</div>
