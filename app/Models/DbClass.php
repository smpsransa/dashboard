<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbClass extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'captain', 'secretary', 'treasurer', 'hr_teacher'];


    public function students()
    {
        return $this->hasMany(DbStudent::class, 'class_id');
    }

    public function captain()
    {
        return $this->hasOne(DbStudent::class);
    }

    public function secretary()
    {
        return $this->hasOne(DbStudent::class);
    }
    public function treasurer()
    {
        return $this->hasOne(DbStudent::class);
    }

    public function teacher()
    {
        return $this->belongsTo(DbTeacher::class);
    }
}
