<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navbar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Navbar::class, 'parrent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'parrent_id');
    }
}
