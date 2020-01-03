@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consult
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consult, ['route' => ['consults.update', $consult->id], 'method' => 'patch']) !!}

                        @include('consults.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('consults.index') }}">Cancel</a>
                          {!! Form::submit('Update Consult', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
