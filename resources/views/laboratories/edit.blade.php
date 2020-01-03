@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Laboratory
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($laboratory, ['route' => ['laboratories.update', $laboratory->id], 'method' => 'patch']) !!}

                        @include('laboratories.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('laboratories.index') }}">Cancel</a>
                          {!! Form::submit('Update Laboratory', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
