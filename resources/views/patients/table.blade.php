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
        @foreach($patients as $patient)
          <tr>
            <td>{{ $patient->px_regNumber }}</td>
            <td>{{ $patient->px_regDate }}</td>
            <!--<td>{{ $patient->px_image }}</td>-->
            <td>{{ $patient->px_name }}</td>
          <!--  <td>{{ $patient->px_address }}</td>-->
          <!--  <td>{{ $patient->px_dob }}</td>-->
          <!--  <td>{{ $patient->px_gender }}</td>-->
          <!--  <td>{{ $patient->px_contact }}</td>-->
          <!--  <td>{{ $patient->px_email }}</td>-->
            <td>{{ $patient->px_doctor }}</td>
            <td>{{ $patient->px_status }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
