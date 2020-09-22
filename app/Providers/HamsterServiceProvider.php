<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HamsterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	echo "HamsterServiceProvider.php<br />";
        View::composer(
           'hello.index', function($view){
               $view->with('view_message2', 'from Hamster Provider');
           }
       );
    }
}
