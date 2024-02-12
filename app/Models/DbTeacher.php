<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbTeacher extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'name', 'gender', 'nip', 'born', 'birth', 'address', 'status', 'assign'];

    public function class()
    {
        return $this->belongsTo(DbClass::class);
    }
}
