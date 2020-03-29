<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    //
    protected $table = "institutes";
    protected $primaryKey = "college_id";
    public $timestamps = "false";

    public function setUpdatedAtAttribute($value)
    {
        // to Disable updated_at
    }

    public function setCreatedAtAttribute($value)
    {
        // to Disable updated_at
    }
}
