@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Appointment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($appointment, ['route' => ['appointments.update', $appointment->id], 'method' => 'patch']) !!}

                        @include('appointments.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('appointments.index') }}">Cancel</a>
                          {!! Form::submit('Update Appointment', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
