<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
    //$entry->user_error
    //entry  n - 1 user
    // precarga la informacion eager loading
    public function user(){
        return $this->belongsTo(User::class);
    }
    //mmutator - creando link limpios-de-forma-rapida
    public function setTitleAttribute($value){
        $this->attributes['title']=$value;
        $this->attributes['slug']= Str::slug($value);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
