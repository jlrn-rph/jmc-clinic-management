<!-- Pay Regnumber Field -->
<div class="form-group">
    {!! Form::label('pay_regNumber', 'Payment Number:') !!}
    <p>{{ $payment->pay_regNumber }}</p>
</div>

<!-- Pay Regdate Field -->
<div class="form-group">
    {!! Form::label('pay_regDate', 'Date:') !!}
    <p>{{ $payment->pay_regDate }}</p>
</div>

<!-- Pay Name Field -->
<div class="form-group">
    {!! Form::label('pay_name', 'Patient Name:') !!}
    <p>{{ $payment->patients->px_name }}</p>
</div>

<!-- Pay Address Field -->
<div class="form-group">
    {!! Form::label('pay_address', 'Address:') !!}
    <p>{{ $payment->pay_address }}</p>
</div>

<!-- Pay Admission Field -->
<div class="form-group">
    {!! Form::label('pay_admission', 'Admission Cost:') !!}
    <p>{{ $payment->pay_admission }}</p>
</div>

<!-- Pay Consultation Field -->
<div class="form-group">
    {!! Form::label('pay_consultation', 'Consultation Cost:') !!}
    <p>{{ $payment->pay_consultation }}</p>
</div>

<!-- Pay Lab Field -->
<div class="form-group">
    {!! Form::label('pay_lab', 'Lab Cost:') !!}
    <p>{{ $payment->pay_lab }}</p>
</div>

<!-- Pay Others Field -->
<div class="form-group">
    {!! Form::label('pay_others', 'Others:') !!}
    <p>{{ $payment->pay_others }}</p>
</div>

<!-- Pay Subtotal Field -->
<div class="form-group">
    {!! Form::label('pay_subtotal', 'Subtotal:') !!}
    <p>{{ $payment->pay_subtotal }}</p>
</div>

<!-- Pay Vat Field -->
<div class="form-group">
    {!! Form::label('pay_vat', 'VAT:') !!}
    <p>{{ $payment->pay_vat }}</p>
</div>

<!-- Pay Total Field -->
<div class="form-group">
    {!! Form::label('pay_total', 'Total:') !!}
    <p>{{ $payment->pay_total }}</p>
</div>
