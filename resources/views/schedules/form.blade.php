<!-- Sched Doctor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sched_doctor', 'Doctor:') !!}
    <select name="sched_doctor" id="sched_doctor" class="form-control selectpicker"  data-live-search="true" data-live-search-placeholder="Select Doctor" title="Select Doctor">
       @foreach($doctors as $doctor)
           <option value="{{$doctor->dr_name}}"{{ $doctor->dr_name == $schedule->sched_doctor ? 'selected' : ''}}> {{$doctor->dr_name}}</option>
       @endforeach
    </select>
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
