<!-- Sp Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sp_name', 'Specialization Name:') !!}
    {!! Form::text('sp_name', null, ['class' => 'form-control', 'maxlength'=> '50', 'onkeypress'=>"return /[a-z ]/i.test(event.key)", 'required']) !!}
</div>
