<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseControllers\BaseApiController;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use BaseApiController;
    public function __construct(){
        $this->model = User::class;
    }
}
