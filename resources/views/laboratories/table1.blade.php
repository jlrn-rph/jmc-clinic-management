<div class="table-responsive">
    <table class="table" id="laboratories-table">
        <thead>
            <tr>
                <th>Registration Number</th>
                <th>Registration Date</th>
                <th>Patient Name</th>
                <!--<th>Address</th>-->
                <!--<th>Date of Birth</th>-->
                <!--<th>Gender</th>-->
                <!--<th>Contact</th>-->
                <!--<th>Email</th>-->
                <th>Doctor</th>
                <th>Test Ordered</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laboratories as $laboratory)
            <tr>
                <td>{{ $laboratory->lab_regNumber }}</td>
                <td>{{ $laboratory->lab_regDate }}</td>
                <td>{{ $laboratory->lab_name }}</td>
                <!--<td>{{ $laboratory->lab_address }}</td>-->
                <!--<td>{{ $laboratory->lab_dob }}</td>-->
                <!--<td>{{ $laboratory->lab_gender }}</td>-->
                <!--<td>{{ $laboratory->lab_contact }}</td>-->
                <!--<td>{{ $laboratory->lab_email }}</td>-->
                <td>{{ $laboratory->lab_doctor }}</td>
                <td>{{ $laboratory->lab_test }}</td>
                <td>{{ $laboratory->lab_status }}</td>
                <td>
                    {!! Form::open(['route' => ['laboratories.destroy', $laboratory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('laboratories.show', [$laboratory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('laboratories.edit', [$laboratory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
