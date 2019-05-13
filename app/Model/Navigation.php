<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public $routeList = [];

    protected $table = 'navigation';

    public $timestamps = false;

    public function __construct()
    {
        $this->routeList = array_last((array) collect(\Route::getRoutes())->map(function ($route) {
            return isset($route->action['as']) ? $route->action['as'] : '';
        }));
    }
}
