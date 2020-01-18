<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
                <th>Doctor Number</th>
                <th>Doctor Name</th>
                <th>Specialization</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Available Days</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->dr_regNum }}</td>
                <td>{{ $doctor->dr_name }}</td>
                <td>{{ $doctor->dr_specialist }}</td>
                <td>{{ $doctor->dr_timeIn }}</td>
                <td>{{ $doctor->dr_timeOut }}</td>
                <td>{{ $doctor->dr_daysAvail }}</td>
                <td>{{ $doctor->dr_status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
