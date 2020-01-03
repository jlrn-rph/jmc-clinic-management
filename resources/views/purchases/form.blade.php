<!-- Pur Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_date', 'Purchase Date:') !!}
    {!! Form::date('pur_date', null, ['class' => 'form-control','id'=>'pur_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#pur_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Pur Billnum Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_billNum', 'Bill Number:') !!}
    {!! Form::text('pur_billNum', null, ['class' => 'form-control']) !!}
</div>

<!-- Pur Item Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_item', 'Item:') !!}
    {!! Form::text('pur_item', null, ['class' => 'form-control']) !!}
</div>

<!-- Pur Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_quantity', 'Quantity:') !!}
    {!! Form::text('pur_quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Pur Supplier Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_supplier', 'Supplier:') !!}
    {!! Form::text('pur_supplier', null, ['class' => 'form-control']) !!}
</div>

<!-- Pur Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_price', 'Price:') !!}
    {!! Form::text('pur_price', null, ['class' => 'form-control']) !!}
</div>
