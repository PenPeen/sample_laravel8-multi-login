<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * Ownerモデルとのリレーション設定 一対一
     */
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
