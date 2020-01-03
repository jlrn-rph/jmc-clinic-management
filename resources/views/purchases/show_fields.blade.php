<!-- Pur Date Field -->
<div class="form-group">
    {!! Form::label('pur_date', 'Purchase Date:') !!}
    <p>{{ $purchase->pur_date }}</p>
</div>

<!-- Pur Billnum Field -->
<div class="form-group">
    {!! Form::label('pur_billNum', 'Bill Number:') !!}
    <p>{{ $purchase->pur_billNum }}</p>
</div>

<!-- Pur Item Field -->
<div class="form-group">
    {!! Form::label('pur_item', 'Item:') !!}
    <p>{{ $purchase->pur_item }}</p>
</div>

<!-- Pur Quantity Field -->
<div class="form-group">
    {!! Form::label('pur_quantity', 'Quantity:') !!}
    <p>{{ $purchase->pur_quantity }}</p>
</div>

<!-- Pur Supplier Field -->
<div class="form-group">
    {!! Form::label('pur_supplier', 'Supplier:') !!}
    <p>{{ $purchase->pur_supplier }}</p>
</div>
