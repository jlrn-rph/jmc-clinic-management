<div class="table-responsive">
    <table class="table" id="schedules-table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Days Available</th>
                <th>From Time</th>
                <th>To Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->sched_doctor }}</td>
                <td>{{ $schedule->sched_day }}</td>
                <td>{{ $schedule->sched_fromTime }}</td>
                <td>{{ $schedule->sched_toTime }}</td>
                <td>
                    {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schedules.show', [$schedule->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('schedules.edit', [$schedule->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
