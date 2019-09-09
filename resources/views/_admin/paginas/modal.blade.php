{{-- <div class="form-group row">
    <label class="col-md-2 col-form-label" for="">Galería de imagenes</label>
    <div class="col-md-10">
    </div>
</div> --}}
<a class="btn btn-info" href="#" onclick="cambiarVentana(1)" data-toggle="modal" data-target="#mostrarModal">
	<i class="fa fa-folder-open"></i> Agregar multimedia
</a>
<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dark" style="max-width: 1200px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                	<i class="fa fa-list-alt"></i> Biblioteca de imágenes / videos
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            	<div class="card" id="header-opciones">
            		<div class="card-header">
            			<div class="row">
            				<div class="col-md-4">
            					<div class="row">
            						<div class="col-md-6">
					            		<a href="#" class="btn btn-success btn-block" id="btn-1" onclick="cambiarVentana(1)">
					            			<i class="fa fa-list-ul"></i> Biblioteca
					            		</a>
            						</div>
            						<div class="col-md-6">
					            		<a href="#" class="btn btn-secondary btn-block" id="btn-2" onclick="cambiarVentana(2)">
					            			<i class="fa fa-plus-circle"></i> Agregar
					            		</a>
            						</div>
            						{{-- <div class="col-md-4">
					            		<a href="#" class="btn btn-secondary btn-block" id="btn-3" onclick="cambiarVentana(3)">
					            			<i class="fa fa-info-circle"></i> Detalle
					            		</a>
            						</div> --}}
            					</div>
            				</div>
            				<div class="col-md-4"></div>
            				<div class="col-md-4">
            					<a class="btn btn-secondary pull-right" data-dismiss="modal">
            						<i class="fa fa-times-circle"></i> Cerrar
            					</a>
            				</div>
            			</div>
			        </div>
			    </div>
			    <div class="card" id="ventana-1" style="margin-top: -12px">
            		<div class="card-body">
        				<div class="img-galeria3">
                            <div class="row galeria-add" id="galeria-add">
                            	@if (count($archivos)>0)
                            		@foreach ($archivos as $archivo)
		                                <div class="col-md-2" id="galeria-{{ $archivo->id }}">
		                                	<div id="div-imagen">
		                                		@php
		                                			$div='<div style="bottom:0; position: absolute; font-size: 10px; width: 150px;">'.$archivo->name.'</div>';
		                                			if (preg_match("/image/i", $archivo->type)) {
		                                				$url=$archivo->url;
		                                				$div='';
		                                			}
		                                			elseif (preg_match("/video/i", $archivo->type)) {
		                                				$url='/assets/img/avatars/video.jpg';
		                                			}
		                                			elseif (preg_match("/pdf/i", $archivo->type)) {
		                                				$url='/assets/img/avatars/pdf.png';
		                                			}
		                                			elseif (preg_match("/openxmlformats-officedocument/i", $archivo->type)) {
		                                				$url='/assets/img/avatars/office.png';
		                                			}
		                                			elseif (preg_match("/compressed/i", $archivo->type)) {
		                                				$url='/assets/img/avatars/zip.jpg';
		                                			}
		                                			elseif (preg_match("/msdownload/i", $archivo->type)) {
		                                				$url='/assets/img/avatars/exe.png';
		                                			}
		                                			else{
		                                				$url='/assets/img/avatars/otros.jpg';
		                                			}

		                                		@endphp
		                                    	<img src="{{ $url }}" title="{{ $archivo->title }}" onclick="verDetalle({{ $archivo->id }})">
		                                		{!! $div !!}
		                                	</div>
		                                </div>
                            		@endforeach
                            	@endif
                            </div>
                        </div>
			        </div>
			    </div>

			    <div class="card d-none" id="ventana-2" style="margin-top: -12px">
			    	<div class="card-body">
			    		<h3>Subir Nuevo Archivo</h3>
			    		<div class="form-group">
			    			<label>Subir Archivo</label>
			    			<input type="file" class="form-control" name="newfile" id="newfile">
			    			<span id="span-size">Tamaño máximo de archivo de carga: 50MB</span>
			    			<div class="progress" style="height: 34px;margin-top: 2.4%">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    </div>
                </div>
			    		</div>
			    		<div class="form-group">
			    			<div class="img-galeria4" id="img-galeria-agregar">
			    			</div>
			    		</div>
			    	</div>
			    </div>

			    <div class="card d-none" id="ventana-3" style="margin-top: -12px">
			    	<div class="card-header">
			    		<h3 class="card-title2">Detalles del Archivo</h3>
			    		<span class="pull-right clickable" data-effect="remove"><i class="fa fa-times"></i></span>
			    	</div>
			    	<div class="card-body" style="margin-bottom: 0;padding-bottom: 0;">
			    		<div class="row" style="margin-top: -20px;">
			    			<div class="col-md-7">
			    				<div class="form-group">
					    			<div class="img-galeria4" id="img-mostrar">
					    			</div>
					    		</div>
			    			</div>
			    			<div class="col-md-5" id="detalle-mostrar" style="border-left-color: #827979 !important;border-left-style: solid;border-left-width: thin;">
			    			</div>
			    		</div>
			    	</div>
			    </div>
            </div>
        </div>
    </div>
