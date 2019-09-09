@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de Usuarios
@endsection

@section('usuarios')
    open
@endsection

@section('lista-usuario')
    active
@endsection

@section('contenido')
		@php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de rubros
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/lista-usuario/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nuevo usuario
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                        		<th>Registro</th>
                            <th>Usuario</th>
                            <th>Tipo de usuario</th>
                            {{-- <th>Nombre</th> --}}
                            <th>Correo electrónico</th>
                            <th>Empresa que representa</th>
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
                                        @if ($user->tipo==2)
                                            <button type="button" class="btn btn-sm btn-block btn-warning">Usuario normal</button>
                                        @else
                                            <button type="button" class="btn btn-sm btn-block btn-success">Usuario empresarial</button>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        {{ $user->nombres }}
                                    </td> --}}
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @if ($user->tipo==2)
                                            --
                                        @else
                                            {{ $user->razon_social }}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/lista-usuario/'.$user->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $user->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
                                            </div>
                                        </div>
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
                            <th>Usuario</th>
                            {{-- <th>Nombre</th> --}}
                            <th>Correo electrónico</th>
                            <th>Tipo de usuario</th>
                            <th>Empresa que representa</th>
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