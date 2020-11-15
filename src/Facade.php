<?php

namespace HtmlToRtf;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor() { 
        return 'php-html-to-rtf-converter';
    }
}
