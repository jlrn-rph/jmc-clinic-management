@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Return Purchases</h1>
        <a data-toggle="modal" data-target="#add-new-return" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> New Return Purchase</a>
        <a href="{{ route('ret_pdf') }}" class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px"></i>Convert to PDF</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('return_purchases.table')
                    {!! Form::open(['route' => 'returnPurchases.store']) !!}

                        @include('return_purchases.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
