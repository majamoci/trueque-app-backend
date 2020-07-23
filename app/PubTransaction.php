<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubTransaction extends Model
{
    protected $fillable = [
        'state', 'user_id', 'pub_id'
    ];
    protected $table = "pubs_transaction";

    public function pub() {
        return $this->belongsTo('App\Publication');
    }
}