</div>
@section('js_modal')
    <script type="text/javascript">
        function cambiarVentana(n) {
        	for (var i = 1; i <= 3; i++) {
        		$("#ventana-"+i).addClass('d-none');
        		$("#btn-"+i).removeClass('btn-success');
        		$("#btn-"+i).addClass('btn-secondary');
        	}
        	$("#ventana-"+n).removeClass('d-none');
        	$("#btn-"+n).removeClass('btn-secondary');
        	$("#btn-"+n).addClass('btn-success');
        	$("#header-opciones").removeClass('d-none');
        	$("#span-size").html('Tamaño máximo de archivo de carga: 50MB');
        	// $('.clickable').click();
        }
        function archivoFile(evt) {
            var files = evt.target.files; // FileList object
	        var frm=$("#img-galeria-agregar");
            if (files.length!=0) {
	            var size=files[0].size;
	            // var sizeMb=+(Math.round(size/1048576 + "e+1")  + "e-1"); //redondeo
	            var sizeMb=Math.round(size/1048576*10)/10;
	            var nameFile=files[0].name;
	            $("#span-size").html('Tamaño del archivo: '+sizeMb+'MB');
	            debugger
	            if (size<=1048576*50) {
	            	var textDiv='<div style="bottom:0; width: 250px;">'+nameFile+'</div>';
	            	if (/^(image)\//i.test(files[0].type)) {
	            		var file_url=URL.createObjectURL(files[0]);
	            		var textDiv='';
	            	}
	            	else if (/^(video)\//i.test(files[0].type)) {
	            		var file_url='/assets/img/avatars/video.jpg';
	            	}
	            	else if (files[0].type=='application/pdf') {
	            		var file_url='/assets/img/avatars/pdf.png';
	            	}
	            	else if (files[0].type.indexOf('openxmlformats-officedocument')!=-1) {
	            		var file_url='/assets/img/avatars/office.png';
	            	}
	            	else if (files[0].type=='application/x-zip-compressed') {
	            		var file_url='/assets/img/avatars/zip.jpg';
	            	}
	            	else if (files[0].type=='application/x-msdownload') {
	            		var file_url='/assets/img/avatars/exe.png';
	            	}
	            	else{
	            		var file_url='/assets/img/avatars/otros.jpg';
	            	}
                    frm.html('<div id="div-imagen">'+
                                '<img src="'+file_url+'" title="'+nameFile+'">'+
                                textDiv+
                            '</div>');

	            	var bar = $('.progress-bar');
			        var percent = $('.progress-bar');
			        var objeto ={
			            _token:$("input[name='_token']").val(),
			            tipo:$("input[name='tipo']").val()
			        }
			        // return false;
			        $("#newfile").upload(
			            //url
			            '/admin/subir-documento-url',
			            //data
			            objeto,
			            //beforeSed
			            function () {
			                var percentVal = '0%';
			                bar.width(percentVal)
			                percent.html(percentVal+' completando');
			            },
			            //success
			            function () {
			                var percentVal = '100%';
			                bar.width(percentVal)
			                percent.html(percentVal+' completado');
			            },
			            //complete
			            function(xhr,b,c,d) {
			                //Subida finalizada.
			                debugger;
			                // var data=JSON.parse(xhr.responseText);
			                setTimeout(function(){
			                    var percentVal = '0%';
			                    bar.width(percentVal);
			                    percent.html('');
				                $("#newfile").val('').change();
				                frm.html('');
				                cambiarVentana(1);
				                swal({"timer":4000,"title":"Archivo subido","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"top-center"});
			                }, 4000);
			                agregarArchivoNuevo(xhr);
			                // toastr.success('Documento subido al servidor!');
			                // var content='';
			                // content=content+'<div class="alert alert-success alert-dismissable">';
			                // content=content+'<a class="close" data-dismiss="alert" aria-label="close">×</a>';
			                // content=content+'<strong>URL generadoo!</strong>';
			                // content=content+'<a style="margin-left: 15px;" href="'+location.origin+xhr+'" target="_blank" id="copira-a">'+location.origin+xhr+'</a>';
			                // content=content+'<button class="btn btn-xs btn-success" style="margin-left: 15px;" onclick="copyToClipboard(\'#copira-a\')">';
			                // content=content+'<i class="fa fa-clone" style="color:black;"></i>';
			                // content=content+'<b style="color:black;"> Copiar</b>';
			                // content=content+'</button>';
			                // content=content+'<button class="btn btn-xs btn-danger" style="margin-left: 15px;" onclick="deleteDocumento(\''+xhr+'\')">';
			                // content=content+'<i class="glyphicon glyphicon-remove-sign" style="color:black;"></i>';
			                // content=content+'<b style="color:black;"> Eliminar</b>';
			                // content=content+'</button>';
			                // content=content+'</div>';
			                // $("#geturldocument").html(content);
			            },
			            //upload progress
			            function(progreso, valor) {
			                //Barra de progreso.
			                var percentVal = valor + '%';
			                bar.width(percentVal)
			                percent.html(percentVal+' completado');
			            }
	            	);
	            }
	            else{
	            	$("#span-size").html('Tamaño del archivo <strong> '+sizeMb+'MB </strong> supera el límite de 50MB, seleccione otro archivo');
	            	$("#span-size").css('color','red');
	            	$("#newfile").val('');
	            	frm.html('');
	            }
            }
            else frm.html('');
        }

        function agregarArchivoNuevo(objeto) {
        	var frm=$("#galeria-add");
        	var textDiv='<div style="bottom:0; position: absolute; font-size: 10px; width: 150px;">'+objeto.name+'</div>';
        	if (/^(image)\//i.test(objeto.type)) {
        		var file_url=objeto.url;
        		var textDiv='';
        	}
        	else if (/^(video)\//i.test(objeto.type)) {
        		var file_url='/assets/img/avatars/video.jpg';
        	}
        	else if (objeto.type=='application/pdf') {
        		var file_url='/assets/img/avatars/pdf.png';
        	}
        	else if (objeto.type.indexOf('openxmlformats-officedocument')!=-1) {
        		var file_url='/assets/img/avatars/office.png';
        	}
        	else if (objeto.type=='application/x-zip-compressed') {
        		var file_url='/assets/img/avatars/zip.jpg';
        	}
        	else if (objeto.type=='application/x-msdownload') {
        		var file_url='/assets/img/avatars/exe.png';
        	}
        	else{
        		var file_url='/assets/img/avatars/otros.jpg';
        	}
            frm.prepend('<div class="col-md-2" id="galeria-'+objeto.id+'">'+
			            	'<div id="div-imagen">'+
			                	'<img src="'+file_url+'" title="'+objeto.title+'" onclick=verDetalle('+objeto.id+')>'+
			            		textDiv+
			            	'</div>'+
			            '</div>');
        }

        function verDetalle(id) {
        	var route='/admin/subir-documento-url/'+id;
        	sendRequest(route,null,'GET',function (data,textStatus) {
        		if (data.status==200) {
		        	cambiarVentana(3);
		        	$("#header-opciones").addClass('d-none');
        			var objeto=JSON.parse(data.responseText);
        			var frm=$("#img-mostrar");
        			var dtl=$("#detalle-mostrar");
        			var textDiv='<div style="bottom:0; width: 250px;">'+objeto.name+'</div>';
	            	if (/^(image)\//i.test(objeto.type)) {
	            		var file_url=objeto.url;
	            		var textDiv='';
	            	}
	            	else if (/^(video)\//i.test(objeto.type)) {
	            		var file_url='/assets/img/avatars/video.jpg';
	            	}
	            	else if (objeto.type=='application/pdf') {
	            		var file_url='/assets/img/avatars/pdf.png';
	            	}
	            	else if (objeto.type.indexOf('openxmlformats-officedocument')!=-1) {
	            		var file_url='/assets/img/avatars/office.png';
	            	}
	            	else if (objeto.type=='application/x-zip-compressed') {
	            		var file_url='/assets/img/avatars/zip.jpg';
	            	}
	            	else if (objeto.type=='application/x-msdownload') {
	            		var file_url='/assets/img/avatars/exe.png';
	            	}
	            	else{
	            		var file_url='/assets/img/avatars/otros.jpg';
	            	}
                    frm.html('<center>'+
	                    		'<div id="div-imagen">'+
	                                '<img src="'+file_url+'" title="'+objeto.name+'">'+
	                                textDiv+
	                            '</div>'+
	                        '</center>');
                    dtl.html('<strong>Nombre Archivo: </strong><span> '+objeto.name+'</span><br>'+
		    				'<strong>Tipo Archivo: </strong><span> '+objeto.type+'</span><br>'+
		    				'<strong>Fecha Subida: </strong><span> '+objeto.created_at+'</span><br>'+
		    				'<strong>Tamaño Archivo: </strong><span> '+objeto.size+'</span><br>'+
		    				'<hr>'+
		    				'<div class="row form-group">'+
		    					'<label class="col-md-2 col-form-label" for="url">URL</label>'+
		    					'<div class="col-md-10">'+
		    						'<input type="text" name="url" id="url" class="form-control" value="'+location.origin+objeto.url+'" readonly="">'+
		    					'</div>'+
		    				'</div>'+
		    				'<div class="row form-group">'+
		    					'<label class="col-md-2 col-form-label" for="title">Título</label>'+
		    					'<div class="col-md-10">'+
		    						'<input type="text" name="title" id="title" class="form-control" value="'+objeto.title+'" readonly="">'+
		    					'</div>'+
		    				'</div>'+
		    				'<hr>'+
		    				'<div class="form-group">'+
		    					'<a href="#" class="btn btn-danger" onclick="eliminarArchivo('+objeto.id+')">'+
		    						'<i class="fa fa-trash"></i> Eliminar de forma permanente'+
		    					'</a>'+
		    				'</div>')
        		}
        		else{
        			alert('mal')
        		}
        	})
        }

        function eliminarArchivo(id){
            // var token=$("#form-galeria").find('input[name=_token]').val();
            var token=$("input[name='_token']").val();
            var route='/admin/subir-documento-url/'+id;
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                if(data.status==200){
                    $("#galeria-"+id).remove();
                    $('.clickable').click();
                    swal({"timer":4000,"title":"Archivo eliminado","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"top-center"});
                }
            });
        }

        function copyToClipboard(elemento) {
		    var $temp = $("<input>")
		    $("body").append($temp);
		    $temp.val($(elemento).text()).select();
		    document.execCommand("copy");
		    $temp.remove();
		}
		$(function(){
			$('.clickable').on('click',function(){
		    	// var effect = $(this).data('effect');
		        // $(this).closest('.card')[effect]();
		        cambiarVentana(1);
		        $("#header-opciones").removeClass('d-none');
		        $("#img-mostrar").html('');
		        $("#detalle-mostrar").html('');
			})
		})

        document.getElementById('newfile').addEventListener('change', archivoFile, false);
    </script>
@endsection