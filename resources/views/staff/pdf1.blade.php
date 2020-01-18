<div class="table-responsive">
    <table class="table" id="staff-table">
        <thead>
            <tr>
                <th>Staff Number</th>
                <th>Registration Date</th>
                <th>Name</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($staff as $staff)
            <tr>
                <td>{{ $staff->stf_regNum }}</td>
                <td>{{ $staff->stf_regDate }}</td>
                <td>{{ $staff->stf_name }}</td>
                <td>{{ $staff->stf_department }}</td>
                <td>{{ $staff->stf_status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
