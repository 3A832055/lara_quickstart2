<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
