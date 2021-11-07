<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','jobUrl','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
