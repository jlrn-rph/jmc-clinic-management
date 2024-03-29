@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Payments</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-new-payment" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i> New Payment</a>
           @can('isAdmin')
           <a href="{{ route('pay_pdf') }}" class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px"></i>Convert to PDF</a>
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
                    @include('payments.table')
                    {!! Form::open(['route' => 'payments.store']) !!}

                        @include('payments.fields')

                    {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection
