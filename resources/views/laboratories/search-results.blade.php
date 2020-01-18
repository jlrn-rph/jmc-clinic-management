@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Laboratories | Search Results</h1>
    <h5 class="pull-right">@include('laboratories.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $laboratories->total() }} result(s) for '{{ request()->input('query') }}'</p>
          @include('laboratories.table1')
        </div>
    </div>
    <div class="pagination navigation">
      {{ $laboratories->appends(request()->input())->links() }}
      <a href="{{ route('laboratories.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
