<div class="table-responsive">
    <table class="table" id="returnPurchases-table">
        <thead>
            <tr>
                <th>Return Date</th>
                <th>Bill Number</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($returnPurchases as $returnPurchase)
            <tr>
                <td>{{ $returnPurchase->ret_date }}</td>
                <td>{{ $returnPurchase->ret_billNum }}</td>
                <td>{{ $returnPurchase->ret_item }}</td>
                <td>{{ $returnPurchase->ret_quantity }}</td>
                <td>{{ $returnPurchase->ret_supplier }}</td>
                <td>{{ $returnPurchase->ret_price }}</td>
                <td>
                    {!! Form::open(['route' => ['returnPurchases.destroy', $returnPurchase->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('returnPurchases.show', [$returnPurchase->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('returnPurchases.edit', [$returnPurchase->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
