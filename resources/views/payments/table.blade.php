<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>Payment Number</th>
                <th>Date</th>
                <th>Patient Name</th>
                <!--<th>Pay Address</th>-->
                <!--<th>Pay Admission</th>-->
                <!--<th>Pay Consultation</th>-->
                <!--<th>Pay Lab</th>-->
                <!--<th>Pay Others</th>-->
                <!--<th>Pay Subtotal</th>-->
                <!--<th>Pay Vat</th>-->
                <th>Total Amount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->pay_regNumber }}</td>
                <td>{{ $payment->pay_regDate }}</td>
                <td>{{ $payment->patients_id}}</td>
                <!--<td>{{ $payment->pay_address }}</td>-->
                <!--<td>{{ $payment->pay_admission }}</td>-->
                <!--<td>{{ $payment->pay_consultation }}</td>-->
                <!--<td>{{ $payment->pay_lab }}</td>-->
                <!--<td>{{ $payment->pay_others }}</td>-->
                <!--<td>{{ $payment->pay_subtotal }}</td>-->
                <!--<td>{{ $payment->pay_vat }}</td>-->
                <td>{{ $payment->pay_total }}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @can('isAdmin')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
