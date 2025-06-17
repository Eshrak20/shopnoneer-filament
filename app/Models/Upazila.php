<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $fillable = [
        'name_en',
        'name_bn',
        'code',
        'district_id',
    ];
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
