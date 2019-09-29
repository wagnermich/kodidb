<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $table="rating";
    protected $primaryKey = 'rating_id';
    protected $guarded=['rating_id'];
    protected $with=['movie_back'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function movie_back(){
        return $this->hasMany(Movie::class,'idMovie','media_id');//->where('media_type','=','movie')
    }

}
