<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $table="path";
    protected $primaryKey = 'idPath';
    protected $guarded=['idPath'];
    //protected $dates=['lastPlayed','dateAdded'];
    protected $with=['parent_path'];


    public function files()
    {
        return $this->belongsTo(Files::class);
    }

    public function parent_path(){
        return $this->hasOne(Path::class,'idPath','idParentPath');
    }
}
