@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lab Test
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($labTest, ['route' => ['labTests.update', $labTest->id], 'method' => 'patch']) !!}

                        @include('lab_tests.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('labTests.index') }}">Cancel</a>
                          {!! Form::submit('Update Lab Test', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
