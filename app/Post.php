<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
      'author',
      'title',
      'content',
      'creation_date',
      'category_id'
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
