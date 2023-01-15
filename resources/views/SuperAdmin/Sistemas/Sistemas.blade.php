@extends('../../Layouts.principal')
@section('contenido')
    <div class="col-sm-12 col-xl-12 col-md-12 col-lg-12">
        <div class="bg-secondary rounded h-100 p-4 mt-4">
            <h6 class="mb-4">CONTROL DE SISTEMAS
                <button type="button" class="btn btn-sm btn-primary" style="float:right;" data-bs-toggle="modal"
                    data-bs-target="#addSistema">
                    + Nuevo
                </button>
            </h6>

            <div class="table-responsive">
                <table class="table table-hover dataTables_filter" id="sistemas">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Sistema</th>
                            <th class="text-center">Url</th>
                            <th class="text-center">Estatus</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $e)
                            <tr>
                                <th class="text-center">{{ $e->id }}</th>
                                <td class="text-center">{{ $e->nombre }}</td>
                                <td>{{ $e->url }}</td>
                                <td class="text-center">
                                    {{ $e->estatus == 0 ? 'Inactivo' : '' }}
                                    {{ $e->estatus == 1 ? 'Activo' : '' }}
                                    {{ $e->estatus == 2 ? 'Mantenimiento' : '' }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#alerta">
                                        Eliminar
                                    </button>
                                    <button type="button" class="btn btn-outline-info btn-sm">Editar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div class="col-sm-12 col-xl-6 col-md-6 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4 mt-4">
                <h6 class="mb-4">CONTROL DE GRUPOS</h6>
                <div class="table-responsive">
                    <table class="table table-hover dataTables_filter" id="grupos">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>EMPLEADOS ALMACEN</td>
                                <td>Activo</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        Eliminar
                                    </button>
                                    <button type="button" class="btn btn-outline-info btn-sm">Editar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-6 col-md-6 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4 mt-4">
                <h6 class="mb-4">CONTROL DE PERSMISOS</h6>
                <div class="table-responsive">
                    <table class="table table-hover dataTables_filter" id="permisos">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                               {{--  <th scope="col">Code Name</th> --}}
                                <th scope="col">Estatus</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Crear Sistema</td>
                               {{--  <td>add_sistema</td> --}}
                                <td>Activo</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        Eliminar
                                    </button>
                                    <button type="button" class="btn btn-outline-info btn-sm">Editar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <br />


    <!-- Modal Sistemas-->
    <div class="modal fade" id="alerta" tabindex="-1" aria-labelledby="alertaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color:#f8d7da; padding:10px;">
                <center>
                    <h5 style="color: #842029">¿ESTA SEGURO DE ELIMINAR ESTE REGISTRO?</h5>
                </center>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-sm btn-outline-dark w-100"
                            data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-sm btn-outline-primary w-100">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Sistemas-->
    <div class="modal fade" id="addSistema" tabindex="-1" aria-labelledby="addSistemaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color:#191C24;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addSistemaLabel">AGREGAR SISTEMA</h1>
                    <button type="button" class="btn-close" style="color:#ffffff;" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('sistemas.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <label style="color:#ffffff;">Nombre</label>
                        <input type="text" placeholder="Nombre" name="nombre"
                            class="form-control form-control-sm mb-2" />
                        <label style="color:#ffffff;">URL</label>
                        <input type="text" placeholder="Url" name="url" class="form-control form-control-sm mb-2" />
                        <label style="color:#ffffff;">Estatus</label>
                        <select class="form-select form-select-sm mb-3" name="estatus">
                            <option selected disabled>Seleccionar Estatus</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                            <option value="2">Mantemiento</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <style>
        .dataTables_filter input {
            color: red;

        }

        div.dataTables_length select,
        label {
            color: red;

        }
    </style>
@endsection
