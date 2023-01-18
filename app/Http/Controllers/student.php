<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class student extends Controller
{
    function MyView($Id, $name)
    {
        return View("myview", ['StudentId' => $Id, 'StudentName' => $name]);
    }
}
