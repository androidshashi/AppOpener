<?php

namespace App\Http\Controllers;

use App\Models\ShortUrls;
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
        $totalUrls = ShortUrls::count();
        $urlData = new UrlData(totalLinks:$totalUrls);
        $data = compact('urlData');
        return view('home')->with($data);
    }
}
