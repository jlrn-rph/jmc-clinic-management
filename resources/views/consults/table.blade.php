<div class="table-responsive">
    <table class="table" id="consults-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Blood Pressure</th>
                <th>Symptoms</th>
                <th>Diagnosis</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consults as $consult)
            <tr>
                <td>{{ $consult->con_dateSxStart }}</td>
            <td>{{ $consult->con_height }}</td>
            <td>{{ $consult->con_weight }}</td>
            <td>{{ $consult->con_bp }}</td>
            <td>{{ $consult->con_symptom }}</td>
            <td>{{ $consult->con_diagnosis }}</td>
                <td>
                    {!! Form::open(['route' => ['consults.destroy', $consult->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('consults.show', [$consult->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('consults.edit', [$consult->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
