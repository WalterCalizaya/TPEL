@extends('admin.layouts.app')

@section('title')
Asuntos
@endsection

@section('administradores')
active
@endsection

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>@yield('title')</h5>
				<div class="card-header-right">
					<a href="{{ route('admin.asuntos.create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-user-alt-3" style="color:#4680ff;"></i> Agregar asunto</a>
				</div>
			</div>
			<div class="card-block">
				<table id="tableAsuntos" class="table table-striped table-bordered nowrap dataTable" style="width:100%">
					<thead>
						<tr>
							<th>Asunto</th>
							<th>Días</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
						<tr>
							<th>Asunto</th>
							<th>Días</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript">
	$(function() {
		loadAdminTable();
	});

	function loadAdminTable() {
		load_table = $("#tableAsuntos").DataTable( {
			processing: true,
			serverSide: true,
			responsive: true,
			language:{
				processing:'<img src="/resources/admin/assets/images/loader.gif">'
			},
			ajax: {
				url:URLs+'/admin/asuntos',
				dataSrc: function (json) {
					var objetos = json.data;
					var return_data = [];
					for (var i = 0,objeto; objeto = objetos[i]; i++) {
						var data = {};

						data.descripcion = objeto.descripcion;
						data.dias  = objeto.dias;
						data.estado     = objeto.estado==1 ? '<span class="label label-success margin-right-sm"><i class="icofont icofont-check"></i> Activo</span>' : '<span class="label label-danger margin-right-sm"><i class="icofont icofont-ban"></i> Inactivo</span>';
						data.actions   =    '<a href="{{ route('admin.asuntos.create') }}" class="btn btn-primary btn-round btn-mini waves-effect waves-light" title="Editar">'+
						'<span class="icofont icofont-ui-edit" style="font-size:12px;"></span>'+
						'</a> '+
						'<a href="{{ route('admin.asuntos.create') }}" class="btn btn-danger btn-round btn-mini waves-effect waves-light" title="Eliminar">'+
						'<span class="icofont icofont-ui-delete" style="font-size:12px;"></span>'+
						'</a>';
						return_data.push(data)
					}
					return return_data;
				}
			},
			columns:[
			{ data: 'descripcion', name:'descripcion'},
			{ data: 'dias', name:'dias', class:'text-center', searchable: false},
			{ data: 'estado', name: 'estado', class:'text-center', searchable: false},
			{ data: 'actions', name:'actions', class:'text-center', orderable: false, searchable:false}
			],
			order:[],
			fnDrawCallback:function (oSettings) {
                //$(".state-team").on("click",changeIsShown)
            },
            "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]]
        } );

	}
    </script>
    @endsection
