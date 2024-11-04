<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }


    protected function model(): Attribute
    {
        return Attribute::make(
            set: function (string $value)
            {
                return strtolower($value);
            },
            get: function (string $value)
            {
                return strtoupper($value);
            }
        );
    }

}