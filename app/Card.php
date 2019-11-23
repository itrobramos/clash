<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $timestamps = true;
    
    public function Quality()
    {
        return $this->belongsTo('App\Quality', 'qualityId', 'id');
    }

    public function Type()
    {
        return $this->belongsTo('App\Type', 'typeId', 'id');
    }

    public function Target()
    {
        return $this->belongsTo('App\Target', 'targetOd', 'id');
    }

}
