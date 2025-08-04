<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Image extends Model
{
    protected $fillable = ['path', 'description'];
    protected $casts = [
        'description' => 'array', // Assuming 'description' is a JSON field
    ];
    public function project()
    {
        return $this->belongsTo(Project::class); // Assuming an image belongs to a project
    }

    use HasTranslations;
    public array $translatable = ['description']; // Assuming 'description' is a translatable field
    //

    //buatkan function booted 
    protected static function booted()
    {
        static::created(function (Image $image) {
            // Handle any setup before the image is created, e.g., setting default values
            //if (empty($image->sort)) {
                //$image->sort = 0; // Default sort order
            
        //}
           //increment sort order for the image
            $image->sort = Image::where('project_id', $image->project_id)->max('sort') + 1;
            $image->save();


        });

        static::deleted(function (Image $image) {
            // Handle any cleanup before the image is deleted, e.g., delete the file from storage
            /*if ($image->path) {
                \Storage::disk('public')->delete($image->path);
            }*/
                if (Storage::exists($image->path)) {
                    Storage::delete($image->path);
                }
        });
    }
}
