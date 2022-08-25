<?php
namespace App\Utils;
/**
 * Custom pojo class
 */
class UrlData{

    public $longUrl = null;
    public $shortCode = null;
    public $errorMessage = null;
    public function __construct($longUrl = null,  $shortCode = null, $errorMessage = null )
    {
            $this->longUrl = $longUrl;
            $this->shortCode = $shortCode;
            $this->errorMessage = $errorMessage;
    }

}