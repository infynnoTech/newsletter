<?php

namespace Infynno\Newsletter\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{

    protected $table = 'news_letters';
    protected $fillable = [
        'email','created_at','updated_at','deleted_at',
    ];
}
