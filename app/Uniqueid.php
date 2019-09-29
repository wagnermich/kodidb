<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uniqueid extends Model
{
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $table="uniqueid";
    protected $primaryKey = 'uniqueid_id';
    protected $guarded=['uniqueid_id'];

//    public function movie()
//    {
//        return $this->belongsTo(Movie::class,'c09','uniqueid_id');
//    }


}
