@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Rubros
@endsection

@section('categorias')
    open
@endsection

@section('lista-rubro')
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
            <a href="{{ url('/admin/lista-rubro/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nuevo rubro
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha de registro</th>
                            <th>Rubro</th>
                            <th>Categoría</th>
                            <th>Número empresas</th>
                            <th>Imagen de la galería</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($rubros) > 0)
                            @foreach ($rubros as $rubro)
                                @php
                                    if(count($rubro->empresas)>0) $tr="table-success";
                                    else $tr="table-danger";
                                @endphp
                                <tr class="{{ $tr }}">
                                		<td>{{ Carbon::parse($rubro->created_at)->format('d/m/Y h:i a') }}</td>
                                    <td><strong>{{ $rubro->rubro }}</strong></td>
                                    {{-- <td>{{ $rubro->descripcion }}</td> --}}
                                    <td>
                                       {{ $rubro->categoria->categoria }}
                                    </td>
                                    <td>
                                       {{ count($rubro->empresas) }}
                                    </td>
                                    <td>
                                        @if (count($rubro->imgs)>=1)
                                            <img src="{{ $rubro->imgs[rand(0, count($rubro->imgs)-1)]->img }}" alt="{{ $rubro->rubro }}" style="width: 200px;">
                                        @else
                                            <img src="/assets/img/avatars/img.jpg" style="width: 200px;">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/lista-rubro/'.$rubro->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $rubro->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
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
                            <th>Fecha de registro</th>
                            <th>Rubro</th>
                            <th>Categoría</th>
                            <th>Número empresas</th>
                            <th>Imagen de la galería</th>
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