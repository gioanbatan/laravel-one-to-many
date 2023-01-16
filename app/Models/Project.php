<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type', 'description', 'slug', 'cover_image'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
