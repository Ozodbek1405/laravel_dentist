<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Blog extends Model
{
    use HasFactory,Translatable;
    protected $table = 'blogs';
    protected array $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'description',
        'text_uz',
        'text_en',
        'image',
        'views'
    ];
}
