@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                        @include('users.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('schedules.index') }}">Cancel</a>
                          {!! Form::submit('Update User', ['class' => 'btn btn-info']) !!}
                        </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
