@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Consults | Search Results</h1>
    <h5 class="pull-right">@include('consults.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $consults->total() }} result(s) for '{{ request()->input('query') }}'</p>
          @include('consults.table1')
        </div>
    </div>
    <div class="pagination navigation">
      {{ $consults->appends(request()->input())->links() }}
      <a href="{{ route('consults.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
