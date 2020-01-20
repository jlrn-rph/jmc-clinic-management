<!-- Pur Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_date', 'Purchase Date:') !!}
    {!! Form::date('pur_date', null, ['class' => 'form-control','id'=>'pur_date', 'required']) !!}
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
    {!! Form::text('pur_billNum', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Pur Item Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_item', 'Item:') !!}
    {!! Form::text('pur_item', null, ['class' => 'form-control','maxlength'=> '50', 'required',  'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Pur Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_quantity', 'Quantity:') !!}
    {!! Form::text('pur_quantity', null, ['class' => 'form-control', 'required',  'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Pur Supplier Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_supplier', 'Supplier:') !!}
    {!! Form::text('pur_supplier', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Pur Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pur_price', 'Price:') !!}
    {!! Form::text('pur_price', null, ['class' => 'form-control', 'required', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>
