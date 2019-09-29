<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
   public const CREATED_AT = null;
   public const UPDATED_AT = null;
   protected $table="movie";
   protected $primaryKey = 'idMovie';
   protected $guarded=['idMovie'];
   protected $dates=['premiered'];


   public function files(){
       return $this->hasOne(Files::class,'idFile','idFile');
   }

    public function rating(){
        return $this->hasOne(Rating::class,'rating_id','c05');
    }

    public function rating_back()
    {
        $this->belongsTo(Rating::class,'media_id','idMovie');
   }

    public function uniqueid()
    {
        $this->hasOne(Uniqueid::class,'uniqueid_id','c09');
    }





    public function getIdAttribute(){
        return $this->idMovie;
    }

    public function getTitleAttribute()
    {
        return $this->c00;
    }

    public function getYearAttribute()
    {
        $this->premiered;
    }

    public function getOriginalTitleAttribute()
    {
        $this->c16;
    }

    public function getPlotAttribute()
    {
        $this->c01;
    }

    public function getOutlineAttribute()
    {
        $this->c02;
    }

    public function getTaglineAttribute()
    {
        $this->c03;
    }





}
