<?php

Route::middleware(['guest'])->group(function () {
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
    Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
});

Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset/{token}','Auth\ResetPasswordController@reset')->name('password.request');

//registro
Route::get('/registro-usuario','Auth\RegisterController@showRegistrationFormUsuario');
Route::get('/obtener-provincias/{id}','Auth\RegisterController@showprovincias');
Route::get('/obtener-distritos/{id}','Auth\RegisterController@showdistritos');
Route::post('/registro-usuario','Auth\RegisterController@register_usuario');

//confirmacion
Route::get('/registro/verificar/{code}','Auth\RegisterController@verificar');









Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/sin-permiso', function (){
            return view('errors.permiso');
        });

        Route::middleware(['admin'])->group(function () {
        	Route::get('/', function () {
			    return redirect('admin/dashboard');
			});
            Route::get('/dashboard', 'Admin\HomeController@index');




            Route::resource('configuracion-general','Admin\ConfiguracionesController');
            Route::resource('/lista-inscritos','Admin\InscripcionesController');
            Route::get('/ver-recibo/{id}','Admin\InscripcionesController@verCotizacion');


            Route::get('/calificar-inscrito/{id}','Admin\InscripcionesController@formCalificacion');
            Route::post('/calificar-inscrito/{id}','Admin\InscripcionesController@calificarPreinscrito');







            Route::resource('info-de-local','Admin\InfoAlquileresController');
            Route::resource('instructores','Admin\InstructoresController');
            Route::resource('temarios','Admin\TemariosController');

            Route::resource('empresas-certificadoras','Admin\CertificacionesEmpresasController');
            Route::resource('tipos-certificacion','Admin\CertificacionesTipoController');
            Route::resource('certificaciones','Admin\CertificacionesController');
            Route::get('/provincias/{id}','Admin\CertificacionesController@showprovincias');
            Route::get('/distritos/{id}','Admin\CertificacionesController@showdistritos');
            Route::resource('talleres','Admin\TalleresController');
            Route::resource('seminarios','Admin\SeminariosController');
            Route::resource('webinars','Admin\WebinarsController');


            Route::get('/historial-preinscritos','Admin\InscripcionesController@historialPreinscritos');


            Route::resource('lista-administrador','Admin\AdministradoresController');
            Route::resource('lista-usuario','Admin\UsuariosController');
            Route::get('/perfil-admin','Admin\AdministradoresController@perfil');
            Route::post('/perfil-admin','Admin\AdministradoresController@modificarfoto');
            Route::get('/perfil-admin/modificar','Admin\AdministradoresController@obtenerperfil');
            Route::put('/perfil-admin/modificar','Admin\AdministradoresController@modificarperfil');
            Route::get('/perfil/confirmpass','Admin\AdministradoresController@confirmpass');
            Route::post('/perfil/changepass','Admin\AdministradoresController@changepass');

        });

        Route::middleware(['cliente'])->group(function () {

            Route::prefix('usuario')->group(function(){
                Route::resource('/', 'Usuario\UsuarioController');
                Route::get('/sin-permiso', function (){
                    return view('usuario.errors.permiso');
                });
                Route::get('/inscripcion','Usuario\UsuarioController@formPreinscripcion');
                Route::post('/inscripcion','Usuario\UsuarioController@realizarPreinscripcion');
                Route::get('/recibos','Usuario\CotizacionesController@listaCotizaciones');
                Route::get('/ver-recibo/{id}','Usuario\CotizacionesController@verCotizacion');
                Route::get('/enviar-voucher','Usuario\CotizacionesController@enviarVoucher');
                Route::post('/enviar-voucher','Usuario\CotizacionesController@procesarVoucher');
                Route::get('/medios-de-pago','Usuario\CotizacionesController@mostrarMediosdePago');
                Route::get('/mis-matriculas','Usuario\MatriculasController@listaMatriculas');


                Route::get('/perfil/modificar','Usuario\PerfilController@obterperfil');
                Route::put('/perfil/modificar','Usuario\PerfilController@modificarperfil');
                Route::get('/perfil/confirmpass','Usuario\PerfilController@confirmpass');
                Route::post('/perfil/changepass','Usuario\PerfilController@changepass');

                Route::resource('/perfil', 'Usuario\PerfilController');
            });
        });

    });
});



Route::get('/', 'Front\FrontController@index');
Route::get('/en-vivo', 'Front\FrontController@envivo');


Route::get('/404', 'Front\FrontController@error404');
Route::get('/calendario', 'Front\FrontController@calendario');

Route::get('/nosotros','Front\FrontController@nosotros');
Route::get('/socios','Front\FrontController@socios');
Route::get('/servicios','Front\FrontController@servicios');
Route::get('pre-inscripcion', function () {
    return redirect('admin/usuario/pre-inscripcion');
});
//contacto
Route::get('/contacto', 'Front\FrontController@contacto');
Route::post('/contacto', 'Front\FrontController@enviocontacto');
//instructores
Route::get('/instructores', 'Front\FrontController@lista_instructores');
Route::get('/instructores/{slug}','Front\FrontController@perfil_instructor');
//certificaciones
Route::get('/certificaciones/{tipo_certificacion}/{slug}','Front\FrontController@perfil_certificacion');
Route::get('/certificaciones/{tipo_certificacion}','Front\FrontController@lista_tipos_certificacion');
Route::get('/certificaciones','Front\FrontController@lista_empresas_certificadoras');
//talleres
Route::get('/talleres','Front\FrontController@lista_talleres');
Route::get('/talleres/{slug}','Front\FrontController@perfil_taller');
//seminarios
Route::get('/seminarios','Front\FrontController@lista_seminarios');
Route::get('/seminarios/{slug}','Front\FrontController@perfil_seminario');
//webinars
Route::get('/webinar','Front\FrontController@lista_webinars');
Route::get('/webinar/{slug}','Front\FrontController@perfil_webinar');
//alquiler de local
Route::get('/alquiler-de-local','Front\FrontController@alquiler_de_local');
Route::get('/admin/curl/eventos','Front\FrontController@procesar_eventos');
