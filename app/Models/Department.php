<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Country;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name','countries_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function countries()
    {
        return $this->belongsTo(Country::Class,'countries_id');
    }

}
