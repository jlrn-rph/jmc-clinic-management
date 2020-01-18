<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Initial Count</th>
                <th>Current Count</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->it_name }}</td>
                <td>{{ $item->it_inCount }}</td>
                <td>{{ $item->it_curCount }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
