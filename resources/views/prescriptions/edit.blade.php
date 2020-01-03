@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prescription
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prescription, ['route' => ['prescriptions.update', $prescription->id], 'method' => 'patch']) !!}

                        @include('prescriptions.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('prescriptions.index') }}">Cancel</a>
                          {!! Form::submit('Update Prescription', ['class' => 'btn btn-info']) !!}
                        </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
