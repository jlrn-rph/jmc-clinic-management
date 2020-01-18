@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Suppliers | Search Results</h1>
    <h5 class="pull-right">@include('suppliers.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $suppliers->total() }} result(s) for '{{ request()->input('query') }}'</p>
          @include('suppliers.table1')
        </div>
    </div>
    <div class="pagination navigation">
      {{ $suppliers->appends(request()->input())->links() }}
      <a href="{{ route('suppliers.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
