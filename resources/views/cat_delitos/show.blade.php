@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Delitos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_delitos.show_fields')
                    <a href="{!! route('catDelitos.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
