<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Project extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'slug',
        'start_date',
        'end_date',
        'status',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);//banyak project memiliki satu kategori
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);// satu project memiliki banyak testimonial
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);// satu project memiliki banyak tag dan sebaliknya
    }
    public function images()
    {
        return $this->hasMany(Image::class); // Assuming a project can have many images
    }

    protected $casts = [
        'title' => 'array', // Assuming 'title' is a JSON field
        'content' => 'array', // Assuming 'content' is a JSON field
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    
    use HasTranslations;
    public array $translatable = ['title', 'content'];
    //
}
