<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'phone', 'status'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function calculateFullPrice()
    {
        $sum = 0;
        foreach($this->products  as $product)
        {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }
    public static function getFullPrice()
    {
        return session('full_order_sum', 0);
    }

    public function saveOrder($name, $phone)
    {
        if($this->status == 0)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return 1;
        }
        else
        {
            return false;
        }
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
