<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'first_name', 'last_name', 'status'];

    public function scopeWhereEmail($query, $email)
    {
        return $query->where('email', $email);
    }
}
