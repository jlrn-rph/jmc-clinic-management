@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Prescriptions | Search Results</h1>
    <h5 class="pull-right">@include('prescriptions.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $prescriptions->total() }} result(s) for '{{ request()->input('query') }}'</p>
          @include('prescriptions.table1')
        </div>
    </div>
    <div class="pagination navigation">
      {{ $prescriptions->appends(request()->input())->links() }}
      <a href="{{ route('prescriptions.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
