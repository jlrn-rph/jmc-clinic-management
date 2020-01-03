<!-- Sched Doctor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sched_doctor', 'Doctor:') !!}
    {!! Form::text('sched_doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Sched Day Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sched_day', 'Days Available:') !!}
    {!! Form::text('sched_day', null, ['class' => 'form-control']) !!}
</div>

<!-- Sched Fromtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sched_fromTime', 'From Time:') !!}
    {!! Form::text('sched_fromTime', null, ['class' => 'form-control']) !!}
</div>

<!-- Sched Totime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sched_toTime', 'To Time:') !!}
    {!! Form::text('sched_toTime', null, ['class' => 'form-control']) !!}
</div>
