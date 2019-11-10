@extends('layouts.master')
@section('header')
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')

<section class="admin-content">
       @component('componentes.header-dash')
       @slot('titulo', 'Reservas' )
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
                                        <th>Fecha</th>
                                        <th>ID Oferta</th>
                                        <th>ID Adicional</th>
                                        <th>Referencia</th>
                                        <th>Código</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($reservas as $reserva)
                                        <tr>
                                            <td>{{ $reserva->id }}</td>
                                            <td>{{ date( 'd-m-y' , $reserva->tiempo) }}</td>
                                            <td>{{ $reserva->oferta }}</td>
                                            <td>{{ $reserva->adicional_id }}</td>
                                            <td>{{ $reserva->cid }}</td>
                                            <td>{{ $reserva->codigo }}</td>
                                            <td>Email</td>
                                            <td></td>
                                            <td>{{ date( 'd-m-y' , $reserva->fechaPago) }}</td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>ID Oferta</th>
                                        <th>ID Adicional</th>
                                        <th>Referencia</th>
                                        <th>Código</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
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