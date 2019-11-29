@extends('layouts.master')
@section('header')
<script    src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
@endsection
@section('content')
<section class="admin-content">
       @component('componentes.header-dash')
       @slot('titulo', 'Editar empresa ' . title_case($empresa->nombre) )
       @endcomponent

        <div class="container  pull-up">
            <div class="row">
                <div class="col">

                    <!--widget card begin-->
                    @component('componentes.form-empresas')
                    @slot('empresa' , $empresa)
                    @endcomponent
                    <!--widget card ends-->


                </div>
                
            </div>


        </div>
    </section>
@endsection
@section('scripts')
<script    src="{{ asset('assets/js/tinymce-data.js') }}"></script>
@endsection