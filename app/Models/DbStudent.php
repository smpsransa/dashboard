<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbStudent extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'name', 'gender', 'nisn', 'born', 'birth', 'address', 'father', 'mother'];

    public function class()
    {
        return $this->belongsTo(DbClass::class);
    }
}
