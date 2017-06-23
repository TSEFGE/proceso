@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Agrupacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catAgrupacion, ['route' => ['catAgrupacions.update', $catAgrupacion->id], 'method' => 'patch']) !!}

                        @include('cat_agrupacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection