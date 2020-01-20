<div class="table-responsive">
    <table class="table" id="consults-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>Doctor-in-Charge</th>
                <th>Diagnosis</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consults as $consults)
            <tr>
            <td>{{ $consults->con_dateSxStart }}</td>
            <td>{{ $consults->patients_name }}</td>->
            <td>{{ $consults->doctor_name }}</td>
            <td>{{ str_limit($consults->con_diagnosis, 30) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
