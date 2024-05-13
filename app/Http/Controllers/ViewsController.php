<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Views;
class ViewsController extends Controller
{
    public function index()
    {
        return view('login-register');
    }
}
