<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('admin.user.index');
    }
    public function create()
    {
        return view('admin.user.create');
    }
}
