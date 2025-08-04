<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    protected $casts = [
        'name' => 'array', // Assuming 'name' is a JSON field

    ];

     use HasTranslations;

    public array $translatable = ['name'];

   
    //
}
