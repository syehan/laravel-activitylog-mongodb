<?php

namespace Spatie\Activitylog\Test\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
