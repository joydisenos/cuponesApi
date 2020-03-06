@extends('layouts.master')
@section('header')
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')

<section class="admin-content">
       @component('componentes.header-dash')
       @slot('titulo', (isset($categoria)) ? 'Ofertas ' . title_case($categoria) : 'Ofertas' )
       @endcomponent

        <div class="container  pull-up">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive p-t-10">
                                <table id="example-multi" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                        <th>Estado</th>
                                        <th>Empresa</th>
                                        <th>Título</th>
                                        <th>RT</th>
                                        <th>RP</th>
                                        <th>Tasa</th>
                                        <th>Ingreso</th>
                                        <th>Usuario</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($ofertas as $oferta)
                                        <tr>
                                            <td>{{ $oferta->id }}</td>
                                            <td>{{ date('Y/m/d' , $oferta->ofecha) }}</td>
                                            <td>{{ date('Y/m/d' , $oferta->cfecha) }}</td>
                                            <td>Estado</td>
                                            <td>Empresa</td>
                                            <td>{{ str_limit($oferta->titulo , 20) }}</td>
                                            <td>RT</td>
                                            <td>RP</td>
                                            <td>TASA</td>
                                            <td>ingreso</td>
                                            <td>Usuario</td>
                                            <td><a href="{{ route('ofertas.editar' , $oferta->id) }}">editar</a></td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                        <th>Estado</th>
                                        <th>Empresa</th>
                                        <th>Título</th>
                                        <th>RT</th>
                                        <th>RP</th>
                                        <th>Tasa</th>
                                        <th>Ingreso</th>
                                        <th>Usuario</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
@section('scripts')
<script src="{{ asset('assets/vendor/DataTables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatable-data.js')}}"></script>
@endsection