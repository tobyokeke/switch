<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class input extends Model
{
    protected $primaryKey = 'iid';
    protected $table = 'inputs';

    public function Logs() {
        return $this->hasMany(log::class,'iid','iid');
    }
}
