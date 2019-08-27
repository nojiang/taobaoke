<?php

namespace nojiang\Taobaoke;

use Illuminate\Support\ServiceProvider;
use nojiang\Taobaoke\Libraries\Library;

class TaobaokeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('nj_taobaoke.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('taobaoke', function() {
            return new Library();
        });

        $this->app->bind('nojiang\Taobaoke\Contracts\Contract', 'nojiang\Taobaoke\Libraries\Library');
    }
}
