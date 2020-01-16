@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'payments.store']) !!}

                    @include('payments.form1')
                    <div class="col-sm-12">
                      <a class="btn btn-close" href="{{ route('payments.index') }}">Cancel</a>
                      {!! Form::submit('Add Payment', ['class' => 'btn btn-info']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
