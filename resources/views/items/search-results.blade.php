@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Items | Search Results</h1>
    <h5 class="pull-right">@include('items.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $items->total() }} result(s) for '{{ request()->input('query') }}'</p>
          @include('items.table1')
        </div>
    </div>
    <div class="pagination navigation">
      {{ $items->appends(request()->input())->links() }}
      <a href="{{ route('items.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
