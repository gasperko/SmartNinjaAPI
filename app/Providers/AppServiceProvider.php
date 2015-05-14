<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** @var \Illuminate\Http\Request $request */
        $request = $this->app->make('request');

        if(isset($_SERVER['HTTP_ORIGIN'])) header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Accept');
        header('Access-Control-Allow-Credentials: true');

        if($request->isMethod('OPTIONS')) {
            $this->app->options($request->path(), function(){
                return response('OK', 200);
            });
        }
    }
}
