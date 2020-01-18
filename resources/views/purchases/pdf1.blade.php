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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
