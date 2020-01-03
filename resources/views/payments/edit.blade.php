@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($payment, ['route' => ['payments.update', $payment->id], 'method' => 'patch']) !!}

                        @include('payments.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('payments.index') }}">Cancel</a>
                          {!! Form::submit('Update Payment', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
