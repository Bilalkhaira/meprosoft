<?php

namespace App\Models;

use App\Models\ServicePagesData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PagesCardData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ServicesPagesData()
    {
    	return $this->belongsTo(ServicePagesData::class, 'id');
    }
}
