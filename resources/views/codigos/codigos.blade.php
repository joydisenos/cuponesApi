@extends('layouts.master')
@section('header')
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')

<section class="admin-content">
       @component('componentes.header-dash')
       @slot('titulo', 'Códigos' )
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
                                        <th>Empresa</th>
                                        <th>Códigos</th>
                                        
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
										
										@foreach($empresas as $empresa)
											<tr>
												<td>{{ $empresa->nombre }}</td>
												<td>{{ $empresa->codigos()->count() }}</td>
												<td><a href="#">editar</a> <a href="#">eliminar</a></td>
											</tr>
										@endforeach
                                   
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Empresa</th>
                                        <th>Códigos</th>
                                        
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