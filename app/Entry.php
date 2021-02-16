<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry->user_error
    //entry  n - 1 user
    // precarga la informacion eager loading
    public function user(){
        return $this->belongsTo(User::class);
    }
}
