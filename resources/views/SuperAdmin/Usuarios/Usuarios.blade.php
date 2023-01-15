@extends('../../Layouts.principal')
 
@section('contenido')
<div class="col-sm-12 col-xl-12 col-md-12 col-lg-12">
    <div class="bg-secondary rounded h-100 p-4 mt-4">
        <h6 class="mb-4">CONTROL DE USUARIOS</h6>
        <div class="table-responsive">
            <table class="table table-hover dataTables_filter" id="usuarios">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection