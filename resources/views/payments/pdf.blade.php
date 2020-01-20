<!-- Pay Regnumber Field -->
<div class="form-group">
    {!! Form::label('pay_regNumber', 'Payment Number:') !!}
    <p>{{ $payments->pay_regNumber }}</p>
</div>

<!-- Pay Regdate Field -->
<div class="form-group">
    {!! Form::label('pay_regDate', 'Date:') !!}
    <p>{{ $payments->pay_regDate }}</p>
</div>

<!-- Pay Name Field -->
<div class="form-group">
    {!! Form::label('pay_name', 'Patient Name:') !!}
    <p>{{ $payments->patients_id }}</p>
</div>

<!-- Pay Address Field -->
<div class="form-group">
    {!! Form::label('pay_address', 'Address:') !!}
    <p>{{ $payments->pay_address }}</p>
</div>

<!-- Pay Admission Field -->
<div class="form-group">
    {!! Form::label('pay_admission', 'Admission Cost:') !!}
    <p>{{ $payments->pay_admission }}</p>
</div>

<!-- Pay Consultation Field -->
<div class="form-group">
    {!! Form::label('pay_consultation', 'Consultation Cost:') !!}
    <p>{{ $payments->pay_consultation }}</p>
</div>

<!-- Pay Lab Field -->
<div class="form-group">
    {!! Form::label('pay_lab', 'Lab Cost:') !!}
    <p>{{ $payments->pay_lab }}</p>
</div>

<!-- Pay Others Field -->
<div class="form-group">
    {!! Form::label('pay_others', 'Others:') !!}
    <p>{{ $payments->pay_others }}</p>
</div>

<!-- Pay Subtotal Field -->
<div class="form-group">
    {!! Form::label('pay_subtotal', 'Subtotal:') !!}
    <p>{{ $payments->pay_subtotal }}</p>
</div>

<!-- Pay Vat Field -->
<div class="form-group">
    {!! Form::label('pay_vat', 'VAT:') !!}
    <p>{{ $payments->pay_vat }}</p>
</div>

<!-- Pay Total Field -->
<div class="form-group">
    {!! Form::label('pay_total', 'Total:') !!}
    <p>{{ $payments->pay_total }}</p>
</div>
