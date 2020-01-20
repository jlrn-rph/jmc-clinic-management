<div class="table-responsive">
    <table class="table" id="prescriptions-table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Generic Name</th>
                <th>Brand Name</th>
                <th>Frequency</th>
                <th>Days to Take</th>
                <th>Signa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prescriptions as $prescription)
            <tr>
                <td>{{ $prescription->px_name }}</td>
                <td>{{ $prescription->rx_generic }}</td>
                <td>{{ $prescription->rx_brand }}</td>
                <td>{{ $prescription->rx_freq }}</td>
                <td>{{ $prescription->rx_days }}</td>
                <td>{{ $prescription->rx_instruct }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
