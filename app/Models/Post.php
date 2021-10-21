<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

   
    public function image()
    {
        return $this->morphOne(Image::class ,'imageable');
    }


    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }



  public function tags()
  {
      return $this->morphToMany(Tag::class,'taggable');
  }
  
  protected $casts = [
      'likes' => 'double',
      'views' => 'integer',
      'user_id' => 'integer',
      'body' => 'string'
  ];
}
