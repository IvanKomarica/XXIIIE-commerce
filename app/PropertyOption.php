<?php

namespace App;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyOption extends Model
{
    use SoftDeletes, Translatable;

    protected $fillable = ['property_id', 'name', 'name_en'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
