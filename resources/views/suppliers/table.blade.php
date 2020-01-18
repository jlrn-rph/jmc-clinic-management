<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Supplier Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->sup_name }}</td>
                <td>{{ $supplier->sup_address }}</td>
                <td>{{ $supplier->sup_contact }}</td>
                <td>{{ $supplier->sup_email }}</td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suppliers.show', [$supplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('suppliers.edit', [$supplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
