<?php

namespace sirajunnasihin\HtmlToRtf\Facades;

use Illuminate\Support\Facades\Facade;

class Facade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'htmltortf';
    }
}
