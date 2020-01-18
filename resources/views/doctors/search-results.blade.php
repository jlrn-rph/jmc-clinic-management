@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Doctors | Search Results</h1>
    <h5 class="pull-right">@include('doctors.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $doctors->total() }} result(s) for '{{ request()->input('query') }}'</p>
          <div class="table-responsive">
              <table class="table" id="doctors-table">
                  <thead>
                      <tr>
                          <th>Doctor Number</th>
                          <th>Doctor Name</th>
                          <th>Specialization</th>
                          <th>Time In</th>
                          <th>Time Out</th>
                          <th>Available Days</th>
                          <th>Status</th>
                          <th colspan="3">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($doctors as $doctor)
                      <tr>
                          <td>{{ $doctor->dr_regNum }}</td>
                          <td>{{ $doctor->dr_name }}</td>
                          <td>{{ $doctor->dr_specialist }}</td>
                          <td>{{ $doctor->dr_timeIn }}</td>
                          <td>{{ $doctor->dr_timeOut }}</td>
                          <td>{{ $doctor->dr_daysAvail }}</td>
                          <td>{{ $doctor->dr_status }}</td>
                          <td>
                              {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                              <div class='btn-group'>
                                  <a href="{{ route('doctors.show', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                  <a href="{{ route('doctors.edit', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                              </div>
                              {!! Form::close() !!}
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>

        </div>
    </div>
    <div class="pagination navigation">
      {{ $doctors->appends(request()->input())->links() }}
      <a href="{{ route('doctors.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
