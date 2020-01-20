<!-- Ret Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_date', 'Return Date:') !!}
    {!! Form::date('ret_date', null, ['class' => 'form-control','id'=>'ret_date', 'required']) !!}
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
    {!! Form::text('ret_billNum', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Ret Item Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_item', 'Item:') !!}
    {!! Form::text('ret_item', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Ret Quantity Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_quantity', 'Quantity:') !!}
    {!! Form::text('ret_quantity', null, ['class' => 'form-control', 'required',  'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Ret Supplier Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_supplier', 'Supplier:') !!}
    {!! Form::text('ret_supplier', null, ['class' => 'form-control', 'maxlength'=> '50'. 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Ret Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ret_price', 'Price:') !!}
    {!! Form::text('ret_price', null, ['class' => 'form-control', 'required', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>
