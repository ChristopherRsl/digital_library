<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'category', 'description','total','file', 'cover'];

    public function scopeFilter($query, array $filters){
        if($filters['category']??false){
            $query->where('category', 'like', '%'. request('category'). '%');
        }
        if($filters['search']??false){
            $query->where('title', 'like', '%'. request('search'). '%')
            ->orWhere('description', 'like', '%'. request('search'). '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
