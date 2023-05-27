<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['rate'];

    public function isMain()
    {
        return $this->is_main === 1;
    }
}
