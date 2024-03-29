<!-- Pay Regnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_regNumber', 'Payment Number:') !!}
    {!! Form::text('pay_regNumber', null, ['class' => 'form-control', 'required', 'autofocus required title'=>'Please enter numbers between 1 to 10 digits', 'pattern'=> '[0-9]{0,10}', 'onkeypress'=>"return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"]) !!}
</div>

<!-- Pay Regdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_regDate', 'Date:') !!}
    {!! Form::date('pay_regDate', null, ['class' => 'form-control','id'=>'pay_regDate']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#pay_regDate').datetimepicker({
          format: 'YYYY-MM-DD',
          minDate: Date()
        })
    </script>
@endsection

<!-- Pay Name Field -->
<div class="form-group col-sm-12">
  <label for="patients_id">Patient Name: </label>
  <select name="patients_id" id="patients_id" class="form-control selectpicker"  data-live-search="true" title="Select Patient">
      <option value=""> Select Patient</option>
    @foreach($patients as $patient)
      <option value="{{$patient->px_name}}"}}> {{$patient->px_name}}</option>
    @endforeach
  </select>
</div>

<!-- Pay Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pay_address', 'Address:') !!}
    {!! Form::textarea('pay_address', null, ['class' => 'form-control', 'cols'=>40, 'rows'=>2,'maxlength'=> '100', 'required']) !!}
</div>

<!-- Pay Admission Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_admission', 'Admission Cost:') !!}
    {!! Form::text('pay_admission', null, ['class' => 'form-control price', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>

<!-- Pay Consultation Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_consultation', 'Consultation Cost:') !!}
    {!! Form::text('pay_consultation', null, ['class' => 'form-control price', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>

<!-- Pay Lab Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_lab', 'Lab Cost:') !!}
    {!! Form::text('pay_lab', null, ['class' => 'form-control price', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>

<!-- Pay Others Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_others', 'Others:') !!}
    {!! Form::text('pay_others', null, ['class' => 'form-control price', 'oninput'=>"this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"]) !!}
</div>

<!-- Pay Subtotal Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_subtotal', 'Subtotal:') !!}
    {!! Form::text('pay_subtotal', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- Pay Vat Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_vat', 'VAT:') !!}
    {!! Form::text('pay_vat', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Pay Total Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pay_total', 'Total:') !!}
    {!! Form::text('pay_total', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

<script>
$('.price').keyup(function () {
    var sum = 0;
    var vat = 0;
    var sub = 0;
    $('.price').each(function() {
        sum += Number($(this).val());
        vat = sum*.12;
        sub = sum - vat;
    });
    $('#pay_total').val(sum);
    $('#pay_subtotal').val(sub);
    $('#pay_vat').val(vat);
});
</script>
