<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function getByCategory(int $limit_count = 5)
{
     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
     
     public function testget(){
         
         return $this->posts()->latest()->paginate(2);
         
     }
     
     
    public function posts(){
        
        return $this->hasMany(Post::class);
        
    }
    
    
}
