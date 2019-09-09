@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Categorías
@endsection

@section('categorias')
    open
@endsection

@section('lista-categoria')
    active
@endsection

@section('contenido')
		@php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de categorías
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/lista-categoria/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nueva categoría
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha de Registro</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Icono</th>
                            <th>Número de rubros</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($categorias) > 0)
                            @foreach ($categorias as $categoria)
                                @php
                                    if(count($categoria->rubros)>0) $tr="table-success";
                                    else $tr="table-danger";
                                @endphp
                                <tr class="{{ $tr }}">
                                		<td>{{ Carbon::parse($categoria->created_at)->format('d/m/Y h:i a') }}</td>
                                    <td>{{ $categoria->categoria }}</td>
                                    <td>
                                        @if ($categoria->imagen)
                                            <img src="{{ $categoria->imagen }}" alt="{{ $categoria->categoria }}" style="width: 200px; height: 120px;" class="img-responsive">
                                        @else
                                            <img src="/assets/img/login-bg.jpg" style="width: 200px; height: 120px;" class="img-responsive">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($categoria->icono)
                                            <img src="{{ $categoria->icono }}" alt="{{ $categoria->categoria }}" style="width: 32px; height: 45px;" class="img-responsive">
                                        @else
                                            <img src="/assets/img/defecto.png" style="width: 32px; height: 45px;" class="img-responsive">
                                        @endif
                                    </td>
                                    <td>
                                        {{ count($categoria->rubros) }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/lista-categoria/'.$categoria->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $categoria->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
                                            </div>
                                        </div>

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
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha de Registro</th>
                            <th>Categoría</th>
                            <th>Imagen</th>
                            <th>Icono</th>
                            <th>Número de secciones</th>
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