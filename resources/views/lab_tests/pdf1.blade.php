<div class="table-responsive">
    <table class="table" id="labTests-table">
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
        @foreach($labTests as $labTest)
            <tr>
                <td>{{ $labTest->lt_name }}</td>
                <td>{{ $labTest->lt_cost }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
