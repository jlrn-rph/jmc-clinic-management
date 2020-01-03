<div class="table-responsive">
    <table class="table" id="labTests-table">
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Cost</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($labTests as $labTest)
            <tr>
                <td>{{ $labTest->lt_name }}</td>
                <td>{{ $labTest->lt_cost }}</td>
                <td>
                    {!! Form::open(['route' => ['labTests.destroy', $labTest->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('labTests.show', [$labTest->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('labTests.edit', [$labTest->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
