@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Return Purchase
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($returnPurchase, ['route' => ['returnPurchases.update', $returnPurchase->id], 'method' => 'patch']) !!}

                        @include('return_purchases.form')
                        <div class="col-sm-12">
                          <a class="btn btn-close" href="{{ route('returnPurchases.index') }}">Cancel</a>
                          {!! Form::submit('Update Return Purchase', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
