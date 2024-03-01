<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RedController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    //RUTAS PARA LAS PERSONAS
    $router->get('/persona', [PersonaController::class, 'index'])
        ->name('personas.index');

    $router->get('/persona/create', [PersonaController::class, 'create'])
        ->name('persona.create');

    $router->post('/persona/create', [PersonaController::class, 'store'])
        ->name('persona.store');

    $router->get('/persona/edit/{persona}', [PersonaController::class, 'edit'])
        ->name('persona.edit');

    $router->put('/persona/edit/{persona}', [PersonaController::class, 'update'])
        ->name('persona.update');

    $router->put('/persona/delete/{persona}', [PersonaController::class, 'destroy'])
        ->name('persona.delete');


    //RUTAS PARA LAS REDES
    $router->get('/redes', [RedController::class, 'index'])
        ->name('redes.index');

    $router->get('/redes/create', [RedController::class, 'create'])
        ->name('redes.create');

    $router->post('/redes/create', [RedController::class, 'store'])
        ->name('redes.store');

    $router->get('/redes/edit/{red}', [RedController::class, 'edit'])
        ->name('redes.edit');

    $router->put('/redes/edit/{red}', [RedController::class, 'update'])
        ->name('redes.update');

    $router->put('/redes/delete/{red}', [RedController::class, 'destroy'])
        ->name('redes.delete');
});
