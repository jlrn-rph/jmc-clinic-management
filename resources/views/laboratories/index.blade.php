@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Laboratories</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-new-lab" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> Add Laboratory</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('laboratories.table')
                    {!! Form::open(['route' => 'laboratories.store']) !!}

                        @include('laboratories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
