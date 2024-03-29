<div class="table-responsive">
    <table class="table" id="consults-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <!-- <th>Height</th>
                <th>Weight</th>
                <th>Blood Pressure</th>
                <th>Symptoms</th> -->
                <th>Doctor-in-Charge</th>
                <th>Diagnosis</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consults as $consults)
            <tr>
            <td>{{ $consults->con_dateSxStart }}</td>
            <td>{{ $consults->patients_name }}</td>
            <!-- <td>{{ $consults->con_height }}</td>
            <td>{{ $consults->con_weight }}</td>
            <td>{{ $consults->con_bp }}</td>
            <td>{{ str_limit($consults->con_symptom, 30) }}</td> -->
            <td>{{ $consults->doctor_name }}</td>
            <td>{{ str_limit($consults->con_diagnosis, 30) }}</td>
                <td>
                    {!! Form::open(['route' => ['consults.destroy', $consults->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('consults.show', [$consults->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @canany(['isAdmin','isDoctor'])
                        <a href="{{ route('consults.edit', [$consults->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
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
</div>
