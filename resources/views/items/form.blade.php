<!-- It Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('it_name', 'Item Name:') !!}
    {!! Form::text('it_name', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- It Incount Field -->
<div class="form-group col-sm-12">
    {!! Form::label('it_inCount', 'Initial Count:') !!}
    {!! Form::text('it_inCount', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- It Curcount Field -->
<div class="form-group col-sm-12">
    {!! Form::label('it_curCount', 'Current Count:') !!}
    {!! Form::text('it_curCount', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>
