<!-- Lt Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lt_name', 'Test Name:') !!}
    {!! Form::text('lt_name', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Lt Cost Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lt_cost', 'Cost:') !!}
    {!! Form::text('lt_cost', null, ['class' => 'form-control', 'required', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>
