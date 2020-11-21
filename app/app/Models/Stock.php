<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [
        'id'
      ];
    // データベースの変更をなんでもかんでも受け付けないようにガード
}
