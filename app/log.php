<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $primaryKey = 'lid';
    protected $table = 'logs';

    public function User() {
        return $this->belongsTo(User::class,'uid','uid');
    }

    public function Input() {
        return $this->belongsTo(input::class,'iid','iid');
    }
}
