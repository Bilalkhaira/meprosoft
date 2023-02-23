<?php

namespace App\Models;

use App\Models\PagesCardData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicePagesData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cards()
    {
    	return $this->hasMany(PagesCardData::class, 'parent_id');
    }
}
