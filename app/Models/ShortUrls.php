<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrls extends Model
{
    use HasFactory;
    protected $table = "short_urls";
    protected $primaryKey = "id";
}
