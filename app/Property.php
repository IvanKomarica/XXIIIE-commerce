<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Translatable;


class Property extends Model
{
    use SoftDeletes, Translatable;

    protected $fillable = ['name', 'name_en'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function properyOptions()
    {
        return $this->hasMany(PropertyOption::class);
    }
}
