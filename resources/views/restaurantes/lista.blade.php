@extends('adminlte::page')

@section('title', 'Risto Reservas')

@section('content_header')
    <h1 class="m-0 text-dark">Administración de Restaurantes y Reservas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th>Descripción</th>
                            <th>Dirección</th>
                            <th>URL</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($restaurantes as $restaurante)
                            <tr>
                                <td>{{ $restaurante->id }}</td>
                                <td>{{ $restaurante->nombre }}</td>
                                <td>{{ $restaurante->ciudad->nombre }}</td>
                                <td>{{ $restaurante->descripcion }}</td>
                                <td>{{ $restaurante->direccion }}</td>
                                <td>{{ $restaurante->url }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info"><i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-info"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-info"><i class="fas fa-hotel"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
