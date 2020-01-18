@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Appointment</h1>
         <a href="{{ route('ap_pdf') }}" class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px"></i>Convert to PDF</a>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'appointments.store']) !!}

                        @include('appointments.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('appointments.index') }}">Cancel</a>
                          {!! Form::submit('Add Appointment', ['class' => 'btn btn-info']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
