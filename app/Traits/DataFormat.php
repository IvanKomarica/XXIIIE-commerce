<?php

namespace App\Traits;

trait DataFormat
{
    public function getFormattedDate($value)
    {
        return date('d/m/Y', strtotime($this->attributes[$value]));
    }

    public function getFormattedPrice($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function getFormattedNumber($value)
    {
        return number_format($value, 0, ',', '.');
    }
}
