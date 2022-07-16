<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function getID($id)
    {
        return self::query()->find($id);
    }

    public static function getList()
    {
        return self::query()->get()->all();
    }
}
