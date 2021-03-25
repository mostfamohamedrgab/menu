<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function brand()
    {
      return $this->belongsTo(Brand::class,'brand_id');
    }
}
