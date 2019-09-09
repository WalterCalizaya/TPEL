@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Publicaciones de la sección turística
@endsection

@section('turismo')
    open
@endsection

@section('turismo-publicaciones')
    active
@endsection


@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de publicaciones de la sección turística
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/publicaciones-turismo/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nueva publicacion
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Última actualización</th>
                            <th>Título</th>
                            <th>Empresas destacadas</th>
                            <th>Vídeos asociados</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($turismos)>0)
                            @foreach ($turismos as $turismo)
                                <tr>
                                    <td>{{ Carbon::parse($turismo->created_at)->format('d/m/Y h:i a') }}</td>
                                    <td>
                                    	{{ $turismo->titulo }}
                                    	<a href="{{ url('/turismo/'.$turismo->subcategoria->categoria->slug.'/'.$turismo->subcategoria->slug.'/'.$turismo->slug) }}" target="_blank">(Ver publicacion)</a>
                                    </td>
                                    <td>
                                       {{ count($turismo->turismo_empresas) }}
                                    </td>
                                    <td>
                                        {{ count($turismo->youtubes) }}
                                    </td>
                                    <td>
                                        @if ($turismo->publicado==1)
                                            <label class="badge badge-success">Publicada</label>
                                        @else
                                            <label class="badge badge-danger">No publicada</label>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/publicaciones-turismo/'.$turismo->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $turismo->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
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
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
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
                            <th>Última actualización</th>
                            <th>Título</th>
                            <th>Empresas destacadas</th>
                            <th>Vídeos asociados</th>
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