<?php

namespace App;

use System\Database\ORM\Model;

class Comment extends Model
{

    protected $table = "comments";
    protected $fillable =
    [
        'user_id', 'comment', 'parent_id', 'status',
        'approved', 'post_id'
    ];

    public function child()
    {
        $this->hasMany('App\Comment', 'parent_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
