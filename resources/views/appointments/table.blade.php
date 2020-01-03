<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <!--<th>Ap Contact</th>-->
                <th>Doctor</th>
                <th>Specialization</th>
                <th>Reason</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->ap_pxName }}</td>
            <td>{{ $appointment->ap_regDate }}</td>
            <!--<td>{{ $appointment->ap_contact }}</td>-->
            <td>{{ $appointment->ap_doctor }}</td>
            <td>{{ $appointment->ap_specialist }}</td>
            <td>{{ $appointment->ap_reason }}</td>
            <td>{{ $appointment->ap_status }}</td>
                <td>
                    {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('appointments.show', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('appointments.edit', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
