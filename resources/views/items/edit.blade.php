@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Item
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($item, ['route' => ['items.update', $item->id], 'method' => 'patch']) !!}

                        @include('items.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('items.index') }}">Cancel</a>
                          {!! Form::submit('Update Item', ['class' => 'btn btn-info']) !!}
                        </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
