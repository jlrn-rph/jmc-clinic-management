<div class="table-responsive">
    <table class="table" id="purchases-table">
        <thead>
            <tr>
                <th>Purchase Date</th>
                <th>Bill Number</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($purchases as $purchase)
            <tr>
                <td>{{ $purchase->pur_date }}</td>
                <td>{{ $purchase->pur_billNum }}</td>
                <td>{{ $purchase->pur_item }}</td>
                <td>{{ $purchase->pur_quantity }}</td>
                <td>{{ $purchase->pur_supplier }}</td>
                <td>{{ $purchase->pur_price }}</td>
                <td>
                    {!! Form::open(['route' => ['purchases.destroy', $purchase->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('purchases.show', [$purchase->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('purchases.edit', [$purchase->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
