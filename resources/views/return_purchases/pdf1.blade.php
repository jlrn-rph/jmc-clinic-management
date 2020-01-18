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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
