@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Schedule
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($schedule, ['route' => ['schedules.update', $schedule->id], 'method' => 'patch']) !!}

                        @include('schedules.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('schedules.index') }}">Cancel</a>
                          {!! Form::submit('Update Schedule', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
