@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doctor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'doctors.store']) !!}

                        @include('doctors.form1')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('doctors.index') }}">Cancel</a>
                          {!! Form::submit('New Doctor', ['class' => 'btn btn-info']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
