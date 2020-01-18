@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1 class="pull-left">Patients | Search Results</h1>
    <h5 class="pull-right">@include('patients.search')</h5>
</section>

<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
          <p>{{ $patients->total() }} result(s) for '{{ request()->input('query') }}'</p>
          <div class="table-responsive">
            <table class="table" id="patients-table">
              <thead>
                  <tr>
                      <th>Patient Number</th>
                      <th>Registration Date</th>
                      <th>Patient Name</th>
                      <th>Doctor-in-Charge</th>
                      <th>Status</th>
                      <th colspan="3">Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($patients as $patient)
                <tr>
                  <td>{{ $patient->px_regNumber }}</td>
                  <td>{{ $patient->px_regDate }}</td>
                  <td>{{ $patient->px_name }}</td>
                  <td>{{ $patient->px_doctor }}</td>
                  <td>{{ $patient->px_status }}</td>
                      <td>
                          {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                              <a href="{{ route('patients.show', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                              <a href="{{ route('patients.edit', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
      {{ $patients->appends(request()->input())->links() }}
      <a href="{{ route('patients.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection
