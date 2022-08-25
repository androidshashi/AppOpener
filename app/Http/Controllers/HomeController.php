<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Constants\TableConstants;
use App\Utils\Constants\RouteConstants;
use App\Utils\Shortener;
use App\Utils\UrlData;

class HomeController extends Controller
{
    /**
     * Home page 
     */
    function index()
    {
        $urlData = new UrlData();
        $data = compact('urlData');
    
        return view('home')->with($data);
    }

   
}
