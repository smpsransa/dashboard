<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    use HasFactory;
    protected $fillable = ['ruang', 'devices', 'parent', 'network', 'ssid', 'preview_url'];
}
