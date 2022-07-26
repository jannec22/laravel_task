<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'car_id';

    protected $attributes = [
        'color' => '#000000',
        'brand' => 'test-brand'
    ];

    protected $fillable = [
        'color',
        'brand'
    ];
}
