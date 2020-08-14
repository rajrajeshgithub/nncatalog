<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        $adminScope = config('app.app_scope');
        if($adminScope == 'admin'){
            $this->namespace = "App\Http\Controllers\BackEnd";
            $routeFilePath = 'routes/backend.php';
            $prefix = 'admin';
            $path = resource_path('BackEnd/views');
        } else {
            $this->namespace = "App\Http\Controllers\FrontEnd";
            $routeFilePath = 'routes/frontend.php';
            $prefix = '';
            $path = resource_path('FrontEnd/views');
        }
        view()->addLocation($path);
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix($prefix)
            ->group(base_path($routeFilePath));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
