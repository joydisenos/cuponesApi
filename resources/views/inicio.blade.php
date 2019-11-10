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
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Area chart</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-01"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Line chart</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-02"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">BI-Polar Line chart
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
                                <div class="card-title">Overlapping Bar Chart</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-04"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Stacked Bar Chart</div>
                            </div>
                            <div class="card-body">
                                <div id="chartist-05"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Gauge Chart
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