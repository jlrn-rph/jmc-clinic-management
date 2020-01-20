</div>
<div class="table-responsive">
    <table class="table" id="patients-table">
        <thead>
            <tr>
                <th>Patient Number</th>
                <th>Registration Date</th>
              <!-- <th>Px Image</th> -->
                <th>Patient Name</th>
              <!--  <th>Address</th>-->
              <!--  <th>Date of Birth</th>-->
              <!--  <th>Sex</th>-->
              <!--  <th>Contact</th>-->
              <!--  <th>Email</th>-->
                <th>Doctor-in-Charge</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patients)
          <tr>
            <td>{{ $patients->px_regNumber }}</td>
            <td>{{ $patients->px_regDate }}</td>
            <!--<td>{{ $patients->px_image }}</td>-->
            <td>{{ $patients->px_name }}</td>
          <!--  <td>{{ $patients->px_address }}</td>-->
          <!--  <td>{{ $patients->px_dob }}</td>-->
          <!--  <td>{{ $patients->px_gender }}</td>-->
          <!--  <td>{{ $patients->px_contact }}</td>-->
          <!--  <td>{{ $patients->px_email }}</td>-->
            <td>{{ $patients->px_doctor }}</td>
            <td>{{ $patients->px_status }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @canany(['isAdmin'])
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
