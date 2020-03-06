@extends('layouts.master')
@section('header')
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/chartist.min.css') }}">
@endsection
@section('content')
<section class="admin-content ">
       @component('componentes.header-dash')
       @slot('titulo', 'Inicio')
       @endcomponent
        <div class="pull-up">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Ingresos</div>
                            </div>
                            <div class="card-body">
                                <div>${{ $ingresos }}</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Usuarios Nuevos</div>
                            </div>
                            <div class="card-body">
                                <div>{{ $usuariosNuevos }}</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Reservas</div>
                            </div>
                            <div class="card-body">
                                <div>{{ $reservas }}</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Reservas Pagas</div>
                            </div>
                            <div class="card-body">
                                <div>{{ $reservasPagas }}</div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Reservas</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-01" data-datos="{{ $reservasGrafico }}"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Usuarios</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-02"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Ingresos
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-03"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Ingresos por Categoría</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-04"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Top 10 Reservas pagas</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-05"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Top 10 ingresos
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-06"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
<script    src="{{ asset('assets/vendor/chartist/chartist.min.js')}}"></script>
<script    src="{{ asset('assets/js/graficos.js')}}"></script>
@endsection