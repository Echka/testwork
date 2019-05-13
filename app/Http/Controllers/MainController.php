<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Navigation;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
    public function index() {
        $navigations = Navigation::all();

        return view('welcome', ['navigations' => $navigations]);
    }
}
