<div class="table-responsive">
    <table class="table" id="staff-table">
        <thead>
            <tr>
                <th>Stf Regnum</th>
        <th>Stf Regdate</th>
        <th>Stf Emtype</th>
        <th>Stf Department</th>
        <th>Stf Image</th>
        <th>Stf Name</th>
        <th>Stf Gender</th>
        <th>Stf Dob</th>
        <th>Stf Address</th>
        <th>Stf Contact</th>
        <th>Stf Email</th>
        <th>Stf Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($staff as $staff)
            <tr>
                <td>{{ $staff->stf_regNum }}</td>
            <td>{{ $staff->stf_regDate }}</td>
            <td>{{ $staff->stf_emType }}</td>
            <td>{{ $staff->stf_department }}</td>
            <td>{{ $staff->stf_image }}</td>
            <td>{{ $staff->stf_name }}</td>
            <td>{{ $staff->stf_gender }}</td>
            <td>{{ $staff->stf_dob }}</td>
            <td>{{ $staff->stf_Address }}</td>
            <td>{{ $staff->stf_contact }}</td>
            <td>{{ $staff->stf_email }}</td>
            <td>{{ $staff->stf_status }}</td>
                <td>
                    {!! Form::open(['route' => ['staff.destroy', $staff->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('staff.show', [$staff->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('staff.edit', [$staff->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
