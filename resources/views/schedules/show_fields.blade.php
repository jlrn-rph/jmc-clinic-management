<!-- Sched Doctor Field -->
<div class="form-group">
    {!! Form::label('sched_doctor', 'Doctor:') !!}
    <p>{{ $schedule->sched_doctor }}</p>
</div>

<!-- Sched Day Field -->
<div class="form-group">
    {!! Form::label('sched_day', 'Days Available:') !!}
    <p>{{ $schedule->sched_day }}</p>
</div>

<!-- Sched Fromtime Field -->
<div class="form-group">
    {!! Form::label('sched_fromTime', 'From Time:') !!}
    <p>{{ $schedule->sched_fromTime }}</p>
</div>

<!-- Sched Totime Field -->
<div class="form-group">
    {!! Form::label('sched_toTime', 'To Time:') !!}
    <p>{{ $schedule->sched_toTime }}</p>
</div>
