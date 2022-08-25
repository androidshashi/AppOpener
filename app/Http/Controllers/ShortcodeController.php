<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrls;
use App\Utils\Constants\RouteConstants;
use App\Utils\Shortener;
use App\Utils\Constants\TableConstants;

class ShortcodeController extends Controller
{
    /**
     * Get Url from short code
     */
    function shortCodeToUrl($shortCode = null)
    {
        /**
         * Check for pages 
         */
        if ($shortCode == RouteConstants::PAGE_ABOUT) {
            return  view('about');
        }

        if ($shortCode == RouteConstants::PAGE_CONTACT_US) {
            return  view('contactus');
        }

        if ($shortCode == RouteConstants::PAGE_PRIVACY_POLICY) {
            return  view('policy');
        }

        /**
         * Start shorting link
         */
        $shortener = new Shortener();
        $urlData =  $shortener->shortCodeToUrl($shortCode);

        //check for error
        if($urlData->errorMessage != null)
        {  
            return view('shortcode_error')->with(compact('urlData'));
        }

        $shortUrl = url('/').'/'.$shortCode;

        $data = compact('urlData');

        return view('short_code')->with($data);
    }

    /**
     * Create short url
     */
    function createShortLink(Request $req)
    {
        
        $req->validate([
            TableConstants::LONG_URL => 'required|url'
        ]);

        $shortener = new Shortener();

        $longUrl = $req[TableConstants::LONG_URL];

        //
        $urlData =  $shortener->urlToShortCode($longUrl);
        
        $data = compact('urlData');

        return view('home')->with($data);
    }
}
