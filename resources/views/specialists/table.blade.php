<div class="table-responsive">
    <table class="table" id="specialists-table">
        <thead>
            <tr>
                <th>Specialization</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($specialists as $specialist)
            <tr>
                <td>{{ $specialist->sp_name }}</td>
                <td>
                    {!! Form::open(['route' => ['specialists.destroy', $specialist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('specialists.show', [$specialist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('specialists.edit', [$specialist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
