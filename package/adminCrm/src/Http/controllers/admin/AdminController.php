<?php

namespace Kartikey\AdminCrm\Http\controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('AdminCrm::dashboard');
    }
}
