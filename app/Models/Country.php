<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\School;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name','flag','capital'];
    
    public function departaments()
    {
        return $this->hasMany(Department::class);
    }

    public function school()
    {
        return $this->hasMany(School::class);
    }
}
