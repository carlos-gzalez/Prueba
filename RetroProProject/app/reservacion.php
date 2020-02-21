<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    public function cliente(){
        return $this->belongsTo(cliente::class);
    }
}
