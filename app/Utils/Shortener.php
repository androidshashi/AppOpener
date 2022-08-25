<?php

/** 
 * Class to create short URLs and decode shortened URLs
 */

namespace App\Utils;

use Illuminate\Http\Request;
use App\Models\ShortUrls;
use App\Utils\Constants\TableConstants;
use App\Utils\Constants\CommonConstants;
use App\Utils\UrlData;
use App\Utils\AppOpenerHelper;

class Shortener
{
    protected static $chars = "abcdfghjkmnpqrstvwxyz|ABCDFGHJKLMNPQRSTVWXYZ|0123456789";
    protected static $checkUrlExists = false;
    protected static $codeLength = 7;


    public function __construct()
    {
    }

    /**
     * Convert long ugly url to short code
     */
    public function urlToShortCode($url)
    {
        if (empty($url)) {
            return new UrlData(errorMessage:"No URL was supplied."); 
        }

        if (self::$checkUrlExists) {
            if (!$this->verifyUrlExists($url)) {
                return new UrlData(errorMessage:"URL does not appear to exist."); 
            }
        }

        $shortCode = $this->urlExistsInDB($url);

        if ($shortCode == false) {
            $shortCode = $this->createShortCode($url);
        }


        return new UrlData(shortCode:$shortCode, longUrl:$url); 
    }

    /**
     * Check whether the url is live or not 
     */
    protected function verifyUrlExists($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (!empty($response) && $response != 404);
    }


    /**
     * Check whether URL exists in DB or not
     */
    protected function urlExistsInDB($url)
    {

        $result =  ShortUrls::where(TableConstants::LONG_URL, $url)->value(TableConstants::SHORT_CODE);

        return (empty($result)) ? false : $result;
    }

    /**
     * Create random short code and insert into db
     */
    protected function createShortCode($url)
    {
        $shortCode = $this->generateRandomString(self::$codeLength);
        $id = $this->insertUrlInDB($url, $shortCode);
        return $shortCode;
    }
    /**
     * Generate random string for short code
     */

    protected function generateRandomString($length = 6)
    {
        $sets = explode('|', self::$chars);
        $all = '';
        $randString = '';
        foreach ($sets as $set) {
            $randString .= $set[array_rand(str_split($set))];
            $all .= $set;
        }
        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $randString .= $all[array_rand($all)];
        }
        $randString = str_shuffle($randString);
        return $randString;
    }

    /**
     * Insert short code into DB
     */
    protected function insertUrlInDB($url, $code)
    {

        //Db operations
        $shortUrls = new ShortUrls();
        $shortUrls->long_url = $url;
        $shortUrls->short_code = $code;
        $shortUrls->save();
        return $code;
    }

    /**
     * Get long url using short code from DB
     */
    public function shortCodeToUrl($code, $increment = true)
    {
        if (empty($code)) {
            return new UrlData(errorMessage:"No short url was supplied."); 
        }

        if ($this->validateShortCode($code) == false) {
            return new UrlData(errorMessage:"Short url does not have a valid format."); 
        }

        //Get long url from DB using short code
        $url = $this->getUrlFromDB($code);

        if (empty($url)) {
            return new UrlData(errorMessage:"Short url does not appear to exist."); 
        }

        if ($increment == true) {
            $this->incrementCounter($code);
        }

        $longUrl = AppOpenerHelper::getOpenerLink($url);

         return new UrlData(shortCode:$code, longUrl:$longUrl); 
    }

    /**
     * Validate short code regular expression
     */
    protected function validateShortCode($code)
    {
        $rawChars = str_replace('|', '', self::$chars);
        return preg_match("|[" . $rawChars . "]+|", $code);
    }

    /**
     * Returns long url from database 
     */
    protected function getUrlFromDB($code)
    {

        $result =  ShortUrls::where(TableConstants::SHORT_CODE, $code)->value(TableConstants::LONG_URL);

        return (empty($result)) ? false : $result;
    }

    /**
     * Increment hits to the url using short code 
     */
    protected function incrementCounter($code)
    {
        ShortUrls::where(TableConstants::SHORT_CODE, $code)->increment(TableConstants::HITS);
    }
}
