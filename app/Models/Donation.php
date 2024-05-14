<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations'; 

    protected $fillable = ['organization', 'amount', 'user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
