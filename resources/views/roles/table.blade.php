<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Role Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->role_name }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i>View</a>
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
