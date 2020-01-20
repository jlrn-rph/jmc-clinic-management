@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Staff
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($staff, ['route' => ['staff.update', $staff->id], 'method' => 'patch']) !!}

                        @include('staff.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('staff.index') }}">Cancel</a>
                          {!! Form::submit('Update Staff', ['class' => 'btn btn-info']) !!}
                        </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
