<?php

use App\Http\Controllers\PersonaController;
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

    //RUTAS PARA LAS REDES
    $router->get('/redes', function () {
        return 'Redes List';
    })->name('redes.index');

    $router->get('/redes/create', function () {
        return 'Redes Create';
    })->name('redes.create');
});
