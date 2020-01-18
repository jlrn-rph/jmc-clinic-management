<div>
  @include('doctors.search')
</div>
<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
                <th>Doctor Number</th>
                <!--<th>Dr Regdate</th>-->
                <!--<th>Dr Image</th>-->
                <!--<th>Dr License</th>-->
                <th>Doctor Name</th>
                <th>Specialization</th>
                <!--<th>Dr Gender</th>-->
                <!--<th>Dr Dob</th>-->
                <!--<th>Dr Address</th>-->
                <!--<th>Dr Contact</th>-->
                <!--<th>Email</th>-->
                <!--<th>Dr Fee</th>-->
                <th>Time In</th>
                <th>Time Out</th>
                <th>Available Days</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->dr_regNum }}</td>
                <!--<td>{{ $doctor->dr_regDate }}</td>-->
                <!--<td>{{ $doctor->dr_image }}</td>-->
                <!--<td>{{ $doctor->dr_license }}</td>-->
                <td>{{ $doctor->dr_name }}</td>
                <td>{{ $doctor->dr_specialist }}</td>
                <!--<td>{{ $doctor->dr_gender }}</td>-->
                <!--<td>{{ $doctor->dr_dob }}</td>-->
                <!--<td>{{ $doctor->dr_address }}</td>-->
                <!--<td>{{ $doctor->dr_contact }}</td>-->
                <!--<td>{{ $doctor->dr_email }}</td>-->
                <!--<td>{{ $doctor->dr_fee }}</td>-->
                <td>{{ $doctor->dr_timeIn }}</td>
                <td>{{ $doctor->dr_timeOut }}</td>
                <td>{{ $doctor->dr_daysAvail }}</td>
                <td>{{ $doctor->dr_status }}</td>
                <td>
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('doctors.edit', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
