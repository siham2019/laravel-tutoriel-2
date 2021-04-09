<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

   public function likedBy($id)
   {
    return $this->likes->contains("user_id",$id) ;
   }
   
   public function own($id)
   {
      return $this->user_id == $id;
   }





    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }


}
