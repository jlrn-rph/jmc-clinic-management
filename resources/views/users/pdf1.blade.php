<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
              <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role_id}}</td>
                  <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
