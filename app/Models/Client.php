<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
