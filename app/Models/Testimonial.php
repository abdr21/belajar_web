<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model

{
    protected $fillable = [
        'project_id',
        'name',
        'position',
        'company',
        'message',
        'photo',
        'is_visible',
    ];

    protected $casts = [
        'message' => 'array', // Assuming 'message' is a JSON field
        'is_visible' => 'boolean',
    ];

    use HasTranslations;
    public array $translatable = ['message'];
    //
}
