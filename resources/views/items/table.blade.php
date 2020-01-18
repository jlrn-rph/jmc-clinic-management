<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Initial Count</th>
                <th>Current Count</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->it_name }}</td>
                <td>{{ $item->it_inCount }}</td>
                <td>{{ $item->it_curCount }}</td>
                <td>
                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
