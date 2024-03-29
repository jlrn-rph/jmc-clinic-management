@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
                   <!-- Update Role Name Field -->
                   <div class="form-group col-md-6">
                      {!! Form::label('role_name', 'Role Name:') !!}
                      {!! Form::text('role_name', null, ['class' => 'form-control', 'required', 'onkeypress'=>"return /[a-z ]/i.test(event.key)"]) !!}
                   </div>
               </div>
                  <div>
                      {!! Form::submit('Update Role', ['class' => 'btn btn-info']) !!}
                   </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
