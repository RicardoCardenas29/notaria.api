<?php

Route::group(['prefix' => 'usuario'], function ($router) {

    Route::post('/login/cliente', 'UsuarioController@loginCliente');

    Route::post('/registro/cliente', 'UsuarioController@registroCliente');

    Route::post('/login/funcionario', 'UsuarioController@loginFuncionario');

    Route::post('/registro/funcionario', 'UsuarioController@registroFuncionario');

    Route::get('/', 'UsuarioController@index');

    Route::get('/funcionario', 'UsuarioController@indexFuncionario');

    Route::get('/funcionario/{id}', 'UsuarioController@findFuncionario');

    Route::get('/cliente', 'UsuarioController@indexCliente');

    Route::get('/cliente/{id}', 'UsuarioController@findCliente');

});

Route::group(['prefix' => 'rol'], function ($router) {

    Route::get('/', 'RolController@index');

    Route::get('/{id}', 'RolController@find');

    Route::post('/', 'RolController@create');

    Route::post('/usuario/{id}', 'RolController@create');

    Route::put('/{id}', 'RolController@update');
});

Route::group(['prefix' => 'perfil'], function ($router) {

    Route::get('/', 'PerfilController@index');

    Route::get('/{id}', 'PerfilController@find');

    Route::post('/', 'PerfilController@create');

    Route::put('/{id}', 'PerfilController@update');
});

Route::group(['prefix' => 'permiso'], function ($router) {

    Route::get('/', 'PermisoController@index');

    Route::get('/{id}', 'PermisoController@find');

    Route::post('/', 'PermisoController@create');

    Route::post('/rol/{id}', 'PermisoController@create');

    Route::put('/{id}', 'PermisoController@update');
});

Route::group(['prefix' => 'forma_pago'], function ($router) {

    Route::get('/', 'FormaPagoController@index');

    Route::get('/{id}', 'FormaPagoController@find');

    Route::post('/', 'FormaPagoController@create');

    Route::put('/{id}', 'FormaPagoController@update');
});

Route::group(['prefix' => 'tipo_tramite'], function ($router) {

    Route::get('/', 'TipoTramiteController@index');

    Route::get('/{id}', 'TipoTramiteController@find');

    Route::post('/', 'TipoTramiteController@create');

    Route::put('/{id}', 'TipoTramiteController@update');
});

Route::group(['prefix' => 'tipo_documento'], function ($router) {

    Route::get('/', 'TipoDocumentoController@index');

    Route::get('/{id}', 'TipoDocumentoController@find');

    Route::post('/', 'TipoDocumentoController@create');

    Route::put('/{id}', 'TipoDocumentoController@update');
});

Route::group(['prefix' => 'estado_tramite'], function ($router) {

    Route::get('/', 'EstadoTramiteController@index');

    Route::get('/{id}', 'EstadoTramiteController@find');

    Route::post('/', 'EstadoTramiteController@create');

    Route::put('/{id}', 'EstadoTramiteController@update');
});

Route::group(['prefix' => 'firma'], function ($router) {

    Route::get('/', 'firmaController@index');

    Route::get('/{id}', 'firmaController@find');

    Route::post('/', 'firmaController@create');

    Route::put('/{id}', 'firmaController@update');
});

Route::group(['prefix' => 'pais'], function ($router) {

    Route::get('/', 'PaisController@index');

    Route::get('/{id}', 'PaisController@find');

    Route::post('/', 'PaisController@create');

    Route::put('/{id}', 'PaisController@update');
});

Route::group(['prefix' => 'departamento'], function ($router) {

    Route::get('/', 'DepartamentoController@index');

    Route::get('/{id}', 'DepartamentoController@find');

    Route::post('/', 'DepartamentoController@create');

    Route::put('/{id}', 'DepartamentoController@update');
});

Route::group(['prefix' => 'municipio'], function ($router) {

    Route::get('/', 'MunicipioController@index');

    Route::get('/{id}', 'MunicipioController@find');

    Route::post('/', 'MunicipioController@create');

    Route::put('/{id}', 'MunicipioController@update');
});

Route::group(['prefix' => 'corregimiento'], function ($router) {

    Route::get('/', 'CorregimientoController@index');

    Route::get('/{id}', 'CorregimientoController@find');

    Route::post('/', 'CorregimientoController@create');

    Route::put('/{id}', 'CorregimientoController@update');
});

Route::group(['prefix' => 'antecedente'], function ($router) {

    Route::get('/', 'AntecedenteController@index');

    Route::get('/{id}', 'AntecedenteController@find');

    Route::post('/', 'AntecedenteController@create');

    Route::put('/{id}', 'AntecedenteController@update');
});

Route::group(['prefix' => 'genero'], function ($router) {

    Route::get('/', 'GeneroController@index');

    Route::get('/{id}', 'GeneroController@find');

    Route::post('/', 'GeneroController@create');

    Route::put('/{id}', 'GeneroController@update');
});

Route::group(['prefix' => 'grupo_sanguineo'], function ($router) {

    Route::get('/', 'GrupoSanguineoController@index');

    Route::get('/{id}', 'GrupoSanguineoController@find');

    Route::post('/', 'GrupoSanguineoController@create');

    Route::put('/{id}', 'GrupoSanguineoController@update');
});

Route::group(['prefix' => 'factor_rh'], function ($router) {

    Route::get('/', 'FactorRHController@index');

    Route::get('/{id}', 'FactorRHController@find');

    Route::post('/', 'FactorRHController@create');

    Route::put('/{id}', 'FactorRHController@update');
});

Route::group(['prefix' => 'rc_nacimiento'], function ($router) {

    Route::get('/', 'RCNacimientoController@index');

    Route::get('/{id}', 'RCNacimientoController@find');

    Route::post('/', 'RCNacimientoController@create');

    Route::put('/{id}', 'RCNacimientoController@update');
});
