<div class="table-responsive">
    <table class="table" id="patients-table">
        <thead>
            <tr>
                <th>Patient Number</th>
                <th>Registration Date</th>
                <th>Patient Name</th>
                <th>Doctor-in-Charge</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patients)
          <tr>
            <td>{{ $patients->px_regNumber }}</td>
            <td>{{ $patients->px_regDate }}</td>
            <td>{{ $patients->px_name }}</td>
            <td>{{ $patients->px_doctor }}</td>
            <td>{{ $patients->px_status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
