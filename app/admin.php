<?php

namespace App;
use Illuminate\Suport\Str;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'Products';
    protected $fillable = ['name', 'slug', 'color_id', 'category_id', 'description', 'image', 'price','weight'];


public function setSlugAttribute($value){
    $this->attributes['slug'] = Str::slug($value);
}
}