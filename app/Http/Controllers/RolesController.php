<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseControllers\BaseApiController;
use App\Models\Roles;

class RolesController extends Controller
{
    use BaseApiController;
    public function __construct(){
        $this->model = Roles::class;
    }
}
