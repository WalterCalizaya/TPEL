
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window._ = require('lodash');
window.Pusher = require('pusher-js');
window.$ = window.jQuery = require('jquery');
// require('bootstrap-sass');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});

var notifications = [];
var cant=0;

const NOTIFICATION_TYPES = {
    empresaEnvia: 'App\\Notifications\\EmpresaEnviaInformacion',
    adminAceptaEmp: 'App\\Notifications\\AdminAceptaEmpresa',
    adminRechazaEmp: 'App\\Notifications\\AdminRechazaEmpresa',
    empresaCompraCalif: 'App\\Notifications\\EmpresaCompraCalificacion',
    empresaEnviaVoucher: 'App\\Notifications\\EmpresaEnviaVoucher',
    adminAceptaMembresia: 'App\\Notifications\\AdminAceptaMembresia',
    adminRechazaMembresia: 'App\\Notifications\\AdminRechazaMembresia',
    usuarioComenta: 'App\\Notifications\\UsuarioComenta',
    usuarioPregunta: 'App\\Notifications\\UsuarioPregunta',
    usuarioCalifica: 'App\\Notifications\\UsuarioCalifica',
};

$(document).ready(function() {
    // check if there's a logged in user
    if(Laravel.userId) {
        $.get('/admin/notifications', function (data) {
        	// console.log(data);
            addNotifications(data, "#notifications");
        });

        window.Echo.private(`App.User.${Laravel.userId}`)
            .notification((notification) => {
            	// debugger;
                showNotificationNew(notification, '#notifications');
            });
    }
});

function addNotifications(newNotifications, target) {
    // debugger;
    notifications = _.concat(newNotifications[0], notifications);
    cant=cant+newNotifications[1];
    // show only last 5 notifications
    notifications.slice(0, 6);
    showNotifications(notifications,cant,newNotifications[2] ,target);
}

function showNotifications(notifications,cant, tipo,target) {
    if (tipo==1) {
        var a='/admin/mis-notificaciones';
    }
    else if(tipo==3){
        var a='/admin/empresa/mis-notificaciones';
    }
    else{
        var a='/admin/usuario/mis-notificaciones';
    }
	var ini='<div class="dropdown-header text-center">'+
				'<strong>Últimas notificaciones</strong>'+
			'</div>';
	var fin='<div class="dropdown-header text-center">'+
				'<strong><a href="'+a+'">Ver todas las notificaciones</a></strong>'+
			'</div>';
    if(notifications.length) {
        var htmlElements = notifications.map(function (notification) {
            return makeNotification(notification);
        });

        $(target + 'Menu').html(ini+htmlElements.join('')+fin);
        $(target).addClass('has-notifications')
        $(target).html('<i class="icon-bell"></i><span class="badge badge-pill badge-danger">'+cant+'</span>');
    } else {
        $(target + 'Menu').html(ini+'<a class="dropdown-item" href="#"><i class="icon-speech text-success"></i> No hay notificaciones</a>'+fin);
        $(target).removeClass('has-notifications');
        $(target).html('<i class="icon-bell"></i>');
    }
}

function showNotificationNew(notification,target) {
    var elemento=makeNotification(notification);
    var total=cant+1;
    $(target).addClass('has-notifications');
    $(target).html('<i class="icon-bell"></i><span class="badge badge-pill badge-danger">'+total+'</span>');
    var child=$("#notificationsMenu").children().length;
    if (child==8) {
        $($(target+"Menu").children()[6]).remove();
    }
    $($(target+"Menu").children()[0]).after(elemento);
}

// Make a single notification string
function makeNotification(notification) {
    var to = routeNotification(notification);
    var read = readNotification(notification);
    var notificationText = makeNotificationText(notification);
    var img = notification.data.image ? notification.data.image : '/assets/img/avatars/perfil.jpg';

    return '<div class="list-group-item list-group-item-accent list-group-item-accent-'+read.status+'">'+
	      			'<a href="'+to+'" class="notification-link">'+
	              '<div>'+
	                  '<div class="avatar float-right">'+
	                      '<img class="img-avatar" src="'+img+'" alt="Avatar">'+
	                  '</div>'+
	                  '<div>'+
	                    notificationText.body+
	                  '</div>'+
	                  '<small class="text-muted">'+
	                  		'<i class="fa '+notificationText.fa+'"></i> '+read.notify+
                        ' <i class="icon-calendar"></i> '+read.publish+
	                  '</small>'+
	              '</div>'+
	          	'</a>'+
    				'</div>';
}

