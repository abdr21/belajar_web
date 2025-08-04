<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);

    }
    protected $casts = [
        'name' => 'array', // Assuming 'name' is a JSON field
    ];

     use HasTranslations;

    public array $translatable = ['name'];
    //
}
