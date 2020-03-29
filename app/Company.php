<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    protected $primaryKey = "company_id";
    public $timestamps = "false";

    protected $attributes = [
        'domain' => null,
    ];

    public function setUpdatedAtAttribute($value)
    {
        // to Disable updated_at
    }

    public function setCreatedAtAttribute($value)
    {
        // to Disable updated_at
    }

}