function readNotification(notification) {
	if (notification.read_at==null) {
		if (notification.created_at) {
			var time=notification.created_at;
		}
		else{
			var time='Hace 1 minuto';
		}
		var read={status: 'danger',publish: time, notify: 'notificado'}; //status: unread
	}
	else{
		var read={status: 'secondary',publish: notification.read_at,notify:'leído'}; //status: read
	}
	return read;
}

function routeNotification(notification) {
    var to;
    if(notification.type === NOTIFICATION_TYPES.empresaEnvia) {
        to = '/admin/moderar-empresa/'+notification.id+'/'+notification.data.empresa_id;
    }
    else if(notification.type === NOTIFICATION_TYPES.adminAceptaEmp) {
        to = '/admin/empresa/perfil-empresarial?read='+notification.id;
    }
    else if(notification.type === NOTIFICATION_TYPES.adminRechazaEmp) {
        to = '/admin/empresa/perfil-empresarial?read='+notification.id;
    }
    else if(notification.type === NOTIFICATION_TYPES.empresaCompraCalif) {
        to = '/admin/calificativos/';
    }
    else if(notification.type === NOTIFICATION_TYPES.empresaEnviaVoucher) {
        to = '/admin/aprobar-pedido-membresia/'+notification.data.membresia_id+'/'+notification.id;
    }
    else if(notification.type === NOTIFICATION_TYPES.adminAceptaMembresia) {
        to = '/admin/empresa/mis-compras?notify='+notification.id;
    }
    else if(notification.type === NOTIFICATION_TYPES.adminRechazaMembresia) {
        to = '/admin/empresa/enviar-voucher?membresia='+notification.data.membresia_id+'&notify='+notification.id;
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioComenta) {
        if (notification.data.tipo==3) {
            to = '/admin/empresa/lista-comentarios?comentario='+notification.data.comentario_id+'&notify='+notification.id;
        }
        else{
            to = '/admin/moderar-comentario?comentario='+notification.data.comentario_id+'&notify='+notification.id;
        }
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioPregunta) {
        if (notification.data.tipo==3) {
            to = '/admin/empresa/moderar-pregunta?pregunta='+notification.data.pregunta_id+'&notify='+notification.id;
        }
        else{
            to = '/admin/moderar-pregunta?pregunta='+notification.data.pregunta_id+'&notify='+notification.id;
        }
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioCalifica) {
        if (notification.data.tipo==3) {
            to = '/admin/empresa/lista-calificacion?calificacion='+notification.data.calificacion_id+'&notify='+notification.id;
        }
        else{
            to = '/admin/moderar-calificacion?calificacion='+notification.data.calificacion_id+'&notify='+notification.id;
        }
    }

    return to;
}

