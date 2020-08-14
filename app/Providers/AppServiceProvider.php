<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
       $pathArray = $request->segments();
       $adminRoute = config('app.admin_route');
       if(in_array($adminRoute, $pathArray)){
           config(['app.app_scope' => 'admin']);
       }
    }
}
