<?php

namespace HtmlToRtf;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;;

class WordTemplateServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->bind('php-html-to-rtf-converter', function() {
            return new HtmlToRtf;
        });
    }

    public function boot()
    {
        //
    }
}
