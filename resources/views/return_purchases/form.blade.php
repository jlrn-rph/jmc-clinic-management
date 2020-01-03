<!-- Ret Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_date', 'Return Date:') !!}
    {!! Form::date('ret_date', null, ['class' => 'form-control','id'=>'ret_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#ret_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Ret Billnum Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_billNum', 'Bill Number:') !!}
    {!! Form::text('ret_billNum', null, ['class' => 'form-control']) !!}
</div>

<!-- Ret Item Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_item', 'Item:') !!}
    {!! Form::text('ret_item', null, ['class' => 'form-control']) !!}
</div>

<!-- Ret Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_quantity', 'Quantity:') !!}
    {!! Form::text('ret_quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Ret Supplier Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_supplier', 'Supplier:') !!}
    {!! Form::text('ret_supplier', null, ['class' => 'form-control']) !!}
</div>

<!-- Ret Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_price', 'Price:') !!}
    {!! Form::text('ret_price', null, ['class' => 'form-control']) !!}
</div>
