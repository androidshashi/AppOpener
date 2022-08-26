<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrls;
use App\Utils\Constants\RouteConstants;
use App\Utils\Shortener;
use App\Utils\Constants\TableConstants;
use App\Utils\Constants\CommonConstants;

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
            $siteName = CommonConstants::SITE_NAME;
            $data = compact('siteName');
            return  view('about')->with($data);
        }

        if ($shortCode == RouteConstants::PAGE_CONTACT_US) {
            $contactEmail = CommonConstants::CONTACT_EMAIL;
            $data = compact('contactEmail');
            return  view('contactus')->with($data);
        }

        if ($shortCode == RouteConstants::PAGE_PRIVACY_POLICY) {
            $siteName = CommonConstants::SITE_NAME;
            $contactEmail = CommonConstants::CONTACT_EMAIL;
            $data = compact('siteName','contactEmail');
            return  view('policy')->with($data);
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
        
        $urlData->totalLinks =  ShortUrls::count();

        $data = compact('urlData');

        return view('home')->with($data);
    }
}
