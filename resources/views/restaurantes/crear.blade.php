@extends('adminlte::page')

@section('title', 'Risto Reservas')

@section('content_header')
    <h1 class="m-0 text-dark">Restaurantes</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Nuevo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="/restaurantes/store" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombreInput">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombreInput" placeholder="Digita el nombre del restaurante">
                        </div>
                        <div class="form-group">
                            <label for="ciudadInput">Ciudad</label>
                            <select class="form-control" name="ciudad_id">
                                <option value="1">Ciudad 1</option>
                                <option value="2">Ciudad 2</option>
                                <option value="3">Ciudad 3</option>
                                <option value="4">Ciudad 4</option>
                                <option value="5">Ciudad 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombreInput">Descripción</label>
                            <input name="descripcion" type="text" class="form-control" id="nombreInput" placeholder="Describe el restaurante">
                        </div>
                        <div class="form-group">
                            <label for="nombreInput">Dirección</label>
                            <input name="direccion" type="text" class="form-control" id="nombreInput" placeholder="Digita la dirección del restaurante">
                        </div>
                        <div class="form-group">
                            <label for="nombreInput">Url</label>
                            <input name="url" type="text" class="form-control" id="nombreInput" placeholder="Digita la URL">
                        </div>
                        <div class="form-group">
                            <label for="imagenInputFile">Imagen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="imagen" type="file" class="custom-file-input" id="imagenInputFile">
                                    <label class="custom-file-label" for="imagenInputFile">Seleccionar el archivo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Subir</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
