<?php

namespace sirajunnasihin\HtmlToRtf;

use Illuminate\Support\ServiceProvider;

class HtmlToRtfServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('htmltortf', function() {
            return new HtmlToRtf;
        });

        $this->app->booting(function(){
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('HtmlToRtf', 'sirajunnasihin\HtmlToRtf\Facades\HtmlToRtf');
        });
    }

    public function provides()
    {
        return array('htmltortf');
    }

    public function boot()
    {
        //
    }


}
