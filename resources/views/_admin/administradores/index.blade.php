@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de Administradores
@endsection

@section('administradores')
    open
@endsection

@section('lista-administrador')
    active
@endsection

@section('contenido')
		@php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de Administradores
        </div>
        <div class="card-body">
            @if (Auth::user()->id==1||Auth::user()->id==2)
                <a href="{{ url('/admin/lista-administrador/create') }}" class="btn btn-lg btn-info">
                    <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nuevo administrador
                </a>
                <hr>
            @endif
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                        		<th>Registro</th>
                            <th>Administrador</th>
                            <th>Nombres y Apellidos</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                <tr>
                                		<td>{{ Carbon::parse($user->created_at)->format('d/m/Y h:i a') }}</td>
                                    <td><strong>{{ $user->username }}</strong></td>
                                    <td>
                                        {{ $user->nombres }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->fijo }}
                                    </td>
                                    <td>
                                        @if ($user->activo==1)
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-danger">Admin Bloqueado</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (Auth::user()->id==1||Auth::user()->id==2)
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Acciones
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{ url('/admin/lista-administrador/'.$user->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                    @if ($user->id!=2)
                                                        <a class="dropdown-item" href="#" onclick="eliminarModal({{ $user->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                    @endif
                                                </div>
                                            </div>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-warning" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">¡Alto!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" id="form-modal">
                                            <div class="modal-body">
                                                @csrf
                                                @method('DELETE')
                                                <p>Esta acción no podrá deshacerse. ¿Quieres continuar?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Sí, eliminar registro</button>
                                                <a class="btn btn-secondary" data-dismiss="modal">No</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                        		<th>Registro</th>
                            <th>Administrador</th>
                            <th>Nombres y Apellidos</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
		$(document).ready( function () {
			$('#entacnaTable').DataTable({
				"language": {
					"lengthMenu": "Mostrar  _MENU_  registros por página",
					"zeroRecords": "Ningún registro encontrado",
					"info": "Página _PAGE_ de _PAGES_",
					"infoEmpty": "Sin registros",
					"infoFiltered": "(búsqueda realizada en _MAX_  registros)",
					"search": "Buscar: ",
					"paginate": {
						"previous": "Anterior",
						"next": "Siguiente"
                    }
                },
                "order":[]
			});
        });
        function eliminarModal(id){
            var formModal=$("#form-modal");
            var url=location.origin;
            var path=location.pathname
            formModal.attr('action',url+path+'/'+id);
        }
	</script>
@endsection