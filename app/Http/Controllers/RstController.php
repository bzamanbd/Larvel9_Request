<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RstController extends Controller
{
    function showData(Request $rst){
        return($rst->name);
    }
}