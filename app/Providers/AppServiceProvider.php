<?php

namespace App\Providers;
use View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Post;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

        View::share('news',Post::where('post_type', 'news')->paginate(5));

        /**
         * Does not support nesting
         */
        \Blade::directive('var', function($expression) {
            $regex = "/\((['\"])([\w_]+)\\1,\s*([^\)]+)\)/";
            return preg_replace($regex, '<?php $$2 = $3; ?>', $expression);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
