<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>Payment Number</th>
                <th>Date</th>
                <th>Patient Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->pay_regNumber }}</td>
                <td>{{ $payment->pay_regDate }}</td>
                <td>{{ $payment->patients_id }}</td>
                <td>{{ $payment->pay_total }}</td>
                <td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
