<div class="table-responsive">
    <table class="table" id="laboratories-table">
        <thead>
            <tr>
                <th>Registration Number</th>
                <th>Registration Date</th>
                <th>Patient Name</th>
                <th>Doctor</th>
                <th>Test Ordered</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laboratories as $laboratory)
            <tr>
                <td>{{ $laboratory->lab_regNumber }}</td>
                <td>{{ $laboratory->lab_regDate }}</td>
                <td>{{ $laboratory->lab_name }}</td>
                <td>{{ $laboratory->lab_doctor }}</td>
                <td>{{ $laboratory->lab_test }}</td>
                <td>{{ $laboratory->lab_status }}</td>
                <td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
