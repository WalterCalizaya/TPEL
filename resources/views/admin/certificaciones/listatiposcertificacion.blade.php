@extends('admin.layouts.app')

@section('title')
Tipos de certificación
@endsection

@section('certificaciones')
active pcoded-trigger
@endsection

@section('tipo')
active
@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>@yield('title')</h5>
				<div class="card-header-right">
					<a href="{{ url('/admin/tipos-certificacion/create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Agregar tipo de certificación</a>
				</div>
			</div>
			<div class="card-block">

				<div class="table-responsive">
					<table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
						<thead>
							<tr>
								<th class="text-center">Tipo de certificación</th>
								<th class="text-center">Empresa</th>
								<th class="text-center">Estado</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@if (count($tiposcertificacion)>0)
							@foreach ($tiposcertificacion as $tipo)
							<tr>
								<td class="text-center">{{ $tipo->certificacion }}</td>
								<td class="text-center">
									{{ $tipo->tipocertificacion->tipo }}
									<a href="{{ url('/certificaciones/').'/'.$tipo->tipocertificacion->slug }}" target="_blank">
										<i class="icon feather icon-link-2 f-w-600 f-16 m-r-15" title="Ver en Frontpage"></i>
									</a>
								</td>
								<td class="text-center">
									@if ($tipo->estado==0)
									<label class="label label-warning">Borrador</label>
									@elseif ($tipo->estado==1)
									<label class="label label-success">Publicado</label>
									@else
									<label class="label label-danger">En papelera</label>
									@endif
								</td>
								<td class="text-center"><a href="{{ url('/admin/tipos-certificacion/'.$tipo->id.'/edit') }}">
										<i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-blue" title="Editar"></i>
									</a>
								</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$(document).ready( function () {
		$('#tacnatelTable').DataTable({
			// "paging":    false,
			"info":      false,
			// "searching": false,
			"lengthMenu": [[25, 50, -1], [25, 50, "Todos"]],
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
</script>
@endsection
