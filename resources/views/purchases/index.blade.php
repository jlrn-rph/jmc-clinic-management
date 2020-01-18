@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Purchases</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#add-new-purchase" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> New Purchase</a>
            <a href="{{ route('pur_pdf') }}" class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px"></i>Convert to PDF</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('purchases.table')
                    {!! Form::open(['route' => 'purchases.store']) !!}

                        @include('purchases.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="pagination navigation">
          {{ $purchases->links() }}
        </div>
    </div>
@endsection