// get the notification text based on it's type
function makeNotificationText(notification) {
    // var text = '';
    if(notification.type === NOTIFICATION_TYPES.empresaEnvia) {
        var section='La empresa <span class="accent">'+notification.data.empresa_name+
        			'</span> envió información para su aprobación.';
        var icon='fa-envelope text-danger';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.adminAceptaEmp) {
    	var section='El administrador <span class="accent">'+notification.data.admin_name+'</span> '+
    				'aceptó la información enviada de su empresa. '+
    				'<span class="accent text-danger">Felicidades su empresa esta publicado!</span>';
        var icon='fa-thumbs-up text-primary';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.adminRechazaEmp) {
    	var section='El administrador <span class="accent">'+notification.data.admin_name+'</span> '+
    				'rechazó la información enviada, revise nuevamente y envié de nuevo.';
        var icon='fa-exclamation-triangle text-danger';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.empresaEnviaVoucher) {
    	var section='La empresa <span class="accent">'+notification.data.empresa_name+'</span> '+
    				'adquirió 1 nueva membresía, <span class="accent">pendiente de aprobación</span>.';
        var icon='fa-university text-primary';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.adminAceptaMembresia) {
    	if (notification.data.duracion==1) var duracion='1 Mes';
    	else if(notification.data.duracion<=11) var duracion=notification.data.duracion+' Meses';
    	else if(notification.data.duracion==12) var duracion='1 Año';
    	else if(notification.data.duracion==18) var duracion='18 Meses';
    	else if(notification.data.duracion==24) var duracion='2 Años';
    	else if(notification.data.duracion==36) var duracion='3 Años';
    	var section='El administrador <span class="accent">'+notification.data.admin_username+'</span> '+
    				'Aprobó su <span class="accent">membresía de '+duracion+' </span> <span class="badge badge-success">'+notification.data.membresia+'</span>.';
        var icon='fa-university text-success';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.adminRechazaMembresia) {
    	if (notification.data.duracion==1) var duracion='1 Mes';
    	else if(notification.data.duracion<=11) var duracion=notification.data.duracion+' Meses';
    	else if(notification.data.duracion==12) var duracion='1 Año';
    	else if(notification.data.duracion==18) var duracion='18 Meses';
    	else if(notification.data.duracion==24) var duracion='2 Años';
    	else if(notification.data.duracion==36) var duracion='3 Años';
    	var section='El administrador <span class="accent">'+notification.data.admin_username+'</span> '+
    				'Rechazó su <span class="accent">membresía de '+duracion+' </span> <span class="badge badge-danger">'+notification.data.membresia+'</span>. '+
    				'vuelva a subir el voucher';
        var icon='fa-university text-danger';
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioComenta) {
        var icon='fa-comment text-success';
        if (notification.data.tipo==3) {
            var forma='en su perfil empresarial ';
            var verificar='';
        }
        else{
            var forma='en el perfil de la empresa <span class="accent">'+notification.data.empresa_name+'</span>. ';
            var verificar=' pendiente de aprobación.'
        }
        if (notification.data.user_tipo==3) {
            var section='La empresa <span class="accent">'+notification.data.name_empresa+'</span> '+
                        'comentó '+forma+verificar;
        }
        else{
            var section='El usuario <span class="accent">'+notification.data.user_username+'</span> '+
                        'comentó '+forma+verificar;
        }
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioPregunta) {
        var icon='fa-comment text-success';
        if (notification.data.tipo==3) {
            var forma='en su perfil empresarial ';
            var verificar='';
        }
        else{
            var forma='en el perfil de la empresa <span class="accent">'+notification.data.empresa_name+'</span>. ';
            var verificar=' pendiente de aprobación.'
        }
        if (notification.data.user_tipo==3) {
            var section='La empresa <span class="accent">'+notification.data.name_empresa+'</span> '+
                        'preguntó '+forma+verificar;
        }
        else{
            var section='El usuario <span class="accent">'+notification.data.user_username+'</span> '+
                        'preguntó '+forma+verificar;
        }
        var body = {body: section, fa: icon};
    }
    else if(notification.type === NOTIFICATION_TYPES.usuarioCalifica) {
        var icon='fa-star text-warning';
        if (notification.data.tipo==3) {
            var forma='en su perfil empresarial ';
            var verificar='';
        }
        else{
            var forma='en el perfil de la empresa <span class="accent">'+notification.data.empresa_name+'</span>. ';
            var verificar=' pendiente de aprobación.'
        }
        if (notification.data.user_tipo==3) {
            var section='La empresa <span class="accent">'+notification.data.name_empresa+'</span> '+
                        'calificó '+forma+verificar;
        }
        else{
            var section='El usuario <span class="accent">'+notification.data.user_username+'</span> '+
                        'preguntó '+forma+verificar;
        }
        var body = {body: section, fa: icon};
    }
    return body;
}