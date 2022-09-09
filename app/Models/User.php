<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
