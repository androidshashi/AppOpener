<?php
namespace App\Utils;
/**
 * Custom pojo class
 */
class UrlData{

    public $longUrl = null;
    public $shortCode = null;
    public $errorMessage = null;
    public $totalLinks = 0;
    public function __construct($totalLinks=0, $longUrl = null,  $shortCode = null, $errorMessage = null )
    {
            $this->longUrl = $longUrl;
            $this->shortCode = $shortCode;
            $this->errorMessage = $errorMessage;
            $this->totalLinks = $totalLinks;
    }

}