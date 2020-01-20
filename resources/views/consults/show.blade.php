@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Consult</h1>
        <h1 class="pull-right">
          @can('isAdmin')
          <a href="{{ url('consults/pdf/' . $consult->id) }}" style="margin-top: -50px;margin-bottom: 5px" class="btn btn-danger">Convert to PDF</a>
          @endcan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('consults.show_fields')
                    <a href="{{ route('consults.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
