<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

    protected $fillable = [
        'name_en',
        'name_bn',
        'code',
        'division_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }
}
