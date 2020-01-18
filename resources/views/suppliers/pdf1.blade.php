<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Supplier Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->sup_name }}</td>
                <td>{{ $supplier->sup_address }}</td>
                <td>{{ $supplier->sup_contact }}</td>
                <td>{{ $supplier->sup_email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
