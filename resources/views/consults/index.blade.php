@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Consults</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-new-consult" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> New Consult</a>
           @can('isAdmin')
           <a href="{{ route('con_pdf') }}" class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px"></i>Convert to PDF</a>
           @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('consults.table')
                    {!! Form::open(['route' => 'consults.store']) !!}

                        @include('consults.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
