<div class="media col-sm-12">
     <div class="media-body">
		     <h2>
           <!-- Pay Name Field -->
           <div class="form-group">
             {{ $payment->patients_id }}
           </div>
       </h2>

      <h3><small class="display-block">
        <!-- Pay Regnumber Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('pay_regNumber', 'Payment Number:') !!}
            {{ $payment->pay_regNumber }}
        </div>

        <!-- Pay Regdate Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('pay_regDate', 'Date:') !!}
            {{ $payment->pay_regDate }}
        </div>
      </small></h3>
	</div>

<hr>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Pay Address Field -->
          <div class="form-group">
              {!! Form::label('pay_address', 'Address:') !!}
              {{ $payment->pay_address }}
          </div>
        </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Payment Details</div>
      <div class="panel-body">
        <div class="form-group col-sm-12">
          <!-- Pay Admission Field -->
          <div class="form-group">
              {!! Form::label('pay_admission', 'Admission Cost:') !!}
              {{ $payment->pay_admission }}
          </div>

          <!-- Pay Consultation Field -->
          <div class="form-group">
              {!! Form::label('pay_consultation', 'Consultation Cost:') !!}
              {{ $payment->pay_consultation }}
          </div>

          <!-- Pay Lab Field -->
          <div class="form-group">
              {!! Form::label('pay_lab', 'Lab Cost:') !!}
              {{ $payment->pay_lab }}
          </div>

          <!-- Pay Others Field -->
          <div class="form-group">
              {!! Form::label('pay_others', 'Others:') !!}
              {{ $payment->pay_others }}
          </div>

          <!-- Pay Subtotal Field -->
          <div class="form-group">
              {!! Form::label('pay_subtotal', 'Subtotal:') !!}
              {{ $payment->pay_subtotal }}
          </div>

          <!-- Pay Vat Field -->
          <div class="form-group">
              {!! Form::label('pay_vat', 'VAT:') !!}
              {{ $payment->pay_vat }}
          </div>

          <!-- Pay Total Field -->
          <div class="form-group">
              {!! Form::label('pay_total', 'Total:') !!}
              {{ $payment->pay_total }}
          </div>
        </div>
    </div>
  </div>
</div>
