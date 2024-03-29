<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbStudent extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'name', 'gender', 'nisn', 'born', 'birth', 'nik', 'address', 'father', 'mother'];

    protected $casts = [
        'birth' => 'datetime:d/m/Y',
    ];
    
    public function class()
    {
        return $this->belongsTo(DbClass::class);
    }
}
