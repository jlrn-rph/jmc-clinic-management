@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Doctor</h1>
        <h1 class="pull-right">
          <a href="{{ url('doctors/pdf/' . $doctor->id) }}" style="margin-top: -50px;margin-bottom: 5px" class="btn btn-danger">Convert to PDF</a>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('doctors.show_fields')
                    <a href="{{ route('doctors.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
