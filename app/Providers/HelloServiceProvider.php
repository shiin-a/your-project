<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
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
	echo "HelloServiceProvider.php@boot()start<br />";


	
 /**          $validator = $this->app['validator'];
*	   $validator->resolver(function($translator, $data, 
*		  $rules, $messages) {
*	echo "HelloServiceProvider.php@boot()@validator->resolver<br />";
*	       return new HelloValidator($translator, $data, 
*		     $rules, $messages);
*	   });
*/
	echo "HelloServiceProvider.php@boot()end<br />";
    }
}
