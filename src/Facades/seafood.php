<?php

namespace Lora\SeaFood\Facades;

use Illuminate\Support\Facades\Facade;

class SeaFood extends Facade{

    protected static function getFacadeAccessor(){

        return 'SeaFood';
    }
}
