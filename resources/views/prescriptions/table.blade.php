<div class="table-responsive">
    <table class="table" id="prescriptions-table">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Generic Name</th>
                <th>Brand Name</th>
                <th>Frequency</th>
                <th>Days to Take</th>
                <th>Signa</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prescriptions as $prescription)
            <tr>
                <td>{{ $prescription->px_name }}</td>
                <td>{{ $prescription->rx_generic }}</td>
                <td>{{ $prescription->rx_brand }}</td>
                <td>{{ $prescription->rx_freq }}</td>
                <td>{{ $prescription->rx_days }}</td>
                <td>{{ $prescription->rx_instruct }}</td>
                <td>
                    {!! Form::open(['route' => ['prescriptions.destroy', $prescription->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prescriptions.show', [$prescription->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('prescriptions.edit', [$prescription->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
