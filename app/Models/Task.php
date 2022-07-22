<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getID($id)
    {
        return self::query()->find($id);
    }

    public static function getList()
    {
        $user = Auth::user();
        return self::orderBy('created_at', 'asc')->where('user_id', $user->id)->get();
    }
}
