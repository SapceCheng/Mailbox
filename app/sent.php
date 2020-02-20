<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sent extends Model
{
    // protected $guarded = [];
    protected $fillable = ['title', 'email', 'body'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
