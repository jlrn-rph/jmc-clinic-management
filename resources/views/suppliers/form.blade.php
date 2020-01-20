<!-- Sup Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sup_name', 'Supplier Name:') !!}
    {!! Form::text('sup_name', null, ['class' => 'form-control', 'maxlength'=> '50', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
</div>

<!-- Sup Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sup_address', 'Address:') !!}
    {!! Form::text('sup_address', null, ['class' => 'form-control', 'required', 'maxlength'=> '100']) !!}
</div>

<!-- Sup Contact Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sup_contact', 'Contact:') !!}
    {!! Form::text('sup_contact', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 7 to 13 digits', 'pattern'=> '[0-9]{6,13}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Sup Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sup_email', 'Email:') !!}
    {!! Form::text('sup_email', null, ['class' => 'form-control', 'required', 'maxlength'=> '50']) !!}
</div>
