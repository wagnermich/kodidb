<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected $table="files";
    protected $primaryKey = 'idFile';
    protected $guarded=['idFile'];
    protected $dates=['lastPlayed','dateAdded'];
    protected $with=['path'];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function path(){
        return $this->hasOne(Path::class,'idPath','idPath');
    }


}
