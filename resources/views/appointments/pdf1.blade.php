<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <th>Doctor</th>
                <th>Specialization</th>
                <th>Reason</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->ap_pxName }}</td>
                <td>{{ $appointment->ap_regDate }}</td>
                <td>{{ $appointment->ap_doctor }}</td>
                <td>{{ $appointment->ap_specialist }}</td>
                <td>{{ $appointment->ap_reason }}</td>
                <td>{{ $appointment->ap_status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
